<?php
include_once "conexao.php";
$categoria = $_POST['categoria'];

$sql = "INSERT INTO `categoria`(`nome_categoria`) VALUES ('$categoria')";
$inserir = mysqli_query($conexao, $sql);
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

    <div class="container">
        <div class="cadastroSucesso">
            <div class="card text-center">
                <div class="card-header">
                    ContEstoque
                </div>
                <div class="card-body">
                    <h5 class="card-title">Categoria adicionada com sucesso</h5>
                    <p class="card-text">Para mais cadastros, clique em voltar</p>
                    <a href="adicionar_categorias.php" class="btn btn-primary" role="buton">Voltar</a>
                </div>
            </div>
        </div>
    </div>

    <footer class="fixar-rodape">
        <div>
            <p>Todos os direitos reservados ©</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
    </script>
</body>

</html>