@extends('components.layout')
@section('titulo','Cadastro')
@section('conteudo')

<div id="cadastro">
        <form method="get" action="/usuarios.sql"> 
          <h1>Cadastro</h1>           
          <p> 
            <label for="name">Seu nome: </label>
            <input id="name" name="name" required="required" type="text" placeholder="ex. T3 Logistic" />
          </p>          
          <p> 
            <label for="email">Seu e-mail: </label>
            <input id="email" name="email" required="required" type="email" placeholder="ex. T3logistic@gmail.com"/> 
          </p>          
          <p> 
            <label for="password">Sua senha: </label>
            <input id="password" name="password" required="required" type="password" placeholder="ex. 1234"/>
          </p>          
          <p> 
            <input type="submit" value="Cadastrar-se"/> 
          </p>          
          <p class="link">  
            Já tem conta?
            <a href="#paralogin"> Ir para Login </a>
          </p>
        </form>
      </div>
    </div>
  </div> 
   

@endsection