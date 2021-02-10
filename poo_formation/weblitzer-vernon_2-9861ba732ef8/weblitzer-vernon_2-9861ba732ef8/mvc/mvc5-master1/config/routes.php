<?php

$routes = array(
    array('home','default','index'),
    array('contact','default','contact'),
    array('blog','blog','index'),
    array('single-blog','blog','single',array('id' ,'slug')),

    // animal
    array('animals','animal','index'),
    array('one-animal','animal','show',array('id'))

);









