<?php
if(!isset($_COOKIE['user_id'])){
	require('inc/function.php');
	redirect_user();
}
$page_title = '已经登录';
include('inc/header.php');
echo <<<"WELCOME"
<h2 style="color:red">登录成功</h2>
<p>欢迎您：{$_COOKIE['user_name']}</p>
WELCOME;
include('inc/footer.php');