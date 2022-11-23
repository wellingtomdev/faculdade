<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "listadehabito";

$connection = new mysqli($host, $user, $password, $database);

if ($connection->connect_error) {
    die("Falha na conexão: " . $connection->connect_error);
}

$id = $_GET["id"];

$queryString = "UPDATE habito SET status = 'V' WHERE id=" . $id;
$result = $connection->query($queryString);
$connection->close();

if (!$result) {
    die("Erro: " . $queryString . "<br>" . $connection->error);
}

header("Location: index.php");
