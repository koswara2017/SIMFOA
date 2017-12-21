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
      <script type="text/javascript">
             function eventWindow(url) 
             {
                   event_popupWin = window.open(url, 'event', 'resizable=yes,scrollbars=yes,toolbar=no,width=400,height=400');
                   event_popupWin.opener = self;
             }
      </script>
    <link href="css/forms.css" rel="stylesheet">
<style type="text/css">
	@import 'lib/code/css/highcharts.css';

	#container {
		height: 400px;
		max-width: 800px;
		min-width: 320px;
		margin: 0 auto;
	}
	.highcharts-pie-series .highcharts-point {
		stroke: #EDE;
		stroke-width: 2px;
	}
	.highcharts-pie-series .highcharts-data-label-connector {
		stroke: silver;
		stroke-dasharray: 2, 2;
		stroke-width: 2px;
	}
</style>
		<script src="lib/code/js/highcharts.js"></script>
		<script src="lib/code/js/modules/exporting.js"></script>
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
	                          
	                          <li><a href="inc/admin_logout.php">Logout</a></li>
	                        </ul>
	                      </li>
	                    </ul>
	                  </nav>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

