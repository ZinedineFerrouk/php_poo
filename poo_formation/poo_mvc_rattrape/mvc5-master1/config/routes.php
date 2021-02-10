<?php

$routes = array(
    array('home','default','index'),
    array('contact','default','contact'),
    array('blog','blog','index'),
    array('single-blog','blog','single',array('id' ,'slug')),

    // animal
    array('animals','animal','index'),
    array('one-animal','animal','show',array('id')),
    array('addAnimal','animal','new'),
    array('updateAnimal','animal','modifier',array('id')),
    array('deleteAnimal','animal','supprimer',array('id'))
);









