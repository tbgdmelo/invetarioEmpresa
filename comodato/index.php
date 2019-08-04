<?php
require_once('functions.php');
index();
?>
<header>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Comodatos Cadastrados</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</header>
<h2>Comodatos Cadastrados <img src="../img/logo.png" alt="logo-tellescom" width='150' height='50'></h2>
<hr>
<table class="table table-hover">
    <thead>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>CNPJ</th>
    </tr>
    </thead>
    <tbody>
    <?php if ($comodatos) : ?>
        <?php foreach ($comodatos as $comodato) : ?>
            <tr>
                <td><?php echo $comodato['cod_comod']; ?></td>
                <td><?php echo $comodato['nome']; ?></td>
                <td><?php echo $comodato['cnpj']; ?></td>
                <td class="actions text-right">
                    <a href="edit.php?cod_comod=<?php echo $comodato['cod_comod']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Editar</a>
                    <a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal-comod" data-comodato="<?php echo $comodato['cod_comod']; ?>">
                        <i class="fa fa-trash"></i> Excluir
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php else : ?>
        <tr>
            <td colspan="6">Nenhum registro encontrado.</td>
        </tr>
    <?php endif; ?>
    </tbody>
</table>
<?php include('modal.php'); ?>

<script src="<?php echo BASEURL; ?>js/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo BASEURL; ?>js/jquery-1.11.2.min.js"><\/script>')</script>

<script src="<?php echo BASEURL; ?>js/bootstrap.min.js"></script>

<script src="<?php echo BASEURL; ?>js/modal_comod.js"></script>
<a href="../index.php" class="btn btn-sm btn-primary">Voltar</a>
<a href="add.php" class="btn btn-sm btn-success"><i class="fas fa-plus-square"></i> Novo Cadastro</a>