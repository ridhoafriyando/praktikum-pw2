<?php
    require_once ("User.php");

    class Pegawai extends User
    {
        public $nip;
        public $nama;
        public $no_hp;
        public $gaji_pokok;

        function __construct($nip, $nama, $noHp, $gpk){
            $this->nip = $nip;
            $this->nama = $nama;
            $this->no_hp = $noHp;
            $this->gaji_pokok = $gpk;
        }

        public function tampilkanGaji(){
            echo "Jumlah gaji : $this->gaji_pokok";
        }
    }
?>