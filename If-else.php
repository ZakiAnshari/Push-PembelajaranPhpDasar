<!--

 * PHP Conditional if,else,else if
    -> Digunakan untuk mendapatkan suatu hasil dari setiap kondisi

    misal nya form login
    kondisi : username dan password benar
    Hasil : berhasil login

    Jenis Jenis Conditional
    -> if : biasa nya digunakan jika hanya ada 1 kondisi
        contoh : 
        Makan di restoran All you can Eat
        jika umur pengunjung kurang dari 6 tahun , maka dapat diskon 50%
    -> if,else : digunakan jika ada 2 kondisi
        contoh : 
        Makan di restoran all you can Eat
        jika umur pengunjung kurang dari 6 tahun , maka dapat diskon 50%
        selain itu tidak dapat diskon
    -> if,else if,else : digunakan jika lebih dari 2 kondisi
        contoh :
        Makan di restoran all you can eat
        jika umur pengunjung kurang dari 6 tahun , maka dapat diskon 50%
        Jika umur pengunjung 6-15 tahun , maka dapat diskon 30%
        selain itu tidak dapat diskon

-->
<?php
    //jika umur pengunjung kurang dari 6 tahun , maka dapat diskon 50%
    $umur = 5;
    if($umur < 6){
        echo "anda dapat diskon 50%";
    }
// ---------------------------------------------
    //selain itu tidak dapat diskon
    $umur = 5;
    if($umur < 6){
        echo "anda dapat diskon 50%";
    }
    else{
        echo "Tidak dapat diskon";
    }
// ---------------------------------------------
    //Jika umur pengunjung 6-15 tahun , maka dapat diskon 30%
    $umur = 5;
    if($umur < 6){
        echo "anda dapat diskon 50%";
    }
    else if($umur >= 6 && $umur <=15){
        echo "Anda dapat diskon 30%";
    }
    else{
        echo "Tidak dapat diskon";
    }
// ----------------------------------------------------
?>

<!--

 * Contoh Latihan Conditional + Operator
    Makan di restoran zaki , tiket masuk 100.000 rupiah,
    tentukan tiket masuk yang harus di bayar oleh :
    -> Anak Umur 5 Tahun 
    -> Remaja Umur 14 Tahun
    -> Orang Dewasa umur 27 tahun

    Dengan Ketentuan :
    a. Jika umur pengunjung kurang dari 6 tahun , maka akan dapat diskon 50%
    b. jika umur pengunjung 7-15 tahun , maka dapat diskon 30%
    c. Selain Itu tidak dapat diskon

-->
<?php

    $umur = 5;
    if($umur < 6){
        echo "anda dapat diskon 50%";
    }
    else if($umur >= 7 && $umur <=15){
        echo "Anda dapat diskon 30%";
    }
    else{
        echo "Tidak dapat diskon";
    }

?>