<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style>
	.jumbotron {
		background-color: #f4511e; /* Orange */
    	color: #ffffff;
    	padding-left: 50px;
    	padding-right: 50px;
	}
	</style>
	<title>Login atau Register</title>
</head>
<body>
	<div>
	<form class="jumbotron text-center">
		<h1>Login</h1>
		<p>Silahkan masuk untuk mengakses fiturnya</p>
	</form>
	</div>
	<form name="form1" id="form1" class="text-center" action="home.php" method="POST">
		<input type="text" placeholder="Username" name="UID" required>
		<input type="password" placeholder="Password" name="PSWD" required>
		<input type="submit" value="Login">
		<br></br>
		<p>Belum punya akun? Silahkan mendaftar <a href="Register.php">disini</a></p>
	</form>
</body>
</html>

<?php 
	$username="hanif";
	$password="12345";
	if (isset($_POST['Login'])) {
		if ($_POST['UID']==$username && $_POST['PSWD']==$password) {
			header('Location:home.php?nama'.$username);
		}else {
			echo "login gagal";
		}
	}
?>