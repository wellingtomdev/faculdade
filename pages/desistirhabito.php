<?php

$id = $_GET["id"];

$queryString = "DELETE FROM habito WHERE id=" . $id;
$result = query($queryString, $connection);

if (!$result) {
    defaultLogError($queryString, $connection);
}

redirectHome();