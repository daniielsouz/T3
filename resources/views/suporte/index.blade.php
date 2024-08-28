@extends('components.layout')

@section('titulo', 'Suporte')

@section('conteudo')
    <div class="divDuvida">
        <h3 class="tituloDuvida" data-target="container1">Não estou conseguindo iniciar uma viagem!</h3>
        <div class="oculto" id="container1">
            <ul class="listaDuvida">
                <li>O campo da placa está correto? EX: BRA2E13</li>
                <li>O campo da placa está correto? EX: BRA2E13</li>
                <li>O campo da placa está correto? EX: BRA2E13</li>
            </ul>
        </div>
    </div>

    <div class="divDuvida">
        <h3 class="tituloDuvida" data-target="container2">Não estou conseguindo cadastrar a minha placa!<h3>
        <div class="oculto" id="container2">
            <ul class="listaDuvida">
                <li>O campo da placa está correto? EX: BRA2E13</li>
                <li>O campo da placa está correto? EX: BRA2E13</li>
                <li>O campo da placa está correto? EX: BRA2E13</li>
                <li>O campo da placa está correto? EX: BRA2E13</li>
            </ul>
        </div>
    </div>

    <div class="divDuvida">
        <h3 class="tituloDuvida" data-target="container3">Não estou conseguindo usar uma placa que está em viagem!<h3>
        <div class="oculto" id="container3">
            <ul class="listaDuvida">
                <li>O campo da placa está correto? EX: BRA2E13</li>
                <li>O campo da placa está correto? EX: BRA2E13</li>
                <li>O campo da placa está correto? EX: BRA2E13</li>
                <li>O campo da placa está correto? EX: BRA2E13</li>
            </ul>
        </div>
    </div>

    <h4 id='tituloEmail'>Não encontrou sua resposta acima ? Entre em contato e nos conte a sua dúvida</h4>
    <div id='formDuvidas'>
        <form class="form" method="post" action="">
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
