<?php
 require_once("Pegawai4.php");

class Dosen extends pegawai{
  protected $nidn:
  protected $jabatan_akademis:

  fungction _contruct($nip, $nama, $hp, $gaji, $nidn, $jabatan){
    //fungsi setter
    $this->nip = $nip;
    $this->nama = $nama;
    $this->no_hp = $hp;
    $this->gaji_pokok = $gaji;
    $this->nidn = $nidn;
    $this->jabatan_akademis = $jabatan;
  }
  protected function mengajar(){

  }
  protected function meneliti(){

  }
  //fungsi gettre
  protected function (){
    return $this->nama;
  }
  
}
?>