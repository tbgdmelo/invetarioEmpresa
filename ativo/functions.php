<?php

require_once('../config.php');
require_once(DBAPI);

$ativos = null;
$ativo = null;
$comodatos = null;
$users = null;
$setores = null;
$locais = null;
$fornecedores = null;

function listFornecedores(){
    global $fornecedores;
    $fornecedores = find_all('fornecedores');
}

function listLocais(){
    global $locais;
    $locais = find_all('local');
}

function listSetores() {
    global $setores;
    $setores = find_all('setores');
}

function listUsers() {
    global $users;
    $users = find_all('funcionarios');
}

function listComodatos() {
    global $comodatos;
    $comodatos = find_all('comodatos');
}
/**
 *  Listagem de Equipamento
 */
function index() {
    global $ativos;
    $ativos = find_all('ativos');
}

/**
 *  Cadastro de Equipamento
 */
function add() {

    if (!empty($_POST['ativo'])) {

        $ativo = $_POST['ativo'];
        save('ativos', $ativo);
        header('location: index.php');
    }
}

/**
 *	Atualizacao/Edicao do Ativo
 */
function edit() {
    if (isset($_GET['n_etiqueta'])) {

        $n_etiqueta = $_GET['n_etiqueta'];

        if (isset($_POST['ativo'])) {

            $ativo = $_POST['ativo'];

            update_ativo('ativos', $n_etiqueta, $ativo);
            header('location: index.php');
        } else {

            global $ativo;
            $ativo = find_ativo('ativos', $n_etiqueta);
        }
    } else {
        header('location: index.php');
    }
}

/**
 *  Exclusão de um ATIVO
 */
function delete($n_etiqueta = null) {

    global $ativo;
    $ativo = remove_eqp('ativos', $n_etiqueta);

    header('location: index.php');
}
