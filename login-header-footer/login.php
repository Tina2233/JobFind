<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
	//加载公共函数库
	require('inc/function.php');
	//连接数据库
	require('inc/connect.php');
	//验证登录
	list($check,$data) = check_login($dbc,$_POST['email'],$_POST['password']);
	//验证通过
	if($check){
		//设置cookies
		setcookie('user_id',$data['user_id']);
		setcookie('user_name',$data['user_name']);
		//跳转页面
		redirect_user('loggedin.php');
	}else{
		//验证失败
		$errors = $data;
	}
	//关闭数据库连接
	mysqli_close($dbc);
}
//加载
include('login_page.php');