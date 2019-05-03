<?php
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','1234');
define('DB_NAME','php');
define('DB_CHAR','utf8');

$dbc = mysqli_connect(DB_HOST,DB_USER,DB_PASS);
if(mysqli_connect_errno($dbc)){
	echo '连接失败'.mysqli_connect_error($dbc);
}
mysqli_select_db($dbc,DB_NAME);
mysqli_set_charset($dbc,DB_CHAR);