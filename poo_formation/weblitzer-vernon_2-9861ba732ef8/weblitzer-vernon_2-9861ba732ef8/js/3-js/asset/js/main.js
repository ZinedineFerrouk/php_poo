// BOUCLES
// WHILE
var i = 1;
var limit = 100
while (i <= limit) {
  document.write(i);
  if(i != limit) {
    document.write(', ');
  }
  i++;
}
document.write('<br>');
// DO WHILE
var j = 1;
do {
  document.write(j)
  j++;
} while (j <= 25);

document.write('<br>');
// FOR
// for (initialisation;condition;incrementation) {
//
// }
for(var i = 0;i <= 10;i++) {
  document.write(i)
}
// affichez les nombres de 1 à 100 avec un espace entre chaque
for (var i = 1; i <= 100; i++) {
  document.write(i + ' ');
}
// affichez les multiples de 5 de 0 à 100 séparé par virgule
for (var i = 0; i <= 100; i+=5) {
  document.write(i + ', ');
}
// affichez les nombres pairs de 9 à 70
for (var i = 9; i <= 70; i++) {
  if(i % 2 == 0) { // nombre pair
    document.write(i + ', ');
  }
}
// affichez toutes les annes depuis votre naissance
  // p => class => birth_date
var date = new Date();
var annee = date.getFullYear();
console.log(annee);
for (var i = 1978; i <= annee; i++) {
  document.write('<p class="birth_date">' + i + '</p>');
}
// affichez les nombres de 50 à 25, en ordre decroisant , sauf le nombre 30
for (var i = 50; i >= 25 ; i--) {
  if(i != 30) {
    document.write(i)
  }
}
// affichez les nombres de 1 à 100, les nombres de 40 à 48 et 78 à 89 doivent être en vert et les autres en rouge
for (var i = 1; i <= 100; i++) {
  // var color = 'red';
  // if(i >= 40 && i <= 48 || i >= 78 && i <= 89) {  // 40 et 48 ou 78 et 89
  //   color = 'green';
  // }
  var color = (i >= 40 && i <= 48 || i >= 78 && i <= 89) ? 'green' : 'red';
  document.write('<span style="color:' + color + ';">' + i + '</span>');
}

var fruits = ['Kiwi','Pomme','Papaye','Mangue','Banane','Fraise'];
console.log(fruits);
console.log(fruits[1]); // Pomme
for(var i = 0;i <= 5;i++) {
  console.log(fruits[i])
}

for (var i = 0; i < fruits.length; i++) {
  console.log(fruits[i])
}


var listes = ['Pain','Vin','Boursin','Fraise'];
var html = '<ul>';
// boucle
for (var i = 0; i < listes.length; i++) {
  html += '<li>'+ listes[i] +'</li>';
}
html += '</ul>';
document.write(html)

// FOREACH
listes.forEach(function(item){
  console.log(item)
})

var bagnoles = ['gti','bmw','renault','audi','merco','fiat uno'];

var html2 = '<div id="bagnoles">';
bagnoles.forEach(function(voiture){
  html2 += '<h2>'+voiture+'</h2>';
})
html2 += '</div>';
console.log(html2)

// exercice
  //
  function generateListing(tableau,list = 'ul') {
    html = '<'+list+'>';
    tableau.forEach(function(item){
      html += '<li>'+item+'</li>';
    })
    html += '</'+list+'>';
    return html;
  }

  var listing1 = generateListing(bagnoles)
  document.write(listing1);
  document.write(generateListing(bagnoles))
  document.write(generateListing(fruits,'ol'));
  document.write(generateListing(listes));

var phrase = "Se vanter d'une action est plus facile que de la réaliser";
// calculez le nombre de caracteres de cette chaine
var nbrecaractere = phrase.length
console.log(nbrecaractere);
// calculez le nombre mot
var mots = phrase.split(' ')
console.log(mots);
var countMots = mots.length
console.log(countMots)
// ecrivez la phrase en majuscule
console.log(phrase.toUpperCase())
// 5 premiers caracteres de la phrase
console.log(phrase.substr(0,5))
console.log(phrase.split(''))










//
