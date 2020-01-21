/*function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topmenu") {
      x.className += " responsive";
    } else {
      x.className = "topmenu";
    }
  } 
 */

function scrollNav(){
  var x = document.getElementById("nav");
  if(window.scrollY > 50){
    window.open('www.redeideia.com.br');
    
  }
}

function onlynumber(evt) {
  var theEvent = evt || window.event;
  var key = theEvent.keyCode || theEvent.which;
  key = String.fromCharCode( key );
  //var regex = /^[0-9.,]+$/;
  var regex = /^[0-9.]+$/;
  if( !regex.test(key) ) {
     theEvent.returnValue = false;
     if(theEvent.preventDefault) theEvent.preventDefault();
  }
}

function mask(e, id, mask){
  var tecla=(window.event)?event.keyCode:e.which;   
  if((tecla>47 && tecla<58)){
      mascara(id, mask);
      return true;
  } 
  else{
      if (tecla==8 || tecla==0){
          mascara(id, mask);
          return true;
      } 
      else  return false;
  }
}
function mascara(id, mask){
  var i = id.value.length;
  var carac = mask.substring(i, i+1);
  var prox_char = mask.substring(i+1, i+2);
  if(i == 0 && carac != '#'){
      insereCaracter(id, carac);
      if(prox_char != '#')insereCaracter(id, prox_char);
  }
  else if(carac != '#'){
      insereCaracter(id, carac);
      if(prox_char != '#')insereCaracter(id, prox_char);
  }
  function insereCaracter(id, char){
      id.value += char;
  }
}

