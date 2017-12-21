
<html>
	<head>
		<title>ALUMNI NETWORKING</title>
		<script type="text/javascript" src="./assets/js/vendor/jquery.min.js"></script>
		<script type="text/javascript" src="./assets/js/flat-ui.min.js"></script>
		<link rel="stylesheet" href="./assets/css/vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="./assets/css/flat-ui.min.css">
		<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
		<!--[if lt IE 9]>
			<script src="./assets/js/vendor/html5shiv.js"></script>
			<script src="./assets/js/vendor/respond.min.js"></script>
		<![endif]-->
		<link rel="shortcut icon" href="./assets/img/favicon.ico">
		<style type="text/css">
			body {
				padding-top: 50px;
			}
		</style>
	</head>

	<body>
		<?php

$filepath=$_SERVER['PHP_SELF'];

echo '<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">';
  echo'<ul class="nav navbar-nav">  ';
   // echo'<li><a href="index.php" class="navbar-brand"><img width="25px" height="25px" src="logo.png"></a></li>';
    
    if ($filepath=='/home.php') 
    	echo '<li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span> Home</a></li>';
    else
		echo '<li><a href="home.php"><span class="glyphicon glyphicon-home"></span> Beranda</a></li>';


	if ($filepath=='/profile.php'||$filepath=='/editprofile.php') 
    	echo '<li class="active"><a href="#"><span class="glyphicon glyphicon-user"></span> Profile</a></li>';
    else
		echo '<li><a href="profile.php"><span class="glyphicon glyphicon-user"></span> Profile</a></li>';

	if ($filepath=='/search.php') 
    	echo '<li class="active"><a href="#"><span class="glyphicon glyphicon-search"></span> Search Alumni</a></li>';
    else
		echo '<li><a href="search.php"><span class="glyphicon glyphicon-search"></span> Search Database</a></li>';

    if ($filepath=='/events.php'||$filepath=='/event.php') 
        echo '<li class="active"><a href="events.php"><span class="glyphicon glyphicon-calendar"></span> Events</a></li>';
    else
        echo '<li><a href="events.php"><span class="glyphicon glyphicon-calendar"></span> Events</a></li>';

    if ($filepath=='/blog_submit.php' || $filepath=='/blog_exec.php') 
        echo '<li class="active"><a href="blog_submit.php"><span class="glyphicon glyphicon-pencil"></span> Write Post Blog</a></li>';
    else
        echo '<li><a href="blog_submit.php"><span class="glyphicon glyphicon-pencil"></span> Write Blog Post</a></li>';

    if ($filepath=='/send_request.php') 
        echo '<li class="active"><a href="send_request.php"><span class="glyphicon glyphicon-upload "></span> Request to Insti.</a></li>';
    else
        echo '<li><a href="send_request.php"><span class="glyphicon glyphicon-upload"></span> Request to Insti.</a></li>';



	if ($filepath=='/changepassword.php') 
    	echo '<li class="active"><a href="#"><span class="glyphicon glyphicon-lock"></span> Change Password</a></li>';
    else
		echo '<li><a href="changepassword.php"><span class="glyphicon glyphicon-lock"></span> Change Password</a></li>';


	if ($filepath=='/logout.php') 
    	echo '<li class="active"><a href="#"><span class="glyphicon glyphicon-off"></span> Logout</a></li>';
    else
		echo '<li><a href="logout.php"><span class="glyphicon glyphicon-off"></span> Logout</a></li>';

  echo '</ul>';
echo '</nav>';
	
?>