<?php

namespace App\Controller;

use App\Weblitzer\Controller;
use App\Model\ProductsModel;

// FORM VALIDATION
use App\Service\Form;
use App\Service\Validation;

/**
 *
 */
class ProductsController extends Controller
{

    public function index()
    {
        // die('OK MAN !');

        $message = 'Voici la liste des produits :';
        // Affiche tous nos élements
        $products = ProductsModel::all();
        $count = ProductsModel::count();

        $this->render('app.products.index', array(
            'message' => $message,
            'products' => $products,
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
        $product = ProductsModel::findById($id);
        if (empty($product)) {
            $this->Abort404();
        }

        $this->render('app.products.showProduct', array(
            'product' => $product
        ));
    }

    // AJOUTER UN PRODUIT
    public function new()
    {
        // die('ok');
        $errors = [];

        if (!empty($_POST['submitted'])) {

            // XSS
            $post = $this->cleanXss($_POST);

            // Validation
            $valid = new Validation();
            $errors['titre'] = $valid->textValid($post['titre'], 'titre', 3, 100);
            $errors['reference'] = $valid->textValid($post['reference'], 'reference', 3, 20);
            $errors['description'] = $valid->textValid($post['description'], 'description', 15, 1500);

            // IS VALID
            if ($valid->IsValid($errors)) {
                // INSERTION DANS LA BDD
                ProductsModel::insert($post);
                // REDIRECTION
                $this->redirect('products');
            }
        }

        $form = new Form($errors);
        $this->render('app.products.addProduct', array(
            'form' => $form
        ));
    }

    // MODIFIER UN PRODUIT
    public function modifier($id)
    {
        // die('OK');
        $errors = [];

        $product = ProductsModel::findById($id);
        if (empty($product)) {
            $this->Abort404();
        }

        if (!empty($_POST['submitted'])) {
            // XSS
            $post = $this->cleanXss($_POST);

            // Validation
            $valid = new Validation();
            $errors['titre'] = $valid->textValid($post['titre'], 'titre', 3, 100);
            $errors['reference'] = $valid->textValid($post['reference'], 'reference', 3, 20);
            $errors['description'] = $valid->textValid($post['description'], 'description', 15, 1500);

            // IS VALID
            if ($valid->IsValid($errors)) {
                // INSERTION DANS LA BDD
                ProductsModel::update($post, $product->id);
                // REDIRECTION
                $this->redirect('products');
            }
        }

        $form = new Form($errors);

        $this->render('app.products.updateProduct', array(
            'form' => $form,
            'product' => $product
        ));
    }

    // SUPPRIMER UN PRODUIT
    public function supprimer($id)
    {
        $product = $this->ifProductExistOr404($id);
        // INSERTION DANS LA BDD
        ProductsModel::supprimer($product->id);
        $this->redirect('products');
    }

    // Recupère l'id
    private function ifProductExistOr404($id)
    {
        $product = ProductsModel::findById($id);
        if (empty($product)) {
            $this->Abort404();
        }
        return $product;
    }
}
