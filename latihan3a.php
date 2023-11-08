<?php
function ubahGayaTulisan($teks, $kelas) {
    // Definisikan gaya CSS sesuai dengan kebutuhan
    $style = 'font-size: 28px; font-family: Arial; color: #1A0547; font-style: italic; font-weight: bolder;';
    
    // Menerapkan gaya CSS dengan menggunakan kelas CSS
    return "<span class='$kelas' style='$style'>$teks</span>";
}

$tulisan = "Hello World! Here I Come!";
$kelas = "ganti-style";

echo ubahGayaTulisan($tulisan, $kelas);

?>