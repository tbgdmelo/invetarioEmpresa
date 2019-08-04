<?php
require_once('functions.php');

if (isset($_GET['cod_comod'])){
    delete($_GET['cod_comod']);
} else {
    die("ERRO: Comodato não definido.");
}
?>