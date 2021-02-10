// OPERATEUR DE COMPARAISON
var a = 12;
var b = 12;
var c = 15;
var verif1 = (a == b) // true // egale
var verif2 = (a == c) // false
var verif3 = (a != c) // true // S differents
// a < c // true
// a > c  // false
// a <= c  // true
// a >= c  // false
// a <= b // true

 var age = prompt('Quel age avez vous ?');
// var majeur = (age >= 18);
// console.log('Vous etes majeur: ' + majeur);

// OPERATEUR LOGIQUE
// ET   &&
//(a >= b && a >= c)  //  true && false  // false
// OU  ||
//(a >= b || a >= c) // true || false   // true

// var taille = prompt('Quel est votre Taille (cm)');
// var poids = prompt('Quel est votre poids (kg)');
// var costaud = (taille >= 190  && poids >= 100)
// console.log('Vous êtes costaud: '+ costaud);
// ET qui est prioritaire
// x && y || z && g  =>  (x && y) || (z && g)
// (x || y) && (z || g)

// Negation
//var mineur = !(age >= 18)
//console.log(mineur)

// CONDITIONS
// if - else if - else
// si - sinon si - sinon
if(isNaN(age)) {
  alert('Veuillez renseigner un age');
} else {
  if(age >= 18) {
    console.log('Vous etes majeur');
    if(age >= 65) {
      console.log('et retraité')
    }
  } else if (age <= 10) {
    console.log('Vous etes un enfant')
    if(age >= 3 && age <= 6) {
      console.log(' en maternelle');
    }
  } else {
    console.log('Vous êtes mineur')
  }
}
// SWITCH
var animal = 'chien';
if(animal == 'chat') {
  console.log('miaou')
} else if(animal == 'chien' || animal == 'loup') {
  console.log('whaouf');
} else {
  console.log('Rien à dire');
}
//
switch (animal) {
  case 'chat':
    console.log('miaou')
    break;
  case 'chien':
  case 'loup':
    console.log('whaouf');
    break;
  default:
    console.log('Rien à dire');
    break;
}










//
