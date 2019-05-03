<?php
if(!isset($_COOKIE['user_id'])){
	require('inc/function.php');
	redirect_user();
}else{
	setcookie('user_id','',time()-3600);
	setcookie('user_name','',time()-3600);
}
$page_title = '已经登录';
include('inc/header.php');
echo <<<"WELCOME"
<h2 style="color:red">退出成功</h2>
<p><a href="login.php">登录</a></p>
WELCOME;
include('inc/footer.php');