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
					</ul>	
			</div>
			<?php
				if(isset($_POST["send"])){
					$name=$_POST["name"];
					if($name ==""){
					print"<p>お氏名を入力してください</p>";
					print"<a href='index4.php'>戻る</a>";
					}else{
						$number=$_POST["number"];
						if($number ==""){
						print"<p>お電話番号を入力してください</p>";
						print"<a href='index4.php'>戻る</a>";
						}else{
							$mail=$_POST["mail"];
							if($mail ==""){
							print"<p>お客様のメールを入力してください</p>";
							print"<a href='index4.php'>戻る</a>";
							}else{
								$anwer=$_POST["description"];
								if($anwer ==""){
								print"<p>お客様の問題を入力してください</p>";
								print"<a href='index4.php'>戻る</a>";
								}else{
									print"<h3><b>".$name."様ご連絡ありがとうございました。私たちは問題を早めに解決しますのでしばらくお待ちください</b></h3>";
									print"<a href='index.php'>ホームページを戻る</a>";
									}
								}
							}
						}
					}
					
									
			?>
			<div id="footer">
		<p><small>Copyright (c) 2020 Grueadroit co.,ltd. All rights reserved.</small></p>
		</div>
	</body>
</html>