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
    return find($table);
}
/**======================================
 * FUNÇÕES PARA MANIPULAÇÃO DOS ATIVOS ||
 * ======================================
 */

/**
 *  Pesquisa um Registro do Ativo pelo nº da etiqueta
 */
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

/**
 *  Atualiza um ativo pelo nº da etiqueta
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

/**
 *  Remove uma linha de uma tabela pelo nº da etiqueta
 */
function remove_ativo( $table = null, $n_etiqueta = null ) {

    $database = open_database();
    try {
        if ($n_etiqueta) {
            $sql = "DELETE FROM " . $table . " WHERE n_etiqueta = " . $n_etiqueta;

            $result = $database->query($sql);

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

