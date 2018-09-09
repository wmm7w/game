<?php
session_start();
if (isset($_SESSION['username'])){
	header('Location: profile.php');
}
?>
<html>
<head>
	<title>Index</title>
</head>
<body>
	<a href="registration.php">Registration</a>
	<a href="login.php">Log into</a>
</body>
</html>