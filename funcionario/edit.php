<?php
require_once('functions.php');
edit();
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Editar dados do Funcionário</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<h2>Atualizar Dados do Funcionário</h2>

<form action="edit.php?cod_func=<?php echo $funcionario['cod_func']; ?>" method="post">
    <hr />
    <div class="row">
        <div class="form-group col-md-3">
            <label for="name">Nome:</label>
            <input type="text" class="form-control" name="funcionario['nome']" value="<?php echo $funcionario['nome']; ?>">
        </div>

        <div class="form-group col-md-3">
            <label for="name">Sobrenome:</label>
            <input type="text" class="form-control" name="funcionario['sobrenome']" value="<?php echo $funcionario['sobrenome']; ?>">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-3">
            <label for="name">Setor:</label>
            <input type="text" class="form-control" name="funcionario['setor']" value="<?php echo $funcionario['setor']; ?>">
        </div>

        <div class="row">
            <div class="form-group col-md-3">
                <label for="campo2">Função:</label>
                <input type="text" class="form-control" name="funcionario['funcao']" value="<?php echo $funcionario['funcao']; ?>">
            </div>
        </div>
    </div>
    <div id="actions" class="row">
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="index.php" class="btn btn-default">Cancelar</a>
        </div>
    </div>
</form>
