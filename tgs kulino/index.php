<?php

include "Mahasiswa.php";

// objek 1
$mahasiswa1 = new Mahasiswa();
$mahasiswa1->setData("A11.2023.12345", "Vincent", "Teknik Informatika");

// objek 2
$mahasiswa2 = new Mahasiswa();
$mahasiswa2->setData("A11.2023.12346", "Kezia", "Sistem Informasi");

// objek 3
$mahasiswa3 = new Mahasiswa();
$mahasiswa3->setData("A11.2023.12347", "Jerico", "Teknik Informatika");

echo "<h2>Data Mahasiswa</h2>";

$mahasiswa1->tampilData();
$mahasiswa2->tampilData();
$mahasiswa3->tampilData();

?>