<?php
include('db_con.php');

$stmt=$db_con->prepare('select * from alumni');
$stmt->execute();


?>

<html>
<head>
<title>Export Books Data into Excel Sheet</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="container">
  <div class="panel">
    <div class="panel-heading">
      <h3>Export Books Data into Excel Sheet</h3>
      <div class="panel-body">
        <table border="1" class="table table-bordered table-striped">
    				<tr>
    					<th>Mem NO.</th>
    					<th>User Name</th>
						<th>Name</th>
						<th>Alamat</th>
						<th>TTL</th>
						<th>No.Telp</th>
						<th>Jenis Kelamin</th>
						<th>Email</th>
						<th>Angkatan</th>
						<th>Prodi</th>
						<th>Tempat Kerja</th>
    				</tr>
    			<?php

    			while($row=$stmt->FETCH(PDO::FETCH_ASSOC)){
    				echo '
    				<tr>
    					<td>'.$row["mem_id"].'</td>
    					<td>'.$row["username"].'</td>
    					<td>'.$row["name"].'</td>
    					<td>'.$row["curr_loc"].'</td>
    					<td>'.$row["perm_loc"].'</td>
    					<td>'.$row["phone"].'</td>
    					<td>'.$row["gender"].'</td>
    					<td>'.$row["email"].'</td>
    					<td>'.$row["batch"].'</td>
    					<td>'.$row["branch"].'</td>
    					<td>'.$row["job"].'</td>
    				</tr>
    				';
    			}
    			?>
    		</table>
    		<a href="export-to-excel.php">Export To Excel</a>

      </div>

    </div>

  </div>

</div>

</body>
</html>
