<?php

include 'dbconnect.php';


$username__ = $_POST['newusrname'];
$password__ = $_POST['newpsw'];
$newpin__ = $_POST['newpin'];
$phoneno__ = $_POST['cntno'];

$sql = "SELECT * FROM `users`;";
$result = mysqli_query($conn, $sql);

$username_ = "";
$res1 = "";
$res = "";
$res2 = "";
$res3 = "";

while ($row = mysqli_fetch_assoc($result)) {
	$oldusername = $res . $row['name'];
	$res1 = $res1 . $row['password'];
	$res2 = $res2 . $row['contactno'];
	$res3 = $res3. $row['pin'];
}

$sql = "SELECT * FROM `users` WHERE name='$username_';";
$result = mysqli_query($conn, $sql);

if ($result) {
	$sql = "UPDATE `users` SET `name` = '$username__', `password` = '$password__', `pin` = '$newpin__', `contactno` = '$phoneno__' WHERE `users`.`name` = '$oldusername';";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		$message = "The Entered Details are Correct! Taking to Edit details Page !";
		echo '<script language="javascript">';
		echo 'alert("'.$message.'");';
		echo 'window.location = "http://localhost/SchoolManagementSys/userloggedin.php?username='.$username__.';"';
	}
	else{
		echo "Error: ".mysqli_error($conn);
	}
}
else{
	echo "Error: ".mysqli_error($conn);
}


?>
