 <?php
  require_once('inc/admin_auth.php'); 
 ?>
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
		  					<div class="panel-title ">All Events</div>
						</div>
						<div class="content-box-large box-with-header">
							<p>
								<?php
								   require_once('inc/upcoming_events.php');
								?>                 
							</p>
							<p> <h4><strong>Past events:  </strong></h4>
								<?php
								require_once('inc/connection.php');
								$nowarray = getdate();
								$year = $nowarray['year'];
								$pdate = $nowarray['mday'];
								$pmonth = $nowarray['mon'];
								$flag=false;

								for($m=1;$m<=$pmonth;$m++){
								for($d=1;$d<=$pday;$d++){
								$getEvent_sql = "SELECT id, event_title, event_venue, event_shortdesc FROM $table_cal WHERE month(event_start) = '".$m."' AND dayofmonth(event_start) = '".$d."' AND year(event_start) = '".$year."' ORDER BY event_start";
									 $getEvent_res = mysqli_query($con, $getEvent_sql) or die('An error has occured!');
									 if (mysqli_num_rows($getEvent_res) > 0)
									 {
										 echo "<p align=\"left\"><em>$d/$m/$year 's Events:</em></p>";
										 while($ev = mysqli_fetch_array($getEvent_res, MYSQLI_ASSOC))
										 {
										   $event_txt = "<ul>";
										   $event_title = stripslashes($ev["event_title"]);
										   $event_txt .= "<li type=\"circle\">".$event_title."</br></li>";

										 $event_txt .="</ul>";
										 $event_id = $ev['id'];

										 //mysql_free_result($getEvent_res);
										 if($event_txt!="")
										  {
										  echo "<a href=\"inc/admin_exclusive_event_page.php?id=".$event_id."\">$event_txt</a><hr/>\n";
										  $flag=true;
										  }
										 }
									 }
										 else 
										 {
											$event_txt = "";
										 }



								}
								}
								if($flag==false){
									echo 'No events';
								}
								?>   
							</p>
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