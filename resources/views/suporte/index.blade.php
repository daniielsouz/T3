@extends('components.layout')

@section('titulo', 'Suporte')

@section('conteudo')
    @foreach ($duvidas as $i)
        <div class="divDuvida">
            <div class="divDuvidaTitulo">
                <h3 class="tituloDuvida" data-target="container{{ $loop->iteration }}">{{ $i['duvida'] }}</h3>
                <img class='imagemDuvida' src="img/iconFechado.svg" alt="">
            </div>
            <div class="oculto" id="container{{ $loop->iteration }}">
                <ul class="listaDuvida">
                    @foreach ($i['resposta'] as $resposta)
                        <li>{!! $resposta !!}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endforeach

    <h4 id='tituloEmail'>Não encontrou sua resposta acima? Entre em contato e nos conte a sua dúvida</h4>
    <div id='formDuvidas'>
        <form class="form" method="post" action="">
            @csrf
            <p>
                <span for="email">Email:</span>
                <input class="inputs" id="email" name="email" required type="email" placeholder="ex. T3@gmail.com"/>
            </p>
            <div class="message">
                <p for="message">Mensagem: </p>
                <textarea class="inputs" type="text" id="message" name="message" required placeholder="Estou com problemas para..." rows="20"></textarea>
            </div>
            <button class="botao" type="submit">Enviar</button>
        </form>
    </div>
@endsection
