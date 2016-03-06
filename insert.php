<?php
if (!isset($_POST['submit'])) {
	exit('非法访问!');
}
include 'conn.php';
$gr_id = $_POST['gr'];
$ip_id = $_POST['ip'];
$course_id = $_POST['course'];
$percent = $_POST['percent'];
$new_gr = $_POST['new_gr'];
$new_ip = $_POST['new_ip'];
$new_course = $_POST['new_course'];
$new_gr_detail = $_POST['new_gr_detail'];
//echo $gr_id;
if ($gr_id == "new_gr_value") {
	$sql = "INSERT INTO gr (GRName, GRDetail) VALUES ('" . $new_gr . "', '" . $new_gr_detail . "')";
	//echo $sql;
	$check_query1 = mysql_query($sql);
	//print_r($check_query);
	//print_r(mysql_insert_id());
	$sql_gr_id = mysql_insert_id();
} else {
	$sql_gr_id = $gr_id;
	$check_query1 = 1;
}
//echo $sql_gr_id = $gr_id;
if ($ip_id == "new_ip_value") {
	$sql = "INSERT INTO ip (GRID, IPDetail) VALUES ('" . $sql_gr_id . "', '" . $new_ip . "')";
	$check_query2 = mysql_query($sql);
	$sql_ip_id = mysql_insert_id();
} else {
	$sql_ip_id = $ip_id;
	$check_query2 = 1;
}

if ($course_id == "new_course_value") {
	$sql = "INSERT INTO course (CName) VALUES ('" . $new_course . "')";
	$check_query3 = mysql_query($sql);
	$sql_course_id = mysql_insert_id();
} else {
	$sql_course_id = $course_id;
	$check_query3 = 1;
}

if ($check_query3 && $check_query2 && $check_query1) {
	$sql = "INSERT INTO relevance (GRID, IPID, CID, RPercent) VALUES (" . $sql_gr_id . ", " . $sql_ip_id . ", " . $sql_course_id . ", " . $percent . ")";
	$check_query4 = mysql_query($sql);
} else {
	echo "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>课程设计第七组</title><script src='res/jquery-2.1.4.min.js'></script><link rel='stylesheet' href='res/css/bootstrap.min.css'><script src='res/myjs.js'></script><link rel='stylesheet' href='res/mycss.css'></head><body><div class='container'><div style='width:800px;margin-top:25%;' class='center-block'><div class='alert alert-danger myCenter' role='alert'>sql执行失败</div></div></div></body></html>";
}

if ($check_query3 && $check_query2 && $check_query1 && $check_query4) {
	echo "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>课程设计第七组</title><script src='res/jquery-2.1.4.min.js'></script><link rel='stylesheet' href='res/css/bootstrap.min.css'><script src='res/myjs.js'></script><link rel='stylesheet' href='res/mycss.css'></head><body><div class='container'><div style='width:800px;margin-top:25%;' class='center-block'><div class='alert alert-success myCenter' role='alert'>sql执行成功</div></div></div></body></html>";
	Header("refresh:2;url='admin_insert.php'");
} else {
	echo "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>课程设计第七组</title><script src='res/jquery-2.1.4.min.js'></script><link rel='stylesheet' href='res/css/bootstrap.min.css'><script src='res/myjs.js'></script><link rel='stylesheet' href='res/mycss.css'></head><body><div class='container'><div style='width:800px;margin-top:25%;' class='center-block'><div class='alert alert-danger myCenter' role='alert'>sql执行失败</div></div></div></body></html>";
}
//echo $gr_id . "+". $ip_id ."+". $course_id ."+". $percent;
// $sql_gr_id = substr($gr_id, 2, strlen($gr_id));
// //echo $sql_gr_id;
// $sql = "UPDATE gr SET GRName = '" . $gr_name ."' , GRDetail = '" . $gr_detail . "'  WHERE GRID = " . $sql_gr_id;
// //echo $sql;
// $check_query = mysql_query($sql);
// if(mysql_affected_rows()) {
// 	echo "sql执行成功";
// 	Header("refresh:2;url='admin_gr.php'");
// } else {
// 	echo "sql执行失败";
// }

?>