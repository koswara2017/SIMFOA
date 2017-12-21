<?php 
require_once('admin_auth.php');
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
		  					<div class="panel-title ">Beranda</div>
						</div>
						<div class="content-box-large box-with-header">
							<form action="admin_send_mail_exec.php" method="post">
							 Subject: <input type="text" name="subject"><br><br>
							 <p>Recipient(s)<BR></p>
							<TEXTAREA Name="emails[]" rows="2" cols="50"></TEXTAREA><br><br>
							<p>Your Message<BR></p>
							<TEXTAREA Name="message" rows="20" cols="100"></TEXTAREA>
							<br><br>
							<input type="submit" value="Submit">
							</form>
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