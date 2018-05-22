<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
</head>
<body>
	<?php 
	$servername = "localhost";
	$username = "root";
	$password = "123456";
	$dbname = "users";
	$uname = $_POST["username"];
	$upwd = $_POST["password"];
	// $uname = "joko";
	// $upwd = "123";
	$conn = new mysqli($servername,$username,$password,$dbname);
	if($conn->connect_error){
		die("连接失败:".$conn->connect_error);
	}
	// mysqli_set_charset($conn, "utf8");
	$sql = "SELECT username, password FROM `user` WHERE `username` = '{$uname}' LIMIT 1";
	$obj = mysqli_query($conn,$sql);
	if (!empty($obj)) {
		$result = mysqli_fetch_assoc($obj);

		if (is_array($result)&& !empty($result)) {
			if ($result["password"] == $upwd){
				header("location:Main.php?username=$uname");
				exit;					
			}else{
				header("location:Ego/Login.html");
				// echo "<script>location.href='Ego/Login.html?text=".'密码错误'.";</script>";
			}
		}else{
			header("location:Ego/Login.html");
		}
	}
	$conn->close();
	 ?>
</body>
</html>