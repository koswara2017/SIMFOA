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
	
	<style type="text/css">
#subForm {
	font-size: .8em;
}
#subForm .label {
	float: left;
	width: 230px;
	margin-right: 10px;
	text-align: right;
	font-weight: bold;
	clear: left;
}

#post {
	margin-left: 240px;
	background-color: #CBD893;
	font-family: "Century Gothic", "Gill Sans", Arial, sans-serif;
}

#refer {
	font-family: "Century Gothic", "Gill Sans", Arial, sans-serif;
}

#name, #roll, #ppost,#prof,#title {
	background-color: #FBEF99;
	font-family:"Lucida Console", Monaco, monospace;
	font-size: .9em;
	width: 300px;
	margin-top: -2px;
}

#name:focus,
#username:focus,
#ppost:focus,
#prof:focus
{
	background-color: #FDD041;
}

</style>
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
                            <li><a href="admin_allevents.php">View All Event</a></li>
							 <li><a href="admin_events.php">Events</a></li>
                        </ul>
                    </li>
                </ul>
             </div>
		  </div>
		  <div class="col-md-10">
	  			<div class="row">
	  				<div class="col-md-12 panel-info">
			  			<div class="content-box-header panel-heading">
		  					<div class="panel-title ">Beranda</div>
							
							
			  			</div>
			  			<div class="content-box-large box-with-header">
				  			
							<!--ahir menu-->
							
							
			<!--awal isi-->	
			<?php

include "admin_connection.php"; 
//include "admin_auth.php";
IF (isset($_POST['submit_ap'])) : 
  $arrDEL = array(); 
  $arrAPP = array(); 
  FOREACH ($_POST['action'] as $pf_id => $thisACTION) : 
    IF ($thisACTION == "APP") : 
      $arrAPP[] = $pf_id; 
    ELSE : 
      $arrDEL[] = $pf_id; 
    ENDIF; 
  ENDFOREACH; 
  IF ($arrDEL) : 
    $sql_in = implode(",", $arrDEL); 
    $sql  = " DELETE FROM `pforum` WHERE `pf_id` IN ($sql_in) "; 
    $qry  = mysqli_query($con, $sql) or die("SQL Error: $sql<br>" . mysqli_error($con));
  ENDIF; 
  IF ($arrAPP) : 
    $sql_in = implode(",", $arrAPP); 
    $sql  = " UPDATE `pforum` SET `pf_status`=1 WHERE `pf_id` IN ($sql_in) "; 
    $qry  = mysqli_query($con, $sql) or die("SQL Error: $sql<br>" . mysqli_error($con));
  ENDIF;
ENDIF; 

$sql  = " SELECT `pf_id`, `pf_name`,`pf_title`,`pf_ppost`, `pf_username`, DATE_FORMAT(`pf_date`, '%M %D, %Y at %H:%i') as `pf_date` FROM `pforum` "; 
$sql .= " WHERE `pf_status`=0 ORDER BY `pf_id` "; 
$qry  = mysqli_query($con, $sql) or die("SQL Error: $sql<br>" . mysqli_error($con)); 

print "List of Requests pending approval:<br>"; 
print "<form method='post' action='{$_SERVER['PHP_SELF']}'>"; 
print "<table border=1>"; 
  print "<tr>"; 
  print "<td>Approve</td>"; 
  print "<td>Remove</td>"; 
  print "<td width=1080>Forwarded Post</td>"; 
  print "</tr>"; 
WHILE ($row = mysqli_fetch_array($qry)) : 
  print "<tr>"; 
  print "<td><input type='radio' name='action[{$row['pf_id']}]' value='APP'></td>";
  print "<td><input type='radio' name='action[{$row['pf_id']}]' value='DEL'></td>";
  print "<td><strong>Title :" . $row['pf_title'] . "</strong>"; 
  print "<br>". "<strong>Main Post :</strong><br>".$row['pf_ppost'];
  print "<br>&nbsp;&nbsp;(Submitted by " . $row['pf_name'] . " on " . $row['pf_date'] . ")</td>"; 
  print "</tr>"; 
ENDWHILE; 
print "</table>"; 
print "<input type='submit' name='submit_ap' value='Process'>"; 
print "</form>"; 

?>
  
			<!--akhir isi-->	
			
							
							
							
							
							
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