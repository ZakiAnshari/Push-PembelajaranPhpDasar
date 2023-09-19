<!--
    * Get & Post : Merupakan suatu method yang di butuhkan untuk mengirim data agar bisa di proses lebih lanjut contoh data login 
    
    # Ketika kirim data bagus pakai post soal nya data terkirim secara rahasia , dan kalau kirim data pakai get maka dara akan kelihatan di url
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    label{
        display: block;
    }
</style>

<body>

    <h3>Input Data Siswa</h3>
    <!-- action : adalah tujuan halaman yang mau di tuju 
        method
        ->get : ketika mengirim data , di url kita akan di kirimin query string apa saja yang kita inputin tadi.
        ->post : tidak tampil query string tapi hasil nya ada
    -->
    <form action="" method="">
        <div>
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama">
        </div>
        <div>
            <label for="jurusan">Jurusan</label>
            <input type="text" name="jurusan" id="jurusan">
        </div>
        <div>
            <input type="submit" name="buttonKirim" name="submit" value="kirim">
        </div>
    </form>

    <?php
        // cara mendapatkan get
        echo $_GET["nama"];
        echo "<br>";
        echo $_GET["jurusan"];
        // cara mendapatkan post
        echo $_POST["nama"];
        echo "<br>";
        echo $_POST["jurusan"];
        // cara menampung nya
        if(isset($_POST["buttonKirim"])){
            $nama = $_POST["nama"];
            $jurusan = $_POST["jurusan"];

            echo $nama;
            echo "<br>";
            echo $jurusan;
        }
    ?>

</body>
</html>