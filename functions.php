<?php

require_once('config.php');
require_once(DBAPI);

$ativos = null;
$funcionarios = null;
$comodatos = null;
$fornecedores = null;

function totalActive(){
    global $ativos;
    $ativos = countReg('ativos');
}

function totalFunc(){
    global $funcionarios;
    $funcionarios = countReg('funcionarios');
}

function totalComod(){
    global $comodatos;
    $comodatos = countReg('comodatos');
}

function totalForn(){
    global $fornecedores;
    $fornecedores = countReg('fornecedores');
}
