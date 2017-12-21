<?php
require_once('inc/auth.php');
include "inc/header.php";
?>

<!--NAVIGATION BAR START-->
  <?php require_once('inc/navbar.php'); ?>
<!--NAVIGATION BAR END-->

<div class="container">
	<div class="col-md-6 col-md-offset-3">
		<div class="panel panel-info">
		<div class="panel-heading"><h2>All Events</h2></div>
			<div class="panel-body">
				<p>
				 <?php
				   require_once('admin/inc/upcoming_events.php');
				   ?>                 </p>
				<p> 
					<h4><strong>Past events:  </strong></h4>
					<?php

					require_once('admin/inc/connection.php');
					$nowarray = getdate();
					$year = $nowarray['year'];
					$pdate = $nowarray['mday'];
					$pmonth = $nowarray['mon'];
					$flag=false;

					for($m=1;$m<=$pmonth;$m++)
					{
					for($d=1;$d<=$pday;$d++)
					{
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
							  echo "<a href=\"admin/inc/exclusive_event_page.php?id=".$event_id."\">$event_txt</a><hr/>\n";
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
					 if($flag==false)
					 {echo 'No events';}
					?>   
				</p>
			</div>
		</div>
	</div>
</div>
<?php
include "inc/footer.php";
?>