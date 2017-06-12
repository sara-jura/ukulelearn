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


/**
 * Class ArtistPresenter
 * @package App\Presenters
 */
class ArtistPresenter extends BasePresenter
{


    /**
     * repository pro tridu Artist, ktera umoznuje provadet databazove operace nad jejimi objekty
     * @var
     */
    protected $artistRepository;
    /**
     * repository pro tridu Song, ktera umoznuje provadet databazove operace nad jejimi objekty
     * @var
     */
    protected $songRepository;

    /**
     * injektuje repozitare
     * @param Model\ArtistRepository $artistModel
     * @param Model\SongRepository $songRepository
     */
    public function injectDependencies(Model\ArtistRepository $artistModel, Model\SongRepository $songRepository)
    {
        $this->artistRepository = $artistModel;
        $this->songRepository= $songRepository;
    }

    /**
     *Zobrazuje seznam vsech interpretu
     */
    public function renderDefault() {
        /** TODO - nastavení atributu šablony users */
        $this->template->artists = $this->artistRepository->findAll();
        $alphas = range('A', 'Z');
        $this->template->letters=$alphas;
    }

    /**
     * Zobrazuje seznam vsech pisnicek od daneho interpreta
     * @param $id
     */
    public function renderDetail($id) {
        /** TODO - nastavení atributu šablony users */
        //$dao = $this->EntityManager->getRepository(Model\Artist::getClassName());
        //$this->template->songs=$dao->findBy($name);
        $this->template->songs=$this->songRepository->findbyArtist($id);
    }

    /**
     * Zobrazuje seznam interpretu zacinajici na urcite pismeno
     * @param $i
     */
    public function renderLetterSearch($i){
        $this->template->artists=$this->artistRepository->findByLetter($i);
        $alphas = range('A', 'Z');
        $this->template->letters=$alphas;
    }

    /**
     * Kontroluje jestli je uzivatel prihlasen
     */
    public function beforeRender()
    {
        if(!$this->getUser()->isLoggedIn()){
            $this->redirect("Login:default");
        }
    }
}