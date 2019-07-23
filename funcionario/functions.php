<?php

require_once('../config.php');
require_once(DBAPI);

$funcionarios = null;
$funcionario = null;

$setores = null;
$setor = null;

function index() {
    global $funcionarios;
    $funcionarios = find_all('funcionarios');
}

function listSetores() {
    global $setores;
    $setores = find_all('setores');
}

function add() {

    if (!empty($_POST['funcionario'])) {

        $funcionario = $_POST['funcionario'];
        save('funcionarios', $funcionario);
        header('location: index.php');
    }
}

function edit() {
    if (isset($_GET['cod_func'])) {

        $cod_func = $_GET['cod_func'];

        if (isset($_POST['funcionario'])) {

            $funcionario = $_POST['funcionario'];

            update_funcionario('funcionarios', $cod_func, $funcionario);
            header('location: index.php');
        } else {

            global $funcionario;
            $funcionario = find_funcionario('funcionarios', $cod_func);
        }
    } else {
        header('location: index.php');
    }
}

function delete($cod_func = null) {

    global $funcionario;
    $funcionario = remove_funcionario('funcionarios', $cod_func);

    header('location: index.php');
}
