<html>
<head>
	<title>Log into</title>
</head>
<body>
	<form action="" method="POST">
		<input type="text" name="username" placeholder="Username" />
		<input type="password" name="password" placeholder="Password" />
		<input type="submit" value="Register"/>
	</form>
<?php
require('db.php');
session_start();

if (isset($_POST['username'])){
	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = "SELECT * FROM users WHERE username='$username' and password='$password'";
	$result = mysqli_query($connect, $query);
	$rows = mysqli_num_rows($result);
		if ($rows==1){
			$_SESSION['username'] = $username;
			header("Location: profile.php");
		}else{
			echo ("Username is incorrect");

		}
		}
?>
</body>
</html>