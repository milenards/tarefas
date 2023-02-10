<?php
$respon = $_POST['respon'];

include "conexao.php";

$sqlGravar = "insert into t_tarefas(responsavel) values('$respon')";

mysqli_query($conexao, $sqlGravar);

mysqli_close($conexao);

// header("location: index.php?msg=inclusao");
?>