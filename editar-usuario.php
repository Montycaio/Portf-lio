<h1>Editar Usuário</h1>
<?php
    $sql = "SELECT * FROM usuarios WHERE id=" .$_REQUEST["id"];

    $res = $conn->query($sql);
    $row = $res->fetch_object();


?>
<form action="?page=salvar" method="post">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control" value="<?php print $row->nome; ?>" required>
    </div>
    <div class="mb-3">
        <label>E-mail</label>
        <input type="email" name="email" class="form-control" value="<?php print $row->email; ?>" required>
    </div>
    <div class="mb-3">
        <label>Telefone</label>
        <input type="tel" name="telefone" class="form-control" value="<?php print $row->telefone; ?>" maxlength="11" required>
    </div>
    <div class="mb-3">
        <label>Data de Nascimento</label>
        <input type="date" name="data_nasc" class="form-control" value="<?php print $row->data_nasc; ?>" required>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
    
</form>