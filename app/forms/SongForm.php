<?php
/**
 * Created by PhpStorm.
 * User: sara
 * Date: 25.03.2017
 * Time: 23:15
 */
namespace App\Forms;
use App\Model\Song;
use Nette;
use App\Model;
use Nette\Application\UI\Form;
use Kdyby\Doctrine\EntityManager;
use Nette\Forms\Container;

/**
 * Class SongForm
 * @package App\Forms
 */
class SongForm extends Nette\Object
{

    /**
     * manager pro praci s databazi
     * @var  EntityManager $em
     */
    private $em;
    /**
     * repository pro tridu Song, ktera umoznuje provadet databazove operace nad jejimi objekty
     * @var Model\SongRepository
     */
    private $songRepository;
    /**
     * repository pro tridu Artist, ktera umoznuje provadet databazove operace nad jejimi objekty
     * @var Model\ArtistRepository
     */
    private $artistRepository;
    /**
     * repository pro tridu Chord, ktera umoznuje provadet databazove operace nad jejimi objekty
     * @var Model\ChordRepository
     */
    private $chordRepository;
    /**
     * objekt typu Song, reprezentujici nove vytvarenou/editovanou pisnicku
     * @var Song
     */
    private $song;

    /**
     * SongForm constructor.
     * @param EntityManager $entityManager
     * @param Model\SongRepository $songRepository
     * @param Model\ArtistRepository $artistRepository
     * @param Model\ChordRepository $chordRepository
     */
    public function __construct(EntityManager $entityManager, Model\SongRepository $songRepository, Model\ArtistRepository $artistRepository, Model\ChordRepository $chordRepository)
    {
        $this->em = $entityManager;
        $this->songRepository = $songRepository;
        $this->artistRepository=$artistRepository;
        $this->chordRepository=$chordRepository;

    }

    /**
     * funkce slouzici k pridani policek do formulare k nove pisnicce
     * @param Container $form
     * @param null $args
     */
    protected function addCommonFields(Container &$form, $args = null)
    {
        $form->addText('title', 'title of song:')
            ->addRule(Form::FILLED, 'Mandatory field - Title');
        $form->addTextArea('text', 'lyrics:')
            ->addRule(Form::FILLED, 'Mandatory field - Lyrics');
        $form->addText('artist', 'artist:')
            ->addRule(Form::FILLED, 'Mandatory field - Artist');
        $form->addSubmit('send', 'Save');
    }
    /**
     * vytvori formular pro novy akord
     * @return Form
     */
    public function createAddForm()
    {
        $this->song = new Song();
        $form = new Form();
        $this->addCommonFields($form);
        $form->onValidate[] = $this->songFormValidate;
        $form->onSuccess[] = $this->songFormSuccess;
        return $form;
    }
    /**
     * vytvori formular pro editaci existujiciho akordu
     * @param integer $id
     * @return Form
     */
    public function createEditForm($id= null)
    {
        $this->song=$this->songRepository->getSong($id);
        $form = new Form();
        $this->addCommonFields($form);
        $form->onValidate[] = $this->songEditFormValidate;
        $form->onSuccess[] = $this->songEditFormSuccess;
        return $form;
    }
    /**
     * funkce slouzici k validaci formulare pro novy akord
     * @param Form $form
     */
    public function songFormValidate(Form $form)
    {
        $values = $form->getValues();

        try{
            $this->inspectValues($values,$form);

        }
        catch (\Exception $e)
        {
            $form->addError($e->getMessage());
        }

    }
    /**
     * funkce slouzici k validaci formulare pro editaci akordu
     * @param Form $form
     */
    public function songEditFormValidate(Form $form)
    {
        $values = $form->getValues();
        $this->songRepository->deleteLyrics($this->song->getId());
        try{
            $this->inspectValues($values,$form);
        }
        catch (\Exception $e)
        {
            $form->addError($e->getMessage());
        }

    }
    /**
     * po odeslani a validaci tato funkce ulozi novou pisnicku
     * @param Form $form
     */
    public function songFormSuccess(Form $form){
        $this->songRepository->save($this->song);
        # odešleme zprávu o úspěchu
        $form->getPresenter()->flashMessage('Song added');
    }
    /**
     * po odeslani a validaci tato funkce ulozi novou verzi pisnicky
     * @param Form $form
     */
    public function songEditFormSuccess(Form $form){
        $this->songRepository->update($this->song);
        # odešleme zprávu o úspěchu
        $form->getPresenter()->flashMessage('Song updated');
    }

    /**
     * funkce slouzici primarne k validaci formatovani textu, pokud nejaky akord zadany uzivatelem neni v databazi, vyhodi se vyjimka
     * @param $values
     * @param Form $form
     */
    public function inspectValues($values, Form $form){
        #vytvoření nového uživatele
        $this->song->setTitle($values->title);
        $lines=explode("\n", $values->text);
        foreach ($lines as $line){
            $parts=[];
            $keywords = preg_split("*\[*", $line);
            foreach($keywords as $keyword)
                $parts[] = preg_split("*\]*", $keyword);
            //array_shift($parts);
            $oneline=new Model\OneLine();
            $oneline->setSong($this->song);
            foreach($parts as $part) {
                $onepart= new Model\OnePart();
                $chord=$this->chordRepository->findByName($part[0]);
                if($chord==null && count($part)==2) {
                    $form['text']->addError('You either formatted the lyrics wrong, or one of the chords isn\'t in the database - '.$part[0]);

                }

                if(isset($part[1])) {
                    if(strlen($part[1])<=1) $part[1]=$part[1]."\t";
                    $onepart->setLyric($part[1]);
                    $onepart->setChord($chord);
                }
                else {
                    if(strlen($part[0])<=0) $part[0]=$part[0]."\t";
                    $onepart->setLyric($part[0]);
                    $onepart->setChord($this->chordRepository->findByName(" ")) ;

                }
                $onepart->setLine($oneline);
                $oneline->setParts($onepart);
            }
            $this->song->setText($oneline);
        }



        $artist=$this->artistRepository->findByName($values->artist);
        if($artist==null){
            $artist=new Model\Artist();
            $artist->setName($values->artist);
            $this->artistRepository->save($artist);
        }
        $this->song->setArtist($artist);
        $this->song->setEntireText($values->text);

    }
}