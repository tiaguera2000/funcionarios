<?php

require_once('./Db/Mysql.php');

if(isset($_POST['cadastrar'])){

    $mysql = new Mysql();

    $usuario = (object) [
        'nome' => $_POST['nome'],
        'salario' => $_POST['salario'],
        'funcao' => $_POST['funcao'],
        'email' => $_POST['email'],
        'data_cadastro' => date('Y-m-d')
    ];
    $resultado = $mysql->gravarFuncionario($usuario);
}
?>
<form action="" method="post">
    <h3>Cadastro de funcionarios</h3>
    <label for="">Nome</label>
    <input name="nome" type="text">
    <label for="">Salario</label>
    <input name="salario" type="number">
    <label for="">Função</label>
    <input name="funcao" type="text">
    <label for="">Email corporativo</label>
    <input name="email" type="email">
    <button type="submit" name="cadastrar">Cadastrar</button>
</form>
