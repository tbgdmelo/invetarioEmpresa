<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>LEVANTAMENTO DE IMOBILIZADO</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
<h2>Novo Ativo</h2>

    <form action="" method="post" enctype="multipart/form-data">
        <!-- area de campos do form -->
        <hr />
        <div class="row">
            <div class="form-group col-md-3">
                <label for="name">Nome:</label>
                <input type="text" class="form-control" name="" autofocus="" placeholder="Nome do Ativo">
            </div>

            <div class="form-group col-md-3">
                <label for="name">Classe:</label>
                <input type="text" class="form-control" name="" placeholder="Classe do Ativo">
            </div>

            <div class="form-group col-md-3">
                <label for="name">Serial:</label>
                <input type="text" class="form-control" name="equipamento['serial_eqp']" placeholder="Nº Serial">
            </div>

            <div class="form-group col-md-2">
                <label for="name">Nº Etiqueta:</label>
                <input type="text" class="form-control" name="equipamento['n_etiqueta']" placeholder="Nº Etiqueta">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-3">
                <label for="campo2">Fabricante:</label>
                <input type="text" class="form-control" name="equipamento['fabricante']" placeholder="Nome do Fabricante">
            </div>

            <div class="form-group col-md-3">
                <label for="campo3">Modelo:</label>
                <input type="text" class="form-control" name="equipamento['modelo']" placeholder="Modelo do Equipamento">
            </div>

            <div class="form-group col-md-3">
                <label for="campo1">Cor:</label>
                <input type="text" class="form-control" name="equipamento['cor']" placeholder="Cor Predominante">
            </div>

            <div class="form-group col-md-2">
                <label for="name">Comodato:</label>
                <input type="text" class="form-control" name="equipamento['n_etiqueta']" placeholder="Comodato">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-3">
                <label for="name">Local:</label>
                <input type="text" class="form-control" name="equipamento['n_etiqueta']" placeholder="Local de Aquisição">
            </div>

            <div class="form-group col-md-3">
                <label for="name">Localização Física:</label>
                <input type="text" class="form-control" name="equipamento['n_etiqueta']" placeholder="Local Físico">
            </div>

            <div class="form-group col-md-3">
                <label for="name">Usuário:</label>
                <input type="text" class="form-control" name="equipamento['n_etiqueta']" placeholder="Usuário Responsável">
            </div>

            <div class="form-group col-md-2">
                <label for="name">Fornecedor:</label>
                <input type="text" class="form-control" name="equipamento['n_etiqueta']" placeholder="Fornecedor">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-3">
                <label for="name">Nota Fiscal:</label>
                <input type="text" class="form-control" name="equipamento['n_etiqueta']" placeholder="Nº da Nota">
            </div>

            <div class="form-group col-md-3">
                <label for="name">Data de Aquisição:</label>
                <input type="text" class="form-control" name="equipamento['n_etiqueta']" placeholder="Nº Etiqueta">
            </div>

            <div class="form-group col-md-3">
                <label for="name">Custo de Aquisição:</label>
                <input type="text" class="form-control" name="equipamento['n_etiqueta']" placeholder="Data Conforme a Nota">
            </div>

            <div class="form-group col-md-2">
                <label for="name">Vida Útil Estimada:</label>
                <input type="text" class="form-control" name="equipamento['n_etiqueta']" placeholder="Tempo de Vida Estimado">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-3">
                <label for="name">Comentários:</label>
                <input type="text" class="form-control" name="equipamento['n_etiqueta']" placeholder="Comentários">
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