<div>
    <form action="post">
        @csrf
        <input type="date" id="dataViagem" required>
        <input type="text" placeholder="Motorista" required>
        <select name="opcoesPlaca" id="opcoesPlaca" required>
            <option value="" select disabled>Placas Cadastradas</option>
        </select>
        <input type="text" placeholder="Destino inicial" required>
        <input type="text" placeholder="Destino final" required>
        <button type="submit">Adicionar Viagem</button>

        <div>
            <button>Criar cadastro de Placa</button>
            <button>Remover Placa</button>
        </div>
    </form>

    <form action="post">
    @csrf
        <input type="text" min-legth='6' max-length='7' required placeholder='Informe o numero da placa'>
        <button type="submit">Adicionar Placa</button>
    </form>
</div>