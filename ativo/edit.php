<?php
require_once('functions.php');
edit();
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Editar dados do Ativo</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
    <h2>Atualizar Dados do Ativo</h2>

    <form action="edit.php?cod_func=<?php echo $ativo['n_etiqueta']; ?>" method="post">
        <hr />
        <div class="row">
            <div class="form-group col-md-3">
                <label for="name">Nome:</label>
                <input type="text" class="form-control" name="ativo['nome']" value="<?php echo $ativo['nome']; ?>">
            </div>

            <div class="form-group col-md-3">
                <label for="name">Classe:</label>
                <input type="text" class="form-control" name="ativo['classe']" value="<?php echo $ativo['classe']; ?>">
            </div>

            <div class="form-group col-md-3">
                <label for="name">Serial:</label>
                <input type="text" class="form-control" name="ativo['serial']" value="<?php echo $ativo['serial']; ?>">
            </div>

            <div class="form-group col-md-3">
                <label for="name">Nº Etiqueta:</label>
                <input type="text" class="form-control" name="ativo['n_etiqueta']" value="<?php echo $ativo['n_etiqueta']; ?>">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-3">
                <label for="name">Fabricante:</label>
                <input type="text" class="form-control" name="ativo['fabricante']" value="<?php echo $ativo['fabricante']; ?>">
            </div>

            <div class="form-group col-md-3">
                <label for="name">Modelo:</label>
                <input type="text" class="form-control" name="ativo['modelo']" value="<?php echo $ativo['modelo']; ?>">
            </div>

            <div class="form-group col-md-3">
                <label for="name">Cor:</label>
                <input type="text" class="form-control" name="ativo['cor']" value="<?php echo $ativo['cor']; ?>">
            </div>

            <div class="form-group col-md-3">
                <label for="name">Comodato:</label>
                <input type="text" class="form-control" name="ativo['comodato']" value="<?php echo $ativo['comodato']; ?>">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-3">
                <label for="name">Local:</label>
                <input type="text" class="form-control" name="ativo['local']" value="<?php echo $ativo['local']; ?>">
            </div>

            <div class="form-group col-md-3">
                <label for="name">Localização Física:</label>
                <input type="text" class="form-control" name="ativo['local_fisico']" value="<?php echo $ativo['local_fisico']; ?>">
            </div>

            <div class="form-group col-md-3">
                <label for="name">Usuário:</label>
                <input type="text" class="form-control" name="ativo['usuario']" value="<?php echo $ativo['usuario']; ?>">
            </div>

            <div class="form-group col-md-3">
                <label for="name">Fornecedor:</label>
                <input type="text" class="form-control" name="ativo['fornecedor']" value="<?php echo $ativo['fornecedor']; ?>">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-3">
                <label for="name">Nota Fiscal:</label>
                <input type="text" class="form-control" name="ativo['nota_fiscal']" value="<?php echo $ativo['nota_fiscal']; ?>">
            </div>

            <div class="form-group col-md-3">
                <label for="name">Data Aquisição:</label>
                <input type="text" class="form-control" name="ativo['data_aquisicao']" value="<?php echo $ativo['data_aquisicao']; ?>">
            </div>

            <div class="form-group col-md-3">
                <label for="name">Custo de Aquisição:</label>
                <input type="text" class="form-control" name="ativo['custo']" value="<?php echo $ativo['custo']; ?>">
            </div>

            <div class="form-group col-md-3">
                <label for="name">Vida Útil Estimada:</label>
                <input type="text" class="form-control" name="ativo['vida']" value="<?php echo $ativo['vida']; ?>">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-3">
                <label for="name">Comentário:</label>
                <input type="text" class="form-control" name="ativo['comentario']" value="<?php echo $ativo['comentario']; ?>">
            </div>
        </div>

        <div id="actions" class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="index.php" class="btn btn-default">Cancelar</a>
            </div>
        </div>
    </form>
