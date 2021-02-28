<?php
    require_once("Pegawai.php");

    class Dosen extends Pegawai
    {
        public $nidn;
        public $jabatan_akademis;

        function __construct($nip, $nama, $noHp, $gpk, $nidn, $jabatan){
            $this->nip = $nip;
            $this->nama = $nama;
            $this->no_hp = $noHp;
            $this->gaji_pokok = $gpk;
            $this->nidn = $nidn;
            $this->jabatan_akademis = $jabatan;
        }

        public function mengajar(){

        }
        public function meneliti(){

        }
    }
    
?>