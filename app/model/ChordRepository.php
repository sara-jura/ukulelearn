<?php
/**
 * Created by PhpStorm.
 * User: sara
 * Date: 26.03.2017
 * Time: 19:30
 */

namespace App\Model;
use App\Model\Song;
use Kdyby\Doctrine\EntityManager;
use Nette\Object;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Cvut\Fit\BiWT1\Blog\BaseBundle\Entity\CRUD;


class ChordRepository extends Object
{
    use CRUD;

    public function getChord($id)
    {
        return isset($id) ? $this->em->find(Chord::class, $id) : NULL;
    }
    public function findAll()
    {
        return $this->em->getRepository(Chord::getClassName())->findAll();
    }
}