        function insertDB(uname,upwd,uphone)
        {
            var xmlhttp;
            if(window.XMLHttpRequest)
            {
                xmlhttp = new XMLHttpRequest();
            }else
            {
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function()
            {
                if(xmlhttp.readyState == 4&&xmlhttp.status == 200)
                {
                    setTimeout(function(){location.href = 'Login.html'});
                }
            }
//            使用GET方式传参
//            xmlhttp.open("POST","http://192.168.1.103/Register.php?username="+uname+"&password="+upwd+"&phone_num="+uphone,true);
//            xmlhttp.send();
//            使用POST传参
            xmlhttp.open("POST","http://192.168.1.104/Ego/Register.php",true);
            xmlhttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
            xmlhttp.send("username="+uname+"&password="+upwd+"&phone_num="+uphone);
        }
       function validatename(str){
            if(str!=""){
//          document.getElementById("log_name").style.display="none";
          	document.getElementById("name").style.display="none";
            }else{
//          document.getElementById("log_name").innerHTML = "*用户名不能为空";
            document.getElementById("name").innerHTML = "*用户名不能为空";
            document.getElementById("submit").disabled=true;
            }
        }
    	function validatepwd(str){
    	    if(str!=""){
//  	    document.getElementById("log_pwd").style.display="none";
    	    document.getElementById("pwd").style.display="none";

            }else{
//          document.getElementById("log_pwd").innerHTML = "*密码不能为空";
            document.getElementById("pwd").innerHTML = "*密码不能为空";
            document.getElementById("submit").disabled=true;
            }
    	}
    	function confirm_pwd(str,pwd){
			if(str!=""){
			    if(str==pwd){
			        document.getElementById("conf_pwd").style.display="none";
			    }else{
			        document.getElementById("conf_pwd").innerHTML = "*密码不一致";
                    document.getElementById("submit").disabled=true;
			    }
			}else{
				document.getElementById("conf_pwd").innerHTML = "*密码不能为空";
                document.getElementById("submit").disabled=true;
			}
		}
		function validatephone(str){
			if(str!=""){
			    if(str.length < 11){
			        document.getElementById("phone").innerHTML = "*手机号格式不正确";
                    document.getElementById("submit").disabled=true;
			    }else{
			        document.getElementById("phone").style.display="none";
			    }
			}else{
				document.getElementById("phone").innerHTML = "*手机号不能为空";
                document.getElementById("submit").disabled=true;
			}
		}
		var sum = 0;
		function add(sname,name,price,uname){
    	var xmlhttp;
        if(window.XMLHttpRequest)
        {
            xmlhttp = new XMLHttpRequest();
        }else
        {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function()
        {
            if(xmlhttp.readyState == 4&&xmlhttp.status == 200)
            {
            	sum +=parseInt(price); 
            	document.getElementById("torry").src = "img/torry_active.png";
            	document.getElementById("sum").innerHTML = '￥'+sum;
            	document.getElementById("torryPop").className="ui-block-a";
//          	document.getElementById("Checkout").className="ui-btn ui-btn-c";
            }
        }
//          	使用GET方式传参
        xmlhttp.open("GET","http://192.168.1.104/Ego/Add.php?name="+name+"&sname="+sname+"&price="+price+"&uname="+uname,true);
        xmlhttp.send();
		}
		
		var clickNumber = 1;
		function like(){	
			if(clickNumber%2 == 0){
				document.getElementById("like").className = "fa fa-heart-o";
				document.getElementById("like").style.color = "#828282";
			}else{
				document.getElementById("like").className = "fa fa-heart";
				document.getElementById("like").style.color = "#ff0000";
			}
			clickNumber++;			
		}