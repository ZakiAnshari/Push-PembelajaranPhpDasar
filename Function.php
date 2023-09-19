<!--
    * Function : Adalah Suatu Blog yang berisi statment yang akan menghasilkan sesuatu, bisa dipangil berkali-kali.
                (Bikin sekali tapi mangil nya bisa berkali kali)

-->

<?php
    menyapa("Zaki",17);
    echo "<br>";
    menyapa("Yanto",20);
    echo "<br>";
    menyapa("Bagas",23);

    function menyapa($nama,$umur){
        // ini code yang akan di proses
        echo "halo selamat pagi ".$nama."Kamu Umur nya".$umur;
    }
//----------------------------------------------------------------------
    menyapa1("Zaki");
    echo "<br>";
    menyapa1("Yanto");
    echo "<br>";
    menyapa1("Bagas");

    function menyapa1($nama,$umur=8){
        // ini code yang akan di proses
        echo "halo selamat pagi ".$nama."Kamu Umur nya".$umur;
    }
//----------------------------------------------------------------------
    function hitungPendapatan ($gaji,$tunjangan){
        $hasil = $gaji + $tunjangan;
        return $hasil;
    }

    function hitungPengeluaran ($kontrakan,$konsumsi){
        $hasil =$kontrakan + $konsumsi;
        return $hasil;
    }

    function hitungSisauang ($pendapatan,$pengeluaran){
        $hasil =$pendapatan - $pengeluaran;
        return $hasil;
    }

    $pendapatanzaki = hitungPendapatan(1000,4000);

    $pengeluaranzaki = hitungPengeluaran(1000,5000);

    $sisauangzaki = hitungSisauang($pendapatanzaki, $pengeluaranzaki);
    echo $sisauangzaki;
?>