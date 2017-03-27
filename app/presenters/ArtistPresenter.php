<?php
/**
 * Created by PhpStorm.
 * User: sara
 * Date: 25.03.2017
 * Time: 21:35
 */
namespace App\Presenters;

use Nette;
use App\Model;


class ArtistPresenter extends BasePresenter
{


    protected $artistRepository;
    protected $songRepository;
    public function injectDependencies(Model\ArtistRepository $artistModel,Model\SongRepository $songRepository)
    {
        $this->artistRepository = $artistModel;
        $this->songRepository= $songRepository;
    }
    public function renderDefault() {
        /** TODO - nastavení atributu šablony users */
        $this->template->artists = $this->artistRepository->findAll();

    }

    public function renderDetail($id) {
        /** TODO - nastavení atributu šablony users */
        //$dao = $this->EntityManager->getRepository(Model\Artist::getClassName());
        //$this->template->songs=$dao->findBy($name);
        $this->template->songs=$this->songRepository->findbyArtist($id);
    }
    public function beforeRender()
    {
        if(!$this->getUser()->isLoggedIn()){
            $this->redirect("Login:default");
        }
    }
}