<?php

namespace App\Model;

use App\Weblitzer\Model;
use App\App;

class ProductsModel extends Model
{
    protected static $table = 'products';

    // // INSERT UN NOUVEL ANIMAL DANS LA BDD 
    public static function insert($post)
    {
        App::getDatabase()->prepareInsert(
            "INSERT INTO " . self::getTable() . "(titre, reference, description) VALUES (?, ?, ?)",
            array($post['titre'], $post['reference'], $post['description'] )
        );
    }

    // MODIFIE UN ANIMAL ET L'INSERT DANS LA BDD 
    public static function update($post, $id)
    {
        App::getDatabase()->prepareInsert(
            "UPDATE " . self::getTable() . " SET titre=?, reference=?, description=? WHERE id=?",
            array($post['titre'], $post['reference'], $post['description'], $id)
        );
    }

    // SUPPRIME UN ANIMAL DANS LA BDD 
    public static function supprimer($id)
    {
        App::getDatabase()->prepareInsert(
            "DELETE FROM " . self::getTable() . " WHERE id=?", array($id)
        );
    }
}
