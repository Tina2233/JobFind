<?php
$page_title = '用户登录';
//加载头部文件
include('inc/header.php');
//打印出错信息
if(isset($errors)&&!empty($errors)){
	$errors_msg = '<p style="color:red">';
	foreach ($errors as $msg) {
		$errors_msg .= $msg.'<br>';
	}
	echo $errors_msg.'</p>';
}
?>
<div style="text-align: center;margin-top: 200px;">
<h3 style="color: red">用户登录</h3>
<form action="login.php" method="post">
	<p>
		<label for="email">邮箱：</label>
		<input type="email" name="email" id="email" value="<?php echo isset($_POST['email'])?$_POST['email']:'';?>" style="width: 200px;height: 30px;">
	</p>
	<p>
		<label for="password">密码：</label>
		<input type="password" name="password" id="password" value="<?php echo isset($_POST['password'])?$_POST['password']:'' ?>" style="width: 200px;height: 30px;">
	</p>
	<p><button type="submit" name="submit" id="submit" style="background-color: lightgreen;color: white;width: 50px;height: 30px">登录</button></p>
</form>
</div>
<?php include('inc/footer.php');?>