<?php
        //Start session
        session_start();        

        if(isset($_SESSION['SESS_USERNAME']) && (trim($_SESSION['SESS_USERNAME']) != '')) 
        {
                header("location: home.php");
                exit();
        }
?>

	<script type="text/javascript">
	  function validateForm()
	  {
		var a=document.forms["reg"]["username"].value;
		var b=document.forms["reg"]["password"].value;

		if ((a==null || a=="") && (b==null || b=="") )
		{
		  alert("All fields must be filled out");
		  return false;
		}
		if (a==null || a=="")
		{
		  alert("Username cannot be empty");
		  return false;
		}
		if (b==null || b=="")
		{
		  alert("Password cannot be empty");
		  return false;
		}
	  
	  }
	</script>
<?php
require_once('admin/inc/navbar_main.php');
include "inc/header.php";
?>
<div class="container">
  <form name="reg" action="inc/code_exec.php" onsubmit="return validateForm()" method="post"
  id="reg">
        <div class="col-lg-4 col-lg-offset-4">
        <div class="row">
        <div align="center"><h2 class="form-signin-heading">Registrasi Akun</h2></div> <br>
				<?php 
                            if(count($_GET)==1)
                            {  
                              echo 'Registration Success';
							  header("location: alumni_login.php");
                            }
                            else
                            {
                              echo 'Add Alumni Here';
                            }
                            ?>

        <input name="username" type="text" class="form-control" placeholder="Username" required autofocus>
        <input name="password" type="password" class="form-control" placeholder="Password" required>
        <br>
        </div>
        <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>
          </div>
        </div>
        <br>
       
        <br>
        
        </div>
  </form>
</div>
<?php
include "inc/footer.php";
?>