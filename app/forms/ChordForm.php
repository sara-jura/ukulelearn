<?php
namespace App\Forms;
use App\Model\Chord;
use Nette;
use App\Model;
use Nette\Application\UI\Form;
use Kdyby\Doctrine\EntityManager;
class ChordForm extends Nette\Object
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
        $form->addText('name', 'name of the chord:')
            ->addRule(Form::FILLED, 'Mandatory field - Name');
        $form->addTextArea('notation', 'notation:')
            ->addRule(Form::FILLED, 'Mandatory field - Notation');

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


            $song = new Chord();
            $song->setName($values->name);
            $song->setNotation($values->notation);
            $this->songRepository->save($song);
            # odešleme zprávu o úspěchu
            $form->getPresenter()->flashMessage('Chord added '.$values->name);

            #presmerujeme sama na sebe
            $form->getPresenter()->redirect('this', array('id' => $song->getId()));
        }
        catch (\Exception $e)
        {
            $form->addError($e->getMessage());
        }
    }
}