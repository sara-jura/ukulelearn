<?php
/**
 * Created by PhpStorm.
 * User: sara
 * Date: 26.03.2017
 * Time: 19:30
 */

namespace App\Model;
use App\Model\Song;
use App\Model\CRUD;
use Kdyby\Doctrine\EntityManager;
use Nette\Object;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * Class OnePartRepository
 * @package App\Model
 */
class OnePartRepository extends Object
{
    use CRUD;
    /**
     * Repository pro OnePart (Dvojice akord-slova)
     * @var
     */
    private $repository;

    /**
     * injectuje Entity Manager
     * @param EntityManager $entityManager
     */
    public function inject(EntityManager $entityManager)
    {
        $this->repository = $entityManager->getRepository(OnePart::class);
    }

    /**
     * vraci part podle id
     * @param $id id part
     * @return null|object
     */
    public function getPart($id)
    {
        return isset($id) ? $this->em->find(OnePart::class, $id) : NULL;
    }

    /**
     * vyhleda vsechny verse
     * @return OnePart[]
     */
    public function findAll()
    {
        return $this->em->getRepository(OnePart::getClassName())->findAll();
    }

}