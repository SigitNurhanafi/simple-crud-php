<?php

session_start();

if (isset($_SESSION['user_id'])) {
    header("Location: /");
}

require 'database.php';

$message = '';

if (!empty($_POST['username']) && !empty($_POST['password'])):
    $pw = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $usr = $_POST['username'] ; // Enter the new user in the database
    $uname ='test admin regis';
        $sql = "INSERT INTO admin (nama_admin, username, password) VALUES (:nama_admin, :username, :password)";
        $stmt = $conn->prepare($sql);

    $stmt->bindParam(':username', $usr);
    $stmt->bindParam(':password', $pw);
    $stmt->bindParam(':nama_admin', $uname);


    var_dump($_POST['password']);
    var_dump($usr);
    if ($stmt->execute()):
        $message = 'Successfully created new user';
    else:
        $message = 'Sorry there must have been an issue creating your account';
    endif;

endif;

?>

<!DOCTYPE html>
<html>
<head>
	<title>Register Below</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
</head>
<body>

	<div class="header">
		<a href="/">Your App Name</a>
	</div>

	<?php if (!empty($message)): ?>
		<p><?= $message ?></p>
	<?php endif; ?>

	<h1>Register</h1>
	<span>or <a href="login.php">login here</a></span>

	<form action="register.php" method="POST">

		<input type="text" placeholder="Enter your username" name="username">
		<input type="password" placeholder="and password" name="password">
		<input type="password" placeholder="confirm password" name="confirm_password">
		<input type="submit">

	</form>

</body>
</html>
