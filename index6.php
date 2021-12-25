<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<title>卒業制作</title>
		<link rel="stylesheet" type="text/css" href="common/css/style6.css">
	</head>
	<body>
	</body>
</html>
<?php
session_start();
include'index8.php';
	if(isset($_POST["send_b"])&& $_POST["username"] =='' || $_POST["password"] ==''){
	print"IDとパスワードを入力してくだい<br>";
	print"<input type='submit' name='戻る' value='ログインやり直し' onclick=location.href='index5.php' >";
	}else{
		if(isset($_POST["send_b"])&& $_POST["username"] !='' && $_POST["password"] !=''){
		$username=$_POST["username"];
		$password=$_POST["password"];
		$password=md5($password);
		$sql="SELECT * FROM member WHERE username='$username' AND password='$password'";
		$login=mysqli_query($con, $sql);
		if(mysqli_num_rows($login) >0 ){
			$_SESSION["login"]=$username;
			header("Location:index.php");
		}else{
		print"IDとパスワードが間違っている、もう一度確認してくだい<br>";
		print"<input type='submit' name='戻る' value='ログインやり直し' onclick=location.href='index5.php' >";
		}
}
}
?>