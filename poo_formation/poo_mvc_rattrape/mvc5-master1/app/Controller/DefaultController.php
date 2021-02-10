<?php

namespace App\Controller;

use App\Weblitzer\Controller;

/**
 *
 */
class DefaultController extends Controller
{

    public function index()
    {
        $message = 'Bienvenue sur le framework MVC';
        $fruits = array('Kiwi','banane','Papaye');
        $this->render('app.default.frontpage',array(
            'message' => $message,
            'name'   =>  'antoine', // $name
            'legumes' => $fruits
        ));
    }

    public function contact()
    {
        $this->render('app.default.contact');
    }

    /**
     *
     */
    public function Page404()
    {
        $this->render('app.default.404');
    }

}
