<!--
    * PHP session adalah sebuah cara untuk menyimpan value atau nilai informasi ke dalam variabel, yang mana variabel nya itu bisa di gunakan  di beberapa halaman.
    contoh penggunaan : Pengenal apakah user sudah login atau belum

    Didalam Session Ada Beberapa Syntax :
    -> session_start() : Memberi tahu ke system kalau kita menggunakan fitur session
    -> $_SESSION[*nama*] = "Zaki" : Membuat Variable session nama dengan nilai zaki
    -> $_SESSION["nama"] : get value dari session nama
    -> $_SESSION["nama"] = "Ben" : Ubah nilai session nama dari john menjadi ben
    -> session_unset() : hapus semua nilai yang telah di buat
    -> session_destroy() : hapus session/membatalkan syntax dari session_start()
-->

<?php
    session_start();
    $_SESSION["nama"] = "Zaki";
    $_SESSION["nis"] = 1234456;
    $_SESSION["jurusan"] = "ipa";
//................................
    //kalau mau update buat aja session baru
    $_SESSION["nama"] = "Anshari";
    $_SESSION["nis"] = "2110"; 
    $_SESSION["jurusan"] = "IPS";

    echo $_SESSION["nama"];
    echo "<br>";
    echo $_SESSION["nis"];
    echo "<br>";
    echo $_SESSION["jurusan"];
    echo "<br>";
// contoh session unset
    session_start();
    $_SESSION["nama"] = "zaki";
    echo $_SESSION ["nama"];
    session_unset();
    echo $_SESSION["nama"];   
// contoh session unset
    session_start();
    $_SESSION["nama"] = "zaki";

    echo $_SESSION ["nama"];
    
    session_destroy();

    echo $_SESSION ["nama"];
//....................................
?>