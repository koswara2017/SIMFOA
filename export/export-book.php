<?php
include('db_con.php');

$conn = new mysqli('localhost', 'root', '');
mysqli_select_db($conn, 'alumni');

$setSql = "SELECT * FROM `alumni`";
$setRec = mysqli_query($conn,$setSql);

$stmt=$db_con->prepare('select * from alumni');
$stmt->execute();


$columnHeader ='';
$columnHeader = 
"Mem NO"."\t".
"User Name"."\t".
"Name"."\t".
"Alamat"."\t".
"TTL"."\t".
"No.Telp"."\t".
"Foto"."\t".
"Jenis Kelamin"."\t".
"Email"."\t".
"Angkatan"."\t".
"Prodi"."\t".
"Tempat Kerja"."\t";


$setData='';

while($rec =$stmt->FETCH(PDO::FETCH_ASSOC))
{
  $rowData = '';
  foreach($rec as $value)
  {
    $value = '"' . $value . '"' . "\t";
    $rowData .= $value;
  }
  $setData .= trim($rowData)."\n";
}


header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=Book record sheet.xls");
header("Pragma: no-cache");
header("Expires: 0");

echo ucwords($columnHeader)."\n".$setData."\n";

?>