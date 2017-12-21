<html>
	<head>
		<title>SIMFOALUMNI.com</title>
		<script type="text/javascript" src="../admin/assets/js/vendor/jquery.min.js"></script>
		<script type="text/javascript" src="../admin/assets/js/flat-ui.min.js"></script>
		<link rel="stylesheet" href="../admin/assets/css/vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="../admin/assets/css/flat-ui.min.css">
		<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
		<!--[if lt IE 9]>
			<script src="./assets/js/vendor/html5shiv.js"></script>
			<script src="./assets/js/vendor/respond.min.js"></script>
		<![endif]-->
		<link rel="shortcut icon" href="../admin/assets/img/favicon.ico">
		<style type="text/css">
			body {
				padding-top: 50px;
			}
		</style>
     <script type="text/javascript">
            function eventWindow(url) 
            {
			   event_popupWin = window.open(url, 'event', 'resizable=yes,scrollbars=yes,toolbar=no,width=400,height=400');
			   event_popupWin.opener = self;
            }
     </script>
  	<script type="text/javascript">
  		function clear1()
		{
			window.location.href='./search.php';
		}
  	</script>


	</head>

	<body>
<!--NAVIGATION BAR START-->
<?php

$filepath=$_SERVER['PHP_SELF'];

echo '<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">';
  echo'<ul class="nav navbar-nav">  ';
   // echo'<li><a href="index.php" class="navbar-brand"><img width="25px" height="25px" src="logo.png"></a></li>';
    
    if ($filepath=='/../home.php') 
    	echo '<li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span> Home</a></li>';
    else
		echo '<li><a href="../home.php"><span class="glyphicon glyphicon-home"></span> Beranda</a></li>';


	if ($filepath=='/../profile.php'||$filepath=='/../editprofile.php') 
    	echo '<li class="active"><a href="#"><span class="glyphicon glyphicon-user"></span> Profile</a></li>';
    else
		echo '<li><a href="../profile.php"><span class="glyphicon glyphicon-user"></span> Profile</a></li>';

	if ($filepath=='/../search.php') 
    	echo '<li class="active"><a href="#"><span class="glyphicon glyphicon-search"></span> Search Alumni</a></li>';
    else
		echo '<li><a href="../search.php"><span class="glyphicon glyphicon-search"></span> Search Alumni</a></li>';

    if ($filepath=='/../events.php'||$filepath=='/../event.php') 
        echo '<li class="active"><a href="events.php"><span class="glyphicon glyphicon-calendar"></span> Events</a></li>';
    else
        echo '<li><a href="../events.php"><span class="glyphicon glyphicon-calendar"></span> Events</a></li>';

    if ($filepath=='/../blog_submit.php' || $filepath=='/../blog_exec.php') 
        echo '<li class="active"><a href="../blog_submit.php"><span class="glyphicon glyphicon-pencil"></span> Write Post Blog</a></li>';
    else
        echo '<li><a href="../blog_submit.php"><span class="glyphicon glyphicon-pencil"></span> Write Blog Post</a></li>';
	if ($filepath=='/../changepassword.php') 
    	echo '<li class="active"><a href="#"><span class="glyphicon glyphicon-lock"></span> Change Password</a></li>';
    else
		echo '<li><a href="../changepassword.php"><span class="glyphicon glyphicon-lock"></span> Change Password</a></li>';


	if ($filepath=='/logout.php') 
    	echo '<li class="active"><a href="#"><span class="glyphicon glyphicon-off"></span> Logout</a></li>';
    else
		echo '<li><a href="logout.php"><span class="glyphicon glyphicon-off"></span> Logout</a></li>';

  echo '</ul>';
echo '</nav>';
?>
<!--NAVIGATION BAR END-->


<div class="container">
    <div class="col-md-10  col-md-offset-1">
		<div class="row">
			<div class="col-md-12" align="center">
			<!--WELCOME PANEL START-->
			    <div class="panel panel-default">
					<div class="panel-heading">
					  <h3>Write Blog Post</h3>
					</div>
					<div class="panel-body">
						<?php
						require("../admin/inc/fetchprofile.php");
						require("../admin/inc/admin_connection.php"); 
						$roll=$_SESSION['SESS_USERNAME'];
						fetchProfile($roll,1);

						if(isset($_POST['title']) && isset($_POST['ppost']) )
						{
							$post = stripslashes($_POST['ppost']); 
							$title = stripslashes($_POST['title']); 

						  // Adds the new entry to the database 
						  $sql = "INSERT INTO pforum (pf_name,pf_title,pf_username,pf_ppost) VALUES ('$name','$title','$roll','$post')";

						  $qry = mysqli_query($con, $sql) or die("SQL Error: $sql<br>" . mysqli_error($con)); 

						  // Acknowledge entry 
						  echo '<div class="alert alert-success">';
						  echo '<span class="glyphicon glyphicon-ok"></span> Blog post submitted to admin for approval.<br>The post would appear as a part of the <a href="../blog.php">Blog</a> once the admin approves it.'; 
						  echo '</div>';
						} 
						else
							echo 'error';


						?>
					</div>
			    </div>
			</div>
		</div>
      <!--WELCOME PANEL END-->
    </div>
</div>

    <footer>
         <div class="container">
         
            <div class="copy text-center">
               Copyright 2017 || Depelovment</a>
            </div>
            
         </div>
    </footer>
<!--INCLUDE SCRIPTS NECESSARY FOR BOOTSTRAP COMPONENTS-->
<script src="//code.jquery.com/jquery.js"></script>
<script src="../admin/js/bootstrap.min.js"></script>
<script src="../admin/assets/js/docs.min.js"></script>
<script src="../admin/js/holder.js"></script>
</body>
</html>
