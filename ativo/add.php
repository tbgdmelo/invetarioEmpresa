<?php
require_once('functions.php');
add();
listComodatos();
listUsers();
listSetores();
listLocais();
listFornecedores();
?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Cadastro de Ativo</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.mask.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function () {
        $("#dinheiro").mask("999.999.990,00",{reverse: true})
        $("#vida").mask("990")
        $("#etiqueta").mask("000000")
    })
    </script>
</head>
<body>
<h2>Novo Ativo</h2>

    <form action="add.php" method="post" enctype="multipart/form-data">
        <!-- area de campos do form -->
        <hr />
        <div class="row">
            <div class="form-group col-md-3">
                <label for="name">Nome:</label>
                <input type="text" class="form-control" name="ativo['nome_eqp']" autofocus="" placeholder="Nome do Ativo">
            </div>

            <div class="form-group col-md-3">
                <label for="name">Classe:</label>
                <input type="text" class="form-control" name="ativo['classe']" placeholder="Classe do Ativo">
            </div>

            <div class="form-group col-md-3">
                <label for="name">Serial:</label>
                <input type="text" class="form-control" name="ativo['serial_eqp']" placeholder="Nº Serial">
            </div>

            <div class="form-group col-md-3">
                <label for="name">Nº Etiqueta:</label>
                <input id="etiqueta" type="text" class="form-control" name="ativo['n_etiqueta']" placeholder="Nº Etiqueta (xxxxxx)">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-3">
                <label for="campo2">Fabricante:</label>
                <input type="text" class="form-control" name="ativo['fabricante']" placeholder="Nome do Fabricante">
            </div>

            <div class="form-group col-md-3">
                <label for="campo3">Modelo:</label>
                <input type="text" class="form-control" name="ativo['modelo']" placeholder="Modelo do ativo">
            </div>

            <div class="form-group col-md-3">
                <label for="campo2">Comodato:</label>
                <select class="form-control" name="ativo['id_comodato']">
                    <option onfocus="true">Selecione...</option>
                    <?php if ($comodatos) : ?>
                        <?php foreach ($comodatos as $comodato) : ?>
                            <option value="<?php echo $comodato['cod_comod']; ?>"><?php echo $comodato['cod_comod'] ."- ". $comodato['nome']; ?></option>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <option>Nenhum registro encontrado.</option>
                    <?php endif; ?>
                </select>
            </div>

            <div class="form-group col-md-3">
                <label for="name">Vida Útil Estimada:</label>
                <input id="vida" type="text" class="form-control" name="ativo['vida']" placeholder="Tempo de Vida Estimado em Nº de Meses">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-3">
                <label for="name">Local:</label>
                <select class="form-control" name="ativo['id_filial']">
                    <option onfocus="true">Selecione...</option>
                    <?php if ($locais) : ?>
                        <?php foreach ($locais as $local) : ?>
                            <option value="<?php echo $local['cod_filial']; ?>"><?php echo  $local['cod_filial']."- ". $local['nome']; ?></option>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <option>Nenhum registro encontrado.</option>
                    <?php endif; ?>
                </select>
            </div>

            <div class="form-group col-md-3">
                <label for="name">Localização Física:</label>
                <select class="form-control" name="ativo['id_setor']">
                    <option onfocus="true">Selecione...</option>
                    <?php if ($setores) : ?>
                        <?php foreach ($setores as $setor) : ?>
                            <option value="<?php echo $setor['cod_set']; ?>"><?php echo $setor['cod_set'] ."- ". $setor['nome']; ?></option>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <option>Nenhum registro encontrado.</option>
                    <?php endif; ?>
                </select>
            </div>

            <div class="form-group col-md-3">
                <label for="campo2">Usuário:</label>
                <select class="form-control" name="ativo['id_funcionario']">
                    <option onfocus="true">Selecione...</option>
                    <?php if ($users) : ?>
                        <?php foreach ($users as $user) : ?>
                            <option value="<?php echo $user['cod_func']; ?>"><?php echo $user['cod_func'] ."- ". $user['nome']; echo " ". $user['sobrenome']; ?></option>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <option>Nenhum registro encontrado.</option>
                    <?php endif; ?>
                </select>
            </div>

            <div class="form-group col-md-3">
                <label for="name">Fornecedor:</label>
                <select class="form-control" name="ativo['id_fornecedor']">
                    <option onfocus="true">Selecione...</option>
                    <?php if ($fornecedores) : ?>
                        <?php foreach ($fornecedores as $fornecedor) : ?>
                            <option value="<?php echo $fornecedor['cod_forn']; ?>"><?php echo $fornecedor['cod_forn'] ."- ". $fornecedor['nome']; ?></option>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <option>Nenhum registro encontrado.</option>
                    <?php endif; ?>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-3">
                <label for="name">Nota Fiscal:</label>
                <input type="text" class="form-control" name="ativo['nota_fiscal']" placeholder="Nº da Nota">
            </div>

            <div class="form-group col-md-3">
                <label for="name">Data de Aquisição:</label>
                <input value="<?php echo $ativo['data_aquisicao'];?>.ToString("yyyy-MM-dd")" type="date" class="form-control" name="ativo['data_aquisicao']" placeholder="DD/MM/YYYY">
            </div>

            <div class="form-group col-md-3">
                <label for="name">Custo de Aquisição:</label>
                <input id="dinheiro" type="text" class="form-control" name="ativo['custo']" placeholder="Custo Único do Ativo">
            </div>

        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <label for="name">Comentários:</label>
                <textarea type="text" rows="5" class="form-control" name="ativo['comentario']" placeholder="Comentários"></textarea>
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