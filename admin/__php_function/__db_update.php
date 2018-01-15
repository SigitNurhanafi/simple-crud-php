<?php
function update_data($tableName, $data, $pdoObject)
{
    try {

        // set the PDO error mode to exception
        $pdoObject->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";

        // Prepare statement
        $stmt = $conn->prepare($sql);

        // execute the query
        $stmt->execute();

        // echo a message to say the UPDATE succeeded
        return $stmt->rowCount() . " records UPDATED successfully";
    } catch (PDOException $e) {
        return $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
}
