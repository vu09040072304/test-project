<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<title>卒業制作</title>
		<link rel="stylesheet" type="text/css" href="common/css/style3.css">
		<style>
					h2 {
				margin:2px;
				padding:2px;
			text-align: center;
		  width: 240px;
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
			h4 {
				margin:2px;
				padding:2px;
			text-align: center;
		  width: 240px;
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
			<div id="top">
			<div id="logo">
				<img src="common/img/logo.jpg" alt="logo">
				<p><img src="common/img/logo1.jpg" alt="logo1"></p>
				<h1>Welcome To フェの祭り</h1>
			</div>
			<div id="timer"></div>
			<div id="menu">
					<ul>	
						<li><a href="index.php">ホーム</a></li>
						<li><a href="index1.php">地名</a></li>
						<li><a href="index2.php">料理</a></li>
						<li><a href="index3.php" class="vu4">祭り</a></li>
						<li><a href="index5.php">Login</a></li>
					</ul>
					</div>
					<div id="php">
					<?php
				if(isset($_SESSION["login"])){
				print'<p style="color:#00FFFF">Wellcome 会員<b>'.$_SESSION["login"].'</b><br><input type="button" name="logout" value="Logout"></p>';
				}
			?>
			</div>
			</div>	
			<div id="main">
					<tr>
					<td><h2>ロイヤルミュージック</h2><br>
						<img src="common/img/nhanhac.jpg">
						<img src="common/img/nhanhac1.jpg"></td>
						<dd><h3>フェにはロイヤルミュージックがあります.それはユネスコに世界無形遺産をされました.チャンスがあれば必ず一回聞いてください</h3>
						</dd>
						</tr>
						<tr>
						<td><h2> Festival</h2>
						<img src="common/img/festival.jpg">
						<img src="common/img/festival1.jpg">
						</td>
						<dd><h3>2年ごとに開催されるフエフェスティバルは、古代の首都フエの伝統的な価値観を思い出すことを目的として、偶数年にフエで開催される主要な文化イベントです。 このフェスティバルに参加すると、訪問者はストリートアートのパフォーマンス、詩の朗読、カラフルな展示会、コンサート、ドラミング、歴史映画を楽しむことができます。</h3>
						</dd>
						</tr>
						<tr>
						<td><h2>フェの文化</h2>
						<img src="common/img/festival2.jpg">
						<img src="common/img/festival3.jpg">
						<img src="common/img/festival4.jpg">
						</td>
						<dd><h3>主要な祭りのひとつであるフエまつりは、街の内外を問わず広い空間で再現され、フエの文化的価値観の復活に貢献しています.
ロイヤルナイト、ナムジャオの犠牲式、トゥルーエンローとヴィンクイバイトーフェスティバル、アオダイフェスティバル、シーフェスティバル、カイトフライング、詩のリリース、詩のパフォーマンス、フェスティバルカントリーマーケット、人間の旗、レース体験などの多くのプログラム...</h3>
						</dd>
						</tr>
						<tr>
						<td><h2>船の王様</h2>
						<img src="common/img/duthuyen.jpg">
						<img src="common/img/duthuyen1.jpg">
						<img src="common/img/duthuyen2.jpg">
						</td>
						<dd><h3>豪華なディナークルーズでベトナムの有名な川、香水川を間近でご覧ください,騒音と群衆を置き去りにして、伝統的なドラゴンボートからの美しい景色をお楽しみください,山、寺院、神社の素晴らしい景色を眺めながら、船上で美味しいディナーをお楽しみください,伝統的な提灯を照らし、夜空に滑り込むのを見てください</h3>
						</dd>
						</tr>
						<tr>
						<td><h2>仏教の文化</h2>
						<img src="common/img/phatdan.jpg" class="img1">
						<img src="common/img/phatdan1.jpg" class="img1">
						<img src="common/img/phatdan2.jpg" class="img1">
						<img src="common/img/phatdan3.jpg" class="img1">
						</td>
						<dd><h3>ヴランはフエの私的な休日ではありませんが、ヴランは紛れもない特徴であり、フエの個性と魂が最もはっきりと明らかになる機会です。フエでは、ヴランは仏陀の誕生日に次ぐ2番目に大きなお祭りです。仏陀の誕生日は、伝統的な新年ほど混雑していませんが、非常に厳粛で敬意を表して、多くのフエの人々が墓を訪れ、故人のために線香を焚く日です。 ヴランは仏教の祭りですが、仏教徒であろうとなかろうと、古代の首都の大多数の人々にとって、太陰暦の毎年7月15日はこの特別な日を楽しみにしています。</h3>
					</dd>
					</tr>
				</div>
			<div id="footer">
		<p><small>Copyright (c) 2020 Grueadroit co.,ltd. All rights reserved.</small></p>
		</div>
		</div>
	</body>
</html>