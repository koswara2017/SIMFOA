<!--  NOTE!! Do not forget to add username, password and database name on getImage.php And you will need to update
your alumni database table. Instructions for that would be on updatetable.txt-->

<?php
    require('admin_auth.php');
	
    require_once('stringops.php');
	$errflag = false;
    $paramed=count($_GET);
	$_SESSION['SESS_ACTIVE']=1;
    require_once('fetchprofile.php');
    if ($paramed==1) 
    {
      $username=trim($_GET['param']);
	  fetchProfile($username,1);
      $canView=1;
    }
    $qry="DELETE FROM alumni WHERE username = '$username'";
	$result=mysqli_query($con, $qry);
	mysqli_close($con);
	header("location: admin_search.php?param_name=&param_batch=&param_roll=&param_active=&submit=Search&del=success");
   
  ?>
