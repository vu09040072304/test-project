<?php
session_start();
if(isset($_SESSION['login'])&&$_SESSION['login']!=NULL){
unset($_SESSION['login']);
}
header('Location:index5.html');
?>