<?php
class Mahasiswa 
{
    public $nim;
    public $nama;
    public $tanggal_lahir;
    public $jenis_kelamin;

    public function tampilkanUmur()
    {
        echo "nim $this->nim <br> nama $this->nama <br> tanggal lahir $this->tanggal_lahir <br> jenis kelamin $this->jenis_kelamin" ;
    }
    public function tampilkanAngkatan()
    {
        
    }
 
}
