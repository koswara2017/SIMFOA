<?php
	require('inc/auth.php');
	require_once('admin/inc/stringops.php');
	$param_batch="";
	$param_roll="";
	$param_name="";
	$num_param=count($_GET);
	
	if ($num_param>0)
	{
		$param_batch=clean($_GET['param_batch']);
		$param_roll=clean($_GET['param_roll']);
		$param_name=clean($_GET['param_name']);
	}

	?>
<?php
include "inc/header.php";
?>

<!--NAVIGATION BAR START-->
  <?php require_once('inc/navbar.php'); ?>
<!--NAVIGATION BAR END-->

<div class="container">
  	<form action="<?php  echo $_SERVER['PHP_SELF'] ?>" method="GET" class="form-inline">
  		<div class="row">
			<div class="container col-md-12 well" style="margin-top: 75px;" align="left">
				<div class="col-md-3"><input type="text" class="form-control" name="param_name" placeholder="Name" value="<?php echo $param_name ?>"/></div>
				<div class="col-md-3"><input type="text" class="form-control" name="param_batch" placeholder="Batch" value="<?php  echo $param_batch ?>"/></div>
				<div class="col-md-3"><input type="text" class="form-control" name="param_roll" placeholder="Roll Num" value="<?php  echo $param_roll ?>"/></div>
				<div class="col-md-2" align="center"><input name="submit" class="btn btn-primary" type="submit" value="Search"></div>
    </form>
    <div class="col-md-1" align="left"><button type="button" class="btn btn-primary" onclick="clear1()">Clear</button></div>
			</div>
      	</div>

  	<div class="row">
		<div class="col-md-12 panel">
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
				  </tr>
				</thead>
				<?php


				$flag=false;
				
				if($num_param>0)
				{
					require('admin/inc/connection.php');
					
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
					}elseif($param_roll=="" and $param_batch=="" and $param_name!="")
					{
						$qry="SELECT * FROM $table WHERE `name` LIKE '%".$param_name."%' ";
						$flag=true;
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
							?>
				  <tr>
					<td><span class="c1"><?php  echo $i+1; ?></span></td>
					<td><span class="c1"><a href="<?php  echo 'profile.php?param='.$roll; ?>"><?php  echo $name; ?></a></span></td>
					<td><span class="c1"><?php  echo $roll; ?></span></td>
					<td><span class="c1"><?php  echo $batch; ?></span></td>
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

<?php
include "inc/footer.php";
?>