
// Menu Hamburguer
const menu = document.querySelector('#menuHamburguer');
const navegador = document.querySelector('.navegador');

menu.addEventListener('click', () => {
  navegador.classList.toggle('oculto');
});

//Daqui pra baixo é o home
const div1 = document.getElementById('div1');
const div2 = document.getElementById('div2');
const div3 = document.getElementById('div3');
const div4 = document.getElementById('div4');

const btIniciarViagem = document.querySelector('#btAddViagem');
btIniciarViagem.addEventListener('click', ()=>{
  div1.classList.add('oculto');
  div3.classList.remove('oculto')
  
})

// Daqui pra baixo é suporte
const titulosDiv = document.querySelectorAll('.tituloDuvida');

titulosDiv.forEach(i => {
  i.addEventListener('click', () => {
    const buscarId = i.getAttribute('data-target');
    const divOculta = document.getElementById(buscarId);
   
    if (divOculta.classList.contains('aberto')) {
      divOculta.classList.remove('aberto');
      divOculta.classList.add('fechado');
    } else {
      divOculta.classList.remove('fechado');
      divOculta.classList.add('aberto');
    }

    
    const img = i.parentElement.querySelector('.imagemDuvida');
    if (divOculta.classList.contains('aberto')) {
      img.src = 'img/iconAberto.svg'; 
    } else {
      img.src = 'img/iconFechado.svg'; 
    }
  });
});

