@extends('components.layout')

@section('titulo', 'Histórico')

@section('conteudo')
<div>
    <!-- Talvez por isso em um components -->
        <select name="opcoesConsulta" id="opcoesConsulta">
            <option value="todos">Todos</option>
            <option value="dataDePartida">Data de partida</option>
            <option value="motorista">Motorista</option>
            <option value="placa">Placa</option>
            <option value="destinoInicial">Destino Inicial</option>
            <option value="destinoFinal">Destino Final</option>
            <option value="dataRetorno">Data de Retorno</option>
            <option value="periodo">Periodo</option>
            <option value="customizado">Pesquisa Customizada</option>
        </select>

        <div>
            <form action="">
                <input type="date" required>
                <button type="submit">Pesquisar Data</button>
            </form>

            <form action="">
                <select name="" id="" required>
                    <option value="">Motoristas que já foram atribuidos em ordem crescente</option>
                </select>
                <button type="submit">Pesquisar Motorista</button>
            </form>

            <form action="">
                <select name="" id="" required>
                    <option value="">Placas cadastradas em ordem crecente</option>
                </select> 
                <button type="submit">Pesquisar Placa</button>
            </form>

            <form action="">
                <select name="" id="" required>
                    <option value="">Destinos iniciais cadastrados em ordem crescente</option>
                </select>
                <button type="submit">Pesquisar Destino inicial</button>
            </form>

            <form action="">
                <select name="" id="" required>
                    <option value="">Destinos Finais cadastrados em ordem crescente</option>
                </select>
                <button type="submit">Pesquisar Destino Final</button>
            </form>

            <form action="">
                <input type="date" name="" id="" required>
                <button type="submit">Pesquisar Data de Retorno</button>
            </form>
            
            <form action="">
                <input type="date" name="" id="" required> 
                <span>Até</span>
                <input type="date" name="" id="" required>
                <button type="submit">Pesquisar Periodo</button>
            </form>
        </div>
    </div>
    
    <div>
        <table>
            <tr>
                @foreach($titulos as $i)
                    <td>{{$i}}</td>
                @endforeach
            </tr>
        </table>
    </div>
@endsection