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
      @foreach ($viagens as $i)
      <ul class="tabelaViagens" data-id=""='{{$i->id}}'>
         <li class="tituloViagens">{{$i->dataViagem}}</li>
         <li class="tituloViagens">{{$i->motorista}}</li>
         <li class="tituloViagens">{{$i->placa}}</li>
         <li class="tituloViagens">{{$i->destinoInicial}}</li>
         <li class="tituloViagens">{{$i->destinoFinal}}</li>
         <form action="{{ route('historico.store', $i->id) }}" method="POST">
            @csrf
            <button style="background: none; border:none;" type="submit">
               <img class="imgHome" src="/img/iconRetorno.svg" title="Informar retorno da viagem" alt="Informar retorno da viagem">
            </button>
         </form>

         <form action="{{route('viagens.destroy',$i->id)}}" method="POST">
            <li>
            @csrf
            @method('DELETE')
               <button style="background: none; border:none;" type="submit" onclick="return confirm('Tem certeza que deseja excluir está viagem?')">
                  <img class="imgHome" src="/img/iconExcluirViagem.svg" title="Excluir viagem" alt="Excluir viagem">
               </button>
            </li>
         </form>
      </ul>
      @endforeach
   </div>
   <div class="form" id="div3">
      <form action="{{route ('viagens.store')}}" method="POST">
         @csrf
         <input class="inputs" type="date" name="dataViagem" id="dataViagem" required>
         <input class="inputs" type="text" name='motorista' placeholder="Motorista" required>
         <select class="inputs" name="opcoesPlaca" id="opcoesPlaca" required>
            <option value="" disabled selected>Placas Cadastradas</option>
            @foreach ($placas as $i)
               @if($i->status == 0)
                  <option value="{{$i->num_placa }}">{{ $i->num_placa }}</option>
               @else
                  <option value="{{$i->num_placa }}" select disabled>{{ $i->num_placa }}</option>
               @endif
            @endforeach
         </select>
         <input class="inputs" id="destinoFinal" type="text" name='destinoInicial' placeholder="Destino inicial" required>
         <input class="inputs" type="text" name='destinoFinal' placeholder="Destino final" required>
         <button class="botao" type="submit">Adicionar Viagem</button>
      </form>
      <div>
         <a href="" class="botao">Criar cadastro de Placa</a>
         <a href="" class="botao">Remover Placa</a>
      </div>
   </div>
   <div class="form" id="div4">
      <form action="{{route('placas.store')}}" method="POST">
         @csrf
         <input class="inputs" type="text" minlength="7" maxlength="7" name="num_placa" required placeholder="Informe o número da placa">
         <button class="botao" type="submit">Adicionar Placa</button>
      </form>
   </div>
   <div>
      <ul>   
         @foreach($placasRemocao as $i)
         <form action="{{route('placas.destroy', $i->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <li data-id='{{$i->id}}'>{{$i->num_placa}}</li>
            <button style="background: none; border:none;" type="submit" onclick="return confirm('Tem certeza que deseja excluir está placa?')">
               <img class="imgHome" src="/img/iconExcluirViagem.svg" title="Excluir placa" alt="Excluir placa">
            </button>
         </form>
         @endforeach
      </ul>
   </div>
</div>
@endsection