<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "listadehabito";

$connection = new mysqli($host, $user, $password, $database);

if ($connection->connect_error) {
    die("Falha na conexão: " . $connection->connect_error);
}

$queryString = "SELECT id, nome FROM habito WHERE status = 'A'";
$result = $connection->query($queryString);
$connection->close();

$rows = $result->fetch_all(MYSQLI_ASSOC);
$rowsLength = count($rows);
$containsRows = $rowsLength > 0;
?>

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
        <p>Cadastre aqui os hábitos que você tem que vencer para melhorar sua vida!</p>
        <?php
        if ($containsRows) {
        ?>
            <br />
            <table class="table align-middle table-striped pb-5">
                <tbody>
                    <?php
                    for ($arrayIndex = 0; $arrayIndex < $rowsLength; $arrayIndex++) {
                        $props = $rows[$arrayIndex];
                        $id = $props["id"];
                        $nome = $props["nome"];
                    ?>
                        <tr>
                            <th scope="row"  style="width: 5%; text-align: center;">
                                <?= $arrayIndex ?>
                            </th>
                            <td>
                                <?= $nome ?>
                            </td>
                            <td style="width: 10%;">
                                <a class="btn btn-outline-secondary" href="desistirhabito.php?id=<?= $id ?>">
                                    Desistir
                                </a>
                            </td>
                            <td style="width: 10%;">
                                <a class="btn btn-outline-success" href="vencerhabito.php?id=<?= $id ?>">
                                    Vencer
                                </a>
                            </td>
                        </tr>
                    <?php
                    }
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
        ?>
        <p class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="novohabito.php" class="btn btn-primary ">Cadastrar novo hábito</a>
        </p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>