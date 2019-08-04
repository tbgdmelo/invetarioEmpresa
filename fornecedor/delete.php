<?php
require_once('functions.php');

if (isset($_GET['cod_forn'])){
    delete($_GET['cod_forn']);
} else {
    die("ERRO: Fornecedor não definido.");
}
?>