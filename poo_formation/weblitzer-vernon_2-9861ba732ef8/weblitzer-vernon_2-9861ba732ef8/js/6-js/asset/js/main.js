var btn = document.getElementById('js_btn')
var count = document.getElementById('count');
// initialisation de counter
var counter = 0;
btn.addEventListener('click', function(){
  // incrementation
  counter++;
  // remplace counter dans la boite #count
  count.innerHTML = counter
})
