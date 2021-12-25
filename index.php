<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<title>卒業制作</title>
		<link rel="stylesheet" type="text/css" href="common/css/style.css">
<style>
h4 {
  width: 250px;
  height: 150px;
  background-color: Crimson;
  animation-name: menu1;
  animation-duration: 12s;
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
  animation-duration: 12s;
  animation-iteration-count:infinite;
}
@keyframes menu2 {
  0% {color: Crimson; left:0px; top:0px;}
  25% {color: LightSalmon; left:550px; top:0px;}
  50% {color: pink; left:550px; top:120px;}
  75% {color:silver; left:0px; top:120px;}
  100% {color: indigo; left:0px; top:0px;}
}
div h3 {
  width: 280px;
  height: 40px;
  position: relative;
  animation-name: menu3;
  animation-duration: 12s;
  animation-iteration-count:infinite;
}
@keyframes menu3 {
  0% {color: Crimson; right:-230px; top:120px;}
  25% {color: LightSalmon; right:290px; top:120px;}
  50% {color: pink; right:290px; top:0px;}
  75% {color:silver; right:-230px; top:0px;}
  100% {color: indigo; right:-230px; top:120px;}
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
			<div id="back"></div>
			<div id="top2"><h2>Welcome</h2></div>
			<div id="top3">	<h2>My Page</h2></div>
			<div id="timer"></div>
			<div id="logo">
				<img src="common/img/logo.jpg" alt="logo">
				<p><img src="common/img/logo1.jpg" alt="logo1"></p>
				<h1>Welcome To Hue</h1>
				<h3>Welcome To VietNam</h3>
			</div>
			<div id="menu">
					<ul>	
						<li><a href="index.php" class="vu1">ホーム</a></li>
						<li><a href="index1.php">地名</a></li>
						<li><a href="index2.php">料理</a></li>
						<li><a href="index3.php">祭り</a></li>
						<li><a href="index5.php">Login</a></li>
					</ul>
			</div>
			<div id="php">
			<?php
				if(isset($_SESSION["login"])){
				print'<p style="color:red">Wellcome 会員<b>'.$_SESSION["login"].'<br></b><input type="button" name="Logout" value="Logout" onclick=location.href="index9.php"></p>';
				}else{
				print '';
				}
			?>
			</div>
			<div id="main">
				<div id="left">
					<ul>
						<li><img src="common/img/dainoi.jpg" alt="top"></li>
						<h2>ベトナムのフェについて</h2><br><br><br><br>
						ベトナムのフェはベトナムの中部にあってハノイから飛行機で2時間ぐらいかかります。
						<li><img src="common/img/dainoi1.jpg"></li>
						<h2>昔のベトナムの首都です</h2><br><br><br><br>
						フェーは王様に住んでいたところです、歴史３００年間ぐらいはベトナムの首都、いろいろな文化と料理今まで存在します。ロマンチックなフオンー川のほとりに位置するフエシタデルは、世界の文化的遺物として認識されている文化的遺物の複合体です。フエシタデルの複合施設には、インペリアルシタデルと紫禁城があり、シタデルエリアに囲まれています。
						<li><img src="common/img/dainoi2.jpg"></li>
						<h2>現在発展しました</h2><br><br><br><br>
						フエ城塞の遺物、フエの観光名所の複合体を訪れると、グエン王朝の大胆な建築が施された壮大な宮殿、記念碑、寺院を鑑賞できます。歴史について学ぶ機会があるだけでなく、このユニークな建築空間で写真を撮ることにも甘んじています。
						<li><img src="common/img/thuanan.jpg"></li>
						<h2>Thuan An beach</h2><br><br><br><br>
						フエ市には古代の歴史的および文化的遺物があるだけでなく、多くの観光客を魅了する美しいビーチもあります。ランコビーチはベトナムで最も美しい景色のビーチで、フエのトップ観光地の1つである澄んだ青い海岸を囲む長い白い砂浜があります。海岸の周りには雄大な山の背景に雄大な緑の森があり、それは間違いなくあなたのフエ旅行体験をより完全にするでしょう。
						<li><img src="common/img/thuytien.jpg"></li>
						<h2>Thuy Tien 湖</h2><br><br><br><br>
						トゥイティエン湖は、緑の木々が立ち並ぶティエンアンの丘の上にあります。トゥイティエン湖が静かで詩的でロマンチックな美しさを持っている場合、ティエンアンヒルは緑の松の木で覆われているため、「ミニチュアダラット」のように見えます。すべてが融合し、ゆったりとした落ち着いた空間で、軽やかさとくつろぎを感じさせます。
						<li><img src="common/img/bachma1.jpg"></li>
						<h2>Bach Ma</h2><br><br><br><br>
						フエ市の中心部から離れたバッハマ山は、壮大な滝と多様な珍しい動植物が生息するバッハマ国立公園のトゥアティエンフエ州とダナン州の自然の境界です。バッハマ山を征服すると、トゥイヴァン山のパノラマビュー、ハイヴァン峠、そして目のようにフエ市の素晴らしい景色を眺めることができます。
					</ul>
				</div>
			</div>
			<div id="footer">
		<p><small>Copyright (c) 2020 Grueadroit co.,ltd. All rights reserved.</small></p>
		</div>
	</body>
</html>