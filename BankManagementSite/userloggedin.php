<?php

	include 'dbconnect.php';
	$USERNAME = htmlentities(mysqli_real_escape_string($conn, $_GET['username']));
	$sql = "SELECT * FROM `users` WHERE name = '$USERNAME';";

	$res = "";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0)
	{
		while ($row = mysqli_fetch_assoc($result)){
			$res = $res . "<div class = 'mainshow'>";
			$res = $res . "<div class='top-head'><h2> Hello ! ";
			$res = $res . $row['name'];
			$res = $res . "</h2><p>Your Account Number is: <b>". $row['accno'] . "</b><br>Your balance is INR: 
			<b>" . $row['balance'];
			$res = $res . "</b></p></div>";
		}
		$sql = "UPDATE `users` SET `online` = 'TRUE' WHERE `users`.`name` = '$USERNAME';";
		$result = mysqli_query($conn, $sql);
	}

	echo $res;
?>

<!DOCTYPE html>
<html>
<head>
	<title>User Log in: <?php echo $USERNAME?></title>
	<!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style type="text/css">
		body
			{
				background-color: black;
				background-repeat: no-repeat;
				background-size: cover;
				background-repeat: no-repeat;
				overflow-x: hidden;
		}
		.terminator{
			margin-left: 185vh;
			margin-top: 1vh;
		}
		.terminator button{
			border-top-right-radius: 2vh;
			border-top-left-radius: 2vh;
			border-bottom-right-radius: 2vh;
			border-bottom-left-radius: 2vh;
			background-color: black;
			color: red;
			font-weight: bold;
		}

		.terminator button:hover{
			background-color: red;
			color: black;
		}

		.mainshow .top-head h2{
			color: red;
			background-color: lime;
			text-align: center;
			margin-top: 20vh;
			margin-left: 50vh;
			margin-right: 50vh;
			border-top-right-radius: 3vh;
			border-top-left-radius: 3vh;
		}
		.mainshow .top-head p{
			color: darkgreen;
			background-color: lightblue;
			text-align: center;
			margin-left: 50vh;
			margin-right: 50vh;
			border-bottom-right-radius: 3vh;
			border-bottom-left-radius: 3vh;
			text-decoration: 3vh;
		}
		.btns{
			background-color: red;
			color: darkblue;
			font-weight: bold;
			padding-top: 1vh;
			padding-bottom: 0.5vh;
			text-align: center;
			margin-left: 50vh;
			margin-right: 50vh;
			border-top-right-radius: 3vh;
			border-top-left-radius: 3vh;
			border-bottom-right-radius: 3vh;
			border-bottom-left-radius: 3vh;
		}
		.btns h4{
			background-color: red;
			color: darkblue;
			font-weight: bold;
			padding-bottom: .5vh;
			text-align: center;
			border-top-right-radius: 3vh;
			border-top-left-radius: 3vh;
		}
		.btns button{
			background-color: orange;
			font-family: Algerian;
			font-weight:  bolder;
			color: black;
			border-top-right-radius: 3vh;
			border-top-left-radius: 3vh;
			border-bottom-right-radius: 3vh;
			border-bottom-left-radius: 3vh; 
		}
    </style>
    <link rel="icon" href="https://img.icons8.com/emoji/48/000000/bank-emoji.png">
</head>		
	<body bgcolor="black">
		<div class="btns">
			<form action="withdraw.php" method="get">
				<h4>What Will you like to do today?? </h4>
				<button class="btn-btn-primay" name="withdraw">
					Withdraw Money
				</button>
			</form>
			<form action="deposit.php" method="get">
				<br>
				<button  class="btn-btn-primay" name="deposit">
					Deposit Money
				</button>
			</form>
			<form action="editdetails.php" method="get">
				<br>
				<button class="btn-btn-primay" name="editdetails">
					Edit your Details
				</button>
			</form>
		</div>
		<div class="terminator">
			<form action = "terminate.php" method="get">
				<button class="btn-btn-primay" name="terminate">
						Terminate All Sessions !!
				</button>
			</form>
		</div>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>
</html>