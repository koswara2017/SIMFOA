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
		  					<div class="panel-title ">Approve Blog Post</div>
						</div>
						<div class="content-box-large box-with-header">
							<?php
							include "inc/admin_connection.php"; 
							//include "admin_auth.php";
							IF (isset($_POST['submit_ap'])) : 
							  $arrDEL = array(); 
							  $arrAPP = array(); 
							  FOREACH ($_POST['action'] as $pf_id => $thisACTION) : 
								IF ($thisACTION == "APP") : 
								  $arrAPP[] = $pf_id; 
								ELSE : 
								  $arrDEL[] = $pf_id; 
								ENDIF; 
							  ENDFOREACH; 
							  IF ($arrDEL) : 
								$sql_in = implode(",", $arrDEL); 
								$sql  = " DELETE FROM `pforum` WHERE `pf_id` IN ($sql_in) "; 
								$qry  = mysqli_query($con, $sql) or die("SQL Error: $sql<br>" . mysqli_error($con));
							  ENDIF; 
							  IF ($arrAPP) : 
								$sql_in = implode(",", $arrAPP); 
								$sql  = " UPDATE `pforum` SET `pf_status`=1 WHERE `pf_id` IN ($sql_in) "; 
								$qry  = mysqli_query($con, $sql) or die("SQL Error: $sql<br>" . mysqli_error($con));
							  ENDIF;
							ENDIF; 

							$sql  = " SELECT `pf_id`, `pf_name`,`pf_title`,`pf_ppost`, `pf_username`, DATE_FORMAT(`pf_date`, '%M %D, %Y at %H:%i') as `pf_date` FROM `pforum` "; 
							$sql .= " WHERE `pf_status`=0 ORDER BY `pf_id` "; 
							$qry  = mysqli_query($con, $sql) or die("SQL Error: $sql<br>" . mysqli_error($con)); 
							?>
							List of Requests pending approval:<br>
							<?php
							print "<form method='post' action='{$_SERVER['PHP_SELF']}'>"; 
							print "<table border='2' class='table table-striped table-hover'>"; 
							  print "<thead>"; 
							  print "<tr>"; 
							  print "<th>Approve</td>"; 
							  print "<th>Remove</td>"; 
							  print "<th width=1080>Forwarded Post</td>"; 
							  print "</tr>"; 
							  print "</thead>"; 
							WHILE ($row = mysqli_fetch_array($qry)) : 
							  print "<tr>"; 
							  print "<td><input type='radio' name='action[{$row['pf_id']}]' value='APP'></td>";
							  print "<td><input type='radio' name='action[{$row['pf_id']}]' value='DEL'></td>";
							  print "<td><strong>Title :" . $row['pf_title'] . "</strong>"; 
							  print "<br>". "<strong>Main Post :</strong><br>".$row['pf_ppost'];
							  print "<br>&nbsp;&nbsp;(Submitted by " . $row['pf_name'] . " on " . $row['pf_date'] . ")</td>"; 
							  print "</tr>"; 
							ENDWHILE; 
							print "</table>"; 
							print "<input type='submit' name='submit_ap' value='Process'>"; 
							print "</form>"; 
							?>

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