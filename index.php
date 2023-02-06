<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Tarefas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://unpkg.com/feather-icons"></script>
    <style>
        .fundo {
            background: radial-gradient(50% 123.47% at 50% 50%, #00ff94 0%, #720059 100%),
                linear-gradient(121.28deg, #669600 0%, #ff0000 100%),
                linear-gradient(360deg, #0029ff 0%, #8fff00 100%),
                radial-gradient(100% 164.72% at 100% 100%, #6100ff 0%, #00ff57 100%),
                radial-gradient(100% 148.07% at 0% 0%, #fff500 0%, #51d500 100%);
            background-blend-mode: screen, color-dodge, overlay, difference, normal;
        }

        .fundo-cinza{
            background-color: #f4f6f7;
        }
    </style>
</head>

<body>
    <section class="vh-100 fundo">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card">
                        <div class="card-body p-5">
                            <form class="d-flex justify-content-center align-items-center mb-4" action="inserir-tarefa.php" method="post">
                                <div class="form-outline flex-fill">
                                    <input type="text" id="form2" class="form-control" placeholder="Nova tarefa" name="tarefa">
                                </div>
                                <button type="submit" class="btn btn-info ms-2">ADD</button>
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


                            <ul class="list-group mb-0">
                                <?php
                                include "conexao.php";
                                $sqlBusca = "select * from t_tarefas";
                                $todasAsTarefas = mysqli_query($conexao, $sqlBusca);
                                while ($umaTarefa = mysqli_fetch_assoc($todasAsTarefas)) {
                                ?>
                                    <li class="list-group-item d-flex align-items-center border-0 mb-2 rounded fundo-cinza">
                                        <?php echo $umaTarefa['id']; ?> -
                                        <?php echo $umaTarefa['descricao']; ?>
                                        <a class='btn btn-warning'>Alterar</a>
                                        <a class='btn btn-danger' href="excluir-tarefa.php?id=<?php echo $umaTarefa['id']; ?>">Excluir</a>
                                    </li>
                                <?php
                                }
                                mysqli_close($conexao);
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>