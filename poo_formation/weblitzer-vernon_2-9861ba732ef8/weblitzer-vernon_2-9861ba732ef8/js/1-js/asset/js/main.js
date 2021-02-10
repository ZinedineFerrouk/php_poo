// console.log('re re bonjour');
// VARIABLE
var nom = '<p>Quidel khggjgj</p>';
console.log(nom);
// variable de type STRING
nom = 'hsdkjhksdq';
console.log(nom);
let prenom = 'Antoine';
// variable de type INTEGER
var annee = 2020;
// Variable de type FLOAT
var pourcentage = 19.6;
// Variable de type Booléens BOOL
var jeSuisLeFormateur = true;
var jaimeLemasque = false;
// échappements
var message = "Ceci est un \"petit\" texte";
var message2 = 'l\'antislash';

var color; // undefined
// declaration de plusieurs variables en une ligne
var voiture = 'hgjh',moto = 'kjlkjlk',chevaux = 4;

// Variable ARRAY Tableau
var eleves = ['Said','Laurent','michel'];
console.log(eleves);
console.log(eleves[1]);
var fruits = ['Banane','Kiwi','Papaye'];
console.log(fruits.length); // nombre d'element dans tableau
console.log(fruits[2]);
// Variable de type Objet
var user = {
  nom: 'Quidel',
  prenom: 'Antoine',
  age: 42,
  fruits: fruits
};
console.log(user);
console.log(user.nom);
console.log(user['nom']);
console.log(user['prenom']);
console.log(user.fruits[0]);

var eleve = {
  notes: {
    maths: 18,
    francais: 4
  },
  human: user
};

console.log(eleve);
console.log(eleve.notes.maths);
console.log(eleve.human.fruits[0]);

// CONCATENATION  +
console.log('<h2>' + nom + ' ' + prenom + '</h2>');

console.log('<ul><li>'+fruits[0]+'</li><li>'+fruits[1]+'</li><li>'+fruits[2]+'</li></ul>');
var texte = '<ul>';
//texte = texte + '<li>'+fruits[0]+'</li>';
texte += '<li>'+fruits[0]+'</li>';
texte += '<li>'+fruits[1]+'</li>';
texte += '<li>'+fruits[1]+'</li>';
texte += '</ul>';
console.log(texte);


// Addition => +
// soustraction => -
// division => /
// multiplication => *
// modulo   =>  reste de la division => %
  // 2 % 2  => 0
  // 3 % 2  => 1
  // 4 % 3  => 1
  // 5 % 3  => 2
var a = 1;
var b = '22';
var c = a + b;
console.log(c);

var number1 = prompt('Premier chiffre ?');
var number2 = prompt('Deuxieme chiffre ?');

var resultat = parseFloat(number1) + parseFloat(number2);
alert('Le resultat de la division est ' + resultat);

parseInt("12.9 euros");  // 12
parseInt(' 12 yen'); // 12
parseInt('J\'ai 12.9 euros');  // NaN
parseFloat(' 12.9 euros'); // 12.9
parseFloat('3,14') // 3

var xx = 16 + 4 + 'Volvo'; // 20Volvo
var yy = 'volvo' + 16 + 4; //  volvo164

// Incrémentation / Décrementation

var z = 16;
z++; //incrementer de 1
console.log(z); // 17
z--;  // decrementer de 1
console.log(z); // 16
z+=5;  // z = z + 5
console.log(z); // 21
z-=3; // z => 18 // z = z - 3
z*=3; // z = z * 3
console.log(z); // 54
z/=3; // 18
z%=3; //  z = z % 3 // 0

function bonjour()
{
  document.write('bonjour');
}
bonjour();
bonjour();
bonjour();
bonjour();

function helloName(name)
{
  document.write('Bonjour ' + name);
}

helloName('Michel');
helloName('Bernard');

function superhello(name,surname = 'dede')
{
  document.write('<p>Bonjour ' + name + ' ' + surname + '</p>');
}
superhello('antoine','quidel');
superhello('martine','benault');
superhello('martine');

var variable = 'Bonjour à tous!';
function testVariable()
{
  console.log(variable)
}

function calcul(chiffre1,chiffre2)
{
  var resultat = chiffre1 * chiffre2;
  return resultat;
}
var result = calcul(12,67);
console.log(result);
var result2 = calcul(result,56);

function conversion(taux,monnaie)
{
  var valeur = prompt('Entrez une valeur en euros');
  var resultat = parseFloat(valeur) * taux;
  alert(valeur + ' euros => ' + resultat + ' ' + monnaie);
}








//












//
