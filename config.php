<?php

/** O nome do banco de dados*/
define('DB_NAME', 'inventario');

/** Usuário do banco de dados*/
define('DB_USER', 'root');

/** Senha do banco de dados*/
define('DB_PASSWORD', '');

/** nome do host*/
define('DB_HOST', 'localhost');

/** caminho absoluto para a pasta do sistema **/
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** caminho no server para o sistema **/
if ( !defined('BASEURL') )
    define('BASEURL', '/inv/');

/** caminho do arquivo com query**/
if ( !defined('DBAPI') )
    define('DBAPI', ABSPATH . 'inc/database.php');

