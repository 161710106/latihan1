<?php
class identiti {
public $nama;
public $tempat;
public $kelas;
public $status;
public function __construck(){
	

}
public function set_nama($nama){
	$this->nama =$nama;
}
public function get_nama(){
	return $this->nama;
}
public function set_tempat($tempat){
	$this->tempat =$tempat;
}
public function get_tempat(){
	return $this->tempat;
}
public function set_kelas($kelas){
	$this->kelas =$kelas;
}
public function get_kelas(){
	return $this->kelas;
}
public function set_status($status){
	$this->status =$status;
}
public function get_status(){
	return $this->status;
}
}
?>