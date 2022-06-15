<!DOCTYPE html>
<html>

<head>
</head>

<body>
		<?php
		include("config.php");
		// Taking all 5 values from the form data(input)
		$firstname = $_REQUEST['firstname'];
		$Lastname = $_REQUEST['Lastname'];
		$username= $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$confirmpassword = $_REQUEST['confirmpassword'];
		$country = $_REQUEST['country'];
		$Telno = $_REQUEST['Telno'];
		$id="";
			//connection
		$sql = "INSERT INTO request VALUES ('$id','$firstname',
			'$Lastname', '$username', '$password', '$confirmpassword', '$country', '$Telno')";
		if ([$password] !== $confirmpassword) {
            echo "<h3>password does not match<h3>";
        }
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

