<?php
    $server = "localhost";	//主机
    $db_username = "root";	//你的数据库用户名
    $db_password = "1234";	//你的数据库密码

    // Create connection
    // Create connection
	$conn = new mysqli($server, $db_username, $db_password);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

    // $con = mysql_connect($server,$db_username,$db_password);//链接数据库
    // if(!$con){
    //     die("can't connect".mysql_error());//如果链接失败输出错误
    // }
    
    // mysql_select_db('test',$con);//选择数据库（我的是test）
?>