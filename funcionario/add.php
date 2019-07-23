<?php
require_once('functions.php');
add();
?>


<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Cadastro de Funcionário</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="<?php echo BASEURL; ?>js/jquery.min.js"></script>
    <script src="<?php echo BASEURL; ?>js/jquery311.min.js"></script>
</head>
<body>
<h2>Novo Ativo</h2>

<form action="add.php" method="post" enctype="multipart/form-data">
    <!-- area de campos do form -->
    <hr />
    <div class="row">
        <div class="form-group col-md-3">
            <label for="name">Nome:</label>
            <input type="text" class="form-control" name="funcionario['nome']" autofocus="" placeholder="Primeiro Nome">
        </div>

        <div class="form-group col-md-3">
            <label for="campo2">Sobrenome:</label>
            <input type="text" class="form-control" name="funcionario['sobrenome']" placeholder="Sobrenome">
        </div>
    </div>

    <div class="row">
        <div class="form-group col-md-3">
            <label for="campo2">Setor:</label>
            <select>
                <option>Selecione...</option>
            <?php if ($setores) : ?>
                <?php foreach ($setores as $setor) : ?>
                    <option value="<?php echo $setor['cod_set']; ?>"><?php echo $setor['nome']; ?></option>
                <?php endforeach; ?>
            <?php endif; ?>
            </select>
        </div>

        <div class="form-group col-md-3">
            <label for="campo3">Função:</label>
            <input type="text" class="form-control" name="funcionario['funcao']" placeholder="Função do Funcionário">
        </div>
    </div>

    <div id="actions" class="row">
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="../index.php" class="btn btn-default">Cancelar</a>
        </div>
    </div>
</form>
</body>
