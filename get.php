<?php
include 'conn.php';
if ($_GET['action'] == "del_gr") {
	$gr_id = $_GET['del_gr_id'];
	$sql_gr_id = substr($gr_id, 2, strlen($gr_id));
	//echo $sql_gr_id;
	$sql = "DELETE FROM gr WHERE GRID = " . $sql_gr_id;
	//echo $sql;
	$check_query = mysql_query($sql);
	$sql = "DELETE FROM relevance WHERE GRID = " . $sql_gr_id;
	$check_query = mysql_query($sql);
	$sql = "DELETE FROM ip WHERE GRID = " . $sql_gr_id;
	$check_query = mysql_query($sql);
	if (mysql_affected_rows()) {
		echo "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>课程设计第七组</title><script src='res/jquery-2.1.4.min.js'></script><link rel='stylesheet' href='res/css/bootstrap.min.css'><script src='res/myjs.js'></script><link rel='stylesheet' href='res/mycss.css'></head><body><div class='container'><div style='width:800px;margin-top:25%;' class='center-block'><div class='alert alert-success myCenter' role='alert'>sql执行成功</div></div></div></body></html>";
	} else {
		echo "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>课程设计第七组</title><script src='res/jquery-2.1.4.min.js'></script><link rel='stylesheet' href='res/css/bootstrap.min.css'><script src='res/myjs.js'></script><link rel='stylesheet' href='res/mycss.css'></head><body><div class='container'><div style='width:800px;margin-top:25%;' class='center-block'><div class='alert alert-danger myCenter' role='alert'>sql执行失败</div></div></div></body></html>";
	}
	Header("refresh:2;url='admin_gr.php'");
	exit(0);
}

if ($_GET['action'] == "del_ip") {
	$ip_id = $_GET['del_ip_id'];
	$sql = "DELETE FROM ip WHERE IPID = " . $ip_id;
	//echo $sql;
	$check_query = mysql_query($sql);
	$sql = "DELETE FROM relevance WHERE IPID = " . $ip_id;
	$check_query = mysql_query($sql);
	if (mysql_affected_rows()) {
		echo "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>课程设计第七组</title><script src='res/jquery-2.1.4.min.js'></script><link rel='stylesheet' href='res/css/bootstrap.min.css'><script src='res/myjs.js'></script><link rel='stylesheet' href='res/mycss.css'></head><body><div class='container'><div style='width:800px;margin-top:25%;' class='center-block'><div class='alert alert-success myCenter' role='alert'>sql执行成功</div></div></div></body></html>";
	} else {
		echo "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>课程设计第七组</title><script src='res/jquery-2.1.4.min.js'></script><link rel='stylesheet' href='res/css/bootstrap.min.css'><script src='res/myjs.js'></script><link rel='stylesheet' href='res/mycss.css'></head><body><div class='container'><div style='width:800px;margin-top:25%;' class='center-block'><div class='alert alert-danger myCenter' role='alert'>sql执行失败</div></div></div></body></html>";
	}
	Header("refresh:2;url='admin_gr.php'");
	exit(0);
}

if ($_GET['action'] == "del_course") {
	$course_id = $_GET['del_course_id'];
	$course_fromid = $_GET['del_course_fromid'];
	//echo $course_fromid;
	$array_id = explode('.', $course_fromid);
	//$sql = "DELETE FROM course WHERE CID = " . $course_id;
	//echo $sql;
	//$check_query = mysql_query($sql);
	$sql = "DELETE FROM relevance WHERE CID = " . $course_id . " AND GRID = " . $array_id[0] . " AND IPID = " . $array_id[1];
	//echo $sql;
	$check_query = mysql_query($sql);
	if (mysql_affected_rows()) {
		echo "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>课程设计第七组</title><script src='res/jquery-2.1.4.min.js'></script><link rel='stylesheet' href='res/css/bootstrap.min.css'><script src='res/myjs.js'></script><link rel='stylesheet' href='res/mycss.css'></head><body><div class='container'><div style='width:800px;margin-top:25%;' class='center-block'><div class='alert alert-success myCenter' role='alert'>sql执行成功</div></div></div></body></html>";
	} else {
		echo "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>课程设计第七组</title><script src='res/jquery-2.1.4.min.js'></script><link rel='stylesheet' href='res/css/bootstrap.min.css'><script src='res/myjs.js'></script><link rel='stylesheet' href='res/mycss.css'></head><body><div class='container'><div style='width:800px;margin-top:25%;' class='center-block'><div class='alert alert-danger myCenter' role='alert'>sql执行失败</div></div></div></body></html>";
	}
	Header("refresh:2;url='admin_ip.php'");
	exit(0);
}
if ($_GET['action'] == "del_Ucourse") {
	$course_id = $_GET['del_course_id'];
	$sql = "DELETE FROM course WHERE CID = " . $course_id;
	$check_query1 = mysql_query($sql);
	if (!$check_query1) {
		echo "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>课程设计第七组</title><script src='res/jquery-2.1.4.min.js'></script><link rel='stylesheet' href='res/css/bootstrap.min.css'><script src='res/myjs.js'></script><link rel='stylesheet' href='res/mycss.css'></head><body><div class='container'><div style='width:800px;margin-top:25%;' class='center-block'><div class='alert alert-danger myCenter' role='alert'>sql执行失败</div></div></div></body></html>";
		Header("refresh:2;url='admin_ipcourse.php'");
		exit();
	}
	$sql = "DELETE FROM relevance WHERE CID = " . $course_id;
	$check_query2 = mysql_query($sql);
	if (!$check_query2) {
		echo "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>课程设计第七组</title><script src='res/jquery-2.1.4.min.js'></script><link rel='stylesheet' href='res/css/bootstrap.min.css'><script src='res/myjs.js'></script><link rel='stylesheet' href='res/mycss.css'></head><body><div class='container'><div style='width:800px;margin-top:25%;' class='center-block'><div class='alert alert-danger myCenter' role='alert'>sql执行失败</div></div></div></body></html>";
		Header("refresh:2;url='admin_ipcourse.php'");
		exit();
	}
	echo "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>课程设计第七组</title><script src='res/jquery-2.1.4.min.js'></script><link rel='stylesheet' href='res/css/bootstrap.min.css'><script src='res/myjs.js'></script><link rel='stylesheet' href='res/mycss.css'></head><body><div class='container'><div style='width:800px;margin-top:25%;' class='center-block'><div class='alert alert-success myCenter' role='alert'>sql执行成功</div></div></div></body></html>";
	Header("refresh:2;url='admin_ipcourse.php'");
}

?>