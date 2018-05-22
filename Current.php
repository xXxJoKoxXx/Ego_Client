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
		<div data-role="page" id="Current">
			<div data-role="header" data-position="fixed" data-tap-toggle="false" data-theme="c">
				<h2>购物车</h2>
				<a href="#" class="ui-btn ui-btn-c" data-rel="back"><i class="fa fa-arrow-left" style="font-size:20px 20px;color:#828282;"></i></a>
			</div>
			<?php
				$uname = $_GET['uname'];
				$shopName = $_GET['shopName'];						
				$servername = "localhost";
				$username = "root";
				$password = "123456";
				$dbname = "users";
				$total = 0;
				
				$conn = new mysqli($servername,$username,$password,$dbname);
				$sql = "SELECT name,count,price FROM `orderform` WHERE username='$uname'";
				mysqli_set_charset($conn, "utf8");
				$obj = mysqli_query($conn,$sql);
				$torry = array();
				while($result = mysqli_fetch_assoc($obj))
				{
				    $torry[] = $result;
				}
//				$sum = $v['count']*$v['price'];						  
			?>
			<div data-role="main" class="ui-content">
				<ul data-role="listview">
					<!--<li data-role="list-divider" style="padding-left: 40%;padding-top: 5%;"><?php echo $shopName?></li>-->
					<p style="text-align: center;"><?php echo $shopName?></p>
					<li data-role="list-divider">
						<h2>商品</h2>
						<p class="num">数量</p>
						<p class="sum">小计</p>
					</li>
					<?php 
						foreach($torry as $v){
							$sum = $v['count']*$v['price'];
					?>					
					<li data-icon="false" data-inset="true">
						<a href="#">
							<h2><?php echo $v['name']?></h2>
							<p class="num">
								<!--<i class="fa fa-minus-square" style="font-size:20px 20px;color:#828282;" onclick="minus('<?php echo $v['count']?>')"></i>-->
								x<?php echo $v['count']?>
								<!--<i class="fa fa-plus-square" style="font-size:20px 20px;color:#828282;"></i>-->
							</p>
							<p class="sum">￥<?php echo $sum?></p>
						</a>
					</li>
					<?php
							$total +=$sum;
						}	
					?>
					<li data-role="list-divider"></li>
				</ul>
			</div>
			<div data-role="footer" data-position="fixed" data-tap-toggle="false" data-theme="c">
				<div class="ui-grid-b">
					<div class="ui-block-a"><p>总计:￥<?php echo $total?></p></div>
					<div class="ui-block-b"></div>
					<div class="ui-block-c" style="margin-top: 1%;"><a href="Finish.php?uname=<?php echo $uname ?>+&sum=<?php echo $total?>" class="ui-btn ui-btn-c" data-transition="none">确认支付</a></div>        		
            	</div>
			</div>
		</div>	
		<script src="js/jquery.js"></script>
		<script src="js/jquery.mobile-1.4.5.js"></script>
		<script src="js/jquery.ssd-vertical-navigation.js"></script>
		<script src="js/app.js"></script>
	</body>
</html>