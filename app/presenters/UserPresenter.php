<?php
/**
 * Created by PhpStorm.
 * User: sara
 * Date: 26.03.2017
 * Time: 22:16
 */

namespace App\Presenters;


use App\Forms\UserForm;
use Nette\Application\UI\Form;
use Nette\Application\UI\Presenter;

/**
 * Class UserPresenter
 * @package App\Presenters
 */
class UserPresenter extends Presenter
{
    /**
     * trida pro formular k registraci
     * @var UserForm $userForm
     */
    protected $userForm;
    /**
     * injektuje tridu s formularem
     * @param UserForm $userForm
     */
    public function injectUserForm(UserForm $userForm)
    {
        $this->userForm = $userForm;
    }
    /**
     * Vytvari formular pro registraci uzivatele
     * @return Form
     */
    public function createComponentUserForm()
    {
        $id = $this->getPresenter()->getParameter('id');
        return $form = $this->userForm->create($id);
    }

    /**
     * Renderuje formular k registraci uzivatele
     * @param $id
     */
    public function renderManageUser($id)
    {
    }
}