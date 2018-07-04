<?php
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
	$nama = $_GET['Nama'];
	$alamat = $_GET['Alamat'];
	$no = $_GET['NoTelp'];
	if(!isset($_GET['id'])){
		$sql = "INSERT INTO telepon (nama, alamat, no) VALUES ('$nama', '$alamat', '$no')";

		if (mysqli_query($conn, $sql)) {
	    	echo "New record created successfully";
		} else {
	 	   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}	
	} else {
		$id = $_GET['id'];
		$sql = "UPDATE telepon SET nama='$nama', alamat='$alamat', no='$no' WHERE id='$id'";
		if (mysqli_query($conn, $sql)) {
	    	echo "Record updated successfully";
		} else {
	    	echo "Error updating record: " . mysqli_error($conn);
		}
	}
	mysqli_close($conn);
	header("location:listkontak.php");
?>