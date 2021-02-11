<?php

namespace App\Controller;

use App\Weblitzer\Controller;
use App\Model\AbonnesModel;

// FORM VALIDATION
use App\Service\Form;
use App\Service\Validation;

/**
 *
 */
class AbonnesController extends Controller
{

    public function index()
    {
        // die('OK MAN !');

        $message = 'Voici la liste des abonnées :';
        // Affiche tous nos élements
        $abonnes = AbonnesModel::all();
        $count = AbonnesModel::count();

        $this->render('app.abonnes.index', array(
            'message' => $message,
            'abonnes' => $abonnes,
            'total'   => $count
        ));
    }

    /**
     * show one abonne
     * @param $id
     */
    public function show($id)
    {
        // die('OK');
        $abonne = AbonnesModel::findById($id);
        if (empty($abonne)) {
            $this->Abort404();
        }

        $this->render('app.abonnes.showAbonne', array(
            'abonne' => $abonne
        ));
    }

    // AJOUTER UN ABONNE
    public function new()
    {
        // die('ok');
        $errors = [];

        if (!empty($_POST['submitted'])) {

            // XSS
            $post = $this->cleanXss($_POST);

            // Validation
            $valid = new Validation();
            $errors['nom'] = $valid->textValid($post['nom'], 'nom', 3, 100);
            $errors['prenom'] = $valid->textValid($post['prenom'], 'prenom', 3, 100);
            $errors['email'] = $valid->emailValid($post['email']);
            $errors['age'] = $valid->numberValid($post['age'], 'age');

            // IS VALID
            if ($valid->IsValid($errors)) {
                // INSERTION DANS LA BDD
                AbonnesModel::insert($post);
                // REDIRECTION
                $this->redirect('index');
            }
        }

        $form = new Form($errors);
        $this->render('app.abonnes.addAbonne', array(
            'form' => $form
        ));
    }


    // MODIFIER UN ABONNE
    public function modifier($id)
    {
        // die('OK');
        $errors = [];

        $abonne = AbonnesModel::findById($id);
        if (empty($abonne)) {
            $this->Abort404();
        }

        if (!empty($_POST['submitted'])) {
            // XSS
            $post = $this->cleanXss($_POST);

            // Validation
            $valid = new Validation();
            $errors['nom'] = $valid->textValid($post['nom'], 'nom', 3, 100);
            $errors['prenom'] = $valid->textValid($post['prenom'], 'prenom', 3, 100);
            $errors['email'] = $valid->textValid($post['email'], 'email', 3, 100);
            $errors['age'] = $valid->numberValid($post['age'], 'age');

            // IS VALID
            if ($valid->IsValid($errors)) {
                // INSERTION DANS LA BDD
                AbonnesModel::update($post, $abonne->id);
                // REDIRECTION
                $this->redirect('abonnes');
            }
        }

        $form = new Form($errors);

        $this->render('app.abonnes.updateAbonne', array(
            'form' => $form,
            'abonne' => $abonne
        ));
    }


    // SUPPRIMER UN ABONNE
    public function supprimer($id)
    {
        $abonne = $this->ifAbonneExistOr404($id);
        // INSERTION DANS LA BDD
        AbonnesModel::supprimer($abonne->id);
        $this->redirect('abonnes');
    }

    // Recupère l'id
    private function ifAbonneExistOr404($id)
    {
        $abonne = AbonnesModel::findById($id);
        if (empty($abonne)) {
            $this->Abort404();
        }
        return $abonne;
    }
}
