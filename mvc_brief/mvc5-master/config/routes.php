<?php

$routes = array(
    array('home','default','index'),
    
    // ROUTES POUR ABONNES
    array('abonnes','abonnes','index'),
    array('addAbonne','abonnes','new'),
    array('updateAbonne','abonnes','modifier', array('id')),
    array('deleteAbonne','abonnes','supprimer', array('id')),
    array('showAbonne','abonnes','show', array('id')),

    // ROUTES POUR PRODUCTS
    array('products','products','index'),
    array('addProduct','products','new'),
    array('updateProduct','products','modifier', array('id')),
    array('deleteProduct','products','supprimer', array('id')),
    array('showProduct','products','show', array('id')),

    // ROUTES POUR BORROWS
    array('borrows','borrows','index')
);









