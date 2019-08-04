<?php
require_once('functions.php');
add();
?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>LEVANTAMENTO DE IMOBILIZADO</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.mask.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#cnpj").mask("00.000.000/0000-00")
        })
    </script>
</head>
<body>
<h2>Novo Fornecedor <img src="../img/logo.png" alt="logo-tellescom" width='150' height='50'></h2>

<form action="" method="post" enctype="multipart/form-data">
    <!-- area de campos do form -->
    <hr />
    <div class="row">
        <div class="form-group col-md-3">
            <label for="name">Nome:</label>
            <input type="text" class="form-control" name="fornecedor[nome]" autofocus="" placeholder="Nome Completo do Fornecedor">
        </div>

        <div class="form-group col-md-3">
            <label for="name">CNPJ:</label>
            <input id="cnpj" type="text" class="form-control" name="fornecedor[cnpj]" placeholder="Nº CNPJ">
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