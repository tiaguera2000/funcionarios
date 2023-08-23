<?php

require_once('../Db/Mysql.php');
$mysql = new Mysql();

$funcionario = $mysql->getFuncionario(1);
echo $funcionario->nome;
?>