<?php
require_once('functions.php');
edit();
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Editar dados do Comodato</title>
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
<h2>Atualizar Dados do Comodato <img src="../img/logo.png" alt="logo-tellescom" width='150' height='50'></h2>

<form action="edit.php?cod_comod=<?php echo $comodato['cod_comod']; ?>" method="post">
    <hr />
    <div class="row">
        <div class="form-group col-md-3">
            <label for="name">Nome:</label>
            <input type="text" class="form-control" name="comodato['nome']" value="<?php echo $comodato['nome']; ?>">
        </div>

        <div class="form-group col-md-3">
            <label for="name">CNPJ:</label>
            <input id="cnpj" type="text" class="form-control" name="comodato['cnpj']" value="<?php echo $comodato['cnpj']; ?>">
        </div>
    </div>
    <div id="actions" class="row">
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="index.php" class="btn btn-default">Cancelar</a>
        </div>
    </div>
</form>
