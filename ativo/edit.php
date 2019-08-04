<?php
require_once('functions.php');
edit();
listComodatos();
listUsers();
listSetores();
listLocais();
listFornecedores();
translate($ativo['id_comodato'],
          $ativo['id_filial'],
          $ativo['id_setor'],
          $ativo['id_funcionario'],
          $ativo['id_fornecedor']);
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Editar dados do Ativo </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/all.min.css">
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.mask.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#dinheiro").mask("999.999.990,00",{reverse: true})
            $("#vida").mask("990")
            $("#etiqueta").mask("000000")
            $("#nf").mask("999999999")
        })
    </script>
</head>
    <h2>Atualizar Dados do Ativo <img src="../img/logo.png" alt="logo-tellescom" width='150' height='50'></h2>

    <form action="edit.php?n_etiqueta=<?php echo $ativo['n_etiqueta']; ?>" method="post">
        <hr />
        <div class="row">
            <div class="form-group col-md-3">
                <label for="name">Nome:</label>
                <input type="text" class="form-control" name="ativo['nome_eqp']" value="<?php echo $ativo['nome_eqp']; ?>">
            </div>

            <div class="form-group col-md-3">
                <label for="name">Classe:</label>
                <input type="text" class="form-control" name="ativo['classe']" value="<?php echo $ativo['classe']; ?>">
            </div>

            <div class="form-group col-md-3">
                <label for="name">Serial:</label>
                <input type="text" class="form-control" name="ativo['serial_eqp']" value="<?php echo $ativo['serial_eqp']; ?>">
            </div>

            <div class="form-group col-md-3">
                <label for="name">Nº Etiqueta:</label>
                <input id="etiqueta" type="text" class="form-control" name="ativo['n_etiqueta']" value="<?php echo $ativo['n_etiqueta']; ?>">
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
                <label for="campo2">Comodato:</label>
                <select class="form-control" name="ativo['id_comodato']">
                    <option onfocus="true"><?php echo $ativo['id_comodato'] ."- ".$nameComod ?></option>
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
                <input id="vida" type="text" class="form-control" name="ativo['vida']" value="<?php echo $ativo['vida']; ?>">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-3">
                <label for="name">Local:</label>
                <select class="form-control" name="ativo['id_filial']">
                    <option onfocus="true"><?php echo $ativo['id_filial'] ."- ".$nameLocal ?></option>
                    <?php if ($locais) : ?>
                        <?php foreach ($locais as $local) : ?>
                            <option value="<?php echo $local['cod_filial']; ?>"><?php echo  $local['cod_filial']."- ". $local['nome']." - ". $local['cidade']; ?></option>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <option>Nenhum registro encontrado.</option>
                    <?php endif; ?>
                </select>
            </div>

            <div class="form-group col-md-3">
                <label for="name">Localização Física:</label>
                <select class="form-control" name="ativo['id_setor']">
                    <option onfocus="true"><?php echo $ativo['id_setor'] ."- ".$nameLocalF ?></option>
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
                    <option onfocus="true"><?php echo $ativo['id_funcionario'] ."- ".$nameUser ?></option>
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
                    <option onfocus="true"><?php echo $ativo['id_fornecedor'] ."- ".$nameForn ?></option>
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
                <input id="nf" type="text" class="form-control" name="ativo['nota_fiscal']" value="<?php echo $ativo['nota_fiscal']; ?>">
            </div>

            <div class="form-group col-md-3">
                <label for="name">Data de Aquisição:</label>
                <input value="<?php echo $ativo['data_aquisicao'];?>" type="date" class="form-control" name="ativo['data_aquisicao']">
            </div>

            <div class="form-group col-md-3">
                <label for="name">Custo de Aquisição:</label>
                <input id="dinheiro" class="form-control" name="ativo['custo']" value="<?php echo $ativo['custo']; ?>">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-3">
                <label for="name">Comentário:</label>
                <textarea type="text" rows="5" class="form-control" name="ativo['comentario']" placeholder="Comentários"><?php echo $ativo['comentario'];?></textarea>
            </div>
        </div>

        <div id="actions" class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="index.php" class="btn btn-default">Cancelar</a>
            </div>
        </div>
    </form>
