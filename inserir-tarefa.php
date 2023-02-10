<?php
$tarefa = $_POST['tarefa'];
$responsavel = $_POST['responsavel'];
$status = $_POST['status'];

include "conexao.php";

$sqlGravar = "insert into t_tarefas(descricao,responsavel, status) values('$tarefa','$responsavel', '$status')";

mysqli_query($conexao, $sqlGravar);

mysqli_close($conexao);

header("location: index.php?msg=inclusao");
?>