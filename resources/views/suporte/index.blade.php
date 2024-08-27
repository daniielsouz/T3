@extends('components.layout')

@section('titulo','Suporte')

@section('conteudo')

<head>
</head>
<body>
    <ul>
        <li class="doubts">Não estou conseguindo cadastrar viagem
        <label for="">
            <ul>
                <li>O campo da placa está correto ? EX: BRA2E13</li>
                <li>O campo da placa está correto ? EX: BRA2E13</li>
                <li>O campo da placa está correto ? EX: BRA2E13</li>
                <li>O campo da placa está correto ? EX: BRA2E13</li>
            </ul>
        </label>
        </li> 
        <li class="doubts">Não estou conseguindo cadastrar viagem
        <label for="">
            <ul>
                <li>O campo da placa está correto ? EX: BRA2E13</li>
                <li>O campo da placa está correto ? EX: BRA2E13</li>
                <li>O campo da placa está correto ? EX: BRA2E13</li>
                <li>O campo da placa está correto ? EX: BRA2E13</li>
            </ul>
        </label>
        </li>
        <li class="doubts">Não estou conseguindo cadastrar viagem
        <label for="">
            <ul>
                <li>O campo da placa está correto ? EX: BRA2E13</li>
                <li>O campo da placa está correto ? EX: BRA2E13</li>
                <li>O campo da placa está correto ? EX: BRA2E13</li>
                <li>O campo da placa está correto ? EX: BRA2E13</li>
            </ul>
        </label>
        </li>
        <li class="doubts">Não estou conseguindo cadastrar viagem
        <label for="">
            <ul>
                <li>O campo da placa está correto ? EX: BRA2E13</li>
                <li>O campo da placa está correto ? EX: BRA2E13</li>
                <li>O campo da placa está correto ? EX: BRA2E13</li>
                <li>O campo da placa está correto ? EX: BRA2E13</li>
            </ul>
        </label>
        </li>
    </ul>

    <h2>Nos conte a sua dúvida</h2>
    <form method="post" action=""> 
        <p> 
            <span for="email">Email:</span>
            <input id="email" name="email" required type="email" placeholder="ex. T3@gmail.com"/>
        </p>
        <div class="message">
            <p for="message">Mensagem: </p>
            <textarea type="text" id="message" name="message" required placeholder="Estou com problemas para..." ></textarea>
        </div>
        <input type="submit" value="Enviar" /> 
    </form>

@endsection