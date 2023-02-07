<?php include_once "header.php" ; ?>
<?php 
$id = $_GET['id'];

include_once "conexao.php";

$sqlBusca = "select * from t_tarefas where id = $id";

$todasTarefas = mysqli_query($conexao, $sqlBusca);

while($umaTarefa = mysqli_fetch_assoc($todasTarefas)){
    $descricao = $umaTarefa['descricao'];
}
echo "$id - $descricao";
?>
<form action="confirmar-alteracao.php" method="post">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <input name="descricao" value="<?php echo $descricao; ?>">
    <button type="submit">Salvar</button>
</form>
<?php include_once "footer.php" ; ?>