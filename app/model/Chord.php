<?php
/**
 * Created by PhpStorm.
 * User: sara
 * Date: 26.03.2017
 * Time: 19:29
 */

namespace App\Model;
use Doctrine\ORM\Mapping as ORM;
use \Kdyby\Doctrine\Entities\BaseEntity;

/**
 * @ORM\Entity
 */
class Chord extends BaseEntity
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $name;
    /**
     * @ORM\Column(type="string")
     */
    protected $notation;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getNotation()
    {
        return $this->notation;
    }

    /**
     * @param mixed $notation
     */
    public function setNotation($notation)
    {
        $this->notation = $notation;
    }


}