<?php
// VARIABEL STRING

$nama = 'IVEN DF';
$pesan = 'SELAMAT DATANG';
echo "<h2>" . $pesan.' '. $nama ."</h2>";

var_dump($nama);


// VARIABEL INT
$x = 10;
$y = 5;

echo "<p>  x = " . $x."</p>"  ;  
echo "<p>  y = " . $y."</p>"  ;  

$tambah = $x + $y;
echo "<p>".$tambah ."</p>";

$kurang = $x - $y;
echo "<p>".$kurang ."</p>";

$kali = $x * $y;
echo "<p>".$kali ."</p>";

$bagi = $x / $y;
echo "<p>".$bagi ."</p>";

var_dump($x);


// VARIABEL FLOAT UNTUK MENYIMPAN BILANGAN PECAHAN

$x = 23.3;
$y = 4.7;

// print $x;

var_dump($x);

// VARIABEL BOOLEAN 
//  TRUE 1 atau FALSE 0
//  AND x
//  OR +

$a = true; 
$b = false; 
$or = $a || $b;
$and = $a && $b;

echo "<br>";
var_dump($or);
var_dump($and);

// VARIABEL ARRAY 
// Untuk menyimpan banyak dalam satu variabel

// Penulisan Lama
$nama = array("Iven","Amon","Naris");

// Penulisan Baru 
$nama_kedua = ['Loyek','Bob','Frabs','Nerlin'] ;

echo "<br>";
foreach($nama_kedua as $peserta)
{
    echo $peserta . "<br>";
}

$data = [
'nama' => 'Iven',
'alamat' => 'Perumunas III', 
'jenis_kelamin' => 'Pria'
];

echo "<br>";

echo 'Nama : ' . $data['nama'] . '<br>';
echo 'Alamat : ' . $data['alamat'] . '<br>';
echo 'Jenis Kelamin : ' . $data['jenis_kelamin'] . '<br>';