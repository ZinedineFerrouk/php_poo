<?php

namespace App\Controller;

use App\Weblitzer\Controller;

/**
 *
 */
class BlogController extends Controller
{

    public function index()
    {
        $this->render('app.blog.index');
    }

    public function single($id,$slug)
    {
        $this->render('app.blog.single', array(
            'id'  => $id,
            'slug'  => $slug
        ));
    }

}