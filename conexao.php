<?php

$servidor = '127.0.0.1';
$banco = 'bd_tarefas';
$usuario = 'root1';
$senha = '';

try{
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);
}catch  (exceptio $e){
    echo "Erro na conexão: $e";
    exit();
}
?>