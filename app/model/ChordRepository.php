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

class ChordRepository extends Object
{
    use CRUD;
    private $repository;
    public function inject(EntityManager $entityManager)
    {
        $this->repository = $entityManager->getRepository(Chord::class);
    }
    public function getChord($id)
    {
        return isset($id) ? $this->em->find(Chord::class, $id) : NULL;
    }
    public function findAll()
    {
        return $this->em->getRepository(Chord::getClassName())->findAll();
    }
    public function findByName($name)
    {
        return $this->repository->findOneBy(array('name' => $name));
    }
}