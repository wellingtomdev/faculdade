<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Lista de hábitos</title>
</head>

<body>
    <div class="container pt-4">
        <h1>Lista de hábitos</h1>
        <p>Cadastre aqui os hábitos que você tem que
            vencer para melhorar sua vida!</p>
        <?php
        // Obtém a lista de hábitos do
        // banco de dados MySQL
        $servidor = "localhost";
        $usuario = "root";
        $senha = "";
        $bancodedados = "listadehabito";
        // Cria uma conexão com o banco de dados
        $conexao = new mysqli(
            $servidor,
            $usuario,
            $senha,
            $bancodedados
        );
        // Verifica a conexão
        if ($conexao->connect_error) {
            die("Falha na conexão: " .
                $conexao->connect_error);
        }
        // Executa a query da variável $sql
        $sql = " SELECT id " .
            " , nome " .
            " FROM habito " .
            " WHERE status = 'A'";
        $resultado = $conexao->query($sql);
        // Verifica se a query retornou registros
        if ($resultado->num_rows > 0) {
        ?>
            <br />
            <table class="table table-striped pb-5">
                <tbody>
                    <?php
                    // Looping pelos registros retornados
                    while ($registro = $resultado->fetch_assoc()) {
                    ?>
                        <tr>
                            <td><?php echo $registro["nome"]; ?></td>
                            <td><a href="vencerhabito.php?id=<?php echo $registro["id"]; ?>">Vencer</a></td>
                            <td><a href="desistirhabito.php?id=<?php echo $registro["id"]; ?>">Desistir</a></td>
                        </tr>
                    <?php
                    } // fim do looping
                    ?>
                </tbody>
            </table>
            <p>Continue mudando sua vida!</p>
            <p>Cadastre mais hábitos!</p>
        <?php
        } else {
        ?>
            <div class="alert alert-secondary" role="alert">
                <p>Você não possui hábitos cadastrados!</p>
                <p>Começe já a <a href="novohabito.php" class="alert-link">mudar</a> sua vida!</p>
            </div>

        <?php
        }
        // fim do if
        // Fecha a conexão com o MySQL
        $conexao->close();
        ?>


        <p class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="novohabito.php" class="btn btn-primary ">Cadastrar novo hábito</a>
        </p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>