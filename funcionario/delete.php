<?php
require_once('functions.php');

if (isset($_GET['cod_func'])){
    delete($_GET['cod_func']);
} else {
    die("ERRO: Usuário não definido.");
}
?>