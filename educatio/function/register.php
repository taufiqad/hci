<?php 
	include("connection.php");
	$username = $_POST["username2"];
	$password = $_POST["password2"];
	$email = $_POST["email2"];
	$bd = $_POST["birth"];

	$sql= "INSERT INTO user VALUES ('$username','$password','$email','$bd')";
	$query = mysqli_query($conn,$sql);

	if ($query) {
		echo "<script>alert('registrasi berhasil')</script>";
    	echo "<script>location.href='../index.php'</script>";
    }else {
    	echo "<script>alert('registrasi gagal,username telah terdaftar')</script>";
    	echo "<script>location.href='../index.php'</script>";
}
?>
