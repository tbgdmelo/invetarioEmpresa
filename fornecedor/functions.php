<?php

require_once('../config.php');
require_once(DBAPI);

$fornecedores = null;
$fornecedor = null;

function index() {
    global $fornecedores;
    $fornecedores = find_all('fornecedores');
}

function add() {

    if (!empty($_POST['fornecedor'])) {

        $fornecedor = $_POST['fornecedor'];
        save('fornecedores', $fornecedor);
        header('location: index.php');
    }
}

function edit() {
    if (isset($_GET['cod_forn'])) {

        $cod_forn = $_GET['cod_forn'];

        if (isset($_POST['fornecedor'])) {

            $fornecedor = $_POST['fornecedor'];

            update_fornecedor('fornecedores', $cod_forn, $fornecedor);
            header('location: index.php');
        } else {

            global $fornecedor;
            $fornecedor = find_fornecedor('fornecedores', $cod_forn);
        }
    } else {
        header('location: index.php');
    }
}

function delete($cod_forn = null) {

    global $fornecedor;
    $fornecedor = remove_fornecedor('fonecedores', $cod_forn);

    header('location: index.php');
}
