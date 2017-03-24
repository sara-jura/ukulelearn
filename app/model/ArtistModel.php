<?php
/**
 * Created by PhpStorm.
 * User: sara
 * Date: 24.03.2017
 * Time: 17:38
 */

namespace App\Model;
use Tracy\Debugger;
use Nette\Database\Table;
use Nette\Database\Context;
use App\Model\BaseManager;
use Nette\Database\Table\IRow;
use Nette\Database\Table\ActiveRow;
use Nette\Database\Table\Selection;
use Nette\Utils\ArrayHash;

class ArtistModel extends BaseModel
{
    /**
     * Metoda vrací seznam všech interpretu
     */
    public function listArtists()
    {
        $result=$this->database->table("artists");
        return $result->fetchAll();
    }

    /**
     * Metoda vrací interpreta se zadaným id, pokud neexistuje vrací NoDataFound.
     * @param int  $id
     */
    public function getArtist($id)
    {
        $selection=$this->database->table('artists')->where(['id'=>$id])->fetch();
        if(!$selection)
            throw new NoDataFound('Artist doesn\'t exist');
        return $selection;

    }
    /**
     * Metoda vrací vloží noveho interpreta
     * @param array  $values
     * @return $id vloženého interpreta
     */
    public function insertArtist($values)
    {
        $selection=$this->database->table('artists');
        return $selection->insert($values);

    }

    /**
     * Metoda edituje interpreta, pokud neexistuje vrací NoDataFound.
     * @param array  $values
     */
    public function updateArtist($id, $values)
    {
        $selection=$this->database->table('artists')->where(['id'=>$id])->update($values);
        if(!$selection)
            throw new NoDataFound('Artist doesn\'t exist');
    }

    /**
     * Metoda odebere interpreta, pokud neexistuje vrací NoDataFound.
     * @param array  $values
     */
    public function deleteArtist($id)
    {
        $selection=$this->database->table('artists')->where(['id'=>$id])->delete();
        if(!$selection)
            throw new NoDataFound('Artist doesn\'t exist');
    }
    /**
     * Metoda odebere interpreta, pokud neexistuje vrací NoDataFound.
     * @param array  $values
     */
    public function findByName($name)
    {
        $selection=$this->database->table('artists')->where(['name'=>$name])->fetch();
        if(!$selection)
            throw new NoDataFound('Artist doesn\'t exist');
        return $selection;
    }
}