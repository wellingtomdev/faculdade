<?php

$id = $_GET["id"];

$queryString = "UPDATE habito SET status = 'V' WHERE id=" . $id;
$result = query($queryString, $connection);

if (!$result) {
   defaultLogError($queryString, $connection);
}

redirectHome();
