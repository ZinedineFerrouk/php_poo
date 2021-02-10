<?php

namespace App\Controller;

use App\Model\AnimalModel;
use App\Weblitzer\Controller;

/**
 *
 */
class AnimalController extends Controller
{

    /**
     *
     */
    public function index()
    {
        $animals = AnimalModel::all();
        $count = AnimalModel::count();
        //$this->debug($animals);
        $this->render('app.animal.index', array(
            'animaux' => $animals,
            'total'   => $count
        ));
    }

    /**
     * show one animal
     * @param $id
     */
    public function show($id) {
        $animal = AnimalModel::findById($id);
        if(empty($animal)) { $this->Abort404(); }
        //$this->debug($animal);
        $this->render('app.animal.show', array(
            'animal' => $animal
        ));
    }



}