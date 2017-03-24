<?php
/**
 * Created by PhpStorm.
 * User: sara
 * Date: 24.03.2017
 * Time: 18:58
 */
namespace App\Model;
use Nette;
class NoDataFound extends \Exception {};
class InvalidArgument extends \Exception {};

class BaseModel extends Nette\Object
{
    protected $database;
    protected $artistModel;

    /**
     * @brief Konstruktor vytvarejici base model.
     */
    public function __construct(Nette\Database\Context $database,ArtistModel $artistModel) {
        $this->database = $database;
        $this->artistModel = $artistModel;
    }
}