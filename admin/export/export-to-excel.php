<?php

# MEMBUAT KONEKSI KE DATABASE
mysql_connect('localhost',"root",'');
mysql_select_db('alumni');

# MENGAMBIL DATA DARI DATABASE MYSQL
$siswa = mysql_query("SELECT * FROM alumni ORDER BY name ASC");


/** Include PHPExcel */
require_once dirname(__FILE__) . '/PHPExcel/PHPExcel.php';

$objPHPExcel = new PHPExcel();

// Set document properties
$objPHPExcel->getProperties()->setCreator("Mastrayasa")
							->setLastModifiedBy("Mastrayasa")
							->setTitle("Data Siswa")
							->setSubject("Siswa")
							->setDescription("Data siswa tahun ajaran 2015/2016")
							->setKeywords("sibangStudio PHPExcel php")
							->setCategory("Umum");
// mulai dari baris ke 2
$row = 2;

// Tulis judul tabel
$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A'.$row, 'NO.')
            ->setCellValue('B'.$row, 'User Name')
            ->setCellValue('C'.$row, 'Nama')
            ->setCellValue('D'.$row, 'Jenis Kelamin')
            ->setCellValue('E'.$row, 'Alamat')
            ->setCellValue('F'.$row, 'TTL')
            ->setCellValue('G'.$row, 'No.Telp')
            ->setCellValue('H'.$row, 'Email')
            ->setCellValue('I'.$row, 'Angkatan')
            ->setCellValue('J'.$row, 'Prodi')
            ->setCellValue('K'.$row, 'Tempat Kerja');

$nomor 	= 1; // set nomor urut = 1;

$row++; // pindah ke row bawahnya. (ke row 2)

// lakukan perulangan untuk menuliskan data siswa
while( $data = mysql_fetch_array($siswa)){
	$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A'.$row,  $nomor )
            ->setCellValue('B'.$row, $data['username'] )
            ->setCellValue('C'.$row, $data['name'] )
            ->setCellValue('D'.$row, $data['gender'] )
            ->setCellValue('E'.$row, $data['curr_loc'] )
            ->setCellValue('F'.$row, $data['perm_loc'] )
            ->setCellValue('G'.$row, $data['phone'] )
            ->setCellValue('H'.$row, $data['email'] )
            ->setCellValue('I'.$row, $data['batch'] )
            ->setCellValue('J'.$row, $data['branch'] )
            ->setCellValue('K'.$row, $data['job'] );
	$row++; // pindah ke row bawahnya ($row + 1)
	$nomor++;
}

// Rename worksheet
$objPHPExcel->getActiveSheet()->setTitle('Siswa');

// Set sheet yang aktif adalah index pertama, jadi saat dibuka akan langsung fokus ke sheet pertama
$objPHPExcel->setActiveSheetIndex(0);




// Simpan ke Excel 2007
/* $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('data.xlsx'); */

// Simpan ke Excel 2003
/* $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save('data.xls'); */


// Download (Excel2007)
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="data.xlsx"');
header('Cache-Control: max-age=0');
// If you're serving to IE 9, then the following may be needed
header('Cache-Control: max-age=1');
// If you're serving to IE over SSL, then the following may be needed
header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
header ('Pragma: public'); // HTTP/1.0
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007'); 

$objWriter->save('php://output');
exit;


/* 
// Download (Excel2003)
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="data.xls"');
header('Cache-Control: max-age=0');
// If you're serving to IE 9, then the following may be needed
header('Cache-Control: max-age=1');
// If you're serving to IE over SSL, then the following may be needed
header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
header ('Pragma: public'); // HTTP/1.0
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5'); 

$objWriter->save('php://output');
exit;
 */
?>