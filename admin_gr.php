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
		        <li class="active"><a href="admin_gr.php">毕业要求指标点分解矩阵<span class="sr-only">(current)</span></a></li>
		        <li><a href="admin_ip.php">毕业要求指标点达成度测评矩阵</a></li>
		        <li><a href="admin_ipcourse.php">课程指标点关联矩阵</a></li>
		        <li><a href="admin_insert.php">添加毕业要求,指标点,课程</a></li>
		      </ul>
		      <ul class="nav navbar-nav navbar-right">
		        <li><a href="#" onclick=""><?php echo $username;?></a></li>
		        <li><a href="login_out.php?action=logout">登出</a></li>
			  </ul>
		    </div>
		  </div><!-- /.container-fluid -->
		</nav>
		<div  class="gr">
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
	$gr_name = mysql_query("select GRID, GRName, GRDetail from gr where GRID =" . $gr_list[$i]);
	$res_gr = mysql_fetch_array($gr_name);
	?>
				<tr>
					<td id=<?php echo "gr" . $res_gr['GRID']?> rowspan=<?php echo $ip_num + 1?>><?php echo "<div class='center-block' style='margin-top:40px;margin-left:60px;'><b>毕业要求 " . ($i + 1) . ": </b><b id='sp_gr_name' data-toggle='tooltip' data-placement='left' title=" . $res_gr['GRDetail'] . ">" . $res_gr['GRName'] . "</b></div>"?>
						<p class="myCenter"><a href='javascript:void(0)'><span class="glyphicon glyphicon-pencil mar-top" onclick="$('#updateModal').modal('toggle');var id = $(event.target).closest('td').attr('id');$('#gr_id').val(id);"><!-- 修改 --></span></a><a href='javascript:void(0)'><span class="glyphicon red glyphicon-trash margin_left_30 mar-top" onclick="$('#deleteModal').modal('toggle');var id = $(event.target).closest('td').attr('id');$('#del_gr_id').val(id);"><!-- 删除 --></span></a></p>
					</td>
				</tr>

	<?php
for ($k = 0; $k < $ip_num; $k++) {
		$check_query = mysql_query("select IPDetail, IPID from ip where GRID = " . $gr_list[$i]);
		//print_r($gr_list);
		$it = 0;
		$ip_detail_list = array();
		$ip_id_list = array();
		while ($row = mysql_fetch_array($check_query)) {
			$ip_detail_list[$it] = $row['IPDetail'];
			$ip_id_list[$it] = $row['IPID'];
			$it++;
			//echo $row['IPDetail'];
		}
		echo "<tr id=" . $ip_id_list[$k] . " class='gr_tr'><td class='gr_td'>" . "<b>指标点" . ($i + 1) . "." . ($k + 1) . ": </b>" . $ip_detail_list[$k] . "<div class='right'><a href='javascript:void(0)'><span class='blue margin_left_30 glyphicon glyphicon-pencil' onclick=$('#updateIPModal').modal('toggle');$('#update_ip_id').val($(event.target).closest('tr').attr('id')); ></span></a><a href='javascript:void(0)'><span class='glyphicon red glyphicon-trash margin_left_30' onclick=$('#deleteIPModal').modal('toggle');$('#del_ip_id').val($(event.target).closest('tr').attr('id'));></span></a></div>" . "</td></tr>";
	}
	?>


	<?php
}
?>
			</table>
		</div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title myCenter" id="myModalLabel">修改毕业要求</h4>
	      </div>
	      <form class="form-horizontal" method="post" action="update_gr.php" onSubmit="">
		      <div class="modal-body">
				  <div class="form-group">
				    <label for="inputEmail3" class="col-sm-2 control-label">毕业要求名称</label>
				    <div class="col-sm-10">
				      <input type="hidden" id="gr_id" value="" name="gr_id">
				      <input class="form-control" placeholder="名称" name="gr_name" id="gr_name">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="inputPassword3" id="grDetail" class="col-sm-2 control-label">毕业要求描述</label>
				    <div class="col-sm-10">
				      <textarea class="form-control" rows="3" placeholder="描述" name="gr_detail" id="gr_detail"></textarea>
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

	<!-- Modal -->
	<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title myCenter" id="myModalLabel">警告</h4>
	      </div>
	      <div class="alert alert-danger myCenter" role="alert">
	      		确定要删除该毕业要求吗
	      </div>
	      <div class="modal-footer">
	      	<form method="get" action="get.php">
	      		<input type="hidden" id="del_gr_id" value="" name="del_gr_id">
	      		<input type="hidden" id="del_gr_action" value="del_gr" name="action">
	      		<button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
	        	<button type="submit" class="btn btn-primary" name="submit">确定</button>
	      	</form>
		  </div>
	    </div>
	  </div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="updateIPModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title myCenter" id="myModalLabel">修改指标点</h4>
	      </div>
	      <form class="form-horizontal" method="post" action="update_ip.php" onSubmit="">
		      <div class="modal-body">
				  <div class="form-group">
				    <label for="inputPassword3" id="grDetail" class="col-sm-2 control-label">指标点描述</label>
				    <div class="col-sm-10">
				      <input type="hidden" id="update_ip_id" value="" name="update_ip_id">
				      <textarea class="form-control" rows="3" placeholder="描述" name="ip_detail" id="ip_detail"></textarea>
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

	<!-- Modal -->
	<div class="modal fade" id="deleteIPModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title myCenter" id="myModalLabel">警告</h4>
	      </div>
	      <div class="alert alert-danger myCenter" role="alert">
	      		确定要删除该指标点吗
	      </div>
	      <div class="modal-footer">
	      	<form method="get" action="get.php">
	      		<input type="hidden" id="del_ip_id" value="" name="del_ip_id">
	      		<input type="hidden" id="del_ip_action" value="del_ip" name="action">
	      		<button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
	        	<button type="submit" class="btn btn-primary" name="submit">确定</button>
	      	</form>
		  </div>
	    </div>
	  </div>
	</div>

</body>
</html>