<!DOCTYPE html>
<html>

<head>
</head>

<body>
		<?php
		include("config.php");
		// Taking all 5 values from the form data(input)
		$firstname = $_REQUEST['firstname'];
		$Lastname = $_REQUEST['lastname'];
		$password = $_REQUEST['password'];
		$address = $_REQUEST['address'];
		$city = $_REQUEST['city'];
		$Postalcode = $_REQUEST['Postalcode'];
		$Email = $_REQUEST['Email'];
		$id="";
			//connection
		$sql = "INSERT INTO registration1 VALUES ('$id','$firstname',
			'$Lastname', '$password', '$address', '$city', '$Postalcode', '$Email')";
		
		if(mysqli_query($conn, $sql)){
		echo "<h3>registration successful<h3>";
}
			//echo nl2br("\n$firstname\n $lastname\n "
				//. "$username\n $gender\n $email\n $password\n $number");
	 else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		// Close connection
		mysqli_close($conn);
		?>
</body>

</html>

