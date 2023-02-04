<?php 
$tarefa = $_POST['tarefa'];

echo $tarefa;
echo "<br>";
echo "tarefa cadastrada com sucesso!";

//conexão
$servidor = '127.0.0.1';
$banco = 'bd_tarefas';
$usuario = 'root';
$senha = '';

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

mysqli_query($conexao, $sqlGravar);


mysqli_close($conexao);


?>