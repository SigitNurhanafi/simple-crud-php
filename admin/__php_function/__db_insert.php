<?php
//http://thisinterestsme.com/pdo-prepared-multi-inserts/
function insert_data($tableName, $data, $pdoObject)
{
    $rowsSQL = array();

    $toBind = array();

    $columnNames = array_keys($data[0]);

    foreach ($data as $arrayIndex => $row) {
        $params = array();
        foreach ($row as $columnName => $columnValue) {
            $param = ":" . $columnName . $arrayIndex;
            $params[] = $param;
            $toBind[$param] = $columnValue;
        }
        $rowsSQL[] = "(" . implode(", ", $params) . ")";
    }

    $sql = "INSERT INTO `$tableName` (" . implode(", ", $columnNames) . ") VALUES " . implode(", ", $rowsSQL);

    $pdoStatement = $pdoObject->prepare($sql);

    foreach ($toBind as $param => $val) {
        $pdoStatement->bindValue($param, $val);
    }

    return $pdoStatement->execute();
}
