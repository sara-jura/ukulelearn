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
    public function __construct(EntityManager $entityManager,Model\SongRepository $songRepository,Model\ArtistRepository $artistRepository)
    {
        $this->em = $entityManager;
        $this->songRepository = $songRepository;
        $this->artistRepository=$artistRepository;
        $artists=$this->artistRepository->findAll();
        $this->art=[];
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
                $song->setText($values->text);
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