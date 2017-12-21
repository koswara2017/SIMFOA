<?php
require_once('admin/inc/navbar_main.php');
include "inc/header.php";
?>
<div class="container">
	<form name="loginform" action="admin/inc/admin_login_exec.php" method="post" id="loginform">
			<div class="col-lg-4 col-lg-offset-4">
				<div class="row">
				<div align="center"><h2 class="form-signin-heading">Admin Login</h2>
				</div> 
				<br>
					<?php
						if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) 
						{
								//print error messages collected during login
								echo '<ul class="err">'; //unordered list formatting (ul)
								foreach($_SESSION['ERRMSG_ARR'] as $msg) 
								{
										echo '<li>',$msg,'</li>'; 
								}
								echo '</ul>';
								unset($_SESSION['ERRMSG_ARR']);
						}
					?>
					<input name="username" type="text" class="form-control" placeholder="Username" required autofocus>
					<input name="password" type="password" class="form-control" placeholder="Password" required>
				<br>
				</div>
				<div class="row">
				  <div class="col-md-4 col-md-offset-4">
					<button class="btn btn-lg btn-primary btn-block" type="submit">Log In</button>
				  </div>
				</div>
			</div>
	</form>
</div>
<?php
include "inc/footer.php";
?>