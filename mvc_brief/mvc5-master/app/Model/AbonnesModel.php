<?php

namespace App\Model;

use App\Weblitzer\Model;
use App\App;

class AbonnesModel extends Model
{
    protected static $table = 'abonnes';

    // // INSERT UN NOUVEL ANIMAL DANS LA BDD 
    public static function insert($post)
    {
        App::getDatabase()->prepareInsert(
            "INSERT INTO " . self::getTable() . "(nom, prenom, email, age, created_at) VALUES (?, ?, ?, ?, NOW())",
            array($post['nom'], $post['prenom'], $post['email'], $post['age'] )
        );
    }

    // MODIFIE UN ANIMAL ET L'INSERT DANS LA BDD 
    public static function update($post, $id)
    {
        App::getDatabase()->prepareInsert(
            "UPDATE " . self::getTable() . " SET nom=?, prenom=?, email=?, age=? WHERE id=?",
            array($post['nom'], $post['prenom'], $post['email'], $post['age'], $id)
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
