	<?php
				if(isset($_POST["send"])){
					$name=$_POST["name"];
					$pass=$_POST["pass"];
					if($name=="" || $pass==""){
					print "<p>username と password を入力してください</p>";
					print"<a href='index5.php'>戻る</a>";
					}else{
					print"<h3>wellcome 会員".$name."<input type='submit' name='logout' value='Logout'></h3>";
					}
				}
	?>