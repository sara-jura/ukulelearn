<?php
namespace App\Forms;
use App\Model\Song;
use Nette;
use App\Model;
use Nette\Application\UI\Form;
use Kdyby\Doctrine\EntityManager;
class SongForm extends Nette\Object
{
    /**
     * @var  Model\Song $songs
     */
    private $songs;
    /**
     * @var  EntityManager $em
     */
    private $em;
    private $songRepository;
    private $artistRepository;
    private $art;
    private $chordRepository;
    public function __construct(EntityManager $entityManager,Model\SongRepository $songRepository,Model\ArtistRepository $artistRepository,Model\ChordRepository $chordRepository)
    {
        $this->em = $entityManager;
        $this->songRepository = $songRepository;
        $this->artistRepository=$artistRepository;
        $artists=$this->artistRepository->findAll();
        $this->art=[];
        $this->chordRepository=$chordRepository;
        foreach ($artists as $artist) {
            $this->art[]=$artist->getName();
        }
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
        $form->addText('title', 'title of song:')
            ->addRule(Form::FILLED, 'Mandatory field - Title');
        # heslo
        $form->addTextArea('text', 'lyrics:')
            ->addRule(Form::FILLED, 'Mandatory field - Lyrics');
        #role
        $form->addSelect('artist', 'Artist', $this->art)
            ->setPrompt('Choose artist')
            ->addRule(Form::FILLED, 'Mandatory field - Artist');
        $form->addSubmit('send', 'Save');
        $form->onSuccess[] = $this->songFormSuccess;
        return $form;
    }
    /**
     * @param Form $form
     */
    public function songFormSuccess(Form $form)
    {
        $values = $form->getValues();
        try{
                #nový uživatel nesmí mít prázdné heslo!
                if(empty($values->title))
                    throw new \InvalidArgumentException('You need to input title');
                #vytvoření nového uživatele
                $song = new Song();
                $song->setTitle($values->title);
                $lines=explode("\n", $values->text);
                foreach ($lines as $line){
                    $parts=[];
                    $keywords = preg_split("*\[*", $line);
                    foreach($keywords as $keyword)
                        $parts[] = preg_split("*\]*", $keyword);
                    array_shift($parts);
                    $oneline=new Model\OneLine();
                    $oneline->setSong($song);
                    foreach($parts as $part) {
                        $onepart= new Model\OnePart();
                        $chord=$this->chordRepository->findByName($part[0]);
                        if($chord==null) {
                            $chord= new Model\Chord();
                            $chord->setName($part[0]);
                            $chord->setNotation('unknown');
                            $this->chordRepository->save($chord);
                        }
                        if ( ! isset($part[1])) {
                            var_dump($parts);
                            throw new \InvalidArgumentException('You need to input title');
                        }
                        $onepart->setLyric($part[1]);
                        $onepart->setChord($chord) ;
                        $onepart->setLine($oneline);
                        $oneline->setParts($onepart);
                }
                $song->setText($oneline);
            }



                $song->setArtist($this->artistRepository->findByName($this->art[$values->artist]));
                # přdáme nevého uživatele EntityManager
                $this->songRepository->save($song);
                # odešleme zprávu o úspěchu
                $form->getPresenter()->flashMessage('Song added'.$values->artist);

            #presmerujeme sama na sebe
            $form->getPresenter()->redirect('this', array('id' => $song->getId()));
        }
        catch (\Exception $e)
        {
            $form->addError($e->getMessage());
        }
    }
}