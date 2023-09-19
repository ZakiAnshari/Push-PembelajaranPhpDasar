<!--
    ->  jika umur pengunjung kurang dari 6 tahun , maka dapat diskon 50%
    ->  Jika umur pengunjung 6-15 tahun , maka dapat diskon 30%
    ->  Selain itu tidak dapat diskon
-->

<?php
    $umur =5;
    switch ($umur) {
        case ($umur < 6):
            echo "Anda Dapat diskon 50%";
        break;

        case ($umur >= 6 && $umur <= 15):
            echo "Anda Dapat diskon 30%";
        break;

        default:
            echo "Anda Tidak Dapat diskon";
        break;
    }
?>

// Contoh 

<?php
    $umur =5;
    switch ($umur) {
        case ($umur < 6):
            echo "Anda Dapat diskon 50%";
        break;

        case ($umur >= 7 && $umur <= 15):
            echo "Anda Dapat diskon 30%";
        break;

        default:
            echo "Anda Tidak Dapat diskon";
        break;
    }
?>