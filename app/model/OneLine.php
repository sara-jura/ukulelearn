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
 * Class OneLine
 * @ORM\Entity
 */
class OneLine  extends BaseEntity {
    /**
     * id verse
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    /**
     * vazba na pisen
     * @ORM\ManyToOne(targetEntity="Song", inversedBy="text",cascade={"persist"})
     * @ORM\JoinColumn(name="song_id", referencedColumnName="id")
     * @var Song
     */
    protected $song;
    /**
     * pole casti verse
     * @ORM\OneToMany(targetEntity="OnePart", mappedBy="line",cascade={"persist"})
     * @var OnePart
     */
    protected $parts;

    /**
     * song getter
     * @return Song
     */
    public function getSong()
    {
        return $this->song;
    }

    /**
     * song setter
     * @param Song $song
     */
    public function setSong($song)
    {
        $this->song = $song;
    }

    /**
     * parts getter
     * @return OnePart
     */
    public function getParts()
    {
        return $this->parts;
    }

    /**
     * parts setter
     * @param $part
     * @internal param OnePart $parts
     */
    public function setParts($part){

        $this->parts[]=$part;
    }
    /**
     * parts setter
     * @param $part
     * @internal param OnePart $parts
     */
    public function unsetParts(){

        $this->parts=null;
    }
    /**
     * id getter
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * id setter
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

}