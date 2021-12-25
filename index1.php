<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<title>卒業制作</title>
		<link rel="stylesheet" type="text/css" href="common/css/style1.css">
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
			to{top:0px; left:570px;}
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
				<h1>Welcome To フェの地名</h1>
				
			</div>
			<div id="timer"></div>
			<div id="menu">
					<ul>	
						<li><a href="index.php">ホーム</a></li>
						<li><a href="index1.php" class="vu2">地名</a></li>
						<li><a href="index2.php">料理</a></li>
						<li><a href="index3.php">祭り</a></li>
						<li><a href="index5.php">Login</a></li>
					</ul>
					</div>
					<div id="php">
						<?php
				if(isset($_SESSION["login"])){
				print'<p style="color:blue">Wellcome 会員<b>'.$_SESSION["login"].'<br></b><input type="button" name="logout" value="Logout"></p>';
				}
			?>
			</div>
			<div id="main">
				<div id="left">
					<ul>
						<h2>Bach Ma</h2>
						<li><img src="common/img/bachma.jpg" alt="top"></li>
						<h3>フエ市の中心部から離れたバッハマ山は、壮大な滝と多様な珍しい動植物が生息するバッハマ国立公園のトゥアティエンフエ州とダナン州の自然の境界です。バッハマ山を征服すると、トゥイヴァン山のパノラマビュー、ハイヴァン峠、そして目のようにフエ市の素晴らしい景色を眺めることができます。</h3>
						<li><img src="common/img/bachma1.jpg"></li>
						<li><img src="common/img/bachma2.jpg"></li>
						<li><img src="common/img/bachma3.jpg"></li>
						<li><img src="common/img/bachma4.jpg"></li>
						<hr>
						<h2>Lang Co Beach</h2>
						<li><img src="common/img/langco.jpg"></li>
						<h3>フエ市には古代の歴史的および文化的遺物があるだけでなく、多くの観光客を魅了する美しいビーチもあります。ランコビーチはベトナムで最も美しい景色のビーチで、フエのトップ観光地の1つである澄んだ青い海岸を囲む長い白い砂浜があります。海岸の周りには雄大な山の背景に雄大な緑の森があり、それは間違いなくあなたのフエ旅行体験をより完全にするでしょう。</h3>
						<li><img src="common/img/langco1.jpg"></li>
						<li><img src="common/img/langco2.jpg"></li>
						<h3>ここで興味深く緑豊かな海を探索する時間をもっと過ごしたい場合は、Lang Coの近くの部屋を事前に予約することを忘れないでください。これは、非常に混雑した観光地でもあるためです。 その他のオプションについては、このエリアの近くのホテルをチェックしてください</h3>
						<li><img src="common/img/langco3.jpg"></li>
						<li><img src="common/img/langco4.jpg"></li>
						<hr>
						<h2>Thuan An beach</h2>
						<li><img src="common/img/thuanan.jpg"></li>
						<h3>トゥアンアンビーチは、穏やかな波の穏やかで詩的な美しさから、フエの観光地に来るときに多くの観光客に人気のビーチでもあります。 涼しくてさわやかな水に浸ったり、黄金の砂浜を散歩したり、おいしい新鮮なシーフード料理を楽しんだりして、美しいトゥアンアンビーチパラダイスで素晴らしい休暇を楽しんでください。</h3>
						<li><img src="common/img/thuanan1.jpg"></li>
						<li><img src="common/img/thuanan2.jpg"></li>
						<hr>
						<h2>Thuy Tien 湖</h2>
						<li><img src="common/img/thuytien.jpg"></li>
						<h3>トゥイティエン湖は、緑の木々が立ち並ぶティエンアンの丘の上にあります。トゥイティエン湖が静かで詩的でロマンチックな美しさを持っている場合、ティエンアンヒルは緑の松の木で覆われているため、「ミニチュアダラット」のように見えます。すべてが融合し、ゆったりとした落ち着いた空間で、軽やかさとくつろぎを感じさせます。</h3>
						<li><img src="common/img/thienan1.jpg"></li>
						<li><img src="common/img/thienan2.jpg"></li>
						<hr>
						<h2>Truong Tien</h2>
						<li><img src="common/img/truongtien.jpg"></li>
						<h3>シンボルとして、またフエ族の誇りとして、香水川は、夢のようなキンキの土地の真ん中にある長くて柔らかい絹の帯のように穏やかです。 香水川はエメラルドグリーンで、穏やかな水の下で詩的な街の風景を反映し、日光の下でキラキラと輝いています。 多くの芸術家は、平和なフォンザンを賞賛し、伝統的なフエの民謡を聴くためのクルーズ中に、不滅の詩を作曲するための豊富なインスピレーションを見つけました。</h3>
						<li><img src="common/img/truongtien1.jpg"></li>
					</ul>
				</div>
			</div>
			<div id="footer">
		<p><small>Copyright (c) 2020 Grueadroit co.,ltd. All rights reserved.</small></p>
		</div>
	</body>
</html>