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
		      <a class="navbar-brand" href="#">UJS-管理后台</a>
		    </div>
		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li><a href="admin_gr.php">毕业要求指标点分解矩阵<span class="sr-only">(current)</span></a></li>
		        <li><a href="admin_ip.php">毕业要求指标点达成度测评矩阵</a></li>
		        <li  class="active"><a href="admin_ipcourse.php">课程指标点关联矩阵</a></li>
		        <li><a href="admin_insert.php">添加毕业要求,指标点,课程</a></li>
		      </ul>
		      <ul class="nav navbar-nav navbar-right">
		        <li><a href="#" onclick=""><?php echo $username;?></a></li>
		        <li><a href="login_out.php?action=logout">登出</a></li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
<?php
$check_query = mysql_query("select CID, CName from course");
$course_num = mysql_num_rows($check_query);
//echo $gr_num . "+++";
$it = 0;
$course_list = array();
while ($row = mysql_fetch_array($check_query)) {
	$course_id_list[$it] = $row['CID'];
	$course_name_list[$it] = $row['CName'];
	$it++;
}
?>
	<div  class="gr">
	  <table class="table table-bordered">
		<tr style="height:30px;" id="gr_sel_num" data-value= <?php echo $it;?>>
			<td class="myCenter not-mouseenter">
				<span style="margin-right:20px;">课程名称</span>
				<select class="selectpicker" data-live-search="true" data-width="150px" data-size="10" id="ipcourse" data-num=<?php echo $course_num;?>>
					<option value='all'>全部</option>
<?php
for ($i = 0; $i < $course_num; $i++) {
	echo "<option  value=" . $course_id_list[$i] . " data-tokens=" . $course_name_list[$i] . ">" . $course_name_list[$i] . "</option>";
}
?>
				</select>
			</td>
			<td class="ip_td_first myCenter not-mouseenter">支撑课程</td>
			<td class="ip_td_second myCenter not-mouseenter">达成度占比(%)</td>
		</tr>
<?php
for ($i = 0; $i < $course_num; $i++) {
	$check_query = mysql_query("select GRID, IPID from relevance where CID =" . $course_id_list[$i]);
	$ip_num = mysql_num_rows($check_query);
	//echo $ip_num . " ++";
	$it = 0;
	$ip_list = array();
	while ($row = mysql_fetch_array($check_query)) {
		$ip_list[$it] = $row['IPID'];
		$gr_list[$it] = $row['GRID'];
		$it++;
	}

	?>
		<tr data-xxoo=<?php echo $course_id_list[$i]?>>
			<td style="padding-top:;" class="myCenter" rowspan=<?php if ($ip_num == 0) {echo ($ip_num + 2);} else {echo ($ip_num + 1);}
	?>><?php echo $course_name_list[$i]?>
				<div class='right' style="margin-left:-80px;">
					<a href='javascript:void(0)'>
						<span class='blue margin_left_30 glyphicon glyphicon-pencil' onclick="$('#updateCourse').modal('toggle');$('#update_course_id').val($(event.target).closest('tr').attr('data-xxoo'));">
						</span>
					</a>
					<a href='javascript:void(0)'>
						<span class='red margin_left_30 glyphicon glyphicon-trash' onclick="$('#deleteCourseModal').modal('toggle');$('#del_course_id').val($(event.target).closest('tr').attr('data-xxoo'));">
						</span>
					</a>
				</div>
			</td>
		</tr>
<?php
if ($ip_num == 0) {
		echo "<tr data-xxoo=" . $course_id_list[$i] . "><td class='ip_td_first myCenter'></td><td class='ip_td_second myCenter'></td></tr>";
	}
	for ($j = 0; $j < $ip_num; $j++) {
		// $check_query = mysql_query("select GRID from ip where IPID =" . $ip_list[$j]);
		// $row = mysql_fetch_array($check_query);
		$sql = "select RPercent from relevance where IPID =" . $ip_list[$j] . " AND GRID = " . $gr_list[$j];
		$check_query = mysql_query($sql);
		//echo $sql . "<br>";
		$row = mysql_fetch_array($check_query);
		//echo $row['RPercent'];
		$sql = "select IPDetail from ip where IPID =" . $ip_list[$j];
		$check_query = mysql_query($sql);
		$row1 = mysql_fetch_array($check_query);

		$sql = "SELECT DISTINCT(IPID) from relevance where GRID = " . $gr_list[$j];
		$check_query = mysql_query($sql);
		//echo $sql;
		$it = 0;
		while ($row6 = mysql_fetch_array($check_query)) {
			$ip_location[$it] = $row6['IPID'];
			$it++;
		}
		//print_r($ip_location);
		//echo "<br>";
		$location_ip = 0;
		for ($h = 0; $h < count($ip_location); $h++) {
			//echo "ipLoc" . $ip_location[$h] . "iplist" . $;
			if ($ip_location[$h] == $ip_list[$j]) {
				$location_ip = $h;
				break;
			}
		}

		?>
	<tr data-xxoo=<?php echo $course_id_list[$i]?>>
		<td class="ip_td_first myCenter"><span data-toggle="tooltip" data-placement="left" title=<?php echo $row1['IPDetail']?>><?php echo "指标点" . ($j + 1) . "." . ($location_ip + 1)?></span>
			<!-- <div class='right' style="margin-left:-80px;">
				<a href='javascript:void(0)'>
					<span class='blue margin_left_30' onclick="$('#updateCourse').modal('toggle');$('#update_course_id').val($(event.target).closest('td').attr('id'));">修改
					</span>
				</a>
				<a href='javascript:void(0)'>
					<span class='red margin_left_30' onclick="$('#deleteCourseModal').modal('toggle');$('#del_course_fromid').val($(event.target).closest('td').attr('data-fromid'));$('#del_course_id').val($(event.target).closest('td').attr('id'));">删除
					</span>
				</a>
			</div> -->
		</td>
		<td class="ip_td_second myCenter"><?php echo $row['RPercent'];?></td>
	</tr>
<?php
}

}

?>
			</table>
		</div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="deleteCourseModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title myCenter" id="myModalLabel">警告</h4>
	      </div>
	      <div class="alert alert-danger myCenter" role="alert">
	      		确定要删除该课程吗
	      </div>
	      <div class="modal-footer">
	      	<form method="get" action="get.php">
	      		<input type="hidden" id="del_course_id" value="" name="del_course_id">
	      		<input type="hidden" id="del_course_action" value="del_Ucourse" name="action">
	      		<button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
	        	<button type="submit" class="btn btn-primary" name="submit">确定</button>
	      	</form>
		  </div>
	    </div>
	  </div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="updateCourse" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title myCenter" id="myModalLabel">修改课程名称</h4>
	      </div>
	      <form class="form-horizontal" method="post" action="update_course.php" onSubmit="">
		      <div class="modal-body">
				  <div class="form-group">
				    <label for="inputEmail3" class="col-sm-2 control-label">课程名称</label>
				    <div class="col-sm-10">
				      <input type="hidden" id="update_course_id" value="" name="update_course_id">
				      <input class="form-control" placeholder="名称" name="update_course_name" id="update_course_name">
				    </div>
				  </div>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
		        <button type="submit" class="btn btn-primary" name="submit">确定</button>
		      </div>
  		  </form>
	    </div>
	  </div>
	</div>



	</div>
</body>
</html>