<?php

namespace App\Controller;

use App\Weblitzer\Controller;
use App\Model\BorrowsModel;
use App\Model\AbonnesModel;
use App\Model\ProductsModel;

// FORM VALIDATION
use App\Service\Form;
use App\Service\Validation;

/**
 *
 */
class BorrowsController extends Controller
{

    public function index()
    {
        // die('OK MAN !');

        $message = 'Liste des emprunts :';

        // Affiche tous nos élements
        $borrows = BorrowsModel::all();
        $abonnes = AbonnesModel::all();
        $products = ProductsModel::all();

        $count = BorrowsModel::count();
        $form = new Form();

        $borrowsNonRendu = BorrowsModel::selectBorrowsNonRendu();
        $borrowsRendu = BorrowsModel::selectBorrowsRendu();

        // $borrowsRendre = BorrowsModel::updateBurrowsRendu();
        // $this->debug($nonRendu);

        if (!empty($_POST['submitted'])) {
            // die('OK');

            // XSS
            $post = $this->cleanXss($_POST);

            $selectAbonne = AbonnesModel::findById($post['nom']);
            // $this->debug($selectAbonne);

            $selectProduct = ProductsModel::findById($post['titre']);
            // $this->debug($selectProduct);

            if ($selectAbonne && $selectProduct) {
                BorrowsModel::insert($selectAbonne->id, $selectProduct->id);
                $this->redirect('borrows');
            } else {
                $this->Abort404();
            }

        }

        $this->render('app.borrows.index', array(
            'message' => $message,

            'borrows' => $borrows,
            'abonnes' => $abonnes,
            'products' => $products,

            'borrowsNonRendu' => $borrowsNonRendu,
            'borrowsRendu' => $borrowsRendu,

            'total'   => $count,
            'form' => $form
        ));
    }
}
