<?php
	session_start();

	//hapus seluruh session
	session_destroy();

	header('location: index.php');
?>
