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

class SongModel extends BaseModel
{
    /**
     * Metoda vrací seznam všech pisnicek
     */
    public function listSongs()
    {
        $result=$this->database->table("songs");
        return $result->fetchAll();
    }
    /**
     * Metoda vrací seznam všech pisnicek podle zadaneho titulu
     */
    public function listSongsByName($name)
    {
        $result=$this->database->table("songs")->where(['title'=>$name])->fetchAll();
        if(!$result)
            throw new NoDataFound('No songs with the title "'.$name.'" was found');
        return $result;
    }
    /**
     * Metoda vrací seznam všech pisnicek podle zadaneho interpreta
     */
    public function listSongsByArtist($name)
    {
        $id=$this->artistModel->findByName($name)->id;
        $result=$this->database->table("songs")->where(['artist_id'=>$id])->fetchAll();
        if(!$result)
            throw new NoDataFound('No songs with the title "'.$name.'" was found');
        return $result;
    }
    /**
     * Metoda vrací pisnicku se zadaným id, pokud neexistuje vrací NoDataFound.
     * @param int  $id
     */
    public function getSong($id)
    {
        $selection=$this->database->table('songs')->where(['id'=>$id])->fetch();
        if(!$selection)
            throw new NoDataFound('Song doesn\'t exist');
        return $selection;

    }
    /**
     * Metoda vrací vloží novou pisnicku
     * @param array  $values
     * @return $id vloženého interpreta
     */
    public function insertSong($values)
    {
        $selection=$this->database->table('songs');
        return $selection->insert($values);

    }

    /**
     * Metoda edituje pisnicku, pokud neexistuje vrací NoDataFound.
     * @param array  $values
     */
    public function updateSong($id, $values)
    {
        $selection=$this->database->table('songs')->where(['id'=>$id])->update($values);
        if(!$selection)
            throw new NoDataFound('Song doesn\'t exist');
    }

    /**
     * Metoda odebere pisnicku, pokud neexistuje vrací NoDataFound.
     * @param array  $values
     */
    public function deleteSong($id)
    {
        $selection=$this->database->table('songs')->where(['id'=>$id])->delete();
        if(!$selection)
            throw new NoDataFound('Song doesn\'t exist');
    }
}