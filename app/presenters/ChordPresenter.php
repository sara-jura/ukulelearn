<?php
/**
 * Created by PhpStorm.
 * User: sara
 * Date: 02.04.2017
 * Time: 15:54
 */

namespace App\Presenters;


use App\Forms\ChordForm;
use App\Model\ArtistRepository;
use App\Model\ChordRepository;
use App\Model\SongRepository;
use Nette;
use App\Model;
use Kdyby;

class ChordPresenter extends BasePresenter
{
    protected $artistRepository;
    protected $songRepository;
    protected $chordForm;
    protected $chordRepository;
    public function injectDependencies(ArtistRepository $artistModel,
                                       SongRepository $songRepository,
                                       ChordRepository $chordRepository,
                                        ChordForm $chordForm)
    {
        $this->artistRepository = $artistModel;
        $this->songRepository= $songRepository;
    $this->chordRepository=$chordRepository;
        $this->chordForm=$chordForm;
    }
    public function renderDefault() {
        /** TODO - nastavení atributu šablony users */
        $this->template->chords = $this->chordRepository->findAll();

    }
    public function renderDetail($id) {
        /** TODO - nastavení atributu šablony users */
        $chord=$this->chordRepository->getChord($id);
        $this->template->chord=$chord;
        $this->template->displayimg=file_exists($this->context->parameters['wwwDir'].'\images\\'.$chord->name.'.png');
    }
    /**
     * @return Nette\Application\UI\Form
     */
    public function createComponentChordForm()
    {
        $id = $this->getPresenter()->getParameter('id');
        return $form = $this->chordForm->create($id);
    }
    public function renderAddChord($id)
    {

    }
}