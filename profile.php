<?php
include('auth.php');
include('db.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Your Home Page</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="profile">
<?php
 echo ("Welcome: ".$_SESSION['username']);
?>
<br>
<p><a href="get_dragon.php">Get a new dragon</a></p>
<p><a href="list_dragon.php">Dragons list</a></p>
<b id="logout"><a href="logout.php">Log Out</a></b>
</div>
</body>
</html>