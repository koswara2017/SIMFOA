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
<script src="lib/highcharts/js/highcharts.js"></script>
<script src="lib/highcharts/js/modules/exporting.js"></script>
<div class="panel panel-primary">
     <div class="panel-heading">The Graph of Browser Trends January 2015</div>
     <div class="panel-body">
         <div id ="mygraph"></div>
    </div>
</div>
<?php
			include "connection.php";
			$qry ="SELECT batch, COUNT( * ) AS total_muncul FROM alumni";
			$result=mysqli_query($con,$qry);
			while ($row = mysqli_fetch_array($result)) {
				$angkat = $row['batch'];
				$jumlah = $row['total_muncul'];
				?>
				[ 
					'<?php echo $angkat ?>', <?php echo $jumlah; ?>
				],
				<?php
			}
			?>

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
<script>
        var chart; 
        $(document).ready(function() {
              chart = new Highcharts.Chart(
              {
                  
                 chart: {
                    renderTo: 'mygraph',
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false
                 },   
                 title: {
                    text: 'Internet Browser Statistics '
                 },
                 tooltip: {
                    formatter: function() {
                        return '<b>'+
                        this.point.name +'</b>: '+ Highcharts.numberFormat(this.percentage, 2) +' % ';
                    }
                 },
                 
                
                 plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: {
                            enabled: true,
                            color: '#000000',
                            connectorColor: 'green',
                            formatter: function() 
                            {
                                return '<b>' + this.point.name + '</b>: ' + Highcharts.numberFormat(this.percentage, 2) +' % ';
                            }
                        }
                    }
                 },
       
                    series: [{
                    type: 'pie',
                    name: 'Browser share',
                    data: [
                    <?php
						include "connection.php";
						$qry ="SELECT batch, COUNT( * ) AS total_muncul FROM alumni";
						$result=mysqli_query($con,$qry);
						while ($row = mysqli_fetch_array($result)) {
							$angkat = $row['batch'];
							$jumlah = $row['total_muncul'];
							?>
							[ 
								'<?php echo $angkat ?>', <?php echo $jumlah; ?>
							],
							<?php
						}
					?>
             
                    ]
                }]
              });
        }); 
    </script>
  </body>
</html>