<?php
/**
 * Created by PhpStorm.
 * User: sara
 * Date: 25.03.2017
 * Time: 21:27
 */

namespace App\Model;
use App\Model\Artist;
use Cvut\Fit\BiWT1\Blog\BaseBundle\Entity\CRUD;
use Kdyby\Doctrine\EntityManager;
use Nette\Object;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
class ArtistRepository extends Object
{
    use CRUD;



    public function findAll()
    {
        return $this->artistRepository->findAll();
    }
    /**
     * Najde a vrátí uživatele podle jeho ID.
     * @param string|NULL $id ID uživatele
     * @return Artist|NULL vrátí entitu uživatele nebo NULL pokud uživatel nebyl nalezen
     */
    public function findByName($name)
    {
        return $this->artistRepository->findOneBy(array('name'=>$name));
    }
}