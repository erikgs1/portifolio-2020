
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


$(".open").click(function() {
  if($(".main-menu").hasClass("closed")) {
  $(".main-menu").animate({left: "0px"}).removeClass("closed");
  $(".button-menu").animate({left: "320px"});
  }
    
  else {
    $(".main-menu").animate({left: "-300px"}).addClass("closed");
    $(".button-menu").animate({left: "20px"});
    }
    });