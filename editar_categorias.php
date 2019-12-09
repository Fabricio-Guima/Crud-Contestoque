<?php
include_once 'conexao.php';

$id = $_GET['id'];
$sql = "SELECT * FROM categoria WHERE id_categoria = $id";
$buscar = mysqli_query($conexao, $sql);

while ($array = mysqli_fetch_array($buscar)) {
    $id = $array['id_categoria'];
    $nomecategoria = $array['nome_categoria'];
}


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ContEstoque</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

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

    <section id="principal">

        <div class="container">

            <h2>Editar Categorias</h2>
            <div class="botaoDireita voltar">
                <a href="index.php" class="btn btn-primary" role="button">Voltar</a>
            </div>

            <form method="POST" action="atualizar_categorias.php">
                <div class="form-group">
                    <label>Número do Produto</label>
                    <input type="number" name="id_categoria" class="form-control" value="<?= $id ?>" disabled>
                    <input type="number" name="id" class="form-control d-none" value="<?= $id ?>">
                </div>

                <div class="form-group">
                    <label>Nome da Categoria</label>
                    <input type="text" name="nome_categoria" class="form-control" value="<?= $nomecategoria ?>">
                </div>

                <div class=" botaoDireita">
                    <button type="submit" class="btn btn-primary">Atualizar</button>
                </div>

            </form>
        </div>

    </section>

    <footer class="fixar-rodape">
        <div>
            <p>Todos os direitos reservados ©</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"> </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"> </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"> </script>
</body>

</html>