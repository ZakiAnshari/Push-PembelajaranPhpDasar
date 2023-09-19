<!--

    * Syarat Membuat Variable / Declaring Variable :

    -> Diawali dengan simbol $ , diikuti dengan nama dari Variable
    -> Dimulai nama variable wajib diawali huruf atau underscore (Tidak Boleh Diawali dengan angka)
    -> nama variable hanya boleh terdiri dari apha-numeric (0-9|a-z|A-Z) dan Underscore
    -> Case sensitive (nama Nya harus sama)
// ---------------------------------------------------------------------------------------
    * Scope Variable adalah variable yang hanya bisa di kenali atau bisa digunakan pada scope-scope tertentu.
    
    -> Global : Hanya Bisa di kenali jika berada diluar function kalau di dalam function maka dia tidak dikenali
    -> Local : Hanya Bisa dikenali jika berada dalam function 
    -> Static : Kita bisa mempertahankan nilai terakhir kita, ketika function itu di pangil lagi, dan tidak di reset

-->

<?php
        // Syarat Membuat Variable
        $nama ="jonson";
        echo $nama;
// -------------------------------------------------------------------------------------
        // Global
        $panjang = 5;
        $lebar = 3;

        function myFunction1(){
            //ini adalah di dalam function
        }

        echo 'panjang nya adalah : ' .$panjang;
        echo "<br>";
        echo 'lebar nya adalah : ' .$lebar;
// ---------------------------------------------------------------------
         // Local
        function myFunction2(){
            $sisi =5 ;

            echo'sisi dari sebuah persegi adalah'.$sisi;
        }
        myFunction2();
// ---------------------------------------------------------------------
        // Contoh kasus global variable (disarankan untuk di pakai)

        $phi = 3.14;

        function kelilinglingkarankecil(){
            global $phi;
            $r =5;
            $hasil = 2 * $phi * $r;
            echo $hasil;
        }

        function kelilinglingkaranbesar(){
            global $phi;
            $r =10;
            $hasil = 2 * $phi * $r;
            echo $hasil;
        }

        kelilinglingkarankecil();
        echo "<br>";
        kelilinglingkaranbesar();
// ---------------------------------------------------------------------
        // Static
        function myFunction(){
            static $x =1;
            echo $x;
            $x++;
        }

        myFunction();
        echo "<br>";
        myFunction();
        echo "<br>";
        myFunction(); 
// ---------------------------------------------------------------------
?>
