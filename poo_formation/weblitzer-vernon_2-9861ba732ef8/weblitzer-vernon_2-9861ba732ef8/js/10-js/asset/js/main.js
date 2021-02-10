function goHorloge()
{
  var joursemaine = document.getElementById('joursemaine')
  var day         = document.getElementById('day')
  var mois        = document.getElementById('mois')
  var annee       = document.getElementById('annee')
  var hour   = document.getElementById('hour')
  var minute = document.getElementById('minute')
  var second = document.getElementById('second')

  var currentDate = new Date();
  var getSemaine = currentDate.getDay()
  var getDay     = currentDate.getDate()
  var getMois    = currentDate.getMonth()
  var getAnnee   = currentDate.getFullYear()
  var getHour   = currentDate.getHours()
  var getMinute = currentDate.getMinutes()
  var getSecond = currentDate.getSeconds()

  var tableauSemaine = ['Dimanche','Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi']
  var tableauMois = ['Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Aout','Septembre','Octobre','Novembre','Décembre']

  joursemaine.innerHTML = tableauSemaine[getSemaine]
  day.innerHTML = getDay
  mois.innerHTML = tableauMois[getMois]
  annee.innerHTML = getAnnee
  // if(getHour < 10) {
  //   hour.innerHTML = '0'+getHour
  // } else {
  //   hour.innerHTML = getHour
  // }
  addZero(getHour,hour)
  addZero(getMinute,minute)
  addZero(getSecond,second)
}
var horloge = setInterval(goHorloge, 1000)

function addZero(data,cible)
{
  if(data < 10) {
    cible.innerHTML = '0'+data
  } else {
    cible.innerHTML = data
  }
}
