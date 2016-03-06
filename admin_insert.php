<?php
include 'conn.php';
session_start();

if (!isset($_SESSION['username'])) {
	echo "非法访问";
	header("refresh:2;url='index_gr.php");
	exit();
}
$username = $_SESSION['username'];
$userType = $_SESSION['userType'];
// $user_query = mysql_query("select * from user_list where userid = '$userid' limit 1");
// $row = mysql_fetch_array($user_query);

function GBsubstr($string, $start, $length) {
	if (strlen($string) > $length) {
		$str = null;
		$len = $start + $length;
		for ($i = $start; $i < $len; $i++) {
			if (ord(substr($string, $i, 1)) > 0xa0) {
				$str .= substr($string, $i, 2);
				$i++;
			} else {
				$str .= substr($string, $i, 1);
			}
		}
		return $str . '...';
	} else {
		return $string;
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>课程设计第七组</title>
	<script src="res/jquery-2.1.4.min.js"></script>
	<link rel="stylesheet" href="res/css/bootstrap.min.css">
	<script src="res/myjs.js"></script>
	<link rel="stylesheet" href="res/mycss.css">
	<script src="res/js/bootstrap.min.js"></script>
	<script src="res/bootstrap-select.js"></script>
	<link rel="stylesheet" href="res/bootstrap-select.css">
</head>
<body>
	<div class="container">
		<nav class="navbar navbar-default navbar-fixed-top">
		  <div class="container">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		         <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#">UJS-管理后台</a> </div>
		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li><a href="admin_gr.php">毕业要求指标点分解矩阵<span class="sr-only">(current)</span></a></li>
		        <li><a href="admin_ip.php">毕业要求指标点达成度测评矩阵</a></li>
		        <li><a href="admin_ipcourse.php">课程指标点关联矩阵</a></li>
		        <li   class="active"><a href="admin_insert.php">添加毕业要求,指标点,课程</a></li>
		      </ul>
		      <ul class="nav navbar-nav navbar-right">
		        		<li><a href="#" onclick=""><?php echo $username;?></a></li>
		        <li><a href="login_out.php?action=logout">登出</a></li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
		<div class="gr2">
			<form method="post" action="insert.php">
				<div class="form-group" style="margin-right:5px;float:left;">
					<select class='selectpicker' data-size='5' data-width='250px' name="gr" id="gr">
						<option value='new_gr_value'>新添加一个毕业要求</option>
<?php
$check_query = mysql_query("select DISTINCT(GRID) from relevance");
$gr_num = mysql_num_rows($check_query);
$it = 0;
while ($row = mysql_fetch_array($check_query)) {
	$gr_id_list[$it] = $row['GRID'];
	$it++;
}
$it = 0;
for ($i = 0; $i < $gr_num; $i++) {
	$check_query = mysql_query("select GRName, GRDetail from gr where GRID = " . $gr_id_list[$i]);
	$res_gr = mysql_fetch_array($check_query);
	$gr_name = mb_substr($res_gr['GRDetail'], 0, 12, 'utf8') . "...";
	echo "<option value=" . $gr_id_list[$i] . " data-subtext=" . $gr_name . ">" . $res_gr['GRName'] . "</option>";
}
?>
					</select>

					<select class="selectpicker" data-width="330px" name="ip" id="ip">
						<option value='new_ip_value'>新添加一个指标点</option>
<?php
for ($i = 0; $i < $gr_num; $i++) {
	$sql = "select * from ip ";
	//echo $sql;
	$check_query = mysql_query($sql);
	$ip_num = mysql_num_rows($check_query);
	$it = 0;
	$lev = 0;
	while ($row = mysql_fetch_array($check_query)) {
		$ip_id[$it] = $row['IPID'];
		$ip_grid[$it] = $row['GRID'];
		$ip_detail[$it] = $row['IPDetail'];
		$it++;
	}
	for ($i = 0; $i < $ip_num; $i++) {
		if ($lev < $ip_grid[$i]) {
			echo "<optgroup label=毕业要求" . $ip_grid[$i] . ">";
			$lev++;
		}
		echo "<option value=" . $ip_id[$i] . " title='指标点 " . $ip_id[$i] . "'>" . mb_substr($ip_detail[$i], 0, 17, 'utf8') . "..." . "</option>";
	}
}
?>
					</select>

					<select class="selectpicker" data-live-search="true" data-width="200px" name="course" id="course">
						<option value='new_course_value'>新添加一个课程</option>
<?php
$sql = "select * from course ";
//echo $sql;
$check_query = mysql_query($sql);
$course_num = mysql_num_rows($check_query);
$it = 0;
while ($row = mysql_fetch_array($check_query)) {
	$course_id[$it] = $row['CID'];
	$course_name[$it] = $row['CName'];
	$it++;
}
for ($i = 0; $i < $ip_num; $i++) {
	echo "<option value=" . $course_id[$i] . " data-tokens=" . $course_name[$i] . ">" . $course_name[$i] . "</option>";
}
?>
					</select>

				</div>
				<div class="form-group" style="display:inline; float:left;">
					<input type="text" class="form-control" id="percent" placeholder="百分比(%)" style="width:100px;display:inline; float:left;margin-left:5px;" name="percent">
				</div>
				<!-- <div style="display:block;float:none;"><br><br><br>
					<span>毕业要求名称:</span><span style="margin-left:18%;">指标点名称:</span><span style="margin-left:28%">课程名称:</span>
				</div> -->
				<div style="display:inline; float:left;">
					<input type="text" class="form-control" id="new_gr" placeholder="毕业要求名称" style="width:250px;margin-bottom:8px;margin-top:10px;" name="new_gr" style="display:inline;float:left;">
					<textarea class="form-control" rows="5" placeholder="毕业要求描述" name="new_gr_detail" id="new_gr_detail" sytle="display:inline;float:left;width:300px;"></textarea>
				</div>
				<div style="display:inline; float:left;">
					<textarea class="form-control" rows="7" placeholder="指标点描述" name="new_ip" id="new_ip" style="display:inline;float:left;width:330px;margin-top:10px;margin-left:4px;"></textarea>
				</div>
				<div style="display:inline; float:left;margin-left:5px;">
					<input type="text" class="form-control" id="new_course" placeholder="课程名称" style="width:200px;margin-bottom:8px;margin-top:10px;" name="new_course" style="display:inline;float:left;">
				</div>
				<div>
					<button type="submit" class="btn btn-primary" style="margin-left:90%" name="submit">确定</button>
				</div>
			</form>
		</div>
	</div>
</body>
</html>