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
 * Class OnePart
 * @ORM\Entity
 */
class OnePart extends BaseEntity {
    /**
     * Repository pro akord
     * @var ChordRepository
     */
    protected $chordRepository;
    /**
     * trida akordu
     * @var Chord
     */
    protected  $chordclass;

    /**
     * injektuje zavislosti
     * @param ChordRepository $chordRepository
     * @param Chord $chordclass
     */
    function inject(ChordRepository $chordRepository, Chord $chordclass){
        $this->chordRepository=$chordRepository;
    }
    /**
     * id casti pisne
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    /**
     * vazba na vers
     * @ORM\ManyToOne(targetEntity="OneLine", inversedBy="parts",cascade={"persist"})
     * @ORM\JoinColumn(name="line_id", referencedColumnName="id")
     * @var OneLine
     */
    protected $line;

    /**
     * Vazba na akord
     * @ORM\ManyToOne(targetEntity="Chord")
     * @ORM\JoinColumn(name="chord_id", referencedColumnName="id")
     */
    public $chord;
    /**
     * slova pisne
     * @ORM\Column(type="string")
     */
    public $lyric;

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

    /**
     * line getter
     * @return OneLine
     */
    public function getLine()
    {
        return $this->line;
    }

    /**
     * line setter
     * @param OneLine $line
     */
    public function setLine($line)
    {
        $this->line = $line;
    }

    /**
     * chord getter
     * @return mixed
     */
    public function getChord()
    {
        return $this->chord;
    }

    /**
     * chord setter
     * @param mixed $chord
     */
    public function setChord($chord)
    {
        $this->chord = $chord;
    }

    /**
     * lyric getter
     * @return mixed
     */
    public function getLyric()
    {
        return $this->lyric;
    }

    /**
     * lyric setter
     * @param mixed $lyric
     */
    public function setLyric($lyric)
    {
        $this->lyric = $lyric;
    }


}