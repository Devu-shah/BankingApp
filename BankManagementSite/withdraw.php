<!DOCTYPE html>
<html>
<head>
	<title>Withdraw Money | ABC Bank</title>
	<link rel="icon" href="https://img.icons8.com/emoji/48/000000/bank-emoji.png">
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<style type="text/css">
		body{
			background-color: black;
		}
		.top-header{
			text-align:  center;
			margin-top: 3vh;
			background-color: orange;
			margin-left: 50vh;
			margin-right: 50vh;
			margin-bottom: 2vh;
		}

		.top-header .form-contorl h3{
			color: red;
			padding-top: 5vh;
			padding-bottom: 2vh;
		}
		.top-header .form-contorl h2{
			color: lime;
			background-color: darkblue;
			padding-top: 3vh;
			padding-bottom: 2vh;
		}
		.top-header .form-contorl input[type=text], input[type=password]{
			margin-top: 1vh;
			margin-bottom: 2vh;
			text-align: center;
			width: 50%;
		}
		.top-header .form-contorl input[type=text]:hover, input[type=password]:hover{
			margin-top: 1vh;
			margin-bottom: 2vh;
			text-align: center;
			width: 50%;
		}
		.top-header .form-contorl button{
			font-size: 19px;
			font-weight: bold;
			background: #00cb82;
			border: none;
			min-width: 200px;
			margin-bottom: 2vh; 
		}

		.top-header .form-contorl button:hover{
			background: #00cb82 !important;
			outline: none;
			color: darkblue;
		}

		.top-header .check-boxes h5{
			color: darkblue;
			font-weight: bold;
			font-style: italic;
			font-size: 3vh;
			border-top-right-radius: 2vh;
			border-top-left-radius: 2vh; 
		}
	</style>
</head>
<body>
	<div class="top-header">
		<form action="withdrawmoney.php" method="GET">
			<div class="form-contorl">
				<h2>Withdraw Money</h2>
				<h3>Enter your Username: </h3>
				<input type="text" class='form-inputs' name='usrname' placeholder="Username" autocomplete='off' required><br>
			</div>
			<div class="form-contorl">
				<h3>Enter your password: </h3>
				<input type="password" class='form-inputs' name='psw' placeholder="Password" autocomplete='off' required>
			</div>
			<div class="form-contorl">
				<h3>Enter the Amount to Be Withdrawn: </h3>
				<input type="text" class='form-inputs' name='withdrawamt' placeholder="Amount to be withdrawn" autocomplete='off' required>
			</div>
			<div class="check-boxes">
				<h5><input type="checkbox" name="paybycheque"> Cheque</h5>
				<h5><input type="checkbox" name="paybycash"> Cash</h5>
			</div>
			<div class="form-contorl">
				<button class="btn-btn-primary">
					Withdraw Amount !
				</button>
			</div>
		</form>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>