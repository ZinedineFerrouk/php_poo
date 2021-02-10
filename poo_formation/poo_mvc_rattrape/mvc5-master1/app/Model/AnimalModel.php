<?php

namespace App\Model;

use App\Weblitzer\Model;
use App\App;

class AnimalModel extends Model
{
    protected static $table = 'animal';

    public static function insert($post)
    {
        App::getDatabase()->prepareInsert(
            "INSERT INTO " . self::getTable() . "(title, description, created_at) VALUES (?, ?, NOW())",
            array($post['title'], $post['description'])
        );
    }

    public static function update($post, $id)
    {
        App::getDatabase()->prepareInsert(
            "UPDATE " . self::getTable() . " SET title=?, description=? WHERE id=?",
            array($post['title'], $post['description'], $id)
        );
    }

    public static function supprimer($id)
    {
        App::getDatabase()->prepareInsert(
            "DELETE FROM " . self::getTable() . " WHERE id=?",
            array($id)
        );
    }
}
