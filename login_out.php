<?php
if ($_GET['action'] == "logout") {
	session_start();
	unset($_SESSION['username']);
	unset($_SESSION['userType']);
	echo "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>课程设计第七组</title><script src='res/jquery-2.1.4.min.js'></script><link rel='stylesheet' href='res/css/bootstrap.min.css'><script src='res/myjs.js'></script><link rel='stylesheet' href='res/mycss.css'></head><body><div class='container'><div style='width:800px;margin-top:25%;' class='center-block'><div class='alert alert-success myCenter' role='alert'>注销登录成功</div></div></div></body></html>";
	Header("refresh:2;url='index_gr.php'");
	exit;
}

?>