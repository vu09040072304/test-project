
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">	
		<title>申し込み</title>
		<link rel="stylesheet" type="text/css" href="common/css/style5.css">
	</head>
	<body>
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
	<h1 style="color: red;">申し込み</h1>
		<form action="" method="POST" role="form">
		<div class="vu1">
		<table cellpadding="0" cellspacing="0" border="1">
		<?php
		if(isset($_POST['send'])){
			if(empty($_POST['username']) or empty($_POST['password']) or empty($_POST['email']) or empty($_POST['fullname']) or empty($_POST['birthday']) or empty($_POST['sex'])){
			print'<p style="color:red">全て情報を入力してください</p>';
			}else{
			$username=$_POST['username'];
			$password=$_POST['password'];
			$email=$_POST['email'];
			$fullname=$_POST['fullname'];
			$birthday=$_POST['birthday'];
			$sex=$_POST['sex'];
			$password=md5($password);
			if(strlen($username)>25 or strlen($password)>50 or strlen($sex)>6){
			print'<p style="color:red">文字を不許可ので、確認しください</p>';		
			}else{
			$sql= "select * from member where username='$username'";
			$query=mysqli_query($con, $sql);
			$name=mysqli_num_rows($query);
			if($name !=0){
			print'<p style="color:red">IDが使っていますので他のIDを選んでください</p>';
			}else{
			$sql= "select * from member where email='$email'";
			$query=mysqli_query($con, $sql);
			$mail=mysqli_num_rows($query);
			if($mail !=0){
			print'<p style="color:red">メールが使っていますので他のメールを選んでください</p>';
			}else{
			$sql2="INSERT INTO member(username,password,email,fullname,birthday,sex) VALUES('$username','$password','$email','$fullname','$birthday','$sex')";
			$update=mysqli_query($con,$sql2);
			if($update){
			print'<script type="text/javascript">if(confirm("申し込みを完了\n ログインのページを行きたい？")==true){
			location.href="index5.php";
			}else{
			}
			</script>';
			print'<p style"color:blue">ERROS</p>';
			}
			}
			}
			}
			}
			}
		?>
		<tr>
<td>
<b style="color: red;">ID</b> 
</td>
<td>
<input type="text" placeholder="IDを入力してください" name="username" size="50">
</td>
</tr>
<tr>
<td>
<b style="color: red;">パスワード</b>
</td>
<td>
<input type="password" placeholder="パスワードを入力してくだい" name="password" size="50">
</td>
</tr>
<tr>
<td>
<b style="color: red;">メール</b>
</td>
<td>
<input type="email" placeholder="例：Example@gmail.com" name="email" size="50">
</td>
</tr>
<tr>
<td>
<b style="color: red;">氏名</b>
</td>
<td>
<input type="text" placeholder="フルネームを入力してください" name="fullname" size="50">
</td>
</tr>
<tr>
<td>
<b style="color: red;">生年月日</b>
</td>
<td>
<input type="text" placeholder="例：YYYY/MM/DD" name="birthday" size="50">
</td>
</tr>
<tr>
<td>
<b style="color: red;">セックス</b>
</td>
<td>
<select name="sex">
<option value=""></option>
<option value="女性">女性</option>
<option value="男性">男性</option>
</select>
</td>
</tr>
</table>
</div>
<div id="vu2">
<input type="submit" name="send" value="完成">
<input type="reset" value="リセット">
</div>
<div id="vu3">   
<a href='index.php' style="color: red;">ホームページを戻る</a>
</div>
</form>
</body>
</html>