<?php

namespace App\Controller;

use App\Model\AnimalModel;
use App\Weblitzer\Controller;
use App\Service\Form;
use App\Service\Validation;

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
    public function show($id)
    {
        $animal = AnimalModel::findById($id);
        if (empty($animal)) {
            $this->Abort404();
        }
        //$this->debug($animal);
        $this->render('app.animal.show', array(
            'animal' => $animal
        ));
    }

    public function new()
    {
        $errors = [];

        if (!empty($_POST['submitted'])) {

            // XSS
            $post = $this->cleanXss($_POST);

            // Validation
            $valid = new Validation();
            $errors['title'] = $valid->textValid($post['title'], 'titre', 3, 100);
            $errors['description'] = $valid->textValid($post['description'], 'description', 3, 100);

            // IS VALID
            if ($valid->IsValid($errors)) {
                // INSERTION DANS LA BDD
                AnimalModel::insert($post);
                // REDIRECTION
                $this->redirect('animals');
            }
        }

        $form = new Form($errors);
        $this->render('app.animal.addAnimal', array(
            'form' => $form
        ));
    }

    // Update un animal
    public function modifier($id)
    {
        $errors = [];

        $animal = AnimalModel::findById($id);
        if (empty($animal)) {
            $this->Abort404();
        }

        if (!empty($_POST['submitted'])) {
            // XSS
            $post = $this->cleanXss($_POST);

            // Validation
            $valid = new Validation();
            // $errors['title'] = $valid->textValid($post['title'], 'titre', 3, 100);
            // $errors['description'] = $valid->textValid($post['description'], 'description', 3, 100);
            $errors = $this->validationAnimal($errors, $valid, $post);

            // IS VALID
            if ($valid->IsValid($errors)) {
                // INSERTION DANS LA BDD
                AnimalModel::update($post, $animal->id);
                // REDIRECTION
                $this->redirect('animals');
            }
        }

        $form = new Form($errors);

        $this->render('app.animal.updateAnimal', array(
            'form' => $form,
            'animal' => $animal
        ));
    }


    // SUPPRIMER un animal
    public function supprimer($id)
    {
        $animal = $this->ifAnimalExistOr404($id);
        // INSERTION DANS LA BDD
        AnimalModel::supprimer($animal->id);
        $this->redirect('animals');
    }


    // Recupère l'id
    private function ifAnimalExistOr404($id)
    {
        $animal = AnimalModel::findById($id);
        if (empty($animal)) {
            $this->Abort404();
        }
        return $animal;
    }

    // validation
    private function validationAnimal($errors, $instance, $post)
    {
        $errors['title'] = $instance->textValid($post['title'], 'titre', 3, 100);
        $errors['description'] = $instance->textValid($post['description'], 'description', 3, 1000);

        return $errors;
    }
}
