<?php
/**
 * Created by PhpStorm.
 * User: sara
 * Date: 06.04.2017
 * Time: 19:07
 */

namespace App\Model;
use Doctrine\ORM\Mapping as ORM;
use \Kdyby\Doctrine\Entities\BaseEntity;

/**
 * @ORM\Entity
 */
class OneLine  extends BaseEntity {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    /**
     * @ORM\ManyToOne(targetEntity="Song", inversedBy="text",cascade={"persist"})
     * @ORM\JoinColumn(name="song_id", referencedColumnName="id")
     * @var Song
     */
    protected $song;
    /**
     * @ORM\OneToMany(targetEntity="OnePart", mappedBy="line",cascade={"persist"})
     * @var OnePart
     */
    protected $parts;

    /**
     * @return Song
     */
    public function getSong()
    {
        return $this->song;
    }

    /**
     * @param Song $song
     */
    public function setSong($song)
    {
        $this->song = $song;
    }

    /**
     * @return OnePart
     */
    public function getParts()
    {
        return $this->parts;
    }

    /**
     * @param OnePart $parts
     */
    public function setParts($part){

        $this->parts[]=$part;
    }

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

}