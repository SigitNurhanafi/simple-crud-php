<?php
function delete_data($tableName, $primaryKey, $id, $pdoObject)
{
    try {
        $pdoObject->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "DELETE FROM `$tableName` WHERE ".$primaryKey." = :".$primaryKey;
        $stmt = $pdoObject->prepare($sql);
        $stmt->bindParam($primaryKey, $id, PDO::PARAM_INT);

        $stmt->fetchObject();
        $stmt->execute();
        header('Location: '.__base_url.'admin/agenda');
        // return $stmt->rowCount() . " records DELETE successfully";
    } catch (PDOException $e) {
        return $sql . "<br>" . $e->getMessage();
        die();
    }
}
