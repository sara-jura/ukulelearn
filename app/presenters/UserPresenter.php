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

class UserPresenter extends Presenter
{
    /**
     * @var UserForm $userForm
     */
    protected $userForm;
    /**
     * @param UserForm $userForm
     */
    public function injectUserForm(UserForm $userForm)
    {
        $this->userForm = $userForm;
    }
    /**
     * @return Form
     */
    public function createComponentUserForm()
    {
        $id = $this->getPresenter()->getParameter('id');
        return $form = $this->userForm->create($id);
    }

    public function renderManageUser($id)
    {
    }
}