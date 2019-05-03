<?php
//公共函数库
/*
*用户自定义跳转地址
*/
function redirect_user($page = 'index.php')
{
	$url = 'http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']);
	$url = rtrim($url,'/\\');
	$url .= '/'.$page;
	header('Location:'.$url);
	exit();
}
/*
*验证用户登录
*/
function check_login($dbc,$email='',$password='')
{
	$errors = [];
	//验证邮箱
	if(empty($email)){
		$errors[]='邮箱地址不能为空';
	}else{
		$e = mysqli_real_escape_string($dbc,trim($email));

	}
	//验证密码
	if(empty($password)){
		$errors[] = '密码不能为空';
	}else{
		$p = mysqli_real_escape_string($dbc,trim($password));
	}

	//非空验证通过

	if(empty($errors)){
		$sql = "SELECT `user_id`,`user_name` FROM `user` WHERE `email`='$e' AND `password`=sha1('$p')";
		$res = mysqli_query($dbc,$sql);
		if(mysqli_num_rows($res)==1){
			$row = mysqli_fetch_array($res,MYSQLI_ASSOC);
			return[true,$row];
		}else{
			$errors[]='邮箱和密码不正确,请重新输入';
		}
	}
	return[false,$errors];

}