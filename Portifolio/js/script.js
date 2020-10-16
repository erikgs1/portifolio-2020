
var myName = document.getElementById('name');
var firstLetter =  document.getElementById('span');
var span = "e";
var h1 =  " r i k";
function escrever(str, el) {
  var char = str.split('').reverse();
  var typer = setInterval(function() {
    if (!char.length) return clearInterval(typer);
    var next = char.pop();
    el.innerHTML += next;
  }, 100);
}


escrever(span, firstLetter);

escrever(h1, myName);

