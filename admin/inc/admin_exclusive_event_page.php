<?php 
require('inc/admin_auth.php');
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
		  					<div class="panel-title ">Event Detail</div>
						</div>
						<div class="content-box-large box-with-header">
							<div class="panel-heading">
								<h2><?php
									   require 'inc/connection.php';
									   $id= $_GET['id'];
									   $getTitle_sql = "SELECT event_title FROM $table_cal WHERE id = '".$id."' ORDER BY event_start";
									  $getTitle_res = mysqli_query($con, $getTitle_sql) or die(mysqli_error($con));
									  $title = @mysqli_fetch_array($getTitle_res, MYSQLI_ASSOC)  ;
									  echo strtoupper($title["event_title"]);
									  ?>
								 </h2>
							</div>
							<div class="panel-body">
							<?php

							require('inc/connection.php');

							$id=$_GET['id'];

							$getEvent_sql = "SELECT event_title, event_venue, event_shortdesc,event_start, date_format(event_start, '%l:%i %p') as fmt_time, date_format(event_start, '%D %M %Y') as fmt_date, event_invite_batch, event_invite_dept, batch_lower, batch_upper FROM $table_cal WHERE id = '".$id."' ORDER BY event_start";
								 $getEvent_res = mysqli_query($con, $getEvent_sql) or die('An error has occured!');
								 if (mysqli_num_rows($getEvent_res) == 1 )
								 {
									 $event_txt = "";
									 $ev = @mysqli_fetch_array($getEvent_res, MYSQLI_ASSOC)  ;
									 $event_title = stripslashes($ev["event_title"]);
									 $event_venue = stripslashes($ev["event_venue"]);
									 $event_shortdesc = stripslashes($ev["event_shortdesc"]);
									 $fmt_time = $ev['fmt_time'];
									 $fmt_date = $ev['fmt_date'];
									 $inv_batch = $ev["event_invite_batch"];
									 $inv_branch = $ev["event_invite_dept"];
									 $batchlower = $ev["batch_lower"];
									 $batchupper = $ev["batch_upper"];
									 if(isset($inv_batch) && !empty($inv_batch))
									 {
									  $event_txt .= "<strong><em>Date:   </em></strong>".$fmt_date."</br><strong><em>Time:   </em></strong>".$fmt_time."<br/><strong><em>Venue:   </em></strong>".$event_venue."<br/><strong><em>Description:     </em></strong>".$event_shortdesc."<br/><strong><em>Invitees:     </em></strong>Batch - ".$inv_batch."  Department(s) - ".$inv_branch."" ;
									  $event_txt .="";
									 }
									 else
									 {
									  $event_txt .= "<strong><em>Date:   </em></strong>".$fmt_date."</br><strong><em>Time:   </em></strong>".$fmt_time."<br/><strong><em>Venue:   </em></strong>".$event_venue."<br/><strong><em>Description:     </em></strong>".$event_shortdesc."<br/><strong><em>Invitees:     </em></strong>Batches - ".$batchlower." - ".$batchupper."  Department(s) - ".$inv_branch."" ;
									  $event_txt .="";
									 }

								 }
								 else
								 {
									 $event_txt = "";
								 }

								 if ($event_txt != "")
								 {
									  echo $event_txt;
								 }
							?>
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