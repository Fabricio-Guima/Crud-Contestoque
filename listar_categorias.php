<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="wnomeprodutoth=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listar Produtos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">

</head>

<body>
    <header id="menu-nav">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="#">ContEstoque</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sair</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <div id="principal" class="container">

        <h2>Lista de Categorias</h2>
        <div class="botaoDireita mb-2">
            <a href="index.php" class="btn btn-primary" role="button">Voltar</a>
        </div>

        <table class="table table-striped table-hover table-md">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOME CATEGORIA</th>
                    <th scope="col">AÇÕES</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include_once "conexao.php";

                $sql = "SELECT * FROM categoria";
                $buscar = mysqli_query($conexao, $sql);

                while ($array = mysqli_fetch_array($buscar)) {
                    $id = $array['id_categoria'];
                    $categoria = $array['nome_categoria'];

                    ?>
                    <tr>
                        <td><?= $id ?></td>
                        <td><?= $categoria ?></td>
                        <td><a href="editar_categorias.php?id=<?= $id ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a> <a href="excluir_categorias.php?id=<?= $id ?>" class="btn btn-danger btn-sm" role="button"><i class="fas fa-trash"></i></a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>





    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
    </script>
</body>

</html>