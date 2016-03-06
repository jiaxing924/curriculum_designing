<?php
if (!isset($_POST['submit'])) {
	exit('非法访问!');
}
// $username = htmlspecialchars($_POST['email']);
// $password = MD5($_POST['password']);
$username = $_POST['email'];
$password = $_POST['password'];

include 'conn.php';

$sql = "select UType from user where UName = '" . $username . "' and UPassword = '" . $password . "'";
//echo $sql;
$check_query = mysql_query($sql);
if ($result = mysql_fetch_array($check_query)) {
	//print_r($result);
	if ($result[0] == 2) {
		session_start();
		$_SESSION['username'] = $username;
		$_SESSION['userType'] = $result[0];
		// echo $username,' 欢迎你！进入 <a href="my.php">用户中心</a><br />';
		// echo '点击此处 <a href="login.php?action=logout">注销</a> 登录！<br />';
		// exit;
		echo "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>课程设计第七组</title><script src='res/jquery-2.1.4.min.js'></script><link rel='stylesheet' href='res/css/bootstrap.min.css'><script src='res/myjs.js'></script><link rel='stylesheet' href='res/mycss.css'></head><body><div class='container'><div style='width:800px;margin-top:25%;' class='center-block'><div class='alert alert-success myCenter' role='alert'>登录成功</div></div></div></body></html>";
		Header("refresh:2;url='admin_gr.php'");
		exit;
	} else {
		exit('权限不够！点击此处 <a href="javascript:history.back(-1);">返回</a> 重试');
	}
} else {
	exit('登录失败！点击此处 <a href="javascript:history.back(-1);">返回</a> 重试');
}

?>