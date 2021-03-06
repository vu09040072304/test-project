<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<title>卒業制作</title>
		<link rel="stylesheet" type="text/css" href="common/css/style2.css">
			<style>
				h2 {
				margin:2px;
				padding:2px;
			text-align: center;
		  width: 220px;
		  height: 40px;
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
			<div id="top">
		
			<div id="logo">
				<img src="common/img/logo.jpg" alt="logo">
				<p><img src="common/img/logo1.jpg" alt="logo1"></p>
				<h1>Welcome To フェの料理</h1>
			</div>
			<div id="timer"></div>
			<div id="menu">
					<ul>	
						<li><a href="index.php">ホーム</a></li>
						<li><a href="index1.php">地名</a></li>
						<li><a href="index2.php" class="vu3">料理</a></li>
						<li><a href="index3.php">祭り</a></li>
						<li><a href="index5.php">Login</a></li>
					</ul>
					</div>
					<div id="php">
					<?php
				if(isset($_SESSION["login"])){
				print'<p style="color:green">Wellcome 会員<b>'.$_SESSION["login"].'<br></b><input type="button" name="logout" value="Logout"></p>';
				}
			?>
			</div>
			</div>	
			<div id="main">	
					<tr>
					<td><h2>フェのチェー</h2><br>
					<img src="common/img/che.jpg"><img src="common/img/che1.jpg"><img src="common/img/che2.jpg"></td>
					<dd><h4>色相もお茶の国と考えられています。 さまざまな種類の果物、果物の種、塊茎、キビなどもお茶に加工され、ローストポークでさえフエ茶の世界に入ります。 提供するお茶、逃した食事を食べること、食事の後にデザートを食べること、パーティー、軽食をとること、食べること、あなたを助けるために食べること... 色相料理には50種類以上のお茶があります。</h4>
					</dd>
					</tr>	
					<tr>
					<td><h2>フェのバンベオ</h2><br>
					<img src="common/img/banhbeo.jpg" class="img1"><img src="common/img/banhbeo1.jpg" class="img1"><img src="common/img/banhbeo2.jpg" class="img1"><img src="common/img/banhbeo3.jpg" class="img1"></td>
					<dd><h4>フエの民謡は基本的にベトナム人の伝統的な食事モデルであり、フエの住民のスタイルで作られています。 ベトナムの他の地域と同様に、フエの人々は時間の区分に従って食事を整理し、主に「朝食」の特徴を備えた朝食と、夕方と正午の2つの主要な食事で構成されています。</h4>
					</dd>
					</tr>
					<tr>
						<td><h2>フェのブンボ</h2><br>
						<img src="common/img/bunbo1.jpg"><img src="common/img/bunbo2.jpg"><img src="common/img/bunbo.jpg"></td>
						<dd><h4>ブンボーフエは、「ブンボーフエ」または「ブンボーフエポーク」という通称でよく知られています。 実際、フエ春雨は非常に多様で、牛肉の春雨、豚の春雨、豚のパンボーに加えて、水春雨、乾燥春雨、混合春雨の形で数十種類の春雨がありますが、最も多様なのはまだ品種です。めんつゆ</h4>
						
					</dd>
					</tr>
					
					<tr>
						<td><h2>フェのネム</h2><br>
						<img src="common/img/nemcong.jpg"><img src="common/img/nemcong1.jpg"><img src="common/img/nemcong2.jpg"></td>
						<dd><h4>ユニークで貴重な業績を上げたフエ料理は、フエ文化とベトナム料理文化の重要な要素の1つである料理芸術になりました。
フエ料理は、フエに住む何世代にもわたる住民の産物であるだけでなく、北部のベトナム料理の継続と発展、南部のいくつかの食品と料理を吸収して統合しています（ビンディンオリジナルライスペーパーロール、マンゴスティーンなど） -ジャンチャウフルーツ、スカッドフィッシュ、サザンサワーシュリンプディッシュ...）、東南アジアの住民と米地域の住民の典型的な先住民の価値観が含まれています。東アジアの国々は、ベトナム料理のスタイルで家族とコミュニティの特徴を明確に示しています、</h4></dd>
						</tr>
			</div>
			<div id="footer">
		<p><small>Copyright (c) 2020 Grueadroit co.,ltd. All rights reserved.</small></p>
		</div>
	</body>
</html>