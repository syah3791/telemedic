<?php 
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "daftarkontak";

		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $dbname);

		// Check connection
		if (!$conn) {
    		die("Connection failed: " . mysqli_connect_error());
		}
		$sql = "SELECT * FROM telepon WHERE id='$id'";
		$result = mysqli_fetch_assoc(mysqli_query($conn, $sql));
	}
?>
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
			background-color: #ffa500; /* Orange */
			color: #000000;
    		padding-left: 50px;
    		padding-right: 50px;
		}
		</style>
		<title>Register</title>
	</head>

	<body>
	<div class="jumbotron text-center">
		<h1>Daftar Member</h1>
		<form action="prosestambah.php" method="GET">
		<p>Nama</p><input type="text" value="<?php if(isset($result)) echo $result['nama'] ?>" name="Nama" required>
		<p>Alamat</p><input type="text" value="<?php if(isset($result)) echo $result['alamat'] ?>" name="Alamat" required>
		<p>E-mail</p><input type="text" value="<?php if(isset($result)) echo $result['email'] ?>" name="Email" required>
		<p>No. Telp</p><input type="text" value="<?php if(isset($result)) echo $result['no'] ?>" name="NoTelp" required>
		<input type="hidden" value="<?php echo (isset($id) ? $id : 0); ?>" name="id">
		<br></br>
		<p><input type="button" class="btn btn-danger" value="Daftar" name="submit">
		<p>Sudah punya akun? Silahkan login <a href="Login.php">disini</a></p>
		</form>
	</div>
		
	</body>
</html>