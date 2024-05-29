<h1>Novo Doador</h1>
<br>
<form action="?page=salvar" method="post">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control" placeholder="Digite seu nome" required>
    </div>
    <div class="mb-3">
        <label>E-mail</label>
        <input type="email" name="email" class="form-control" placeholder="Digite seu e-mail" required>
    </div>
    <div class="mb-3">
        <label>Telefone</label>
        <input type="tel" name="telefone" class="form-control" placeholder="(##) #####-####" maxlength="11" required>
    </div>
    <div class="mb-3">
        <label>Data de Nascimento</label>
        <input type="date" name="data_nasc" class="form-control" required>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
    
</form>
<br>
<br>