<?php

namespace App\Controller;
use App\Weblitzer\Controller;

class VoitureController extends Controller
{
    public function index()
    {
        // die('OK');
        $salut = 'Salam Hola Bonjour';

        $this->render('app.voiture.index', array(
            'message' => $salut
        ));
    }
}
