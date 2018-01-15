<?php
function delete_data($($tableName, $data, $pdoObject)
 {
   try {
       // set the PDO error mode to exception
       $pdoObject->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

       // sql to delete a record
       $sql = "DELETE FROM MyGuests WHERE id=3";

       // use exec() because no results are returned
       $conn->exec($sql);
       return "Record deleted successfully";
   } catch (PDOException $e) {
       return $sql . "<br>" . $e->getMessage();
   }

   $conn = null;

 }
