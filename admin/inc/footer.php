
    <footer>
         <div class="container">
         
            <div class="copy text-center">
               Copyright 2017 || Depelovment</a>
            </div>
            
         </div>
    </footer>
<script type="text/javascript">

Highcharts.chart('mygraph', {

    title: {
        text: 'Pie point CSS'
    },

    xAxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
    },

    series: [{
        type: 'pie',
        allowPointSelect: true,
        keys: ['name', 'y', 'selected', 'sliced'],
        data: [
            <?php
					    include "inc/connection.php";
						$query = mysqli_query($con,"SELECT batch, COUNT( * ) AS total_muncul FROM alumni GROUP BY batch");
					 
						while ($row = mysqli_fetch_array($query)) {
							$browsername = $row['batch'];
							$jumlah = $row['total_muncul'];
							?>
							[ 
								'<?php echo $browsername ?>', <?php echo $jumlah; ?>
							],
							<?php
						}
						?>
        ],
        showInLegend: true
    }]
});
</script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.js"></script>
    <!-- jQuery UI -->
    <script src="js/jquery-ui.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <link href="css/bootstrap-editable.css" rel="stylesheet"/>
	<script src="js/bootstrap-editable.min.js"></script>

    <script src="js/custom.js"></script>
    <script src="js/forms.js"></script>
  </body>
</html>