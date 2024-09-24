const div1 = document.getElementById('div1');
const div2 = document.getElementById('div2');
const div3 = document.getElementById('div3');
const div4 = document.getElementById('div4');

const btIniciarViagem = document.querySelector('#btAddViagem');
btIniciarViagem.addEventListener('click', ()=>{
  div1.classList.add('oculto');
  div3.classList.remove('oculto');
  
})
