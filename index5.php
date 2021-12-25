<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<title>卒業制作</title>
		<link rel="stylesheet" type="text/css" href="common/css/style5.css">
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
				<div id="php1">
					<?php
				if(isset($_SESSION["login"])){
				print'<h1>Wellcome 会員<b>'.$_SESSION["login"].'<br>あなたはログイン中です。</h1><br><br><br><br><br><br><p></b><br><input type="button" name="Logout" value="ログアウト" onclick=location.href="index9.php"></p>';
				}else{
				print'<h1>Wellcome To 会員</h1>';
				}
				?>
				</div>
			</div>
			<div id="timer"></div>
			<div id="menu">
					<ul>	
						<li><a href="index.php">ホーム</a></li>
						<li><a href="index1.php">地名</a></li>
						<li><a href="index2.php">料理</a></li>
						<li><a href="index3.php">祭り</a></li>
						<li><a href="index5.php" class="vu6">Login</a></li>
					</ul>	
			</div>
			<div id="php">
			<?php
				if(isset($_SESSION["login"])){
			print'<ul>';
			print'<li><a href="index4.php"><img src="common/img/banner.jpg" alt="banner" ></li>';
			print'<h3>ランクA予約</a></h3><br><br><br>';
			print'<p>	時間	：２日１夜<br>
						費用	：朝食事とコーヒー、バスを移転、平民ホテル　２万円<br>
						出発日	：04/01/2022。<br>
						出発点	：ハノイ。<br>
						夜01：ハノイーフエ古代の首都<br>
						18時30分：VietSense旅行会社のガイドがハノイ駅（120 Le Duan）でフエ古代首都を出発する列車SE1（19h00）またはSE3（23h00）に迎えに行きます。電車の中で一晩<br>

						1日目：フエツアー-城塞を訪ねる-ティエンムー寺（朝食、昼食、夕食）<br>
						08h30：フエ駅に到着し、車とガイドがホテルに迎えに行き、ホテルにチェックインし、朝食をとります。<br>
						13時30分：代表団は城塞（グエン王朝の13人の王の王宮、ベトナムの最後の確執王朝：ゴモン門、タイホア宮殿、紫禁城、ミュウ、ヒエンラムカック、ククウなど）への訪問を開始します。）ピーク）と17世紀初頭に建てられた古代のティエンムー寺。初日のプログラム終了後、ホテルに戻って休憩します。<br>
						夕方：街中を自由に歩き回ったり、バインベオ、フィルター、ナム、プーケット、路地茶などのこの場所の特産品を楽しんだり、ドラゴンボートに乗ってカフエを聞いたり、花を落として祈ったりすることができます詩的な香水ストリームで頑張ってください。ホテルで一晩。
							
					<br><br></p>';
			print'<li><a href="index4.php"><img src="common/img/banner1.jpg" alt="banner" ></li>';
			print'<h3>ランクB予約</h3></a><br><br><br>';
			print'<p>時間	：1日1夜<br>
						費用	：朝食事とコーヒー、バスを移転、平民ホテル　６千円<br>
						出発日	：13/01/2022。<br>
						出発点	：フェの文化室。<br>
						朝：ベトナム旅行のガイドと車がランデブーポイントであなたを迎えに行き、かつてグエン王朝の首都であったフエの古代の首都を訪問するために出発します。<br>
						143年、ユネスコの遺産として認識されました。世界文化1994年の遺産...代表団は、皇帝の堂々とした生活を目撃したディエンゴックの黄金宮殿を訪れました。<br>
						バチュアには、次のような要点があります。ゴモン門-王の偉大な出来事を目撃する場所。王朝;タイホアパレス-王の宮廷が設立された場所。ディエントー宮殿-女王の母の住居;世廟-グエン王を崇拝してクディンを賞賛する場所-ヒエンラムカック...その後、グループは古代の首都の最も美しい場所であるティエンムー寺を訪れました...レストランで昼食をとりました。<br>

						午後：グエン王の霊廟のシステムでフエ古代の首都を訪問する旅を続けます。そこでは、代表団がグエン王朝の霊廟のシステムの2つの典型的な霊廟を訪問します。<br>
						嗣徳帝の墓-ロマンス、詩、カイディンの墓-素晴らしさ、素晴らしさ...次に、グループはナムジャオダンダンとトゥヒウ古代寺院-タイのジャムマンダリンを崇拝する場所を訪問します...プログラムの終わりに、車はあなたを元のランデブーに戻しますポイントとグラス。ようこそ。
						<br><br><br>
					</p>';
			print'<li><a href="index4.php"><img src="common/img/banner2.jpg" alt="banner" ></li>';
			print'<h3>ランクC予約</h3></a><br><br><br>';
			print'<p>時間	：３日２夜<br>
						費用	：朝食事とコーヒー、バスを移転、平民ホテル　2.5万円<br>
						出発日	：15/02/2022。<br>
						出発点	：ホーチミン町。<br>
						夜01：ホーチミンーフエ古代の首都<br>
18時30分：ツアーガイドのVietSense旅行会社がホーチミン駅（120 Le Duan）でフエエンシェントキャピタルを出発する列車SE1（19h00）またはSE3（23h00）に迎えに行きます。電車の中で一晩<br>

1日目：フエツアー-城塞を訪ねる-ティエンムー寺（朝食、昼食、夕食）<br>
08h30：フエ駅に到着し、車とガイドがホテルに迎えに行き、ホテルにチェックインし、朝食をとります。<br>
13時30分：代表団は城塞（グエン王朝の13人の王の王宮、ベトナムの最後の確執王朝：ゴモン門、タイホア宮殿、紫禁城、ミュウ、ヒエンラムカック、ククウなど）への訪問を開始します。<br>ピークと17世紀初頭に建てられた古代のティエンムー寺。初日のプログラム終了後、ホテルに戻って休憩します。<br>
						2日目：グエン王朝の霊廟を訪ねる-タンタン鉱泉（朝食、昼食、夕食）<br>
朝：ホテルで朝食をとった後、トゥドゥック帝廟を訪れます-才能のある王の人生を反映したロマンチックで叙情的ですが、国の困難な状況に直面し、洗練された東西でカイディン王の墓を訪問し続けます文化建築、ミンマン帝廟を訪れることは、彼の多くの美しい厩舎で有名であるだけでなく、20以上の大小の作品の遺物エリアを残しました。レストランで昼食をとる。<br>
午後：昼食後、ホテルで休憩した後、02時30分に車でタンタン温泉に行き、泥風呂や天然香風呂でリラックスしたり、波のプールを楽しんだりして、入浴の気分を味わってください。山の中、冷たい水の中、海のせせらぎの波の中で、浮かぶフロートに身を任せて、訪問者に涼しさと喜びを感じさせてください。<br>
フエに戻ったら、自由に夕食をとり、夜はカラフルなトランティエン橋で古代の首都の美しさを楽しんでください。フエで一晩。<br>

3日目：フエ市への別れ（朝食、昼食）<br>
ホテルでの朝食後、ドンバマーケットで愛する人へのプレゼントを自由に購入できます。その後、車が駅で迎えに行き、SE2（15:05）に乗ってハノイに向けて出発します。あなたは船上で夜を過ごします。ありがとう、また次の旅行でお会いしましょう。
					
						
						<br><br><br>
					</p>';
			print'<li><a href="index4.php"><img src="common/img/banner3.jpg" alt="banner" ></li>';
			print'<h3>ランクD予約</h3></a><br><br><br>';
			print'<p>時間	：２日２夜<br>
						費用	：朝食事とコーヒー、バスを移転、平民ホテル　2.5万円<br>
						出発日	：15/02/2022。<br>
						出発点	：ホーチミン町。<br>
						夜01：ホーチミンーフエ古代の首都<br>
					
					1日目：色相を拾う-城塞を訪ねる-ティエンムー寺（朝食、昼食、夕食）
08h30：フエ駅に到着し、車とガイドがホテルに迎えに行き、チェックインして休憩し、朝食をとります。朝食後、部屋にチェックインして休憩します。<br>
13時30分：代表団は城塞（グエン王朝の13人の王の王宮、ベトナムの最後の確執王朝：ゴモン門、タイホア宮殿、紫禁城、ミュウ、ヒエンラムカック、ククウなど）への訪問を開始します。ピークと17世紀初頭に建てられた古代のティエンムー寺。初日のプログラムの最後に、ホテルに戻って休憩します。<br>
夕方：街中を自由に歩き回ったり、バインベオ、フィルター、ナム、プーケット、路地茶などのこの場所の名物を楽しんだり、ドラゴンボートに乗ってフエのカフエを聞いたり、花を落として祈ったりできます。詩的な香水ストリームでの幸運のために..ホテルで一晩。<br>
2日目：色相-ティエンドゥオン洞窟を訪問-色相（朝食、昼食、夕食）<br>
07:30：ホテルで朝食をとる。朝食後、フエの古都を離れてフォンニャ洞窟を訪れます。これは、ユネスコによって認識されている世界自然遺産の1つです。フォンニャ洞窟を訪れる途中、代表団はラヴァン聖地に立ち寄りました。「小さな大聖堂」として授与され、境界線が一時的に分割されたベンハイ川の17度線のヒエンルオン橋で写真を撮りました。 20年間（1954年から1973年）の南国。<br>
13時00分車とHDVでロード20デシジョンウィンに沿ってパラダイス洞窟（山の中心にある宮殿と呼ばれる）を訪れます-自然が授けるさまざまな鍾乳石の幻想的な美しさを発見した後。ティエンドゥオン洞窟のユニークで特別な価値を見つけてください-車とツアーガイドがSuoiNuocMoocエコツーリズムエリアを訪問します-山から流れ出る地下の川によって作成され、風景に溶け込んでいます。美しい原始の森-あなたはフエに向けて出発するためにホーチミン道路に沿って進みます。<br>
19h00：フエの古都に戻り、レストランで夕食をお楽しみください。夕食後、グループは夜に古代の首都を自由に探索し、忙しい西部地区であるTruong Tien橋を訪れ、コーヒーを楽しみ、ロマンチックな香水川のほとりでフダビールを飲みます。フエの3つ星ホテルで一晩。

<br><br><br>
					</p>';
			print'<li><a href="index4.php"><img src="common/img/banner4.jpg" alt="banner" ></li>';
			print'<h3>ランクE予約</h3></a><br><br><br>';
			print'<p>時間	：２日２夜<br>
						費用	：朝食事とコーヒー、バスを移転、平民ホテル　1万円<br>
						出発日	：12/03/2022。<br>
						出発点	：ホーチミン町。<br>
						夜01：ホーチミンーフエ古代の首都<br>
					バチュアには、次のような要点があります。ゴモン門-王の偉大な出来事を目撃する場所。王朝;タイホアパレス-王の宮廷が設立された場所。ディエントー宮殿-女王の母の住居;世廟-グエン王を崇拝してクディンを賞賛する場所-ヒエンラムカック...その後、グループは古代の首都の最も美しい場所であるティエンムー寺を訪れました...レストランで昼食をとりました。<br>

						午後：グエン王の霊廟のシステムでフエ古代の首都を訪問する旅を続けます。そこでは、代表団がグエン王朝の霊廟のシステムの2つの典型的な霊廟を訪問します。<br>
						嗣徳帝の墓-ロマンス、詩、カイディンの墓-素晴らしさ、素晴らしさ...次に、グループはナムジャオダンダンとトゥヒウ古代寺院-タイのジャムマンダリンを崇拝する場所を訪問します...プログラムの終わりに、車はあなたを元のランデブーに戻しますポイントとグラス。ようこそ。
						</p>';
			
				print'</ul>';
				
				}else{
			print'<form action="index6.php" method="POST">';
	    	print'<table width="400" height="200" border="2" cellpadding="5" align="center">';
	    		print'<tr>';
	    		print'<th colspan="2">ログイン</th>';
				print'</tr>';
				print'<tr>';
	    		print'<td>Username</td>';
	    		print'<td><input type="text" name="username" size="30"></td>';
	    		print'</tr>';
	    		print'<tr>';
	    		print'<td>Password</td>';
	    		print'<td><input type="password" name="password" size="30"></td>';
	    		print'</tr>';
	    		print'<tr>';
	    		print'<td colspan="2" align="center">';
					print'<input type="submit" name="send_b" value="ログイン" >';
	    			print'<input type="submit" name="reset" value="リセット" >';
	    		print'</td>';
	    		print'</tr>';
	    		print'<tr>';
	    		print'<td colspan="2" align="center">';
	    		print'<b>申し込みたい場合は,このボタンをを押してください</b><br>';
	    		print'<input type="button" name="dangky" value="申し込む" onclick=location.href="index7.php">';
	    		print'</td>';
	    		print'</tr>';
	    	print'</table>';		
			print'</form>';
			}
			?>
			</div>
			<div id="footer">
		<p><small>Copyright (c) 2020 Grueadroit co.,ltd. All rights reserved.</small></p>
		</div>
	</body>
</html>