<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai tinggi dari form
    $tinggi = $_POST["tinggi"];
    
    // Validasi tinggi harus bilangan bulat positif
    if (!is_numeric($tinggi) || $tinggi <= 0 || floor($tinggi) != $tinggi) {
        echo "<p>Masukkan tinggi segitiga yang valid (bilangan bulat positif).</p>";
    } else {
        // Perulangan untuk setiap baris segitiga
        for ($baris = 1; $baris <= $tinggi; $baris++) {
            // Perulangan untuk menampilkan spasi di awal baris
            for ($spasi = 1; $spasi <= $tinggi - $baris; $spasi++) {
                echo "&nbsp;&nbsp;"; // tambahkan spasi ganda agar lebih rapi
            }
            
            // Perulangan untuk menampilkan bintang pada baris saat ini
            for ($bintang = 1; $bintang <= $baris * 2 - 1; $bintang++) {
                echo "*";
            }
            
            // Baris baru untuk baris selanjutnya
            echo "<br>";
        }
    }
}
?>
