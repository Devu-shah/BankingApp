<?php

// $number_of_tries = 5;
include 'dbconnect.php';

$username_ = $_GET['usrname'];
$password_ = $_GET['psw'];

$res = "";
$res1 = "";

$sql = "SELECT * FROM `users` WHERE name='$username_';";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
	$res = $res . $row['name'];
	$res1 = $res1 . $row['password'];
}
if ($result) {
	if ($res != $username_) {
		$message = "Please Check the Entered Username as ".$username_." is not Registered !";
		echo '<script language="javascript">';
		echo 'alert("'.$message.'");';
		echo 'window.location = "http://localhost/SchoolManagementSys/editdetails.php?usrname='.$username_.'&psw'.$password_.'";';
		echo '</script>';
		// $number_of_tries = // $number_of_tries - 1;
		exit();
	}

	elseif ($res1 != $password_) {
		$message = "Please Check your password as  ".$password_." is invalid!";
		echo '<script language="javascript">';
		echo 'alert("'.$message.'");';
		echo 'window.location = "http://localhost/SchoolManagementSys/editdetails.php?usrname='.$username_.'&psw'.$password_.'";';
		echo '</script>';
		// $number_of_tries = // $number_of_tries - 1;
		exit();
	}

	else{
		$message = "The Entered Details are Correct! Taking to Edit details Page !";
		echo '<script language="javascript">';
		echo 'alert("'.$message.'");';
		echo 'window.location = "http://localhost/SchoolManagementSys/editdets.php?usrname='.$username_.'&psw='.$password_.'";';
		echo '</script>';
		exit();
	}
}
else{
	echo "Error: ".mysqli_error($conn);
}

exit();
?>