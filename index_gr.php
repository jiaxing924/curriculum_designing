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
</head>
<body style="background-color:#fff;">
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
		        <li class="active"><a href="index_gr.php">毕业要求指标点分解矩阵<span class="sr-only">(current)</span></a></li>
		        <li><a href="index_ip.php">毕业要求指标点达成度测评矩阵</a></li>
		        <li><a href="index_ipcourse.php">课程指标点关联矩阵</a></li>
		      </ul>
		      <ul class="nav navbar-nav navbar-right">
		        <li><a href="#" onclick="$('#myModal').modal('toggle')">登录</a></li>
		        <!-- Button trigger modal -->
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
		<div  class="gr" >
		<table class="table table-bordered">
			<tr>
				<td class="myCenter not-mouseenter">毕业要求</td>
				<td class="gr_td myCenter not-mouseenter">指标点</td>
			</tr>
<?php
$check_query = mysql_query("select DISTINCT(GRID) from relevance");
$gr_num = mysql_num_rows($check_query);
$it = 0;
while ($row = mysql_fetch_array($check_query)) {
	$gr_list[$it] = $row['GRID'];
	$it++;
}
//echo $gr_num;
for ($i = 0; $i < $gr_num; $i++) {
	$sql = "select DISTINCT(IPID) from relevance where GRID = " . $gr_list[$i];
	//echo $sql;
	$check_query = mysql_query($sql);
	$ip_num = mysql_num_rows($check_query);
	$it = 0;
	while ($row = mysql_fetch_array($check_query)) {
		$ip_list[$it] = $row['IPID'];
		$it++;
	}
	//echo $ip_num;
	$gr_name = mysql_query("select GRName from gr where GRID =" . $gr_list[$i]);
	$gr_detail = mysql_query("select GRDetail from gr where GRID =" . $gr_list[$i]);
	$res_gr_name = mysql_fetch_array($gr_name);
	$res_gr_detail = mysql_fetch_array($gr_detail);
	?>
			<tr>
				<td class="myCenter" rowspan=<?php echo $ip_num + 1?>><br><b><?php echo "毕业要求" . ($i + 1) . " " . $res_gr_name[0] . ": </b><br>" . $res_gr_detail[0]?></td>
			</tr>
<?php
for ($k = 0; $k < $ip_num; $k++) {
		$check_query = mysql_query("select IPDetail from ip where GRID = " . $gr_list[$i]);
		//print_r($gr_list);
		$it = 0;
		$ip_detail_list = array();
		while ($row = mysql_fetch_array($check_query)) {
			$ip_detail_list[$it] = $row['IPDetail'];
			$it++;
			//echo $row['IPDetail'];
		}
		echo "<tr class='gr_tr'><td class='gr_td'><b>" . "指标点" . ($i + 1) . "." . ($k + 1) . ": </b>" . $ip_detail_list[$k] . "</td></tr>";
	}
	?>
<?php

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