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
		$uphone = $_POST["phone_num"];
		$conn = new mysqli($servername, $username, $password, $dbname);
		
		if($conn->connect_error){
			die("连接失败:".$conn->connect_error);
		}
		$sql = "INSERT INTO user (username,password,phone)
		VALUES ('$uname','$upwd','$uphone')";
		
		if ($conn->query($sql) === TRUE) {
			echo "注册成功";
		}else{
			echo "Error:".$sql."<br>".$conn->error;
		}
		$conn->close();
	?>
</body>
</html>
