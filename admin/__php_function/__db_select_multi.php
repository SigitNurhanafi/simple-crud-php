<?php

function select_multi($tableName, $pdoObject)
{
    $sql = "SELECT * FROM ".$tableName;

    $stmt = $pdoObject->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll();
}
