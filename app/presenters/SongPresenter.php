<?php
/**
 * Created by PhpStorm.
 * User: sara
 * Date: 24.03.2017
 * Time: 22:57
 */

namespace App\Presenters;
use App\Forms\SongForm;
use App\Forms\UserForm;
use Nette;
use App\Model;
use Kdyby;

class SongPresenter extends BasePresenter
{
    protected $artistRepository;
    protected $songRepository;
    protected $songForm;
    public function injectDependencies(Model\ArtistRepository $artistModel,
                                       Model\SongRepository $songRepository,
                                       SongForm $songForm)
    {
        $this->artistRepository = $artistModel;
        $this->songRepository= $songRepository;
        $this->songForm=$songForm;
    }
    /**
 * Metoda pro naplnění dat pro šablonu dané akce
 */
    public function renderDefault() {
        $alphas = range('A', 'Z');
        /** TODO - nastavení atributu šablony users */
        $this->template->songs = $this->songRepository->findAll();
        $this->template->letters=$alphas;

    }
    /**
     * Metoda pro naplnění dat pro šablonu dané akce
     */
    public function renderDetail($id) {
        /** TODO - nastavení atributu šablony users */
        $this->template->song=$this->songRepository->getSong($id);


    }
    public function renderLetterSearch($i){
        $this->template->songs=$this->songRepository->findByLetter($i);
        $alphas = range('A', 'Z');
        $this->template->letters=$alphas;
    }

    /**
     * @return Nette\Application\UI\Form
     */
    public function createComponentSongForm()
    {
        $id = $this->getPresenter()->getParameter('id');
        return $form = $this->songForm->create($id);
    }
    public function renderAddSong($id)
    {

    }
    public function beforeRender()
    {
        if(!$this->getUser()->isLoggedIn()){
            $this->redirect("Login:default");
        }
    }
}