<?php
 
include('Mahasiswa.php');
 
$mahasiswa_pertama = new Mahasiswa();
 
$mahasiswa_pertama->nim = "H1101191066";
$mahasiswa_pertama->nama = "Ridho arjumal afriyando";
$mahasiswa_pertama->tanggal_lahir = "24 september 1999":
$mahasiswa_pertama->jenis_kelamin = "laki-laki":

$mahasiswa_kedua = new Mahasiswa ();

$mahasiswa_kedua->nim = "H1101191034";
$mahasiswa_kedua->nama = "Muhammad Fadillah";
$mahasiswa_kedua->tanggal_lahir = "3 januari 2001";
$mahasiswa_kedua->jenis_kelamin = "laki-laki"

$mahasiswa_ketiga = new Mahasiswa();

$mahasiswa_ketiga->nim = ""
$mahasiswa_ketiga->nama = "Muhammad Pramudia Irvan"
$mahasiswa_ketiga->tanggal_lahir = " 5 mei 2001"
$mahasiswa_ketiga->jenis_kelamin = "laki-laki"

$mahasiswa_pertama->tampilkanUmur();
$mahasiswa_pertama->tampilkanAngkatan();

$mahasiswa_kedua->tampilkanUmur();
$mahasiswa_kedua->tampilkanAngkatan():

$mahasiswa_ketiga->tampilkanUmur();
$mahasiswa_ketiga->tampilkanAngkatan();
