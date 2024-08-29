// Menu Hamburguer
const menu = document.querySelector('#menuHamburguer');
const navegador = document.querySelector('.navegador');

menu.addEventListener('click', () => {
  navegador.classList.toggle('oculto');
});


// Daqui pra baixo é suporte
const titulosDiv = document.querySelectorAll('.tituloDuvida');

titulosDiv.forEach(i => {
  i.addEventListener('click', () => {
    const buscarId = i.getAttribute('data-target');
    const divOculta = document.getElementById(buscarId);
    function transicao (){
      
    }    
    if (divOculta.classList.contains('open')) {
      divOculta.classList.remove('open');
      divOculta.classList.add('closed');
    } else {
      divOculta.classList.remove('closed');
      divOculta.classList.add('open');
    }

    
    const img = i.parentElement.querySelector('.imagemDuvida');
    if (divOculta.classList.contains('open')) {
      img.src = 'img/iconAberto.svg'; 
    } else {
      img.src = 'img/iconFechado.svg'; 
    }
  });
});
