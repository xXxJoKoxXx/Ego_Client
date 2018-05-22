<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width">
		<meta content=”yes” name=”apple-mobile-web-app-capable” />
		<meta content=”black” name=”apple-mobile-web-app-status-bar-style” />
		<meta content=”telephone=no” name=”format-detection” />
		<link rel="stylesheet" href="css/jquery.mobile-1.4.5.css">
		<link rel="stylesheet" href="css/jquery.mobile.icons-1.4.5.css">
		<link rel="stylesheet" href="css/jquery.mobile.structure-1.4.5.css">
		<link rel="stylesheet" href="css/jquery.mobile.theme-1.4.5.css">
		<link rel="stylesheet" href="css/app.css">
		<title></title>
	</head>
	<body>
		<?php
			$sum = $_GET["sum"];
			$uname =$_GET["uname"]; 
			$servername = "localhost";
			$username = "root";
			$password = "123456";
			$dbname = "users";
			$conn = new mysqli($servername,$username,$password,$dbname);		
			$sql = "SELECT count(*) as total FROM orderform WHERE username='$uname'";
			$obj = mysqli_query($conn,$sql);
			$row = mysqli_fetch_array($obj);
			$num = $row['total'];
			$sql = "SELECT * FROM orderform WHERE username='$uname' LIMIT 1";
			mysqli_set_charset($conn, "utf8");
			$obj = mysqli_query($conn,$sql);
			$row = mysqli_fetch_assoc($obj);
		    $name = $row["name"];
		    $shopName = $row["shopName"];
		    //imooc_mall数据库
		    $servername = "localhost";
			$username = "root";
			$password = "123456";
			$dbname = "imooc_mall";
			$conn = new mysqli($servername,$username,$password,$dbname);
			$sql = "SELECT shopIcon FROM im_user WHERE username='$shopName'";
			mysqli_set_charset($conn, "utf8");
			$obj = mysqli_query($conn,$sql);
			$row = mysqli_fetch_assoc($obj);
			$shopIcon = $row["shopIcon"];
			//users数据库 
			$servername = "localhost";
			$username = "root";
			$password = "123456";
			$dbname = "users";
			$conn = new mysqli($servername,$username,$password,$dbname);
			$sql = "INSERT INTO `history_form` (shopName,shopIcon,name,count,username,sum) VALUES('$shopName','$shopIcon','$name','$num','$uname','$sum')";
			mysqli_set_charset($conn, "utf8");
			mysqli_query($conn,$sql);
			$sql = "INSERT INTO imooc_mall.orderform(shopName,name,price,count,username) SELECT shopName,name,price,count,username from users.orderform";
			mysqli_set_charset($conn, "utf8");
			mysqli_query($conn,$sql);
			//imooc_mall数据库 
			$servername = "localhost";
			$username = "root";
			$password = "123456";
			$dbname = "imooc_mall";
			$conn = new mysqli($servername,$username,$password,$dbname);
			$sql = "INSERT INTO `user_order` (shopName,username) VALUES('$shopName','$uname')";
			mysqli_set_charset($conn, "utf8");
			mysqli_query($conn,$sql);
			//users数据库 
			$servername = "localhost";
			$username = "root";
			$password = "123456";
			$dbname = "users";
			$conn = new mysqli($servername,$username,$password,$dbname);
			$sql = "DELETE FROM orderform WHERE shopName = '$shopName' AND username='$uname'";
			mysqli_set_charset($conn, "utf8");
			mysqli_query($conn,$sql);
		?>
		<div data-role="page" id="Finish">
			<div data-role="header" data-theme="c">
				<h2>支付成功</h2>
				<a href="Main.php?username=<?php echo $uname?>" class="ui-btn ui-btn-c"><i class="fa fa-home" style="font-size:20px 20px;color:#828282;"></i></a>				
			</div>
			<div data-role="main" class="ui-content">
				<div style="text-align: center;text-shadow: 5px 5px 5px #22AADD;">
					<p>支付成功！！</p>
					<p>慢慢等吧您嘞</p>
				</div>				
			</div>	
		</div>		
		<script src="js/jquery.js"></script>
		<script src="js/jquery.mobile-1.4.5.js"></script>
		<script src="js/jquery.ssd-vertical-navigation.js"></script>
		<script src="js/app.js"></script>
	</body>
</html>