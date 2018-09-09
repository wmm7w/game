<html>
<head>
	<title>Get a new dragons</title>
</head>
<body>
	<form action="" method="POST">
		<input type="text" name="name" placeholder="Dragon name" />	
		<p>Select gender</p>
			<select name="gender">
				<option value="Male">Male</option>
				<option value="Female">Female</option>
			</select>
		<p>Select element</p>
			<select name="element">
				<option value="Fire">Fire</option>
				<option value="Water">Water</option>
				<option value="Death">Death</option>
				<option value="Ground">Ground</option>
				<option value="Air">Air</option>
				<option value="Metal">Metal</option>
				<option value="Crystal">Crystal</option>
			</select>
		<input type="submit" value="Create" />
		</form>


<?php
require_once('auth.php');
require_once('db.php');
if (isset($_POST['name'])){
	$username = $_SESSION['username'];
	$name = $_POST['name'];
	$gender = $_POST['gender'];
	$element = $_POST['element'];
	
	$query = "INSERT INTO dragons (username, name, gender, element) VALUES ('$username', '$name', '$gender', '$element')";
			mysqli_query($connect, $query);
			mysqli_close($connect);
			echo ("Success");
}
?>
	</body>
</html>