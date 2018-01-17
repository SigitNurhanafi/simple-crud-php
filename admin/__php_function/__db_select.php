<?php
function select_singel($tableName, $primaryKey, $id, $pdoObject)
{
    try {
        $pdoObject->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT * FROM `$tableName` WHERE ".$primaryKey." = :".$primaryKey;
        $stmt = $pdoObject->prepare($sql);
        $stmt->bindParam($primaryKey, $id);


        $stmt->execute();
        return $stmt->fetchObject();
        // return $stmt->rowCount() . " records DELETE successfully";
    } catch (PDOException $e) {
        return $sql . "<br>" . $e->getMessage();
        die();
    }
}
