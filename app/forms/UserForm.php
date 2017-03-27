<?php
namespace App\Forms;
use App\Model\User;
use Nette;
use App\Model;
use Nette\Application\UI\Form;
use Kdyby\Doctrine\EntityManager;
/**
 * Class UserForm
 * @package App\AdminModule\Componentes\Form
 * @author Ondra Votava <ja@ondravotava.cz>
 */
class UserForm extends Nette\Object
{
    /**
     * @var  Model\UserRepository $users
     */
    private $users;
    /**
     * @var  EntityManager $em
     */
    private $em;
    public function __construct(Model\UserRepository $users, EntityManager $entityManager)
    {
        $this->users = $users;
        $this->em = $entityManager;
    }
    /**
     * @param integer $id
     *
     * @return Form
     */
    public function create($id = null)
    {
        $form = new Form();
        # uživatelské jméno
        $form->addText('username', 'Username:')
            ->addRule(Form::FILLED, 'Mandatory field - username');
        # heslo
        $form->addPassword('password', 'Password:');
        $form->addPassword('password2', 'Enter password again:')
            ->addConditionOn($form["password"], Form::FILLED)
            ->addRule(Form::EQUAL, "the password doesn't match !", $form["password"])
            ->setRequired(TRUE);
        #role
        $form->addSelect('role', 'Role', User::getRoleList())
            ->setPrompt('Choose role')
            ->addRule(Form::FILLED, 'Mandatory field - role');
        #id
        $form->addHidden('id');
        $form->addSubmit('send', 'Save');
        if(!is_null($id))
        {
            /** @var User $user */
            $user = $this->users->findById($id);
            $val['id'] = $user->getId();
            $val['username'] = $user->username;
            $val['role'] = $user->getRole();
            $form->setDefaults($val);
        }
        $form->onSuccess[] = $this->userFormSuccess;
        return $form;
    }
    /**
     * @param Form $form
     */
    public function userFormSuccess(Form $form)
    {
        $values = $form->getValues();
        try{
            #pokud uživatel neexistuje vytvoříme ho
            if(!$user = $this->users->findByUsername($values->username))
            {
                #nový uživatel nesmí mít prázdné heslo!
                if(empty($values->password))
                    throw new \InvalidArgumentException('nový uživatel nemůže mít prázdné heslo');
                #vytvoření nového uživatele
                $user = new User($values->username,$values->password,$values->role);
                # přdáme nevého uživatele EntityManager
                $this->em->persist($user);
                #uložíme změny
                $this->em->flush();
                # odešleme zprávu o úspěchu
                $form->getPresenter()->flashMessage('Uživatel byl vytvořen');
            }
            #pokud uživatel již existuje upravíme ho
            else
            {
                $user->username = $values->username;
                #pokud není heslo prázdné tak ho nastavíme
                if(!empty($values->password))
                    $user->setPassword($values->password);
                #nastavíme roly
                $user->setRole($values->role);
                #uložíme změny
                $this->em->flush();
                $form->getPresenter()->flashMessage('Uživatel byl upraven');
            }
            #presmerujeme sama na sebe
            $form->getPresenter()->redirect('this', array('id' => $user->getId()));
        }
        catch (\Exception $e)
        {
            $form->addError($e->getMessage());
        }
    }
}