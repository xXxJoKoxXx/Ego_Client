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
		<style>
			.CircleDiv{   
				width: 50px;   
				height: 50px;   
				padding:2px;   
				background: #ececec;   
				border-radius:50%;
				box-shadow: 0px 0px 1px rgba(0,0,0,0.4);   
				-moz-border-radius: 50%;
				-webkit-border-radius: 50%;		
				}
			.CircleImg{
				width:50px; 
				height:50px; 
				line-height: 0;		/* remove line-height */     
				display: inline-block;	/* circle wraps image */   
				border-radius: 50%;	/* relative value */   
				-moz-border-radius: 50%;   
				-webkit-border-radius: 50%;   
				transition: linear 0.25s;}
			.StoreName{
				padding-top: 5%;
			}
			.Storeimage{
				margin-top:2%;
			}
			#contentLeft {
			  z-index: 10;
			  width: 85%;
			  height: 100%;
			  position: fixed;
			  top: 0;
			  left: 0;
			  overflow-y:scroll;
	/*		  background-color: #283c51;*/
			}
			#contentRight {
			  padding: 0rem 2rem;
			  margin-left: 88%;
			  overflow: hidden;
			  /*font-size:x-small;*/
			}
			#contentRight a{
				color: #828282;
				text-decoration: none;
				/*white-space:nowrap;
				text-align: center;
				margin: 2% auto;*/
				/*display:block;
				margin-top: 20%;*/
			}
			#tpopup{
				overflow: hidden;
				overflow-y: scroll;
			}	
		</style>
	</head>
	<body>
		<?php 
			$uname = $_GET['uname'];
			$shopName = $_GET['shopName'];
			$shopIcon = $_GET["shopIcon"];							
			$servername = "localhost";
			$username = "root";
			$password = "123456";
			$dbname = "imooc_mall";
			$conn = new mysqli($servername,$username,$password,$dbname);
		?>
		<div data-role="page" id="Store">
			<div data-role="header" data-position="fixed" data-tap-toggle="false" data-theme="c">
				<h1><?php echo $shopName ?></h1>
				<a href="#" class="ui-btn ui-btn-c" data-rel="back"><i class="fa fa-arrow-left" style="font-size:20px 20px;color:#828282;"></i></a>
				<a href="#" class="ui-btn ui-btn-c" onclick="like()"><i id="like" class="fa fa-heart-o" style="font-size:20px 20px;color:#828282;"></i></a>
			</div>
			<div data-role="main" class="ui-content">				
				<ul data-role="listview">
					<!--<li data-icon="false">
						<a href="#">
			          	<img src="<?php echo $shopIcon ?>" class="Storeimage"/>
			          	<h2 class="StoreName"><?php echo $shopName ?></h2>
			        	</a>
					</li>-->
                    	<li data-role="list-divider" id="snacks">零食</li>
					<?php						
						$sql = "SELECT name,price,pic FROM `im_goods` WHERE type = '1' and username='$shopName'";
						mysqli_set_charset($conn, "utf8");
						$obj = mysqli_query($conn,$sql);
						$goods = array();
						while($result = mysqli_fetch_assoc($obj))
						{
						    $goods[] = $result;
						}
					?>
					<?php foreach($goods as $v):?>
					<li data-icon="plus">
						<a href="#">
			          	<img src="<?php echo $v['pic']?>" />
			          	<h2><?php echo $v['name']?></h2>
			          	<p>￥<?php echo $v['price']?></p>
			        	</a>
			        	<a href="#" style="border-left:none;" onclick="add('<?php echo $shopName?>','<?php echo $v['name']?>','<?php echo $v['price']?>','<?php echo $uname?>')"></a>		        	
			        </li>
			       <?php endforeach;?>
					<li data-role="list-divider" id="drink">饮料</li>
					<?php						
						$sql = "SELECT name,price,pic FROM `im_goods` WHERE type = '2' and username='$shopName'";
						mysqli_set_charset($conn, "utf8");
						$obj = mysqli_query($conn,$sql);
						$goods = array();
						while($result = mysqli_fetch_assoc($obj))
						{
						    $goods[] = $result;
						}
					?>
					<?php foreach($goods as $v):?>
					<li data-icon="plus">
						<a href="#">
			          	<img src="<?php echo $v['pic']?>" />
			          	<h2><?php echo $v['name']?></h2>
			          	<p>￥<?php echo $v['price']?></p>
			        	</a>
			        	<a href="#" style="border-left:none;" onclick="add('<?php echo $shopName?>','<?php echo $v['name']?>','<?php echo $v['price']?>','<?php echo $uname?>')"></a>		        	
			        </li>
			       <?php endforeach;?>
					<li data-role="list-divider" id="daily">日用</li>
					<?php						
						$sql = "SELECT name,price,pic FROM `im_goods` WHERE type = '3' and username='$shopName'";
						mysqli_set_charset($conn, "utf8");
						$obj = mysqli_query($conn,$sql);
						$goods = array();
						while($result = mysqli_fetch_assoc($obj))
						{
						    $goods[] = $result;
						}
					?>
					<?php foreach($goods as $v):?>
					<li data-icon="plus">
						<a href="#">
			          	<img src="<?php echo $v['pic']?>" />
			          	<h2><?php echo $v['name']?></h2>
			          	<p>￥<?php echo $v['price']?></p>
			        	</a>
			        	<a href="#" style="border-left:none;" onclick="add('<?php echo $shopName?>','<?php echo $v['name']?>','<?php echo $v['price']?>','<?php echo $uname?>')"></a>		        	
			        </li>
			       <?php endforeach;?>
					<li data-role="list-divider" id="c&w">烟酒</li>
					<?php						
						$sql = "SELECT name,price,pic FROM `im_goods` WHERE type = '4' and username='$shopName'";
						mysqli_set_charset($conn, "utf8");
						$obj = mysqli_query($conn,$sql);
						$goods = array();
						while($result = mysqli_fetch_assoc($obj))
						{
						    $goods[] = $result;
						}
					?>
					<?php foreach($goods as $v):?>
					<li data-icon="plus">
						<a href="#">
			          	<img src="<?php echo $v['pic']?>" />
			          	<h2><?php echo $v['name']?></h2>
			          	<p>￥<?php echo $v['price']?></p>
			        	</a>
			        	<a href="#" style="border-left:none;" onclick="add('<?php echo $shopName?>','<?php echo $v['name']?>','<?php echo $v['price']?>','<?php echo $uname?>')"></a>    	
			        </li>
			       <?php endforeach;?>
				</ul>
			</div>
			<!--<?php						
				$servername = "localhost";
				$username = "root";
				$password = "123456";
				$dbname = "users";
				$conn = new mysqli($servername,$username,$password,$dbname);
				
				$sql = "SELECT name,price,count FROM `orderform` WHERE username='$uname'";
				mysqli_set_charset($conn, "utf8");
				$obj = mysqli_query($conn,$sql);
				$torry = array();
				while($result = mysqli_fetch_assoc($obj))
				{
				    $torry[] = $result;
				}
			?>
			<div data-role="popup" class="ui-content" id="tpopup" data-overlay-theme="b" data-position-to="window" style="min-width:290px;max-height: 200px;">
				<ul data-role="listview">
					<li data-role="list-divider">已购商品</li>
					<?php foreach($torry as $v):?>
					<li data-icon="minus">
						<a href="#">
							<h2><?php echo $v['name']?></h2>
							<p id="sumprice"><?php echo $v['price']?></p>
							<p id="count"><?php echo $v['count']?></p>
						</a>
					</li>
					<?php endforeach;?>
				</ul>
			</div>			            	-->
            <div data-role="footer" data-position="fixed" data-tap-toggle="false" data-theme="c">
				<div class="ui-grid-c">
					<div class="ui-block-a ui-disabled" id="torryPop"><div class="CircleDiv"><a href="Current.php?shopName=<?php echo $shopName ?>+&uname=<?php echo $uname ?>" data-transition="none"><img src="img/torry_normal.png" id="torry" class="CircleImg"/></a></div></div>
			      	<div class="ui-block-b"></div>
			      	<div class="ui-block-c"></div>
			      	<div class="ui-block-d"><p id="sum"></p></div>
<!--			      	<a href="Current.php?shopName=<?php echo $shopName ?>+&uname=<?php echo $uname ?>" id="Checkout" class="ui-btn ui-btn-c ui-disabled" data-transition="none">结算</a>-->
				</div>
			</div>
		</div>
		<script src="js/hello.js"></script>
		<script src="js/jquery.js"></script>
		<script src="js/jquery.mobile-1.4.5.js"></script>
		<script src="js/jquery.ssd-vertical-navigation.js"></script>
		<script src="js/app.js"></script>		
	</body>
</html>