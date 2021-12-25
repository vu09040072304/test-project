<?php
require('index8.php');
?>
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<title>卒業制作</title>
		<link rel="stylesheet" type="text/css" href="common/css/style4.css">
			<style>
				h2 {
				margin:2px;
				padding:2px;
			text-align: center;
		  width: 370px;
		  height: 80px;
		  background-color: Crimson;
		  animation-name: menu1;
		  animation-duration: 8s;
		  animation-iteration-count:infinite;
		}
		@keyframes menu1 {
		  0% {background-color: Crimson;}
		  25% {background-color: LightSalmon;}
		  50% {background-color: pink;}
		  100% {background-color: indigo;}
		}
		div h1 {
		  width: 280px;
		  height: 40px;
		  position: relative;
		  animation-name: menu2;
		  animation-duration: 8s;
		  animation-iteration-count:infinite;
		  animation-direction:alternate;
		}
		@keyframes menu2{
			from{top:0px; left:0px;}
			to{top:0px; left:470px;}
		}
		#timer {
    display: block;
    font-size: 25px;
    margin: 5px 5px 5px 5px;
    padding:5px 5px 5px 5px;
    letter-spacing: 8px;
  
 }
		</style>
		<script>
            function startTime() 
            {	
            	
                var today = new Date();
                var t = today.getDate();
                var M = today.getMonth()+1;
                var y = today.getFullYear();
                var h = today.getHours();
                var m = today.getMinutes();
                var s = today.getSeconds();
                t = checkTime(t);
                M = checkTime(M);
                m = checkTime(m);
                s = checkTime(s);
                document.getElementById('timer').innerHTML = t + "-" + M + "-" + y + "<br>" +  h + ":" + m + ":" + s;
                var t = setTimeout(function() {
                    startTime();
                }, 500);
            }
            function checkTime(i) 
            {
                if (i < 10) {
                    i = "0" + i;
                }
                return i;
            }
        </script>
	</head>
	<body onload="startTime()">	
			<div id="logo">
				<img src="common/img/logo.jpg" alt="logo">
				<p><img src="common/img/logo1.jpg" alt="logo1"></p>
				<h1>お手伝いしましょうか？<br>
				Can I help You?</h1>
			</div>
			<div id="timer"></div>
			<div id="menu">
					<ul>	
						<li><a href="index.php">ホーム</a></li>
						<li><a href="index1.php">地名</a></li>
						<li><a href="index2.php">料理</a></li>
						<li><a href="index3.php">祭り</a></li>
						<li><a href="index5.php">Login</a></li>
					</ul>	
			</div>
			<form method="POST" action="">
				<div id="top">
						<div id="php">
			<?php
				if(isset($_SESSION["login"])){
				print'<p style="color:red">Wellcome 会員<b>'.$_SESSION["login"].'<br></b><input type="button" name="Logout" value="Logout" onclick=location.href="index9.php"></p>';
					if(isset($_POST['send_c'])){
				$people=$_POST['people'];
				$rank=$_POST['rank'];
				}
			
				}else{
				print '';
				}
			
			?>
			</div>
			</div>
						ちょっと確認します。<br>
						予約のは何名様でしょうか？					：
						<select name="people">
						<option value=""></option>
						<option value="1">1人</option>
						<option value="2">2人</option>
						<option value="3">3人</option>
						<option value="4">4人</option>
						<option value="5">5人</option>
						<option value="6">6人</option>
						<option value="7">7人</option>
						<option value="8">8人</option>
						<option value="9">9人</option>
						<option value="10">10人</option>
						<option value="11">11人</option>
						<option value="12">12人</option>
						<option value="13">13人</option>
						<option value="14">14人</option>
						</select><br>
						お客様がどんなランクをエントリーでしょうか？：
						<select name="rank">
						<option value=""></option>
						<option value="A">ランクA</option>
						<option value="B">ランクB</option>
						<option value="C">ランクC</option>
						<option value="D">ランクD</option>
						<option value="E">ランクE</option>
						</select><br>
						<input type="submit" name="send_c" value="Send">
						<input type="reset" name="reset"  value="Reset">
						
			</form>
			<div id="footer">
		<p><small>Copyright (c) 2020 Grueadroit co.,ltd. All rights reserved.</small></p>
		</div>
	</body>
</html>