<?php
require_once('../config.php');
require_once(DBAPI);

$linhas = null;
$linha = null;

function createPlan(){
    global $linhas;
    $linhas = createPlani();
}

