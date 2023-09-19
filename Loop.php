<!--
    * Loop / Perulangan di PHP : menjalankan fungsi/code/script secara berulang-ulang selama kondisi terpenuhi
    Jenis Loop : 
    -> For loop
    -> Foreach loop
    -> While loop
    -> Do while loop

-->

<?php
    // perulangan for 
    // cetak angka 1 - 100

    for ($i=1; $i <= 100 ; $i++) { 
        echo $i;
        echo "<br>";
    }
// --------------------------------------
    // perulangan while
    // cetak angka 1 - 100

    $a=1;
    while ($a <= 100) {
        echo $a;
        echo "<br>";
        $a++;
    }
// --------------------------------------
    // Perulangan do while
    // cetak angka 1 -100

    $a=1;
    do {
        echo $a;
        echo "<br>";
        $a++;
    } while ($a <= 100);
// --------------------------------------
// Perulangan Foreach
    $warna =[ "merah","kuning","hijau","biru"];
    foreach ($warna as  $value) {
        echo $value; 
        echo "<br>";
    }
// --------------------------------------
    // Contoh : Masukkan data tersebut ke dalam table
    $siswa = [
        ["nama" => "budi", "kelas"=>"XI", "jurusan"=>"IPA"],
        ["nama" => "anto", "kelas"=>"XI", "jurusan"=>"IPS"],
        ["nama" => "sinta", "kelas"=>"XI", "jurusan"=>"BAHASA"],
        ["nama" => "ali", "kelas"=>"XI", "jurusan"=>"SENI"]
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table{
        border-collapse: collapse;
    }
</style>
<body>
    <h2>List siswa</h2>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Jurusan</th>
        </tr>
    </table>

    <?php
        $a=0;
        while ($a < count ($siswa)) {
            echo "<tr>";
                echo "<td>".$siswa[$a]["nama"]."</td>";
                echo "<td>".$siswa[$a]["kelas"]."</td>";
                echo "<td>".$siswa[$a]["jurusan"]."</td>";
            echo "<tr>";
            $a++;
        }
    ?>
</body>
</html>