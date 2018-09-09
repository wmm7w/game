<?php
include('auth.php');
include('db.php');
	$username = $_SESSION['username'];
	$query = "SELECT * from dragons where username='$username'";
	$result = mysqli_query($connect, $query);

if (mysqli_num_rows($result) > 0) {
	echo "Your dragons:";
	echo "</br>";
    while($row = mysqli_fetch_assoc($result)) {
    	  $id = $row['id'];

    echo $row['name'];

        echo ("</br>");

    }
    
} else {
    echo "You have no dragons";
}

?>
<html>
<head>
	<title>Dragons</title>      
</head>
<body>
</body>
</html>