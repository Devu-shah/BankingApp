<?php

include 'dbconnect.php';

$withdrawername = $_GET['usrname'];
$withdrawerpassword = $_GET['psw'];
$withdrawamt = $_GET['withdrawamt'];
$btn1 = htmlentities(mysqli_real_escape_string($conn, $_GET['paybycash']));
$btn2 = $_GET['paybycheque'];

$sql = "SELECT * FROM `users` WHERE name='$withdrawername';";
$result = mysqli_query($conn, $sql);

if ($result) {
	if (mysqli_num_rows($result) == 0) {
		$message = "Username ".$withdrawername." is not Registered !";
		echo '<script language="javascript">';
		echo 'alert("'.$message.'");';
		echo 'window.location = "http://localhost/SchoolManagementSys/withdraw.php?usrname='.$withdrawername.'&psw'.$withdrawerpassword.'";';
		echo '</script>';
		exit();
	}
	elseif (!isset($btn2) or !isset($btn1)){
		$message = "Please Select a Method for the transaction";
		echo '<script language="javascript">';
		echo 'alert("'.$message.'");';
		echo 'window.location = "http://localhost/SchoolManagementSys/userloggedin.php?username='.$withdrawername.'";';
		echo '</script>';
		exit();
	}
	else{
		$sql = "SELECT * FROM `users` WHERE password = '$withdrawerpassword';";
		$result = mysqli_query($conn, $sql);

		if ($result) {
			if (mysqli_num_rows($result) == 0) {
				$message = "Password: ".$withdrawerpassword." is not Registered !";
				echo '<script language="javascript">';
				echo 'alert("'.$message.'");';
				echo 'window.location = "http://localhost/SchoolManagementSys/withdraw.php?usrname='.$withdrawername.'&psw'.$withdrawerpassword.'";';
				echo '</script>';
				exit();
			}
			else{
				// Doing the Maths here !
				$res = "";
				$sql = "SELECT * FROM `users` WHERE name='$withdrawername';";
				$result = mysqli_query($conn, $sql);
				// Fetching the row of Balance from the Database of a User
				while ($row = mysqli_fetch_assoc($result)) {
					$res = $res . $row['balance'];
				}

				$transaction = $res + $withdrawamt;
				$sql = "UPDATE `users` SET `balance` = '$transaction' WHERE `users`.`name` = '$withdrawername';";
				$result = mysqli_query($conn, $sql);
				if ($result) {
					if (isset($_GET['paybycheque'])) {
						$sql = "INSERT INTO `transactions` ( `username`,`amount`, `donebycash`, `depositedorwitdrawn`) VALUES ( '".$withdrawername."','".$withdrawamt."', 'no', 'deposited');";
						$result = mysqli_query($conn, $sql);

						if ($result) {
							$message = "Deposit of INR: ".$withdrawamt." is successfully Done !";
							echo '<script language="javascript">';
							echo 'alert("'.$message.'");';
							echo 'window.location = "http://localhost/SchoolManagementSys/userloggedin.php?username='.$withdrawername.'";';
							echo '</script>';
						}
						else{
							echo "Transaction Not possible as of Error: ".mysqli_error($conn);
						}
					}
					elseif (isset($_GET['paybycash'])) {
						$sql = "INSERT INTO `transactions` ( `username`,`amount`, `donebycash`, `depositedorwitdrawn`) VALUES ( '".$withdrawername."','".$withdrawamt."', 'yes', 'deposited');";
						$result = mysqli_query($conn, $sql);

						if ($result) {
							$message = "Deposit of INR: ".$withdrawamt." is successfully Done !";
							echo '<script language="javascript">';
							echo 'alert("'.$message.'");';
							echo 'window.location = "http://localhost/SchoolManagementSys/userloggedin.php?username='.$withdrawername.'";';
							echo '</script>';
						}
						else{
							echo "Transaction Not possible as of Error: ".mysqli_error($conn);
						}
					}
				}
				else{
					echo "Error: ".mysqli_error($conn);
				}
			}
		}
	}
}

else{
	echo "Error: ".mysqli_error($conn);
}
?>