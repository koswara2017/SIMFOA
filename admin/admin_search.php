<?php
error_reporting (0);
	require('inc/admin_auth.php');
	require_once('inc/stringops.php');
	$param_batch="";
	$param_roll="";
	$param_name="";
	$param_active="";
	$del="";
	$num_param=count($_GET);
	
	if ($num_param>0)
	{
		$param_batch=clean($_GET['param_batch']);
		$param_roll=clean($_GET['param_roll']);
		$param_name=clean($_GET['param_name']);
		$param_active=clean($_GET['param_active']);
		$del=clean($_GET['del']);
	}

	?>
  	<script type="text/javascript">
  		function clear1()
		{
			window.location.href='./search.php';
		}
  	</script>

<?php
include "inc/header.php";
?>
    	<div class="row">
		  <div class="col-md-2">
<?php
include "inc/sidebar.php";
?>
		  </div>
		<div class="page-content">
			<div class="col-md-10">
	  			<div class="row">
	  				<div class="col-md-12 panel-info">
			  			<div class="content-box-header panel-heading">
		  					<div class="panel-title ">Search Alumni Database</div>
						</div>
						
						<div class="content-box-large box-with-header">
						<?php 
								if(count($_GET)>0)
								{  
								  if($_GET['del']=='success')
									echo '<div class="alert alert-success"><span class="glyphicon glyphicon-ok-sign"></span> Berhasil Menghapus Data Alumni </div>';
								}
						?>
							<?php 
									if(count($_GET)>0)
									{  
									  if($_GET['del']=='success')
										echo '<div class="alert alert-success"><span class="glyphicon glyphicon-ok-sign"></span> Berhasil Menghapus Data Alumni </div>';
									}
							?>

								<div class="row">
								
									<div class="col-md-2 col-md-offset-5 well" align="center">
									<form action="<?php  echo $_SERVER['PHP_SELF'] ?>" method="GET" class="form-inline">
										
											<input type="text" class="form-control" name="param_name" placeholder="Name" value="<?php echo $param_name ?>"/>
											<input type="text" class="form-control" name="param_batch" placeholder="Batch" value="<?php  echo $param_batch ?>"/>
											<input type="text" class="form-control" name="param_roll" placeholder="Roll Num" value="<?php  echo $param_roll ?>"/>
											<input type="text" class="form-control" name="param_active" placeholder="Active" value="<?php  echo $param_active ?>"/>
											<input name="submit" class="btn btn-primary" type="submit" value="Search">
											<button type="button" class="btn btn-primary" onclick="clear1()">Clear</button>
										</form>
										</div>
								</div>

							<div class="row">
								<div class="col-md-10 col-md-offset-1 panel">
									<div class="panel-header">
										<h3><span class="glyphicon glyphicon-search"></span> Search Results</h3>
									</div>
									<div class="panel-body">
										<table class="table table-striped table-hover">
										<thead>
										  <tr>
											<th>Index No.</th>
											<th>Name</th>
											<th>Roll Number</th>
											<th>Batch</th>
											<th>Active</th>
											<th>Aksi</th> 
										  </tr>
										</thead>
										<?php


										$flag=false;
										if($num_param>0)
										{
											require('inc/connection.php');
											
											if($param_roll=="" and $param_batch!="" and $param_name=="")
											{
												$qry="SELECT * FROM $table WHERE batch='$param_batch'";
												$flag=true;
											}

											elseif($param_batch=="" and $param_roll!="" and $param_name=="")
											{
												$qry="SELECT * FROM $table WHERE username='$param_roll'";
												$flag=true;
											}

											elseif($param_roll!="" and $param_batch!="" and $param_name=="")
											{
												$qry="SELECT * FROM $table WHERE batch='$param_batch' AND username='$param_roll'";
												$flag=true;
											}elseif($param_roll=="" and $param_batch!="" and $param_name!="")
											{
												$qry="SELECT * FROM $table WHERE batch='$param_batch' AND `name` LIKE '%".$param_name."%' ";
												$flag=true;
											}

											elseif($param_batch=="" and $param_roll!="" and $param_name!="")
											{
												$qry="SELECT * FROM $table WHERE username='$param_roll' AND `name` LIKE '%".$param_name."%'" ;
												$flag=true;
											}

											elseif($param_roll!="" and $param_batch!="" and $param_name!="")
											{
												$qry="SELECT * FROM $table WHERE batch='$param_batch' AND username='$param_roll'  AND `name` LIKE '%".$param_name."%' ";
												$flag=true;
											}
											elseif($param_roll=="" and $param_batch=="" and $param_name!="")
											{
												$qry="SELECT * FROM $table WHERE `name` LIKE '%".$param_name."%' ";
												$flag=true;
											}

											if($flag && $param_active!="")
											{
												$qry.=" AND active=$param_active";
											}

											if($flag)
											{
												$result=mysqli_query($con,$qry);
												$num=mysqli_num_rows($result);

												if ($num==0) 
												{
													echo '<div class="alert alert-warning">No matches found</div>';
												}

												mysqli_close($con);
												$i=0;
												while ($i < $num)
												{
													$active=mysqli_result($result, $i, "active");
													$name=mysqli_result($result,$i,"name");
													$roll=mysqli_result($result,$i,"username");
													$batch=mysqli_result($result,$i,"batch");
													$active=mysqli_result($result,$i,"active");
													?>
										  <tr>
											<td><span class="c1"><?php  echo $i+1; ?></span></td>
											<td><span class="c1"><a href="<?php  echo 'admin_profile.php?param='.$roll; ?>"><?php  echo $name; ?></a></span></td>
											<td><span class="c1"><?php  echo $roll; ?></span></td>
											<td><span class="c1"><?php  echo $batch; ?></span></td>
											<td><span class="c1"><?php  echo $active; ?></span></td>
											<td><span class="c1"><a href="<?php  echo 'admin_delete.php?param='.$roll; ?>">Hapus</a></span></td>
										  </tr>
											<?php
													$i++;
												}

											}

										}

										?>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
	  			</div>
	  	<!--  Page content -->
			</div>
		</div>
    </div>
<?php
include "inc/footer.php";
?>