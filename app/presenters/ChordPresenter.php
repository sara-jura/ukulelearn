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

/**
 * Class ChordPresenter
 * @package App\Presenters
 */
class ChordPresenter extends BasePresenter
{
    /**
     * trida pro formular k vytvareni akordu
     * @var
     */
    protected $chordForm;
    /**
     * repository pro tridu Chord, ktera umoznuje provadet databazove operace nad jejimi objekty
     * @var
     */
    protected $chordRepository;

    /**
     * injektuje potrebne tridy
     * @param ChordRepository $chordRepository
     * @param ChordForm $chordForm
     */
    public function injectDependencies(
                                       ChordRepository $chordRepository,
                                       ChordForm $chordForm)
    {
    $this->chordRepository=$chordRepository;
        $this->chordForm=$chordForm;
    }

    /**
     * zobrazuje seznam vsech akordu
     */
    public function renderDefault() {
        /** TODO - nastavení atributu šablony users */
        $this->template->chords = $this->chordRepository->findAll();

    }

    /**
     * zobrazuje detail o jednom akordu
     * @param $id
     */
    public function renderDetail($id) {
        /** TODO - nastavení atributu šablony users */
        $chord=$this->chordRepository->getChord($id);
        $this->template->chord=$chord;
        $this->template->displayimg=file_exists('./images/'.$chord->name.'.png');
    }
    /**
     * vytvari formular pro pridani akordu
     * @return Nette\Application\UI\Form
     */
    public function createComponentChordForm()
    {
        $id = $this->getPresenter()->getParameter('id');
        return $form = $this->chordForm->create($id);
    }

    /**
     * zobrazuje formular pro pridani akordu
     * @param $id
     */
    public function renderAddChord($id)
    {

    }
}