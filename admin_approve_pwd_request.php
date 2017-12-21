<!DOCTYPE html>

<html>
  <head>
    <title>admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jQuery UI -->
    <link href="css/jquery-ui.css" rel="stylesheet" media="screen">

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">

    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="vendors/form-helpers/css/bootstrap-formhelpers.min.css" rel="stylesheet">
    <link href="vendors/select/bootstrap-select.min.css" rel="stylesheet">
    <link href="vendors/tags/css/bootstrap-tags.css" rel="stylesheet">
	
    <link href="css/forms.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="index.html">Halaman Admin</a></h1>
	              </div>
	           </div>
	           <div class="col-md-5">
	              <div class="row">
	                <div class="col-lg-12">
	                  <!--div class="input-group form">
	                       <input type="text" class="form-control" placeholder="Search...">
	                       <!--span class="input-group-btn">
	                         <button class="btn btn-primary" type="button">Search</button>
	                       </span-->
	                  </div-->
	                </div>
	              </div>
	           </div>
	           <div class="col-md-2">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account <b class="caret"></b></a>
	                        <ul class="dropdown-menu animated fadeInUp">
	                          
	                          <li><a href="admin_logout.php">Logout</a></li>
	                        </ul>
	                      </li>
	                    </ul>
	                  </nav>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

    <div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li><a href="admin_home.php"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
                  
                    <li class="submenu">
                         <a href="#">
                            <i class="glyphicon glyphicon-list"></i> Quick Fungtions
                            <span class="caret pull-right"></span>
                         </a>
                         <!-- Sub menu -->
                         <ul>
                            <li><a href="admin_approve_pwd_request.php">Reset Password Request</a></li>
                            <li><a href="admin_forum_form.php">Create a Blog</a></li>
							<li><a href="admin_approve_forum_post.php">Pending Blog Post</a></li>
							<li><a href="admin_send_mail.php">Compos Mail</a></li>
							
                        </ul>
                    </li>
                    <li class="submenu">
                         <a href="#">
                            <i class="glyphicon glyphicon-list"></i> Approve Blog
                            <span class="caret pull-right"></span>
                         </a>
                         <!-- Sub menu -->
                         <ul>
                            <li><a href="admin_forum_form.php">Write Blog Posts</a></li>
                            <li><a href="admin_approve_forum_post.php">Approve Blog Posts</a></li>
							<li><a href="blog.php">View Blog</a></li>
                        </ul>
                    </li>
					
					<li class="submenu">
                         <a href="#">
                            <i class="glyphicon glyphicon-list"></i> Approve Account
                            <span class="caret pull-right"></span>
                         </a>
                         <!-- Sub menu -->
                         <ul>
                            <li><a href="admin_approve_pwd_request.php">Password reset request</a></li>
                        </ul>
                    </li>
					
					<li class="submenu">
                         <a href="#">
                            <i class="glyphicon glyphicon-list"></i> Alumni Related
                            <span class="caret pull-right"></span>
                         </a>
                         <!-- Sub menu -->
                         <ul>
                            <li><a href="admin_send_mail.php">Send mail</a></li>
							 <li><a href="admin_search.php">Search Alumni</a></li>
                        </ul>
                    </li>
					<li class="submenu">
                         <a href="#">
                            <i class="glyphicon glyphicon-list"></i> Create Event
                            <span class="caret pull-right"></span>
                         </a>
                         <!-- Sub menu -->
                         <ul>
                            <li><a href="admin_allevents">View All Event</a></li>
							 <li><a href="term.php">admin_events.php</a></li>
                        </ul>
                    </li>
                </ul>
             </div>
		  </div>
		  <div class="col-md-10">

	  			<div class="row">
	  				<div class="col-md-6">
	  					
	  				</div>
	  				

	  			<div class="row">
	  				<div class="col-md-6">
	  					
			  			
	  				</div>

	  				
	  			</div>
				<div>

	  			<div class="row">
	  				<div class="col-md-12 panel-info">
			  			<div class="content-box-header panel-heading">
		  					<div class="panel-title ">Beranda</div>
							
							
			  			</div>
			  			<div class="content-box-large box-with-header">
				  			
							<!--ahir menu-->
							
							
			<!--awal isi-->				
			<div class="container">
<div class="col-md-12">

<div class="well">
<div align="center">
<?php 

include "fetchprofile.php"; 

//include "admin_auth.php";

function RandomPass($numchar)  
{  
    $word = "a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,r,s,t,u,v,w,x,y,z,1,2,3,4,5,6,7,8,9,0";  
    $array=explode(",",$word);  
    shuffle($array);  
    $newstring = implode($array,"");  
    return substr($newstring, 0, $numchar);  
}  

