function goHorloge()
{
  console.log('dede')
  var joursemaine = document.getElementById('joursemaine')


  var currentDate = new Date();
  var getJour = currentDate.getDay()
  var tableauSemaine = ['Dimanche','Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi']
  var tableauMois = ['Janvier']
  console.log(getJour); // 4
  joursemaine.innerHTML = tableauSemaine[getJour]

}

setInterval(goHorloge,1000)
