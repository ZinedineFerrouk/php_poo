function verifName(id,min,max){
  var champ = document.getElementById(id)
  var str = champ.value;
  var error = document.getElementById('error'+id)
  var success = document.getElementById('success'+id)
  error.innerHTML = '';
  success.innerHTML = '';
  var longueur = str.length
  if(longueur != 0) {
    if(longueur < min) {
      error.innerHTML = 'min ' + min + ' caractères';
    } else if (longueur > max) {
      error.innerHTML = 'max ' + max + ' caractères';
    } else {
      success.innerHTML = 'Bravo, vous avez ecrit ' + longueur + ' caractères';
    }
  } else {
    error.innerHTML = 'Veuillez renseigner ce champ'
  }
}

function verifSelect(id){
  var champ = document.getElementById(id)
  //console.log(champ);
  var error = document.getElementById('error'+id)
  //console.log(error)
  error.innerHTML = '';
  var value = champ.options[champ.selectedIndex].value;
  console.log(value)

  // si value est vide
  if(value == '') {
    error.innerHTML = 'Veuillez selectionner un fruit';
  } else {
    if(value == 'banane') {
      champ.style.backgroundColor = 'yellow'
    } else if (value == 'kiwi') {
      champ.style.backgroundColor = 'green'
    } else if ( value == 'papaye') {
      champ.style.backgroundColor = 'orange'
    }
  }
}

function validation() {
  //return true;
  console.log(document.form)

  if(document.form.nom.value != '') {
    document.form.submit()
  } else {
    verifName('nom')
    verifName('prenom')
    verifName('message')
    verifSelect('fruits')
    return false;
  }
}







//
