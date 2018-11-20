<?php  
session_start();
include ('../connection.php');
$uname = $_POST['uname'];
$pass = $_POST['password'];

echo $uname;
echo $pass;

	$sql = "SELECT * from user where username = '$uname' and password = '$pass'";
	$query = mysqli_query($conn,$sql);
	$check = mysqli_num_rows($query);
	$data = mysqli_fetch_array($query);
		if ($check>=1){
			if ($data['level']=="user") {
				$_SESSION['idlogin']=$uname;
				$_SESSION['level']="user";
				echo "<script>alert('berhasil login')</script>";
				header('location: ../user/index.php');
			} 
			else if ($data['level']=="admin"){
				$_SESSION['idlogin']=$uname;
				$_SESSION['level']="admin";
				echo "<script>alert('berhasil login')</script>";
				header('location: ../datamekanik.php');
		}
		}else {
			echo "<script>alert('login gagal')</script>";
			header('location: ../login.php');
		}
 	

?>