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
    <hr>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Nº da Etiqueta</th>
            <th>Nome</th>
            <th>Classe</th>
            <th>Serial</th>
            <th>Fabricante</th>
            <th>Modelo</th>
            <th>Nº NF</th>
            <th>Aquisição</th>
            <th>Custo</th>
            <th>Vida Útil</th>
            <th>Comentários</th>
        </tr>
        </thead>
        <tbody>
        <?php if ($ativos) : ?>
            <?php foreach ($ativos as $ativo) : ?>
                <tr>
                    <td><?php echo $ativo['n_etiqueta']; ?></td>
                    <td><?php echo $ativo['nome_eqp']; ?></td>
                    <td><?php echo $ativo['classe']; ?></td>
                    <td><?php echo $ativo['serial_eqp']; ?></td>
                    <td><?php echo $ativo['fabricante']; ?></td>
                    <td><?php echo $ativo['modelo']; ?></td>
                    <td><?php echo $ativo['nota_fiscal']; ?></td>
                    <td><?php echo $ativo['data_aquisicao']; ?></td>
                    <td><?php echo $ativo['custo']; ?></td>
                    <td><?php echo $ativo['vida']; ?></td>
                    <td><?php echo $ativo['comentario']; ?></td>
                    <td class="actions text-right">
                        <a href="edit.php?n_etiqueta=<?php echo $ativo['n_etiqueta']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Editar</a>
                        <a href="#" class="btn btn-sm btn-danger">
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

<script src="<?php echo BASEURL; ?>js/main.js"></script>
<script src="<?php echo BASEURL; ?>js/main2.js"></script>
<a href="../index.php" class="btn btn-sm btn-primary">Voltar</a>