<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muh.Arifatwa</title>
</head>
<body>
<h1>Tugas pemograman web  <br></h1>     
<?php
echo "<br>=================LUAS SEGI TIGA=======================<br>";
// menhitung luas segitiga
$alas = 10; 
$tinggi = 5;
$luas = 0.5 * $alas * $tinggi;
echo "Luas segitiga dengan alas $alas, dan tinggi $tinggi, adalah $luas <br>";
echo "<br>";



echo "<br>==================LINGKARAN=======================<br>";
// lingkaran
$jari_jari = 10;
$pi = 3.14;
$luas = $pi * $jari_jari * $jari_jari;
echo "Luas lingkaran dengan jari-jari $jari_jari adalah $luas\n";
// Menentukan apakah lingkaran termasuk ke dalam kategori besar atau kecil
$luas_besar = 100;
$luas_kecil = 50;
if ($luas > $luas_besar) {
    echo "Lingkaran ini termasuk dalam kategori besar";
} elseif ($luas > $luas_kecil) {
    echo "Lingkaran ini termasuk dalam kategori sedang";
} else {
    echo "Lingkaran ini termasuk dalam kategori kecil";
}
echo "<br>";

echo "<br>================PERSEGI PANJANG====================";
// persegi panjang
// Menentukan nilai panjang dan lebar persegi panjang
$panjang = 10;
$lebar = 5;
// Menghitung luas persegi panjang dengan menggunakan formula
$luas = $panjang * $lebar;


// Menampilkan hasil perhitungan luas persegi panjang
echo "<br> Luas persegi panjang dengan panjang $panjang dan lebar $lebar adalah $luas";
// Menentukan apakah persegi panjang termasuk ke dalam kategori besar atau kecil
$luas_besar = 100;
$luas_kecil = 50;
if ($luas > $luas_besar) {
    echo " Persegi panjang ini termasuk dalam kategori besar\n";
} elseif ($luas > $luas_kecil && $luas <= $luas_besar) {
    echo " Persegi panjang ini termasuk dalam kategori sedang\n";
} else {
    echo " Persegi panjang ini termasuk dalam kategori kecil\n";
}

?>




    
</body>
</html>