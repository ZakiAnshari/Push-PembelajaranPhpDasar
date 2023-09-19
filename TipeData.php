<!--
    Jenis Tipe Data :
    -> String  : Kumpulan Dari Huruf-huruf , yang berda di dalam tanda petik ""|''
    -> Integer : Angka Bulat (Bukan Berkoma), tidak ada di antara tanda petik
    -> Float/double : Angka Desimal (Angka Berkoma) , tidak ada diantara tanda petik
    -> Boolean : true / false , kebanyakan di pakai untuk kebutuhan contitional, biasa nya boolean merupakan hasil dari proses
    -> Array
    -> Object (PHP OOP)
    -> Null : berfungsi untuk mengosongkan variable
-->

<?php

     // String
        $x = "bebek";
        var_dump("10 $x Berenang") 
// -------------------------------------------------------------------------------------
    // Integer
        $x = 10;
        var_dump($x);
// -------------------------------------------------------------------------------------
    // Float/double
        $x = 10.5;
        var_dump($x);
// ------------------------------------------------------------------------------------- 
    // Boolean   
        $x = 10;
        var_dump(is_int($x));
// ------------------------------------------------------------------------------------- 
     // Array
        //cara 1
        $x = arrat("jeruk","apel","pisang");
        //cara 2
        $x = ["jeruk","apel","pisang"]
        var_dump($x);
// ------------------------------------------------------------------------------------- 
     // Null
        $x = null;
        var_dump($x);
?>
