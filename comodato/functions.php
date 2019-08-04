<?php

require_once('../config.php');
require_once(DBAPI);

$comodatos = null;
$comodato = null;

/**
 *  Listagem de Comodatos
 */
function index() {
    global $comodatos;
    $comodatos = find_all('comodatos');
}

/**
 *  Cadastro do  Comodato
 */
function add() {

    if (!empty($_POST['comodato'])) {

        $comodato = $_POST['comodato'];
        save('comodatos', $comodato);
        header('location: index.php');
    }
}

/**
 *	Atualizacao/Edicao do Comodato
 */
function edit() {
    if (isset($_GET['cod_comod'])) {

        $cod_comod = $_GET['cod_comod'];

        if (isset($_POST['comodato'])) {

            $comodato = $_POST['comodato'];

            update_comodato('comodatos', $cod_comod, $comodato);
            header('location: index.php');
        } else {

            global $comodato;
            $comodato = find_comodato('comodatos', $cod_comod);
        }
    } else {
        header('location: index.php');
    }
}

/**
 *  Exclusão de um comodato
 */
function delete($cod_comod = null) {

    global $comodato;
    $comodato = remove_comodato('comodatos', $cod_comod);

    header('location: index.php');
}
