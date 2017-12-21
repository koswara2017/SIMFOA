
<html>
	<head>
		<title>SIOMFOALUMNI.com</title>
		<script type="text/javascript" src="./assets/js/vendor/jquery.min.js"></script>
		<script type="text/javascript" src="./assets/js/flat-ui.min.js"></script>
		<link rel="stylesheet" href="./assets/css/vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="./assets/css/flat-ui.min.css">
		<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
		<!--[if lt IE 9]>
			<script src="./assets/js/vendor/html5shiv.js"></script>
			<script src="./assets/js/vendor/respond.min.js"></script>
		<![endif]-->
		<link rel="shortcut icon" href="favicon.ico">
		<style type="text/css">
			body {
				padding-top: 70px;
			}
		</style>
	</head>

	<body>
		<?php

$filepath=$_SERVER['PHP_SELF'];

echo '<div class="container">';

echo '<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">';
  echo'<ul class="nav navbar-nav">  ';
    echo'<li><a href="index.php" class="navbar-brand"><img width="25px" height="25px" src="admin/images/logo.png"></a></li>';
    
    if ($filepath=='/alumni_login.php') 
    	echo '<li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span> Alumni Login</a></li>';
    else
		echo '<li><a href="alumni_login.php"><span class="glyphicon glyphicon-home"></span> Alumni Login</a></li>';


	if ($filepath=='/admin_login.php') 
    	echo '<li class="active"><a href="#"><span class="glyphicon glyphicon-user"></span> Admin Login</a></li>';
    else
		echo '<li><a href="admin_login.php"><span class="glyphicon glyphicon-user"></span> Admin Login</a></li>';

    if ($filepath=='/blog.php') 
        echo '<li class="active"><a href="#"><span class="glyphicon glyphicon-star"></span> Blog</a></li>';
    else
        echo '<li><a href="blog.php"><span class="glyphicon glyphicon-star"></span> Blog</a></li>';

	/* if ($filepath=='/gallery.php') 
    	echo '<li class="active"><a href="#"><span class="glyphicon glyphicon-picture"></span> Gallery</a></li>';
    else
		echo '<li><a href="gallery.php"><span class="glyphicon glyphicon-picture"></span> Gallery</a></li>'; */

    echo '</ul>';
echo '</nav>';
echo '</div>';
	
?>