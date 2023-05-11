<?php
session_start();

include 'config.php';


if(isset($_POST['submit'])){
	$username = $_POST['user'];
	$password = $_POST['pass'];

	$sql = " SELECT * FROM  users where username='$username' and password='$password' ";
	$query = mysqli_query($con,$sql);

	$row = mysqli_num_rows($query);
		if($row == 1){
			echo "login successful";
			$_SESSION['user'] = $username;
			header('location:admin.php');
		}else{
			echo "login failed";
			header('location:index.php');
		}

}


?>