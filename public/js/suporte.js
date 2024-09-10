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

