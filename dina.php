<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body background="download.jpg">
<?php
require_once 'identitas.php';
$identiti1 = new identiti() ;
$identiti2 = new identiti() ;
$identiti3 = new identiti() ;
$identiti4 = new identiti() ;
$identiti5 = new identiti() ;
$identiti1->set_nama('Dina Novianti');
$identiti1->set_tempat('bandung');
$identiti1->set_kelas('XI rpl II');
$identiti1->set_status('pelajar');
echo "<h1>Siswa smk assalaam bandung</h1>";
echo "_____________________________________________".'<br>';
echo "nama : ".$identiti1-> get_nama().'<br>',' dan tempat lahir : ' .$identiti1-> get_tempat().'<br>','kelas : ' .$identiti1-> get_kelas().'<br>','status : ' .$identiti1-> get_status().'<br>';
echo "_________________________________".'<br>';
$identiti2->set_nama('Melan noerjanati');
$identiti2->set_tempat('jawa');
$identiti2->set_kelas('XI rpl II');
$identiti2->set_status('pelajar');

echo "nama : ".$identiti2-> get_nama().'<br>','  tempat lahir : ' .$identiti2-> get_tempat().'<br>','kelas : ' .$identiti2-> get_kelas().'<br>','status : ' .$identiti2-> get_status().'<br>';
echo "_________________________________".'<br>';

$identiti3->set_nama('DIANDRA AP');
$identiti3->set_tempat('cibolerang');
$identiti3->set_kelas('XI rpl II');
$identiti3->set_status('pelajar');

echo "nama : ".$identiti3-> get_nama().'<br>',' tempat lahir : ' .$identiti3-> get_tempat().'<br>','kelas : ' .$identiti3-> get_kelas().'<br>','status : ' .$identiti3-> get_status().'<br>';
echo "_________________________________".'<br>';
$identiti4->set_nama('DIAHst');
$identiti4->set_tempat('soekarno hatta');
$identiti4->set_kelas('XI rpl II');
$identiti4->set_status('pelajar');

echo "nama : ".$identiti4-> get_nama().'<br>','  tempat lahir : ' .$identiti4-> get_tempat().'<br>','kelas : ' .$identiti4-> get_kelas().'<br>','status : ' .$identiti4-> get_status().'<br>';
echo "_________________________________".'<br>';
$identiti5->set_nama('halimah');
$identiti5->set_tempat('bojong');
$identiti5->set_kelas('XI rpl II');
$identiti5->set_status('pelajar');

echo "nama : ".$identiti5-> get_nama().'<br>',' tempat lahir : ' .$identiti5-> get_tempat().'<br>','kelas : ' .$identiti5-> get_kelas().'<br>','status : ' .$identiti5-> get_status().'<br>';
echo "_________________________________".'<br>';
?>
</body>
</html>