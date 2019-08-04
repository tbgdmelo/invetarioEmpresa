<?php
require_once('functions.php');

if (isset($_GET['n_etiqueta'])){
    delete($_GET['n_etiqueta']);
} else {
    die("ERRO: Ativo não definido.");
}
?>