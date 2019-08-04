<?php

mysqli_report(MYSQLI_REPORT_STRICT);

function open_database() {
    try {
        $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        return $conn;
    } catch (Exception $e) {
        echo $e->getMessage();
        return null;
    }
}

function close_database($conn) {
    try {
        mysqli_close($conn);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function find_all( $table ) {
    $database = open_database();
    $found = null;

    $sql = "SELECT * FROM " . $table;
    $result = $database->query($sql);

    if ($result->num_rows > 0) {
        $found = $result->fetch_all(MYSQLI_ASSOC);
    }
    close_database($database);
    return $found;
}

function save($table = null, $data = null) {

    $database = open_database();

    $columns = null;
    $values = null;

    foreach ($data as $key => $value) {
        $columns .= trim($key, "'") . ",";
        $values .= "'$value',";
    }

    // remove a ultima virgula
    $columns = rtrim($columns, ',');
    $values = rtrim($values, ',');

    $sql = "INSERT INTO " . $table . "($columns)" . " VALUES " . "($values);";

    try {
        $database->query($sql);

        $_SESSION['message'] = 'Registro cadastrado com sucesso.';
        $_SESSION['type'] = 'success';

    } catch (Exception $e) {

        $_SESSION['message'] = 'Nao foi possivel realizar a operacao.';
        $_SESSION['type'] = 'danger';
    }

    close_database($database);
}
function countReg($table = null){
    $database = open_database();
    $sql = "SELECT COUNT(*) AS total FROM " . $table;
    $result=mysqli_query($database, $sql);
    $data = mysqli_fetch_assoc($result);
    return $data['total'];
}

function nameLocal($id = null){
    $database = open_database();

    $sql = "SELECT * FROM grupo WHERE cod_filial = " . $id;

    $result=mysqli_query($database, $sql);
    $data = mysqli_fetch_assoc($result);
    $nome = $data['nome'] ." - ". $data['cidade'];
    return $nome;
}

function nameLocalF($id = null){
    $database = open_database();

    $sql = "SELECT * FROM setores WHERE cod_set = " . $id;

    $result=mysqli_query($database, $sql);
    $data = mysqli_fetch_assoc($result);
    return $data['nome'];
}

function nameUser($id = null){
    $database = open_database();

    $sql = "SELECT * FROM funcionarios WHERE cod_func = " . $id;

    $result=mysqli_query($database, $sql);
    $data = mysqli_fetch_assoc($result);
    $nome = $data['nome'] ." ". $data['sobrenome'];
    return $nome;
}

function createPlani(){
        $database = open_database();
        $found = null;
        try {
            $sql = "SELECT  ativos.nome_eqp,
                            ativos.classe,
                            ativos.modelo,
                            ativos.serial_eqp,
                            ativos.n_etiqueta,
                            c.nome AS nome_comodato,
                            grupo.nome AS nome_filial,
                            grupo.cidade AS cidade_filial,
                            setores.nome AS nome_setor,
                            funcionarios.nome AS nome_funcionario,
                            funcionarios.sobrenome AS sobrenome_funcionario,
                            f.nome AS nome_fornecedor,
                            ativos.nota_fiscal,
                            ativos.data_aquisicao,
                            ativos.custo,
                            ativos.vida,
                            ativos.comentario

                    FROM ativos
                    INNER JOIN setores ON ativos.id_setor=setores.cod_set
                    
                    INNER JOIN grupo ON ativos.id_filial=grupo.cod_filial
                    
                    INNER JOIN funcionarios ON ativos.id_funcionario=funcionarios.cod_func
                    
                    INNER JOIN comodatos c on ativos.id_comodato=c.cod_comod
                    
                    INNER JOIN fornecedores f on ativos.id_fornecedor = f.cod_forn";
            $result = $database->query($sql);
            if ($result->num_rows > 0) {
                $found = $result->fetch_all(MYSQLI_ASSOC);
            }
        }
        catch (Exception $e){
            header('location:../validation/index.php'); //Criar página de erro
        }
        return $found;
}

/**======================================
 * FUNÇÕES PARA MANIPULAÇÃO DOS ATIVOS ||
 * ======================================
 */

function update_ativo($table = null, $n_etiqueta = 0, $data = null) {

    $database = open_database();

    $items = null;

    foreach ($data as $key => $value) {
        $items .= trim($key, "'") . "='$value',";
    }

    // remove a ultima virgula
    $items = rtrim($items, ',');

    $sql  = "UPDATE " . $table;
    $sql .= " SET $items";
    $sql .= " WHERE n_etiqueta=" . $n_etiqueta . ";";

    try {
        $database->query($sql);

        $_SESSION['message'] = 'Registro atualizado com sucesso.';
        $_SESSION['type'] = 'success';

    } catch (Exception $e) {

        $_SESSION['message'] = 'Nao foi possivel realizar a operacao.';
        $_SESSION['type'] = 'danger';
    }

    close_database($database);
}

function remove_ativo( $table = null, $n_etiqueta = null ) {

    $database = open_database();
    try {
        if ($n_etiqueta) {
            $sql = "DELETE FROM " . $table . " WHERE n_etiqueta = " . $n_etiqueta;

            if ($result = $database->query($sql)) {
                $_SESSION['message'] = "Registro Removido com Sucesso.";
                $_SESSION['type'] = 'success';
            }
        }
    } catch (Exception $e) {

        $_SESSION['message'] = $e->GetMessage();
        $_SESSION['type'] = 'danger';
    }

    close_database($database);
}

function find_ativo( $table = null, $n_etiqueta = null ) {

    $database = open_database();
    $found = null;

    try {
        if ($n_etiqueta) {
            $sql = "SELECT * FROM " . $table . " WHERE n_etiqueta = " . $n_etiqueta;
            $result = $database->query($sql);

            if ($result->num_rows > 0) {
                $found = $result->fetch_assoc();
            }

        } else {

            $sql = "SELECT * FROM " . $table;
            $result = $database->query($sql);

            if ($result->num_rows > 0) {
                $found = $result->fetch_all(MYSQLI_ASSOC);
            }
        }
    } catch (Exception $e) {
        $_SESSION['message'] = $e->GetMessage();
        $_SESSION['type'] = 'danger';
    }

    close_database($database);
    return $found;
}



/**======================================
 * FUNÇÕES PARA MANIPULAÇÃO DOS COMODATOS ||
 * ======================================
 */

function update_comodato($table = null, $cod_comod = 0, $data = null) {

    $database = open_database();

    $items = null;

    foreach ($data as $key => $value) {
        $items .= trim($key, "'") . "='$value',";
    }

    // remove a ultima virgula
    $items = rtrim($items, ',');

    $sql  = "UPDATE " . $table;
    $sql .= " SET $items";
    $sql .= " WHERE cod_comod=" . $cod_comod . ";";

    try {
        $database->query($sql);

        $_SESSION['message'] = 'Registro atualizado com sucesso.';
        $_SESSION['type'] = 'success';

    } catch (Exception $e) {

        $_SESSION['message'] = 'Nao foi possivel realizar a operacao.';
        $_SESSION['type'] = 'danger';
    }

    close_database($database);
}

function remove_comodato( $table = null, $cod_comod = null ) {

    $database = open_database();
    try {
        if ($cod_comod) {
            $sql = "DELETE FROM " . $table . " WHERE cod_comod = " . $cod_comod;

            if ($result = $database->query($sql)) {
                $_SESSION['message'] = "Registro Removido com Sucesso.";
                $_SESSION['type'] = 'success';
            }
        }
    } catch (Exception $e) {

        $_SESSION['message'] = $e->GetMessage();
        $_SESSION['type'] = 'danger';
    }

    close_database($database);
}

function find_comodato( $table = null, $cod_comod = null ) {

    $database = open_database();
    $found = null;

    try {
        if ($cod_comod) {
            $sql = "SELECT * FROM " . $table . " WHERE cod_comod = " . $cod_comod;
            $result = $database->query($sql);

            if ($result->num_rows > 0) {
                $found = $result->fetch_assoc();
            }

        } else {

            $sql = "SELECT * FROM " . $table;
            $result = $database->query($sql);

            if ($result->num_rows > 0) {
                $found = $result->fetch_all(MYSQLI_ASSOC);
            }
        }
    } catch (Exception $e) {
        $_SESSION['message'] = $e->GetMessage();
        $_SESSION['type'] = 'danger';
    }

    close_database($database);
    return $found;
}

function nameComod($id = null){
    $database = open_database();

    $sql = "SELECT * FROM comodatos WHERE cod_comod = " . $id;

    $result=mysqli_query($database, $sql);
    $data = mysqli_fetch_assoc($result);
    return $data['nome'];
}


/**===========================================
 * FUNÇÕES PARA MANIPULAÇÃO DOS FORNECEDORES ||
 * ===========================================
 */

function update_fornecedor($table = null, $cod_forn = 0, $data = null) {

    $database = open_database();

    $items = null;

    foreach ($data as $key => $value) {
        $items .= trim($key, "'") . "='$value',";
    }

    // remove a ultima virgula
    $items = rtrim($items, ',');

    $sql  = "UPDATE " . $table;
    $sql .= " SET $items";
    $sql .= " WHERE cod_forn=" . $cod_forn . ";";

    try {
        $database->query($sql);

        $_SESSION['message'] = 'Registro atualizado com sucesso.';
        $_SESSION['type'] = 'success';

    } catch (Exception $e) {

        $_SESSION['message'] = 'Nao foi possivel realizar a operacao.';
        $_SESSION['type'] = 'danger';
    }

    close_database($database);
}

function remove_fornecedor( $table = null, $cod_forn = null ) {

    $database = open_database();
    try {
        if ($cod_forn) {
            $sql = "DELETE FROM " . $table . " WHERE cod_forn = " . $cod_forn;

            if ($result = $database->query($sql)) {
                $_SESSION['message'] = "Registro Removido com Sucesso.";
                $_SESSION['type'] = 'success';
            }
        }
    } catch (Exception $e) {

        $_SESSION['message'] = $e->GetMessage();
        $_SESSION['type'] = 'danger';
    }

    close_database($database);
}

function find_fornecedor( $table = null, $cod_forn = null ) {

    $database = open_database();
    $found = null;

    try {
        if ($cod_forn) {
            $sql = "SELECT * FROM " . $table . " WHERE cod_forn = " . $cod_forn;
            $result = $database->query($sql);

            if ($result->num_rows > 0) {
                $found = $result->fetch_assoc();
            }

        } else {

            $sql = "SELECT * FROM " . $table;
            $result = $database->query($sql);

            if ($result->num_rows > 0) {
                $found = $result->fetch_all(MYSQLI_ASSOC);
            }
        }
    } catch (Exception $e) {
        $_SESSION['message'] = $e->GetMessage();
        $_SESSION['type'] = 'danger';
    }

    close_database($database);
    return $found;
}


/**===========================================
 * FUNÇÕES PARA MANIPULAÇÃO DOS FUNCIONARIOS ||
 * ===========================================
 */
function update_funcionario($table = null, $cod_func = 0, $data = null) {

    $database = open_database();

    $items = null;

    foreach ($data as $key => $value) {
        $items .= trim($key, "'") . "='$value',";
    }

    // remove a ultima virgula
    $items = rtrim($items, ',');

    $sql  = "UPDATE " . $table;
    $sql .= " SET $items";
    $sql .= " WHERE cod_func=" . $cod_func . ";";

    try {
        $database->query($sql);

        $_SESSION['message'] = 'Registro atualizado com sucesso.';
        $_SESSION['type'] = 'success';

    } catch (Exception $e) {

        $_SESSION['message'] = 'Nao foi possivel realizar a operacao.';
        $_SESSION['type'] = 'danger';
    }

    close_database($database);
}

function remove_funcionario( $table = null, $cod_func = null ) {

    $database = open_database();
    try {
        if ($cod_func) {
            $sql = "DELETE FROM " . $table . " WHERE cod_func = " . $cod_func;

            if ($result = $database->query($sql)) {
                $_SESSION['message'] = "Registro Removido com Sucesso.";
                $_SESSION['type'] = 'success';
            }
        }
    } catch (Exception $e) {

        $_SESSION['message'] = $e->GetMessage();
        $_SESSION['type'] = 'danger';
    }

    close_database($database);
}

function find_funcionario( $table = null, $cod_func = null ) {

    $database = open_database();
    $found = null;

    try {
        if ($cod_func) {
            $sql = "SELECT * FROM " . $table . " WHERE cod_func = " . $cod_func;
            $result = $database->query($sql);

            if ($result->num_rows > 0) {
                $found = $result->fetch_assoc();
            }

        } else {

            $sql = "SELECT * FROM " . $table;
            $result = $database->query($sql);

            if ($result->num_rows > 0) {
                $found = $result->fetch_all(MYSQLI_ASSOC);
            }
        }
    } catch (Exception $e) {
        $_SESSION['message'] = $e->GetMessage();
        $_SESSION['type'] = 'danger';
    }

    close_database($database);
    return $found;
}


