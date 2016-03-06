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
		        <li class="active"><a href="admin_ip.php">毕业要求指标点达成度测评矩阵</a></li>
		        <li><a href="admin_ipcourse.php">课程指标点关联矩阵</a></li>
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
$check_query = mysql_query("select DISTINCT(GRID) from relevance");
$gr_num = mysql_num_rows($check_query);
//echo $gr_num . "+++";
$it = 0;
$gr_list = array();
while ($row = mysql_fetch_array($check_query)) {
	$gr_list[$it] = $row['GRID'];
	$it++;
}
?>
	<div  class="gr">
	  <table class="table table-bordered">
		<tr id="gr_sel_num" data-value= <?php echo $it;?>>
			<td class="myCenter not-mouseenter">
				<span style="margin-right:20px;">指标点</span>
				<select id="ip_sel" class="selectpicker" data-width='120px'>
				  <option value="all">全部</option>
<?php
for ($i = 0; $i < $gr_num; $i++) {
	echo "<option value=" . ($i + 1) . ">毕业要求 " . ($i + 1) . "</option>";
}
?>
				</select>
			</td>
			<td class="ip_td_first myCenter not-mouseenter">支撑课程</td>
			<td class="ip_td_second myCenter not-mouseenter">达成度占比(%)</td>
		</tr>
<?php
for ($i = 0; $i < $gr_num; $i++) {
	$check_query = mysql_query("select DISTINCT(IPID) from relevance where GRID =" . $gr_list[$i]);
	$ip_num = mysql_num_rows($check_query);
	//echo $ip_num . " ++";
	$it = 0;
	$ip_list = array();
	while ($row = mysql_fetch_array($check_query)) {
		$ip_list[$it] = $row['IPID'];
		$it++;
	}
	for ($j = 0; $j < $ip_num; $j++) {
		$sql = "select CID from relevance where GRID =" . $gr_list[$i] . " AND IPID = " . $ip_list[$j];
		//echo $sql;
		$check_query = mysql_query($sql);
		$CID_num = mysql_num_rows($check_query);
		$check_query = mysql_query("select IPDetail from ip where GRID = " . $gr_list[$i]);
		$it = 0;
		while ($row = mysql_fetch_array($check_query)) {
			$ip_detail[$it] = $row[0];
			$it++;
		}
		$update_per_id = ($i + 1) . "." . ($j + 1);
		?>
			<tr class="sel1" data-sel= <?php echo ($i + 1)?>>
				<td class="sel2 myCenter" id=<?php echo $update_per_id?> rowspan=<?php echo $CID_num + 1?>><?php echo "<br><b>指标点 " . ($i + 1) . "." . ($j + 1) . " :</b><br><br>" . $ip_detail[$j]?></td>
			</tr>
<?php
$check_query = mysql_query("select CID, RPercent from relevance where GRID =" . $gr_list[$i] . " AND IPID = " . $ip_list[$j]);
		$it = 0;
		while ($row = mysql_fetch_array($check_query)) {
			$CID[$it]['id'] = $row['CID'];
			$CID[$it]['percent'] = $row['RPercent'];
			$course_name = mysql_query("select CName from course where CID =" . $row[0]);
			$res_course_name = mysql_fetch_array($course_name);
			$CID[$it]['name'] = $res_course_name[0];
			$it++;
		}
		$from_id = $gr_list[$i] . "." . $ip_list[$j];
		//print_r($CID);
		for ($k = 0; $k < $CID_num; $k++) {
			echo "<tr data-sel=" . ($i + 1) . "><td class='ip_td_first myCenter' data-fromid=" . $from_id . " id= " . $CID[$k]['id'] . ">" . $CID[$k]['name'] . "</a><a href='javascript:void(0)'><span class='red right glyphicon glyphicon-trash margin_left_30' onclick=$('#deleteCourseModal').modal('toggle');$('#del_course_fromid').val($(event.target).closest('td').attr('data-fromid'));$('#del_course_id').val($(event.target).closest('td').attr('id'));></span></a></div></td><td class='ip_td_second' style='padding-left: 60px;'>" . $CID[$k]['percent'] . "<div class='right'><a href='javascript:void(0)'><span class='blue glyphicon glyphicon-pencil margin_left_30' onclick=$('#updatePercent').modal('toggle');$('#update_percent_id').val($(event.target).parent().parent().parent('td.ip_td_second').prev('td.ip_td_first').attr('id'));$('#update_percent_from').val($(event.target).parent().parent().parent().parent().prevAll('.sel1').children('td').attr('id'));></span></a></div></td></tr>";
		}
	}
}
?>
			</table>
		</div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="updateCourse" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title myCenter" id="myModalLabel">修改课程</h4>
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
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
		      </div>
  		  </form>
	    </div>
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
				<input type="hidden" id="del_course_fromid" value="" name="del_course_fromid">
	      		<input type="hidden" id="del_course_id" value="" name="del_course_id">
	      		<input type="hidden" id="del_course_action" value="del_course" name="action">
	      		<button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
	        	<button type="submit" class="btn btn-primary" name="submit">确定</button>
	      	</form>
		  </div>
	    </div>
	  </div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="updatePercent" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title myCenter" id="myModalLabel">修改课程达成度占比</h4>
	      </div>
	      <form class="form-horizontal" method="post" action="update_percent.php" onSubmit="">
		      <div class="modal-body">
				  <div class="form-group">
				    <label for="inputEmail3" class="col-sm-2 control-label">课程占比</label>
				    <div class="col-sm-10">
				      <input type="hidden" id="update_percent_id" value="" name="update_percent_id">
				      <input type="hidden" id="update_percent_from" value="" name="update_percent_from">
				      <input class="form-control" placeholder="百分比" name="update_percent_name" id="update_percent_name">
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

</body>
</html>