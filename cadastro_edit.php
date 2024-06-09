<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alteração de cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <?php

    include "conexao.php";

    $id = $_GET['id'] ?? '';
    $sql = "SELECT * FROM pessoas WHERE cod_pessoa = $id";

    $dados = mysqli_query($conn, $sql);

    $linha = mysqli_fetch_assoc($dados);
    ?>

    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Cadastro</h1>
                <form action="edit_script.php" method="post">
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome completo</label>
                        <input type="text" class="form-control" name="nome" value="<?php echo $linha['nome']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="nome" class="form-label">Endereço</label>
                        <input type="text" class="form-control" name="endereco" value="<?php echo $linha['endereco']; ?>">
                    </div>
                    <div class=" mb-3">
                        <label for="nome" class="form-label">Telefone</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="telefone" value="<?php echo $linha['telefone']; ?>">
                    </div>
                    <div class=" mb-3">
                        <label for="nome" class="form-label">E-mail</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" name="email" value="<?php echo $linha['email']; ?>">
                    </div>
                    <div class=" mb-3">
                        <label for="nome" class="form-label">Data de Nascimento</label>
                        <input type="date" class="form-control" id="exampleInputEmail1" name="data_nascimento" value="<?php echo $linha['data_nascimento']; ?>">
                    </div>
                    <div class=" mb-3">
                        <input type="submit" class="btn btn-success" value="Salvar Alterações">
                        <input type="hidden" name="id" value="<?php echo $linha['cod_pessoa']; ?>">
                        <a href="pesquisar.php" class="btn btn-dark">Pesquisar</a>
                        <a href="index.php" class="btn btn-dark">Home</a>
                    </div>
                </form>

            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>