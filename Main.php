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
	<link rel="stylesheet" href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.css">
	<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=i2PKpgdDmb0VwMqPoeGuL31EBEUoouoe"></script>
	<title>Main Page</title>
	<style>
		*{
			font-family: simhei;
		}
		.CircleDiv{   
			width: 50px;   
			height: 50px;   
			padding:2px;   
			background: #ececec;   
			border-radius:50%;
			box-shadow: 0px 0px 1px rgba(0,0,0,0.4);   
			-moz-border-radius: 50%;
			-webkit-border-radius: 50%;
			margin-left:3%;
			float: left;
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
		.navbar{
			margin:0 2%;
		}
		.ui-li-icon{
			margin-top:2%;
		}
		.image{
			margin-top:3%;
		}
		.gap{margin:0 2%;}
		#panelLeft {
		  z-index: 10;
		  width: 88%;
		  height: 100%;
		  position: fixed;
		  top: 0;
		  left: 0;
		  overflow-y:scroll;
/*		  background-color: #283c51;*/
		}
		#panelRight {
		  padding: 0rem 1.4rem;
		  margin-left: 88%;
		  overflow: hidden;
		  /*font-size:x-small;*/
		}
		#panelRight a{
			color: #828282;
			text-decoration: none;
			/*white-space:nowrap;
			text-align: center;
			margin: 2% auto;*/
			/*display:block;
			margin-top: 20%;*/
		}
		#username{
			margin-top: 5%;
			padding-left: 5em;
		}
		.num{
				position: absolute;
				font-size: 12.5px;
				font-weight: normal;
				text-align: center;
				line-height: 1.6em;
				min-height: 1.6em;
				min-width: .64em;
				margin-top: -.88em;
				left: 60%;
				top: 20%;
			}
		.sum{
			position: absolute;
			font-size: 12.5px;
			font-weight: normal;
			text-align: center;
			line-height: 1.6em;
			min-height: 1.6em;
			min-width: .64em;
			margin-top: -.88em;
			right: .8em;
			top: 20%;
		}
	</style>
