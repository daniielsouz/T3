<div id="home">
    <div class="form">
        <form action="post"  id="formViagem">
            @csrf
            <input class="inputs" type="date" id="dataViagem" required>
            <input class="inputs" type="text" placeholder="Motorista" required>
            <select class="inputs" name="opcoesPlaca" id="opcoesPlaca" required>
                <option value="" disabled selected>Placas Cadastradas</option>
            </select>
            <input class="inputs" type="text" placeholder="Destino inicial" required>
            <input class="inputs" type="text" placeholder="Destino final" required>
            <button type="submit">Adicionar Viagem</button>
        </form>
        <div>
                <button>Criar cadastro de Placa</button>
                <button>Remover Placa</button>
            </div>
    </div>
    <div class="form">
        <form  action="post">
        @csrf
            <input class="inputs" type="text" min-legth='6' max-length='7' required placeholder='Informe o numero da placa'>
            <button type="submit">Adicionar Placa</button>
        </form>
    <button class="btnCancelar">Cancelar</button>
    </div>
</div>