<html>
<head>
	<title>Registration</title>
</head>
<body>
	<form action="" method="POST">
		<input type="text" name="username" placeholder="Username" />
		<input type="password" name="password" placeholder="Password">
		<input type="submit" value="Register"/>
	</form>
<?php
require_once('db.php');

if (isset($_POST['username'])){
	$username = $_POST['username'];
	$password = $_POST['password'];

    $query = "INSERT into users (username, password) VALUES ('$username', '$password')";

	mysqli_query($connect, $query);
	mysqli_close($connect);
}
?>
</body>
</html>