<?php

function query($queryString, $connection)
{
    $result = $connection->query($queryString);
    $connection->close();
    return $result;
}
