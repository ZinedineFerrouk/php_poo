<?php

namespace App\Model;

use App\Weblitzer\Model;
use App\App;

class BorrowsModel extends Model
{
    protected static $table = 'borrows';

    // INSERT UN NOUVEL EMPRUNT DANS LA BDD 
    public static function insert($id1, $id2)
    {
        App::getDatabase()->prepareInsert(
            "INSERT INTO " . self::getTable() . "(id_abonne, id_product, date_start) VALUES (?, ?, NOW())",
            array($id1, $id2)
        );
    }

    // SELECT DES EMPRUNTS RENDU
    public static function selectBorrowsNonRendu()
    {
        return App::getDatabase()->query(
            "SELECT * FROM " . self::getTable() . 
            " INNER JOIN products ON borrows.id_product = products.id ".
            " INNER JOIN abonnes ON borrows.id_abonne = abonnes.id ".
            " WHERE borrows.date_end IS NULL", get_called_class()
        );
    }

    // SELECT DES EMPRUNTS RENDU
    public static function selectBorrowsRendu()
    {
        return App::getDatabase()->query(
            "SELECT * FROM " . self::getTable() . 
            " INNER JOIN products ON borrows.id_product = products.id ".
            " INNER JOIN abonnes ON borrows.id_abonne = abonnes.id ".
            " WHERE borrows.date_end IS NOT NULL", get_called_class()
        );
    }

    // UPDATE UNE DATE DE RETOUR DU PRODUIT
    public static function updateBurrowsRendu($id)
    {
        App::getDatabase()->prepareInsert(
            "UPDATE " . self::getTable() . " SET date_end=NOW() WHERE id=?",
            array($id)
        );
    }
}
