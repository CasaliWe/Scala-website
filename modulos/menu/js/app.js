// JavaScript para o módulo menu

//menu mobile
var aberto = false
function menu(){
    if(aberto){
        document.getElementById("menu-mobile").style.cssText = 'height: 0vh; transition: all 0.2s ease;';
        aberto = false;
    }else{
        document.getElementById("menu-mobile").style.cssText = 'height: 100vh; transition: all 0.2s ease;';
        aberto = true;
    }
}

// Dropdown de serviços (desktop)
document.addEventListener('DOMContentLoaded', function() {
    const dropdownServicos = document.querySelector('.dropdown-servicos');
    const dropdownToggle = dropdownServicos.querySelector('.dropdown-toggle');
    
    // Abrir/fechar dropdown ao clicar
    dropdownToggle.addEventListener('click', function(e) {
        e.preventDefault();
        dropdownServicos.classList.toggle('show');
    });
    
    // Fechar dropdown quando clicar fora
    document.addEventListener('click', function(e) {
        if (!dropdownServicos.contains(e.target)) {
            dropdownServicos.classList.remove('show');
        }
    });
});

// Dropdown serviços (mobile)
function toggleMobileDropdown(event) {
    event.preventDefault();
    const parent = event.currentTarget.parentElement;
    parent.classList.toggle('show');
}