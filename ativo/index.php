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
            <th>Cód.:</th>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>Telefone</th>
            <th>Empresa</th>
            <th>Setor</th>
            <th>Função</th>
        </tr>
        </thead>
        <tbody>
        <?php if ($funcionarios) : ?>
            <?php foreach ($funcionarios as $funcionario) : ?>
                <tr>
                    <td><?php echo $funcionario['cod']; ?></td>
                    <td><?php echo $funcionario['nome']; ?></td>
                    <td><?php echo $funcionario['sobrenome']; ?></td>
                    <td><?php echo $funcionario['telefone']; ?></td>
                    <td><?php echo $funcionario['empresa']; ?></td>
                    <td><?php echo $funcionario['setor']; ?></td>
                    <td><?php echo $funcionario['funcao']; ?></td>
                    <td class="actions text-right">
                        <a href="edit.php?cod=<?php echo $funcionario['cod']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Editar</a>
                        <a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-funcionario="<?php echo $funcionario['cod']; ?>">
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
<?php include(FOOTER_TEMPLATE); ?>