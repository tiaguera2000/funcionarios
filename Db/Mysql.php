<?php

class Mysql{

    protected $conn;
    public function __construct()
    {
        $this->conn = new PDO("mysql:dbname=funcionario;host=localhost", "root", "");
    }
    public function gravarFuncionario($usuario){

        $stmt = $this->conn
        ->prepare("INSERT INTO funcionario (nome, email, salario, funcao, data_cadastro) VALUES (?,?,?,?,?)");
        
        $stmt->execute([$usuario->nome, $usuario->email, $usuario->salario, $usuario->funcao, $usuario->data_cadastro]);
        $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
    }
    public function getFuncionario(int $id){

        $stmt = $this->conn->prepare("SELECT * FROM funcionario where id = ?");
        $stmt->execute([$id]);
        $funcionario = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return (object) $funcionario[0];
    }
}

?>