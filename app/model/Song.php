<?php
/**
 * Created by PhpStorm.
 * User: sara
 * Date: 25.03.2017
 * Time: 23:15
 */
namespace App\Model;
use Doctrine\ORM\Mapping as ORM;
use \Kdyby\Doctrine\Entities\BaseEntity;
/**
 * Class Song
 * @ORM\Entity
 */
class Song extends BaseEntity
{


    /**
     * id pisne
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;

    /**
     * titul pisne
     * @ORM\Column(type="string")
     */
    protected $title;

    /**
     * verse pisne
     * @ORM\OneToMany(targetEntity="OneLine", mappedBy="song",cascade={"persist"})
     * @var OneLine
     */
    protected $text;
    /**
     * neformatovany text
     * @ORM\Column(type="string", length=4000)
     */
    protected $entireText;
    /**
     * Autor pisnicky
     * @ORM\ManyToOne(targetEntity="Artist", inversedBy="songs")
     * @ORM\JoinColumn(name="artist_id", referencedColumnName="id")
     * @var Artist
     */
    protected $artist;

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
     * title getter
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * title setter
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * text getter
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * text setter
     * @param mixed $text
     */
    public function setText($text)
    {
        $this->text[]=$text;
    }

    /**
     * artist getter
     * @return Artist
     */
    public function getArtist()
    {
        return $this->artist;
    }

    /**
     * artist setter
     * @param Artist $artist
     */
    public function setArtist($artist)
    {
        $this->artist = $artist;
    }

    /**
     * poskytuje var entireText, ktera obsahuje text pisne tak jak ji zadal uzivatel, pouzivane primarne pro editaci
     * @return mixed
     */
    public function getEntireText()
    {
        return $this->entireText;
    }

    /**
     * nastavuje var entireText, ktera obsahuje text pisne tak jak ji zadal uzivatel
     * @param string $entireText
     */
    public function setEntireText($entireText)
    {
        $this->entireText = $entireText;
    }

}

