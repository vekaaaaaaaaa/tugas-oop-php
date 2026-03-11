<?php
include "Mahasiswa.php";
include "Matakuliah.php"; 

$mahasiswa_1 = new Mahasiswa();
$matkul_1 = new Matakuliah();
$matkul_2 = new Matakuliah();

$matkul_1->setData("A11.12345","Pemrograman Berbasis Web");
$matkul_2->setData("A11.12346","Pemrograman Web Lanjut");

$mahasiswa_1->setData("A11.2023.12345", "Aprilyani Nur Safitri", [$matkul_1, $matkul_2], "1998-05-18");

echo "<pre>";
echo "Umur dihitung dengan method/function : <br>";
print_r($mahasiswa_1->getData()[4]);
echo "<br><br>";
echo "Nilai Umur diberi secara langsung : <br>";
$mahasiswa_1->umur = 100;
print_r($mahasiswa_1->umur);
echo "</pre>";