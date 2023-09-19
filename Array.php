<!--
    * Array : Adalah tempat menampung data-data yang di ambil dari database contoh toko pedia dll
    Cara Membuat array :
    -> $siswa =array();
    -> $siswa =[];
    contoh :
    -> $siswa = array("Zaki","Anto","Sinta");
    -> $siswa = ["Zaki","Anto","Sinta"];

    Jenis-Jenis Array :
    -> Indexed Array 
    -> Associative Array
    -> Multidimensional Array
-->

<?php
    $siswa = array();
    echo gettype($siswa);
//--------------------------------------------
    $siswa = [];
    echo gettype($siswa);
//--------------------------------------------
    // ** Indexed Array
    $siswa = ["budi","anto","ali","sinta"];
    //array itu dimulai dari nol
    //budi = 0
    //anto = 1
    //ali = 2
    //sinta = 3
    echo $siswa [3];
    echo count($siswa); // untuk menghitung banyak data yang berada di dalam array
//--------------------------------------------
   // ** Associative Array
    $nilaizaki = ["mtk"=>9, "bahasa"=>8];
    $nilaianto = ["mtk"=>5, "bahasa"=>6];
    echo $nilaizaki["mtk"];
    echo "<br>";
    echo $nilaianto["mtk"];
//--------------------------------------------
// ** Multidimensional Array

    // database siswa
    // 1.   nama : budi
    //      kelas : XI
    //      jurusan : IPA
    // 2.   nama : anto
    //      kelas : XI
    //      jurusan : IPS
    // 3.   nama : sinta
    //      kelas : XI
    //      jurusan : bahasa
    // 4.   nama : ali
    //      kelas : XI
    //      jurusan : seni

    $siswa = [
        ["nama" => "budi", "kelas"=>"XI", "jurusan"=>"IPA"],
        ["nama" => "anto", "kelas"=>"XI", "jurusan"=>"IPS"],
        ["nama" => "sinta", "kelas"=>"XI", "jurusan"=>"BAHASA"],
        ["nama" => "ali", "kelas"=>"XI", "jurusan"=>"SENI"]
    ];

    echo $siswa[0]["nama"];
    echo "<br>";
    echo $siswa[0]["kelas"];
    echo "<br>";
    echo $siswa[0]["jurusan"];
//----------------------------------------------------------------
    $siswa = [
        ["budi", "XI", "IPA"],
        [ "anto", "XI", "IPS"],
        ["sinta", "XI", "BAHASA"],
        [ "ali", "XI", "SENI"]
    ];

    echo $siswa[0][2];
    
?>