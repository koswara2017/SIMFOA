<?php
require_once('admin/inc/navbar_main.php');
include "inc/header.php";
?>
<div class="container">
  <form name="loginform" action="inc/login_exec.php" method="post" id="loginform" class="form-signin">

        <div class="col-lg-4 col-lg-offset-4">
        <div class="row">
        <div align="center"><h2 class="form-signin-heading">Alumni Login</h2></div> <br>
        <?php
                                if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) 
                                {
                                        //print error messages collected during login
                                        echo '<ul class="list-group">'; //unordered list formatting (ul)
                                        foreach($_SESSION['ERRMSG_ARR'] as $msg) 
                                        {
                                                echo '<li class="list-group-item list-group-item-danger"><span class="glyphicon glyphicon-remove"></span>',$msg,'</li>'; 
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
        <br>
        <div align="center"><a href="register.php">create acount</a></div>
        <br>
        
        </div>
  </form>
</div>
<?php
include "inc/footer.php";
?>