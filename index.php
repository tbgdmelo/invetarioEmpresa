<?php
require_once('functions.php');
totalActive();
totalComod();
totalForn();
totalFunc();
?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>LEVANTAMENTO DE IMOBILIZADO</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
<h1><strong>Sistema de Cadastro de Imobilizado - Tellescom</strong></h1>
<br>
<figure id="logo">
    <img src="img/logo.png" alt="logo-tellescom" width='250' height='100'>
</figure>
    <h2>Ativo <i class="fa fa-cart-plus"></i> </h2>
    <div>
        <a href="ativo/add.php" class="btn btn-success"><i class="fas fa-plus-square"></i> Cadastrar</a>
        <a href="ativo/index.php" class="btn btn-primary"><i class="fas fa-eye"></i> Visualizar Cadastros</a>
    </div>
<h2>Funcionários <i class="fas fa-id-card"></i> </h2>
    <div>
        <a href="funcionario/add.php" class="btn btn-success"><i class="fas fa-plus-square"></i> Cadastrar</a>
        <a href="funcionario/index.php" class="btn btn-primary"><i class="fas fa-eye"></i> Visualizar Cadastros</a>
    </div>
    <ul id="dados">
        <div><strong>REGISTROS TOTAIS</strong></div>
        <li>Ativos Cadastrados: <?php echo $ativos;?></li>
        <li>Usuários Cadastrados: <?php echo $funcionarios;?></li>
        <li>Comodatos Cadastrados: <?php echo $comodatos;?></li>
        <li>Fornecedores Cadastrados: <?php echo $fornecedores;?></li>
    </ul>
    <h2>Comodato <i class="fas fa-building"></i></h2>
    <div>
        <a href="comodato/add.php" class="btn btn-success"><i class="fas fa-plus-square"></i> Cadastrar</a>
        <a href="comodato/index.php" class="btn btn-primary"><i class="fas fa-eye"></i> Visualizar Cadastros</a>
    </div>
    <h2>Fornecedor <i class="fa fa-truck-loading"></i></h2>
    <div>
        <a href="fornecedor/add.php" class="btn btn-success"><i class="fas fa-plus-square"></i> Cadastrar</a>
        <a href="fornecedor/index.php" class="btn btn-primary"><i class="fas fa-eye"></i> Visualizar Cadastros</a>
    </div>
    <h2>Levantamento Atual <i class="fas fa-file-csv"></i></h2>
    <div>
        <a href="<?php echo BASEURL; ?>report/create.php" class="btn btn-primary"><i class="fas fa-file-csv"></i> Gerar Planilha</a>
    </div>

</body>
<footer>
    <style>
        footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #dddddd;
            text-align: center;
        }
    </style>
    <h4>Copyright © 2019 Thiago Melo
        <a href="https://github.com/tbgdmelo"><i class="fab fa-github"></i></a>
        <a href="#"><i class="fab fa-telegram-plane"></i></a>
        <a href="https://api.whatsapp.com/send?phone=5592993786848"><i class="fab fa-whatsapp"></i></a>
        <a href="https://join.skype.com/invite/snhJkUaVDS1D"><i class="fab fa-skype"></i></a>
        <a href="#"><i class="fab fa-google"></i></a>
    </h4>
</footer>

<html>
