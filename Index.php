<html lang="pt-br" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula17</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <header class="d-flex justify-content-center py-3">
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="index.php" class="nav-link active" aria-current="page">Lista de
                        Alunos</a></li>
                <li class="nav-item"><a href="CadastrarAluno.html" class="nav-link">Cadastrar</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Editar</a></li>
            </ul>
        </header>
    </div>

    <h1 class="d-flex justify-content-center pb-3">Lista de alunos</h1>

    <div class="d-flex justify-content-center">
        <div class="d-flex flex-column">
            <?php

            include ("DB_Connection/ConectaBanco.php");

            // Conectar ao Banco de dados
            $conn = mysqli_connect($servername, $usuario, $senha, $base) or die(mysqli_error($conn));

            // Consultar os registros da tabela "Alunos"
            $query = "SELECT * FROM alunos";
            $query = mysqli_query($conn, $query) or die(mysqli_error($conn));
            $temRegistro = false;
            while ($row = mysqli_fetch_array($query)) {
                print ("<div class= mx-2>" . $row["nome"] . " -- " . $row["idade"] .
                    " --<a href='DeletarAluno.php?id=" . $row["id"] . "'> Remover </a></div><br>");
                $temRegistro = true;
            }

            if ($temRegistro == false) {
                echo "Não tem mais registros";
            }

            mysqli_close($conn);
            ?>
        </div>
    </div>

</html>