@extends('components.layout')
@push('scripts')
<script src="{{ asset('js/home.js') }}" defer></script>
@endpush
@section('titulo', 'Home')

@section('conteudo')
<!-- Div para aparecer quando não existir viagem  -->
<div id="divPrincipalHome">
   <div id="div1">
      <img class="" src="" alt="">
      <button class="botao" type="button" id="btAddViagem">Iniciar Primeira Viagem</button>
   </div>
   <!-- Div para aparecer quando clicar em "Iniciar primeira viagem" -->
   <div class="oculto" id="div2">
      <ul class="tabelaViagens">
         @foreach ($titulosTabela as $i)
            <li class="tituloViagens">{{$i}}</li>
         @endforeach
      </ul>
   </div>
   <div class="form oculto" id="div3">
      <form action="post" id="formViagem">
         @csrf
         <input class="inputs" type="date" id="dataViagem" required>
         <input class="inputs" type="text" placeholder="Motorista" required>
         <select class="inputs" name="opcoesPlaca" id="opcoesPlaca" required>
            <option value="" disabled selected>Placas Cadastradas</option>
         </select>
         <input class="inputs" type="text" placeholder="Destino inicial" required>
         <input class="inputs" type="text" placeholder="Destino final" required>
         <button class="botao" type="submit">Adicionar Viagem</button>
      </form>
      <div>
         <button class="botao">Criar cadastro de Placa</button>
         <button class="botao">Remover Placa</button>
      </div>
   </div>
   <div class="form oculto" id="div4">
      <form action="post">
         @csrf
         <input class="inputs" type="text" minlength='6' maxlength='7' required placeholder='Informe o numero da placa'>
         <button class="botao" type="submit">Adicionar Placa</button>
      </form>
      <button class="btnCancelar">Cancelar</button>
   </div>
</div>
@endsection
