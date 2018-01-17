<?php
function update_data($tableName, $data, $primaryKey, $id, $pdoObject)
{
    try {
        $pdoObject->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $rowsSQL = array();

        $toBind = array();

        $columnNames = array_keys($data[0]);

        foreach ($data as $arrayIndex => $row) {
            $params = array();
            foreach ($row as $columnName => $columnValue) {
                $param = ":" . $columnName. $arrayIndex;
                $queryColName =  $columnName."= :" . $columnName . $arrayIndex;
                $queryColNames[] = $queryColName;
                $params[] = $param;
                $toBind[$param] = $columnValue;
            }
            $rowsSQL[] = implode(", ", $queryColNames);
            $querySQL[] = implode(", ", $queryColNames);
        }


        $sql = "UPDATE ".$tableName." SET " . implode(", ", $queryColNames) . " WHERE ". $primaryKey ." = :".$primaryKey;
        //
        $pdoStatement = $pdoObject->prepare($sql);
        //
        $pdoStatement->bindValue($primaryKey, $id);
        foreach ($toBind as $param => $val) {
            $pdoStatement->bindValue($param, $val);
            echo $param . ", ".$val."<br>";
        }

        print '<br>'.$sql;

        return $pdoStatement->execute();
    } catch (PDOException $e) {
        return $sql . "<br>" . $e->getMessage();
    }

    $pdoObject = null;
}
