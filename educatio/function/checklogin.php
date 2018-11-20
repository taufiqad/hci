<?php  
session_start();
include ('connection.php');
$uname = $_POST['uname'];
$pass = $_POST['password'];

echo $uname;
echo $pass;

	$sql = "SELECT * from user where username = '$uname' and password = '$pass'";
	$query = mysqli_query($conn,$sql);
	$check = mysqli_num_rows($query);
	$data = mysqli_fetch_array($query);
		if ($check>=1){
				$_SESSION['idlogin']=$uname;
				echo "<script>alert('berhasil login'); location.href='../home.php'</script>";
				//header('location: ../home.php');
			
		}else {
			echo "<script>alert('login gagal');location.href='../index.php'</script>";
			//header('location: ../index.php');
		}
 	

?>