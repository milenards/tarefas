<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tarefas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col">
                <h1>Controle de tarefas</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h2>Nova tarefa</h2>
            </div>
        </div>
        <form name="nova-tarefa" action="inserir-tarefa.php" method="post">
            <div class="row">
                <div class="col">
                    <input name="tarefa" class="form-control" placeholder="Digite a descrição da nova tarefa">
                </div>
            </div>
            <div class="row pt-3">
                <div class="col">
                    <button type="submit" class="btn btn-success">Salvar</button>
                </div>
            </div>
        </form>
    </main>
</body>

</html>