<?php
if (!isset($_POST['submit'])) {
	exit('非法访问!');
}
include 'conn.php';
$ip_id = $_POST['update_ip_id'];
$ip_detail = $_POST['ip_detail'];
$sql = "UPDATE ip SET IPDetail = '" . $ip_detail . "'  WHERE IPID = " . $ip_id;
//echo $sql;
$check_query = mysql_query($sql);
if (mysql_affected_rows()) {
	echo "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>课程设计第七组</title><script src='res/jquery-2.1.4.min.js'></script><link rel='stylesheet' href='res/css/bootstrap.min.css'><script src='res/myjs.js'></script><link rel='stylesheet' href='res/mycss.css'></head><body><div class='container'><div style='width:800px;margin-top:25%;' class='center-block'><div class='alert alert-success myCenter' role='alert'>sql执行成功</div></div></div></body></html>";
	Header("refresh:2;url='admin_gr.php'");
} else {
	echo "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>课程设计第七组</title><script src='res/jquery-2.1.4.min.js'></script><link rel='stylesheet' href='res/css/bootstrap.min.css'><script src='res/myjs.js'></script><link rel='stylesheet' href='res/mycss.css'></head><body><div class='container'><div style='width:800px;margin-top:25%;' class='center-block'><div class='alert alert-danger myCenter' role='alert'>sql执行失败</div></div></div></body></html>";
}
?>