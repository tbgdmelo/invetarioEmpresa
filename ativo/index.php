<?php
require_once('functions.php');
index();

?>
<header>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Ativos Cadastrados</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</header>
    <h2>Ativos Cadastrados <img src="../img/logo.png" alt="logo-tellescom" width='150' height='50'></h2>
    <hr>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Nome</th>
            <th>Modelo</th>
            <th>Nº Série</th>
            <th>Nº Etiqueta</th>
            <th>Comodato</th>
            <th>Local</th>
            <th>Local Físico</th>
            <th>Usuário</th>
            <th>Vida Útil</th>
            <th>Comentários</th>
        </tr>
        </thead>
        <tbody>
        <?php if ($ativos) : ?>
            <?php foreach ($ativos as $ativo) : ?>
                <tr>
                    <td><?php echo $ativo['nome_eqp']; ?></td>
                    <td><?php echo $ativo['modelo']; ?></td>
                    <td><?php echo $ativo['serial_eqp']; ?></td>
                    <td><?php echo $ativo['n_etiqueta']; ?></td>
                    <?php translate($ativo['id_comodato'], $ativo['id_filial'], $ativo['id_setor'], $ativo['id_funcionario'], $ativo['id_fornecedor']); ?>
                    <td><?php echo $nameComod; ?></td>
                    <td><?php echo $nameLocal; ?></td>
                    <td><?php echo $nameLocalF; ?></td>
                    <td><?php echo $nameUser; ?></td>
                    <td><?php echo $ativo['vida']. " Meses"; ?></td>
                    <td><?php echo $ativo['comentario']; ?></td>
                    <td class="actions text-right">
                        <a href="edit.php?n_etiqueta=<?php echo $ativo['n_etiqueta']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Editar</a></td>
                        <td><a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal-ativo" data-ativo="<?php echo $ativo['n_etiqueta']; ?>">
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

<script src="<?php echo BASEURL; ?>js/modal_ativo.js"></script>
<a href="../index.php" class="btn btn-sm btn-primary">Voltar</a>
<a href="add.php" class="btn btn-sm btn-success"><i class="fas fa-plus-square"></i> Novo Cadastro</a>