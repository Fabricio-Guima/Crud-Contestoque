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
            <div class="row align-items-end">
                <div class="col-md-6">
                    <!--ADICIONAR PRODUTOS-->
                    <div class="card text-center">
                        <div class="card-header">
                            ContEstoque
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Adicionar Produtos</h5>
                            <p class="card-text">Opção para adicionar produtos no estoque.</p>
                            <a href="adicionar_produtos.php" class="btn btn-primary" role="button">Adicionar</a>
                        </div>
                    </div>

                </div>
                <!--LISTAR PRODUTOS-->
                <div class="col-md-6 mt-5">
                    <div class="card text-center">
                        <div class="card-header">
                            ContEstoque
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Lista de Produtos</h5>
                            <p class="card-text">Opção para visualizar, editar e remover produtos no estoque.</p>
                            <a href="listar_produtos.php" class="btn btn-primary">Listar</a>
                        </div>
                    </div>
                </div>
                <!--CATEGORIA-->
                <div class="col-md-6 mt-5">
                    <div class="card text-center">
                        <div class="card-header">
                            ContEstoque
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Adicionar Categorias</h5>
                            <p class="card-text">Opção para adicionar uma nova categoria para os produtos no estoque.</p>
                            <a href="adicionar_categorias.php" class="btn btn-primary">Adicionar</a>
                        </div>
                    </div>
                </div>
                <!--LISTAR CATEGORIAS-->
                <div class="col-md-6 mt-5">
                    <div class="card text-center">
                        <div class="card-header">
                            ContEstoque
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Lista de Categorias</h5>
                            <p class="card-text">Visualizar,editar e excluir categorias</p>
                            <a href="listar_categorias.php" class="btn btn-primary">Adicionar</a>
                        </div>
                    </div>
                </div>

                <!--FORNECEDOR-->
                <div class="col-md-6 mt-5">
                    <div class="card text-center">
                        <div class="card-header">
                            ContEstoque
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Adicionar Fornecedores</h5>
                            <p class="card-text">Opção para adicionar um novo fornecedor para os produtos no estoque.</p>
                            <a href="adicionar_fornecedores.php" class="btn btn-primary">Adicionar</a>
                        </div>
                    </div>
                </div>
                <!--LISTAR FORNECEDORES-->
                <div class="col-md-6 mt-5">
                    <div class="card text-center">
                        <div class="card-header">
                            ContEstoque
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Lista de Fornecedores</h5>
                            <p class="card-text">Opção para visualizar, editar e remover fornecedores no estoque.</p>
                            <a href="listar_fornecedores.php" class="btn btn-primary">Listar</a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <!--<footer class="fixar-rodape">
        <div>
            <p>Todos os direitos reservados ©</p>
        </div>
    </footer>-->






    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
    </script>
</body>

</html>