// JavaScript para o módulo menu

//menu mobile
var aberto = false
function menu(){
    if(aberto){
        document.getElementById("menu-mobile").style.cssText = 'height: 0vh; transition: all 0.2s ease;';
        aberto = false;
    }else{
        document.getElementById("menu-mobile").style.cssText = 'height: 85vh; transition: all 0.2s ease;';
        aberto = true;
    }
}