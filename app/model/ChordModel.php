<?php
/**
 * Created by PhpStorm.
 * User: sara
 * Date: 24.03.2017
 * Time: 17:37
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

class ChordModel extends BaseModel
{
    /**
     * Metoda vrací seznam všech akordu
     */
    public function listChords()
    {
        $result=$this->database->table("chords");
        return $result->fetchAll();
    }

    /**
     * Metoda vrací akord se zadaným id, pokud neexistuje vrací NoDataFound.
     * @param int  $id
     */
    public function getChord($id)
    {
        $selection=$this->database->table('chords')->where(['id'=>$id])->fetch();
        if(!$selection)
            throw new NoDataFound('Chord doesn\'t exist');
        return $selection;

    }
    /**
     * Metoda vrací vloží novy akord
     * @param array  $values
     * @return $id vloženého akordu
     */
    public function insertChord($values)
    {
        $selection=$this->database->table('chords');
        return $selection->insert($values);

    }

    /**
     * Metoda edituje akord, pokud neexistuje vrací NoDataFound.
     * @param array  $values
     */
    public function updateChord($id, $values)
    {
        $selection=$this->database->table('chords')->where(['id'=>$id])->update($values);
        if(!$selection)
            throw new NoDataFound('Chord doesn\'t exist');
    }

    /**
     * Metoda odebere akord, pokud neexistuje vrací NoDataFound.
     * @param array  $values
     */
    public function deleteChord($id)
    {
        $selection=$this->database->table('chords')->where(['id'=>$id])->delete();
        if(!$selection)
            throw new NoDataFound('Chord doesn\'t exist');
    }
}