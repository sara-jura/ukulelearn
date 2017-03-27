<?php
/**
 * Created by PhpStorm.
 * User: kadleto2
 * Date: 20.11.15
 * Time: 9:35
 */

namespace Cvut\Fit\BiWT1\Blog\BaseBundle\Entity;
use App\Model\Artist;
use App\Model\ArtistRepository;
use App\Model\Song;
use App\Model\SongRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Kdyby\Doctrine\EntityManager;

/**
 * Common transaction aware CRUD operations
 *
 * Class CRUD
 * @package Cvut\Fit\BiWT1\Blog\BaseBundle\Entity
 */
trait CRUD
{
    /** @var EntityManager Manager pro práci s entitami. */
    private $em;
    private $artistRepository;
    private $songRepository;
    /**
     * Konstruktor s injektovanou třídou pro práci s entitami.
     * @param EntityManager $em automaticky injektovaná třída pro práci s entitami
     */
    public function __construct(EntityManager $em)
    {
        $this->em = $em;
        $this->artistRepository=$em->getRepository(Artist::class);
        $this->songRepository=$em->getRepository(Song::class);
    }
    /**
     * Notifies UoW and if no transaction is running flushes current state
     * into database.
     *
     * @param $entity
     */
    public function save($entity)
    {
        $this->em->persist($entity);
        $this->em->flush($entity);
    }



    /**
     * Notifies UoW and if no transaction is running flushes current state
     * into database.
     *
     * @param $entity
     */
    public function delete($entity)
    {
        $this->em->remove($entity);
        $this->em->flush($entity);
    }

    public function findById($id)
    {
        //return isset($id) ? $this->em->find(Artist::class, $id) : NULL;
        return $this->em->find($id);
    }
}