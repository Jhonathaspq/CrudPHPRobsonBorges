<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Cadastro</h1>
                <form action="cadastro-script.php" method="post">
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome completo</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="nome" required>
                    </div>
                    <div class="mb-3">
                        <label for="nome" class="form-label">Endereço</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="endereco" required>
                    </div>
                    <div class="mb-3">
                        <label for="nome" class="form-label">Telefone</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="telefone" required>
                    </div>
                    <div class="mb-3">
                        <label for="nome" class="form-label">E-mail</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="nome" class="form-label">Data de Nascimento</label>
                        <input type="date" class="form-control" id="exampleInputEmail1" name="data_nascimento" required>
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="btn btn-success" value="Cadastrar">
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