<?php

// Création des classes utiles à une animalerie en ligne
// Les classes
  // Item => correspondre à tous les items en vente
  // Animal => correspondre aux animaux en vente
  // Food => correspondre aux croquettes, etcc ...

// La class Item
  // price: le prix de vente
  // name: le nom de l'article à vendre

// Les classes Animal et Food qui doivent etendre de Item

  // Animal
    // birthday: date de naissance, au format Y-m-d
    // weight : poids de l'animal en kg

  // Food
    // brand : marque de la nourriture
    // type: croquette , paté ou graine etc ..;
    // expiry: Date de péremption de cet item


// Lorsque vos classes sont créées, instancier un Animal et une Food avec tous leurs attributs hydratés. // Faire un print_r de chacun
// Ajoutez une methode nommée "showPriceATI" à la classe Item , Cette méthode doit afficher le prix ttc à l'écran.
// Ajoutez une méthode nommée "showExpiry" à la class Food, Cett méthode doit afficher la date au format suivant jj/mm/AAAA
// Ajoutez une méthode nommée "showAge" à la class Animal. Vous devinez ce qu'elle fait ;)


// Créez une nouvelle class Cart.
    // items => array pouvant contenir les items
    // total_price => prix HT

    // method => addItem(Objet)

    // method showAll() => afficher le resume du panier