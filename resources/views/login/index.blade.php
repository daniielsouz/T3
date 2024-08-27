@extends('components.layout')
@section('titulo','Login')
@section('conteudo')



  <div class="container" >
     
    <div class="content">      
 
      <div id="login">
        <form method="get" action=""> 
          <h1>Login</h1> 
          <p> 
            <label for="name">Usuário: </label>
            <input id="name" name="name" required="required" type="text" placeholder="ex. T3 logistic"/>
          </p>          
          <p> 
            <label for="password">Senha: </label>
            <input id="password" name="password" required="required" type="password" placeholder="ex. 1234" /> 
          </p>                     
          <p> 
            <input type="submit" value="Entrar" /> 
          </p>          
          <p class="link">
            Ainda não tem conta?
            <a href="#paracadastro">Cadastre-se</a>
          </p>
        </form>
      </div>
 

@endsection
