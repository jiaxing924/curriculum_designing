<?php
include 'conn.php';
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
		      <a class="navbar-brand" href="#">UJS</a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li><a href="index_gr.php">毕业要求指标点分解矩阵<span class="sr-only">(current)</span></a></li>
		        <li class="active"><a href="index_ip.php">毕业要求指标点达成度测评矩阵</a></li>
		        <li><a href="index_ipcourse.php">课程指标点关联矩阵</a></li>
		      </ul>
		      <ul class="nav navbar-nav navbar-right">
		        <li><a onclick="$('#myModal').modal('toggle')">登录</a></li>
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
		<div class="gr">
		<table class="table table-bordered">
			<tr id="gr_sel_num" data-value= <?php echo $it;?>>
				<td class="myCenter not-mouseenter">
					<span>指标点</span>
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
		while ($row = mysql_fetch_array($check_query)) {
			$ip_detail[] = $row[0];
		}
		?>
			<tr data-sel= <?php echo ($i + 1)?>>
				<td class="myCenter" rowspan=<?php echo $CID_num + 1?>><br><b><?php echo "指标点 " . ($i + 1) . "." . ($j + 1) . " </b><br><br>  " . $ip_detail[$j]?></td>
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

		//print_r($CID);
		for ($k = 0; $k < $CID_num; $k++) {
			echo "<tr data-sel=" . ($i + 1) . "><td class='ip_td_first myCenter'>" . $CID[$k]['name'] . "</td><td class='ip_td_second myCenter'>" . $CID[$k]['percent'] . "</td></tr>";
		}
	}
}
?>
			</table>
		</div>
	</div>

		<!-- Modal -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title myCenter" id="myModalLabel">登录</h4>
		      </div>
		      <form class="form-horizontal" method="post" action="login.php" onSubmit="">
			      <div class="modal-body">
					  <div class="form-group">
					    <label for="inputEmail3" class="col-sm-2 control-label">用户名</label>
					    <div class="col-sm-10">
					      <input class="form-control" id="inputEmail3" placeholder="Email" name="email">
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="inputPassword3" class="col-sm-2 control-label">密码</label>
					    <div class="col-sm-10">
					      <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password">
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