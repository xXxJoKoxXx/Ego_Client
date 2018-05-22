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
		$name = $_GET['name'];
		$price = $_GET['price'];
		$uname = $_GET['uname'];
		$shopName = $_GET['sname'];	
		$conn = new mysqli($servername,$username,$password,$dbname);
		$sql = "SELECT count FROM `orderform` WHERE name='$name' and username='$uname' and shopName='$shopName'";
		mysqli_set_charset($conn, "utf8");
		$obj = mysqli_query($conn,$sql);
		if(mysqli_num_rows($obj) > 0){
			$row = mysqli_fetch_assoc($obj);
		    $count = $row["count"];
			$count++;
	    	mysqli_query($conn,"UPDATE `orderform` SET `count`='$count' WHERE name='$name' and username='$uname' and shopName='$shopName'");		
		}else{
			mysqli_query($conn,"INSERT INTO `orderform` (shopName,name,price,count,username) VALUES('$shopName','$name','$price',1,'$uname')");	
		}
		mysqli_close($conn);	
	?>
</body>
</html>