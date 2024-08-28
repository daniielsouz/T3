const menu = document.querySelector('#menuHamburguer');
const navegador = document.querySelector('.navegador');

menu.addEventListener('click', () => {
  navegador.classList.toggle('oculto');

  
});



// Daqui pra baixo é sobre o suporte 

  const titulosDiv = document.querySelectorAll('.tituloDuvida');
  titulosDiv.forEach(i => {
    i.addEventListener('click', () => {
      const targetId = i.getAttribute('data-target');
      const divOculta = document.getElementById(`${targetId}`);
      divOculta.classList.toggle('oculto');
 
    });
  });