<?php
/**
 * Created by PhpStorm.
 * User: sara
 * Date: 25.03.2017
 * Time: 21:27
 */

namespace App\Model;
use App\Model\Song;
use Kdyby\Doctrine\EntityManager;
use Nette\Object;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Cvut\Fit\BiWT1\Blog\BaseBundle\Entity\CRUD;

class SongRepository extends Object
{
    use CRUD;

    /**
     * Najde a vrátí uživatele podle jeho ID.
     * @param int|NULL $id ID uživatele
     * @return Artist|NULL vrátí entitu uživatele nebo NULL pokud uživatel nebyl nalezen
     */
    public function getSong($id)
    {
        return isset($id) ? $this->em->find(Song::class, $id) : NULL;
    }

    public function findAll()
    {
        return $this->em->getRepository(Song::getClassName())->findAll();
    }
    public function findbyArtist($id){
        $songs=$this->findAll();
        $result=[];
        foreach ($songs as $song){
            if($song->getArtist()->getId()==$id)$result[]=$song;
        }
        return $result;
    }

    public function findByLetter($i){
        $query = $this->em->createQuery('SELECT u FROM App\Model\Song u WHERE u.title LIKE :foo');
        $query->setParameter('foo', $i.'%');
        $songs = $query->getResult();
        return $songs;
    }

}