</head>
<body>
	<div data-role="page" id="StoreList">
		<!-- location panel -->
		<div data-role="panel" id="panel_location" data-display="overlay" data-overlay-theme="b" data-position-fixed="true">
			<div id="panelLeft">
				<ul data-role="listview">
	            	<li data-role="list-divider" id="Now">当前城市</li>
		            <a id="City1" class="ui-btn ui-btn-inline ui-corner-all ui-shadow ui-mini"></a>
	            	<li data-role="list-divider" id="A">A</li>
	            	<li data-icon="false"><a href="#" onclick="chose(this)" data-rel="close" class="close"><h2>阿坝</h2></a></li>
	            	<li data-icon="false"><a href="#" onclick="chose(this)" data-rel="close" class="close"><h2>阿坝县</h2></a></li>
	            	<li data-icon="false"><a href="#" onclick="chose(this)" data-rel="close" class="close"><h2>阿巴嘎旗</h2></a></li>
	            	<li data-role="list-divider" id="B">B</li>
	            	<li data-icon="false"><a href="#" onclick="chose(this)" data-rel="close" class="close"><h2>北京</h2></a></li>
	            	<li data-icon="false"><a href="#" onclick="chose(this)" data-rel="close" class="close"><h2>巴楚县</h2></a></li>
	            	<li data-role="list-divider" id="C">C</li>
	            	<li data-icon="false"><a href="#" onclick="chose(this)" data-rel="close" class="close"><h2>长沙</h2></a></li>
	            	<li data-icon="false"><a href="#" onclick="chose(this)" data-rel="close" class="close"><h2>成都</h2></a></li>
	            	<li data-role="list-divider" id="D">D</li>
	            	<li data-icon="false"><a href="#" onclick="chose(this)" data-rel="close" class="close"><h2>东莞</h2></a></li>
	            	<li data-icon="false"><a href="#" onclick="chose(this)" data-rel="close" class="close"><h2>大安市</h2></a></li>
	            	<li data-role="list-divider" id="E">E</li>
	            	<li data-icon="false"><a href="#" onclick="chose(this)" data-rel="close" class="close"><h2>峨眉山市</h2></a></li>
	            	<li data-role="list-divider" id="F">F</li>
	            	<li data-icon="false"><a href="#" onclick="chose(this)" data-rel="close" class="close"><h2>佛山</h2></a></li>
	            	<li data-icon="false"><a href="#" onclick="chose(this)" data-rel="close" class="close"><h2>福州</h2></a></li>
	            	<li data-role="list-divider" id="G">G</li>
	            	<li data-icon="false"><a href="#" onclick="chose(this)" data-rel="close" class="close"><h2>广州</h2></a></li>
	            	<li data-role="list-divider" id="H">H</li>
	            	<li data-icon="false"><a href="#" onclick="chose(this)" data-rel="close" class="close"><h2>杭州</h2></a></li>
	            	<li data-icon="false"><a href="#" onclick="chose(this)" data-rel="close" class="close"><h2>合肥</h2></a></li>
	            	<li data-role="list-divider" id="J">J</li>
	            	<li data-icon="false"><a href="#" onclick="chose(this)" data-rel="close" class="close"><h2>济南</h2></a></li>
	            	<li data-role="list-divider" id="K">K</li>
	            	<li data-icon="false"><a href="#" onclick="chose(this)" data-rel="close" class="close"><h2>喀什市</h2></a></li>
	            	<li data-role="list-divider" id="L">L</li>
	            	<li data-icon="false"><a href="#" onclick="chose(this)" data-rel="close" class="close"><h2>拉萨</h2></a></li>
	            	<li data-role="list-divider" id="M">M</li>
	            	<li data-icon="false"><a href="#" onclick="chose(this)" data-rel="close" class="close"><h2>马鞍山</h2></a></li>
	            	<li data-role="list-divider" id="N">N</li>
	            	<li data-icon="false"><a href="#" onclick="chose(this)" data-rel="close" class="close"><h2>南宁</h2></a></li>
	            	<li data-icon="false"><a href="#" onclick="chose(this)" data-rel="close" class="close"><h2>南京</h2></a></li>
	            	<li data-role="list-divider" id="P">P</li>
	            	<li data-icon="false"><a href="#" onclick="chose(this)" data-rel="close" class="close"><h2>攀枝花</h2></a></li>
	            	<li data-role="list-divider" id="Q">Q</li>
	            	<li data-icon="false"><a href="#" onclick="chose(this)" data-rel="close" class="close"><h2>青岛</h2></a></li>
	            	<li data-role="list-divider" id="R">R</li>
	            	<li data-icon="false"><a href="#" onclick="chose(this)" data-rel="close" class="close"><h2>饶平县</h2></a></li>
	            	<li data-role="list-divider" id="S">S</li>
	            	<li data-icon="false"><a href="#" onclick="chose(this)" data-rel="close" class="close"><h2>上海</h2></a></li>
	            	<li data-icon="false"><a href="#" onclick="chose(this)" data-rel="close" class="close"><h2>深圳</h2></a></li>
	            	<li data-role="list-divider" id="T">T</li>
	            	<li data-icon="false"><a href="#" onclick="chose(this)" data-rel="close" class="close"><h2>天津</h2></a></li>
	            	<li data-role="list-divider" id="W">W</li>
	            	<li data-icon="false"><a href="#" onclick="chose(this)" data-rel="close" class="close"><h2>温州</h2></a></li>
	            	<li data-role="list-divider" id="X">X</li>
	            	<li data-icon="false"><a href="#" onclick="chose(this)" data-rel="close" class="close"><h2>厦门</h2></a></li>
	            	<li data-role="list-divider" id="Y">Y</li>
	            	<li data-icon="false"><a href="#" onclick="chose(this)" data-rel="close" class="close"><h2>延安</h2></a></li>
	            	<li data-role="list-divider" id="Z">Z</li>
	            	<li data-icon="false"><a href="#" onclick="chose(this)" data-rel="close" class="close"><h2>张家界</h2></a></li>
	            </ul>
            </div>
            <div id="panelRight">
            	<a href="#Now" target="_self">当前</a>
            	<a href="#A" target="_self">A</a>
            	<a href="#B" target="_self">B</a>
            	<a href="#C" target="_self">C</a>
            	<a href="#D" target="_self">D</a>
            	<a href="#E" target="_self">E</a>
            	<a href="#F" target="_self">F</a>
            	<a href="#G" target="_self">G</a>
            	<a href="#H" target="_self">H</a>
            	<a href="#J" target="_self">J</a>
            	<a href="#K" target="_self">K</a>
            	<a href="#L" target="_self">L</a>
            	<a href="#M" target="_self">M</a>
            	<a href="#N" target="_self">N</a>
            	<a href="#P" target="_self">P</a>
            	<a href="#Q" target="_self">Q</a>
            	<a href="#R" target="_self">R</a>
            	<a href="#S" target="_self">S</a>
            	<a href="#T" target="_self">T</a>
            	<a href="#W" target="_self">W</a>
            	<a href="#X" target="_self">X</a>
            	<a href="#Y" target="_self">Y</a>
            	<a href="#Z" target="_self">Z</a>
            </div>
		</div>
		<div data-role="header" data-theme="c" class="ui-bar-c">
        	<h3>主页</h3>
			<a href="#panel_location" id="City" class="ui-btn ui-btn-c ui-nodisc-icon"></a>
			<div data-role="navbar" class="navbar">
            	<ul>
            		<li><a href="#" class="ui-btn ui-btn-active ui-state-persist navbarbtn" data-transition="none">主页</a></li>
            		<li><a href="#OrderForm" class="ui-btn" data-transition="none">订单</a></li>
            		<li><a href="#Mine" class="ui-btn" data-transition="none">我的</a></li>
            	</ul>
            </div>
		</div>
		<?php
			$uname = $_GET['username'];
			$servername = "localhost";
			$username = "root";
			$password = "123456";
			$dbname = "imooc_mall";
			
			$conn = new mysqli($servername,$username,$password,$dbname);

			$sql = "SELECT shopName,shopIcon,shopDec FROM `im_user`";
			mysqli_set_charset($conn, "utf8");
			$obj = mysqli_query($conn,$sql);
			$users = array();
			while($result = mysqli_fetch_assoc($obj))
			{
			    $users[] = $result;
			}
		?>
		<div data-role="main" class="ui-content ui-collapsible-content">
        	<!-- search column-->
            <form action="" method="post" class="ui-filterable">
            	<input data-type="search" placeholder="搜索Super Market" id="smFilter"/>
            </form>
			<ul data-role="listview" data-filter="true" data-input="#smFilter">
			<?php foreach($users as $v):?>
            	<li data-icon="false">
            		<a href="Store.php?shopName=<?php echo $v['shopName']?>+&shopIcon=<?php echo $v['shopIcon']?>+&uname=<?php echo $uname?>">
            			<img src="<?php echo $v['shopIcon']?>" alt="<?php echo $v['shopName']?>">
            			<h1><?php echo $v['shopName']?></h1>
            			<p><?php echo $v['shopDec']?></p>
            		</a>
            	</li>
            	<!--<li data-role="list-divider"></li>-->
            <?php endforeach;?>
			</ul>
		</div>
	</div>
	<div data-role="page" id="OrderForm">
		<div data-role="header" data-theme="c">
        	<h3>订单</h3>
			<div data-role="navbar" class="navbar">
            	<ul class="gap">
            		<li><a href="#StoreList" class="ui-btn" data-transition="none">主页</a></li>
            		<li><a href="#" class="ui-btn ui-btn-active ui-state-persist" data-transition="none">订单</a></li>
            		<li><a href="#Mine" class="ui-btn" data-transition="none">我的</a></li>
            	</ul>
            </div>
		</div>
		<?php
			//users数据库 
			$servername = "localhost";
			$username = "root";
			$password = "123456";
			$dbname = "users";
			$conn = new mysqli($servername,$username,$password,$dbname);
			
			$sql = "SELECT * FROM `history_form` WHERE username='$uname'";
			mysqli_set_charset($conn, "utf8");
			$obj = mysqli_query($conn,$sql);
			$history = array();
			while($result = mysqli_fetch_assoc($obj))
			{
			    $history[] = $result;
			}
		?>
		<div data-role="main" class="ui-content">
			<ul data-role="listview">
				<?php foreach($history as $v):?>
					<?php 
						if($v['count'] > 1){
							$deng = "等".$v['count']."种商品";
						}else{
							$deng = "";
						}
					?>
				<li data-icon="false">
                	<a href="#">
						<img src="<?php echo $v['shopIcon']?>" alt="加载失败，刷新重试！" class="image"/>
						<h1><?php echo $v['shopName']?></h1>
						<p><?php echo $v['name']?><?php echo $deng?></p>
						<p>￥<?php echo $v['sum']?></p>
					</a>
				</li>
				<?php endforeach;?>
			</ul>
		</div>
	</div>
	<div data-role="page" id="Mine">
		<div data-role="header" data-theme="c">
        	<h6>我的</h6>
			<a href="#Page_setting" class="ui-btn ui-btn-c ui-btn-right"><i class="fa fa-gear" style="font-size:20px 20px;color:#828282;"></i></a>
			<div data-role="navbar" class="navbar">
            	<ul class="gap">
            		<li><a href="#StoreList" class="ui-btn" data-transition="none">主页</a></li>
            		<li><a href="#OrderForm" class="ui-btn" data-transition="none">订单</a></li>
            		<li><a href="#" class="ui-btn ui-btn-active ui-state-persist" data-transition="none">我的</a></li>
            	</ul>
            </div>
		</div>
		<div data-role="main" class="ui-content">
			<ul data-role="listview">
			    <li data-icon="false">
			        <a href="#">
			          	<div class="CircleDiv"><img src="img/user-photo.png" class="CircleImg" /></div> 
			          	<div class="gap" id="username"><h2><?php echo $uname?></h2></div> 	
			        </a>
			    </li>
			    <li data-role="list-divider"></li>
                <li data-icon="false">
			        <a href="#">
			        	<img src="img/heart.png" class="ui-li-icon" />
			        	<!--<i class="fa fa-heart" style="font-size:20px 20px;color:#828282;"></i>-->
			          	<h2>收藏</h2>
			        </a>
			    </li> 
			    <li data-role="list-divider"></li>
			    <li data-icon="false">
			        <a href="#">
			        	<img src="img/server.png" class="ui-li-icon" />
			          	<h2>客服</h2>
			        </a>
			    </li>
                <li data-icon="false">
			        <a href="#">
			        	<img src="img/join.png" class="ui-li-icon" />
			          	<h2>加盟</h2>
			        </a>
			    </li>
                <li data-role="list-divider"></li>
			</ul>
		</div>
	</div>
	<div data-role="page" id="Page_setting">
		<div data-role="header" data-theme="c">
			<h2>设置</h2>
			<a href="#" class="ui-btn ui-btn-c" data-rel="back"><i class="fa fa-arrow-left" style="font-size:20px 20px;color:#828282;"></i></a>
		</div>
		<div data-role="main" class="ui-content">
			<div class="gap"><a href="Main.html#Mine" class="ui-btn ui-btn-c ui-shadow ui-corner-all">退出登录</a></div>
		</div>
	</div>	
	<script>
		// 百度地图API功能
		function myFun(result){
			var city = result.name;
	      	var cityName = city.split("市")[0];
			document.getElementById("City").innerHTML=cityName;
	      	document.getElementById("City1").innerHTML=cityName;
		}
		var myCity = new BMap.LocalCity();
		myCity.get(myFun);
	</script>
	<script>
		function chose(cityname){
		    document.getElementById("City").innerHTML = cityname.text;
		    document.getElementById("City1").innerHTML = cityname.text;
		}
		$("City").click(function(){
			var scrollTop = document.body.scrollTop;//保存点击前滚动条的位置
			window.onscroll=function(){
			document.body.scrollTop = scrollTop;//赋值给滚动条的位置
			}
		})
		$(".close").click(function(){
			window.onscroll=function(){
			document.body.scrollTop=document.body.scrollTop;//关闭后清除保存位置的值
			}
		})
	</script>
	<script src="js/hello.js"></script>
	<script src="js/jquery.js"></script> 
	<script src="js/jquery.mobile-1.4.5.js"></script>
</body>
</html>