<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>LEVANTAMENTO DE IMOBILIZADO</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
<h2>Novo Ativo</h2>

<form action="" method="post" enctype="multipart/form-data">
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
            <input type="text" class="form-control" name="funcionario['setor']" placeholder="Setor do Funcionário">
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