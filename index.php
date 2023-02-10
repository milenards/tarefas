<?php include_once "header.php"; ?>
<?php include_once "mensagens.php"; ?>
<?php include_once "notificacao-inclusao.php"; ?>
<?php include_once "notificacao-excluir.php"; ?>



<!--inicio conteudo -->


<form class="d-flex justify-content-center align-items-center mb-4" action="inserir-tarefa.php" method="post">
    <div class="form-outline flex-fill">
        <input type="text" id="form2" class="form-control" placeholder="Nova tarefa" name="tarefa">
    </div>
    <div class="form-outline flex-fill">
        <input type="text" id="form2" class="form-control" placeholder="responsavel" name="responsavel">
    </div>
    <button type="submit" class="btn btn-primary ms-2 text-light"><i class="bi bi-save-fill"></i> ADD</button>
</form>

<ul class="nav justify-content-center">
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#">Todas</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Em execução</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Concluídas<i class="bi bi-0-circle"></i>
        </a>
    </li>
</ul>


<table class="table">
    <?php
    include "conexao.php";
    $sqlBusca = "select * from t_tarefas";
    $todasAsTarefas = mysqli_query($conexao, $sqlBusca);
    while ($umaTarefa = mysqli_fetch_assoc($todasAsTarefas)) {
    ?>
        
            <tr>
                <td><?php echo $umaTarefa['id']; ?></td>
                <td><?php echo $umaTarefa['descricao']; ?></td>
                <td><?php echo $umaTarefa['responsavel']; ?></td>     
                <td><span>
                    <a class='btn btn-warning' href="alterar-tarefa.php?id=<?php echo $umaTarefa['id']; ?>"><i class="bi bi-pencil-fill"></i></a>
                    <a class='btn btn-danger' href="excluir-tarefa.php?id=<?php echo $umaTarefa['id']; ?>"><i class="bi bi-trash3-fill"></i></a>
                    <a class="responsavel" href="alterar-tarefa.php?responsavel=<?php echo $umaTarefa['responsavel'];?>"></a>
                </span>
                </td>
            </tr>
        
    <?php
    }
    mysqli_close($conexao);
    ?>
</table>
<!--- FIM Conteudo --->
<?php include_once "footer.php"; ?>