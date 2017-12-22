<?php
require_once('inc/auth.php');
include "inc/header.php";
?>

<!--NAVIGATION BAR START-->
  <?php require_once('inc/navbar.php'); ?>
<!--NAVIGATION BAR END-->

<div class="container">
  <div class="col-md-4 col-md-offset-4">
  <br>
  </div>
</div>
<div class="container">
    <div class="col-md-10  col-md-offset-1">
		<div class="row">
			<div class="col-md-12" align="center">
			<!--WELCOME PANEL START-->
			    <div class="panel panel-default">
					<div class="panel-heading">
					  <h3>Welcome <b><?php $username=$_SESSION['SESS_USERNAME']; echo $username; ?></b></h3>
					</div>
					<div class="panel-body">
					  <p>You may use the navbar at the top to browse various links.<br>Once an alumni has logged in and updated their profile, that alumni will appear in the database. Public components of the profile like Name and Roll Number will be visible to all.
					<p>To help us and the alumni communicate better amongst each other, kindly keep your profile updated. Posts to the alumni blog can be submitted and will appear as a part of the blog once the admin approves them.</p>
					</div>
			    </div>
			</div>
		</div>
      <!--WELCOME PANEL END-->
		<div class="row">
		  <!--EVENTS PANEL START-->
			<div class="col-md-4 col-md-offset-4">
			  <div class="panel panel-default" align="center">
				<div class="panel-heading">
				  <h3>Events</h3>
				</div>
				<div class="panel-body">
				   <?php
					  include 'admin/inc/upcoming_events.php'
					  ?>
				  <br><br>
				  <a href="allevents.php">View all events</a>
				</div>
			  </div>
			</div>
		  <!--EVENTS PANEL END-->
		</div>
    </div>
</div>
  
<?php
include "inc/footer.php";
?>