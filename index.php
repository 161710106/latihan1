<center>
<?php
require_once 'robot.php';
$robot1 = new robot('ngik' ) ;
$robot2 = new robot('ngik ngiuk' ) ;
$robot1->set_suara('ngik ngik');
$robot1->set_berat(30 );
$robot1->set_tinggi(120 );
echo "robot ke 1 memiliki suara : ".$robot1-> get_suara().'<br>',' dan beratnya: ' .$robot1-> get_berat().' kg ','<br>','tingginya : ' .$robot1-> get_tinggi().'<br>';

$robot2->set_suara('uy uy');
$robot2->set_berat(80 ) ;
$robot1->set_tinggi(117 );
echo "robot ke 2 memiliki suara : " .$robot2-> get_suara().'<br>','dan beratnya: ' .$robot2-> get_berat().' kg ','<br>','tingginya : ' .$robot1-> get_tinggi().'<br>';
?> 
</center>