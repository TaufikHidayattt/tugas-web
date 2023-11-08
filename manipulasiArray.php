<?php

$hari = ["senin","selasa","rabu"];

echo "array awal : ";
print_r($hari);
echo "<hr>";

echo "array setelah di pop : ";
$hasil = array_pop($hari); //menghapus atau mengambil elemen terakhir dari array
print_r($hari);
echo"<br>elemen yang di pop : $hasil <hr>";

echo "array setelah di pop : ";
$hasil = array_push($hari, "kamis","jum'at");// menambahkan beberapa elemen pada array
print_r($hari);
echo "<hr>";

echo "array setelah di shift :";
$hasil = array_shift($hari);// memhapus atau mengambil elemen pertama dari array
print_r($hari);
echo "<br>elemen yang dishift : $hasil <hr>";

echo "array setelah diunshift : ";
$hasil = array_shift($hari,"elemen","ditambahkan"); //menambahkan beberapa elemen pada akhir array
print_r($hari);

?>