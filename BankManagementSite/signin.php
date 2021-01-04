<?php

include 'dbconnect.php';

$USERNAME =  $_POST['username'];
$PASSWORD =  $_POST['password'];
$PHONE_NUMBER = htmlentities(mysqli_real_escape_string($conn, $_POST['contactno']));
$PIN = htmlentities(mysqli_real_escape_string($conn, $_POST['pin']));

$sql = "SELECT * FROM `users` WHERE name = '$USERNAME' AND password = $PASSWORD";
$result = mysqli_query($conn, $sql);

if($result){
	if (mysqli_num_rows($result) == 0) {
	$message = "Please put correct name. This name: ".$USERNAME." is not there in our database!";
	echo '<script language="javascript">';
	echo 'alert("'.$message.'");';
	echo 'window.location = "http://localhost/SchoolManagementSys/";';
	echo '</script>';	
	}
	else{
		$sql = "SELECT * FROM `users` WHERE pin = '$PIN' AND contactno = $PHONE_NUMBER";
		$result = mysqli_query($conn, $sql);
		if ($result) {
			if (mysqli_num_rows($result) == 0) {
				$message = "Please put correct pin and phone number. This pin: ".$PIN." or phone number: ".$PHONE_NUMBER." is not there in our database!";
				echo '<script language="javascript">';
				echo 'alert("'.$message.'");';
				echo 'window.location = "http://localhost/SchoolManagementSys/";';
				echo '</script>';
				exit();	
			}

			elseif (mysqli_num_rows($result) > 0) {
				$message = "You are logged in successfully. Redirecting to the user page !!";
				echo '<script language="javascript">';
				echo 'alert("'.$message.'");';
				echo 'window.location = "http://localhost/SchoolManagementSys/userloggedin.php?username=' . $USERNAME. '";';
				echo '</script>';
			}
		}
	}
}
else{
	echo "Error: ".mysqli_error($conn);
}
// INSERT INTO `users` (`sno`, `name`, `password`, `pin`, `contactno`, `balance`, `stime`) VALUES ('0', 'devansh', '2305', '2305', '0', '0', current_timestamp());
?>