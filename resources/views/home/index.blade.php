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
   <div class="" id="div2">
      <ul class="tabelaViagens">
         @foreach ($titulosTabela as $i)
            <li class="tituloViagens">{{$i}}</li>
         @endforeach
      </ul>
   </div>
   <div class="form " id="div3">
      <form action="" method="POST">
         @csrf
         <input class="inputs" type="date" id="dataViagem" required>
         <input class="inputs" type="text" placeholder="Motorista" required>
         <select class="inputs" name="placa_id" id="opcoesPlaca" required>
            <option value="" disabled selected>Placas Cadastradas</option>
            @foreach ($placas as $i)
               <option value="{{$i->id }}">{{ $i->num_placa }}</option>
            @endforeach
         </select>
         <input class="inputs" type="text" placeholder="Destino inicial" required>
         <input class="inputs" type="text" placeholder="Destino final" required>
         <button class="botao" type="submit">Adicionar Viagem</button>
      </form>
      <div>
         <a href="" class="botao">Criar cadastro de Placa</a>
         <a href="" class="botao">Remover Placa</a>
      </div>
   </div>
   <div class="form " id="div4">
      <form action="{{ route('placas.store') }}" method="POST">
         @csrf
         <input class="inputs" type="text" minlength="7" maxlength="7" name="num_placa" required placeholder="Informe o número da placa">
         <button class="botao" type="submit">Adicionar Placa</button>
      </form>
   </div>
</div>
@endsection