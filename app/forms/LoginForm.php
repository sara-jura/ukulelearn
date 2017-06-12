<?php
/**
 * Created by PhpStorm.
 * User: sara
 * Date: 26.03.2017
 * Time: 22:55
 */

namespace App\Forms;


use App\Model\Authenticator;
use Nette;
use Nette\Security as NS;
use Nette\Application\UI\Form;
/**
 * Class LoginForm
 * @package App\Form
 * @author  Ondra Votava <ja@ondravotava.cz>
 * @copyright Ondra Votava <ja@ondravotava.cz>
 */
class LoginForm extends Nette\Object
{
    private $authenticator;
    /** @var NS\User */
    private $user;

    /**
     * @param NS\User $user
     * @param Authenticator $authenticator
     */
    public function __construct(NS\User $user, Authenticator $authenticator)
    {
        $this->user = $user;
        $this->authenticator=$authenticator;
    }
    /**
     * Vytvoření formuláře pro přihlášení
     * @return Form
     */
    public function create()
    {
        $form = new Form();
        $form->addText('username', 'Username')
            ->addRule(Form::FILLED, 'You must enter the username');
        $form->addPassword('password', 'Password:')
            ->addRule(Form::FILLED, 'Did you forget to enter the password ?');
        $form->addSubmit('send','Login');
        $form->onSuccess[] = $this->loginProcess;
        return $form;
    }
    /**
     * Zpracování formuláře pro přihlášení
     * @param Form $form
     * @param array $values
     *
     */
    public function loginProcess(Form $form, $values)
    {
        try {
            $this->user->login($values->username, $values->password);
            $this->authenticator->authenticate(array($values->username, $values->password));
        }
        catch (NS\AuthenticationException $e) {
            $form->addError($e->getMessage());
        }
    }
}