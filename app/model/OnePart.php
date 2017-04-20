<?php
/**
 * Created by PhpStorm.
 * User: sara
 * Date: 06.04.2017
 * Time: 19:08
 */

namespace App\Model;
use Doctrine\ORM\Mapping as ORM;
use \Kdyby\Doctrine\Entities\BaseEntity;

/**
 * @ORM\Entity
 */
class OnePart extends BaseEntity {
    protected $chordRepository;
    protected  $chordclass;
    function inject(ChordRepository $chordRepository,Chord $chordclass){
        $this->chordRepository=$chordRepository;
        $this->chordclass=$chordclass;

    }
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    /**
     * @ORM\ManyToOne(targetEntity="OneLine", inversedBy="parts",cascade={"persist"})
     * @ORM\JoinColumn(name="line_id", referencedColumnName="id")
     * @var OneLine
     */
    protected $line;

    /**
     * Many Users have One Address.
     * @ORM\OneToOne(targetEntity="Chord")
     * @ORM\JoinColumn(name="chord_id", referencedColumnName="id")
     */
    public $chord;
    /**
     * @ORM\Column(type="string")
     */
    public $lyric;

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
     * @return OneLine
     */
    public function getLine()
    {
        return $this->line;
    }

    /**
     * @param OneLine $line
     */
    public function setLine($line)
    {
        $this->line = $line;
    }

    /**
     * @return mixed
     */
    public function getChord()
    {
        return $this->chord;
    }

    /**
     * @param mixed $chord
     */
    public function setChord($chord)
    {
        $this->chord = $chord;
    }

    /**
     * @return mixed
     */
    public function getLyric()
    {
        return $this->lyric;
    }

    /**
     * @param mixed $lyric
     */
    public function setLyric($lyric)
    {
        $this->lyric = $lyric;
    }


}