if(isset($_POST['submit_ap'])){
  $arrDEL = array(); 
  $arrAPP = array(); 
  foreach($_POST['action'] as $pr_id => $thisACTION){
    if($thisACTION == "APP"){
      $arrAPP[] = $pr_id;
      $arrDEL[] = $pr_id;
      }
    else{
      $arrDEL[] = $pr_id; 
    }
  }
  if($arrAPP){
    $sql_in = implode(",", $arrAPP); 
    $sql  = " UPDATE `p_reset` SET `pr_status`=1 WHERE `pr_id` IN ($sql_in) "; 
    $qry  = mysqli_query($con, $sql) or die("SQL Error: $sql<br>" . mysqli_error($con)); 

    $sql  = "SELECT `pr_branch`,`pr_mail`,`pr_roll` FROM `p_reset` WHERE `pr_status`=1 ";
    $qry  = mysqli_query($con, $sql) or die('failure in running sql query');
    
    while($arr  = mysqli_fetch_assoc($qry)){
      $usrnam =$arr['pr_roll'];
      $pwd=RandomPass(10);
      $pwdhash=hash('sha256',$pwd);
      $sql2="UPDATE `alumni` SET `password`='$pwdhash' WHERE `username`='$usrnam' ";
      $qr2=mysqli_query($con, $sql2) or die("query unsuccessful");

      $to=$arr['pr_mail'];
      $headers='From: admin@alumni.iiti.ac.in';
      $sub='Password Reset at IITI alumni';
      $body="Hi\n Your alumni website username is : $usrnam \nYour alumni website password is :$pwd \n Please update your credentials after login.\n Thanks. \n IITI alumni team.";
      $retval=mail($to,$sub,$body,$headers) or die('Could not send mail');
      if($retval ==1){
        echo "mail sent to $to successfully..";
        print "<br>";
      }
      else{
        echo "failed to send mail..";
        print "<br>";
      }
    }
  }

  if($arrDEL){
    $sql_in = implode(",", $arrDEL); 
    $sql  = " DELETE FROM `p_reset` WHERE `pr_id` IN ($sql_in) "; 
    $qry  = mysqli_query($con, $sql) or die("SQL Error: $sql<br>" . mysqli_error($con)); 
  } 
}
print "<br>";

$sql  = " SELECT `pr_id`,`pr_img`,`pr_type`,`pr_branch`,`pr_imgbool`,`pr_roll`, `pr_mail`, DATE_FORMAT(`pr_date`, '%M %D, %Y at %H:%i') as `pr_date` FROM `p_reset` "; 
$sql .= " WHERE `pr_status`=0 ORDER BY `pr_id` "; 
$qry  = mysqli_query($con, $sql) or die("SQL Error: $sql<br>" . mysqli_error($con)); 

print "<h2>List of Requests pending approval:<h2><br>"; 
print "<form method='post' action='{$_SERVER['PHP_SELF']}'>"; 
print "<table border=2  class='table table-striped table-hover'>"; 
  print "<thead>"; 
  print "<tr>"; 
  print "<td><h4>Approve</h4></td>"; 
  print "<td><h4>Remove</h4></td>"; 
  print "<td><h4>Request By</h4></td>"; 
  print "<td><h4>Entered Form Inputs</h4></td>"; 
  print "<td><h4>Uploaded Image</h4></td>";
  print "</tr>"; 
  print "</thead>"; 


while($row = mysqli_fetch_array($qry)){
  print "<tr>"; 
  print "<td><input type='radio' name='action[{$row['pr_id']}]' value='APP'></td>";
  print "<td><input type='radio' name='action[{$row['pr_id']}]' value='DEL'></td>";
  fetchprofile($row['pr_roll'],1);
  
    print "<td>"; 
    print "&nbsp;&nbsp;(Requested by <strong>" . $name . "</strong> <br> "."&nbsp;&nbsp;on<strong> " . $row['pr_date'] . ")". "</strong>"."</td>"; 
    print "<td>" ."&nbsp;Username <strong>:". $row['pr_roll'] .  "</strong><br>";
    print "&nbsp;Name:<strong> ".$name."</strong><br>"; 
    print "&nbsp;Current location:<strong> ".$curr_loc."</strong><br>";
    print "&nbsp;permanent location: <strong>".$perm_loc."</strong><br>";
    print "&nbsp;phone number: <strong>".$phone."</strong><br>";
    // These results must be queried from the database alumni : Have to put the search and then print inside the table
    print "<td>";
    if ($row['pr_imgbool'] == 1) {
      echo '<img width="300"  src="admin_getImage.php?id=' . $row['pr_id'] . '"/>  ' . "\n";
    }else{print "<strong>"."&nbsp;image is not uploaded"."</strong>";}
    print "</td>";
    print "</tr>";  
}

print "</table>";
mysqli_close($con); 

print "<input type='submit' name='submit_ap' value='Process'>"; 
print "</form>"; 
?>
</div>
</div>
</div>
</div>
<script src="//code.jquery.com/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
							
							
							
							
							
						</div>
			  		</div>
	  			</div>
				</div>


	  			<div class="row">
	  				<div class="col-md-6 panel-default">
			  			
			  		</div>

	  				<div class="col-md-6 panel-default">
			  			
			  		</div>
	  			</div>


	  			<div class="row">
					<div class="col-md-6">
						
					</div>

					<div class="col-md-6">
						
						
						
						
						
						
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						
				
					
					
					</div>
				</div>


	  		<!--  Page content -->
		  </div>
		</div>
    </div>

    <footer>
         <div class="container">
         
            <div class="copy text-center">
               Copyright 2017 || Depelovment</a>
            </div>
            
         </div>
      </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.js"></script>
    <!-- jQuery UI -->
    <script src="js/jquery-ui.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <script src="vendors/form-helpers/js/bootstrap-formhelpers.min.js"></script>

    <script src="vendors/select/bootstrap-select.min.js"></script>

    <script src="vendors/tags/js/bootstrap-tags.min.js"></script>

    <script src="vendors/mask/jquery.maskedinput.min.js"></script>

    <script src="vendors/moment/moment.min.js"></script>

    <script src="vendors/wizard/jquery.bootstrap.wizard.min.js"></script>

     <!-- bootstrap-datetimepicker -->
     <link href="vendors/bootstrap-datetimepicker/datetimepicker.css" rel="stylesheet">
     <script src="vendors/bootstrap-datetimepicker/bootstrap-datetimepicker.js"></script> 


    <link href="css/bootstrap-editable.css" rel="stylesheet"/>
	<script src="js/bootstrap-editable.min.js"></script>

    <script src="js/custom.js"></script>
    <script src="js/forms.js"></script>
  </body>
</html>