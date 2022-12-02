<?php

$nome = $_GET["nome"];

$queryString = "INSERT INTO habito (nome, status) VALUES ('" . $nome . "', 'A')";
$result = query($queryString, $connection);

if (!$result) {
    defaultLogError($queryString, $connection);
}

redirectHome();
