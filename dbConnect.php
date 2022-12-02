<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "listadehabito";

$connection = new mysqli($host, $user, $password, $database);

if ($connection->connect_error) {
    die("Falha na conexão: " . $connection->connect_error);
}
