
<!--
    Aritmatic Operator
    -> Addition +
    -> Subtraction -
    -> Multiplication *
    -> Division /
    -> Modulus %
    -> Exponentiation **
-->

<?php
    $a = 4;
    $b = 3;
    $c = $a * $b;
    echo $c; 
?>
<!-- -------------------------------------------------------------------- -->
<!--
    Assignment Operator
    -> Assign (a=b)
    -> Addition (a+=b)
    -> Subraction (a-=b)
    -> Multiplication (a*=b)
    -> Division (a/=b)
    -> Modulus (a%=b)
-->

<?php
    $a = 4;
    $b = 3;

    $a = $b;
    echo $a;
// ---------------
    $a = 4;
    $b = 3;

    $a += $b;
    echo $a;
?>
<!-- -------------------------------------------------------------------- -->
<!--
    Comparison Operator
    -> Equal(==) : yang dilihat hanya nilai saja , kalau nilai nya sama maka true
    -> Identical (===) : harus sama tipe dan nilai , kalau tidak sama maka dia false
    -> Not Equal (!=atau<>) : value nya sama  
    -> Not Identical (a!==b) :
    -> Greater than (a>b)
    -> Greater or Equal (a>=b)
    -> Less than (a<b)
    -> Less or Equal (a<=b)
-->

<?php
    $a = 4;
    $b = 3;

    $a == $b;
    var_dump($a==$b); //
// ---------------
    $a = 4;
    $b = "4";

    var_dump($a===$b); // sama semua nya
// ---------------
    $a = 4;
    $b = "4";

    var_dump($a!=$b); // $a tidak sama dengan $b
// ---------------
    $a = 4;
    $b = "4";

    var_dump($a!==$b); // $a tidak identik dengan $b
// ---------------
    $a = 4;
    $b = 3;

    var_dump($a>$b); // $a lebih besar dari $b
// ---------------
    $a = 4;
    $b = 5;

    var_dump($a>=$b); // $a lebih besar sama dengan $b
// ---------------
    $a = 4;
    $b = 3;

    var_dump($a<$b); // $a lebih kecil dari $b
// ---------------
    $a = 4;
    $b = 3;

    var_dump($a<$b); // $a lebih kecil dari $b
// ---------------
    $a = 4;
    $b = 3;

    var_dump($a<$b); // $a lebih kecil sama dengan $b
?>

<!-- -------------------------------------------------------------------- -->
<!--
    Increment/Decrement Operator
    ->  Pre increment (++$a) : ditambah dulu baru di return
    ->  Post increment ($a++) : di return dulu baru di tambah
    ->  Pre decrement (--$a) : dikurang dulu baru di return
    ->  Post decrement ($a--) : di return baru di kurang
-->
<?php
    $a =4;

    echo ++$a;
    echo "<br>";
    echo  $a;
// ---------------
    $a =4;

    echo $a++;
    echo "<br>";
    echo  $a;
// ---------------
    $a =4;

    echo --$a;
    echo "<br>";
    echo  $a;
// ---------------
    $a =4;

    echo $a--;
    echo "<br>";
    echo  $a;
?>
<!-- -------------------------------------------------------------------- -->
<!--
    Logical Operator
    -> And ($x> 1 and $x <10)<= => && ($x > 1 && $x <10)
    -> Or ($x > 1 or $x <10) <= => || ($x > 1 || $x <10)
    -> Xor ($x > 1 xor $y < 5) => return true jika salah satunya benar, tapi bukan keduanya benar
    -> Not ($x!=3)
-->

<?php
    $a =4;
    $b =3;
    var_dump($a > 1 && $b > 1); // benar benar
// ---------------
    $a =4;
    $b =3;
    var_dump($a > 1 or $b > 1); // walaupun ada yang salah tapi ada yang benar maka dia tetap true
// ---------------
    $a =4;
    $b =3;
    var_dump($a > 1 xor $b > 1); // jika salah satu benar yang lain salah maka dia true
// ---------------
    $a =4;
    $b =3;
    var_dump($a != 1 ); // benar
?>
<!-- -------------------------------------------------------------------- -->
<!--
    String Operator
    -> Concatenation ($x.$y) : Menggabungkan String
    -> Concatenation assignment ($x.=$y) : Menambah Atau menempel $y ke $x
-->
<?php
    $a ="hello";
    $b ="world";
    echo $a.$b; 
// ---------------
    $a ="hello";
    $b ="world";
    echo $a.=$b; 
?>
<!-- -------------------------------------------------------------------- -->
<!--
    Conditional Operator 
    -> Ternary
    -> Null coalesting
-->
<?php
    $a = 5;
    $x = gettype($a)=="integer" ? "tipe integer" : "bukan integer";
    echo $x;
// ---------------
    $namalengkap = "zaki anshari";
    $namaaja = "zaki";

    $x = $namalengkap ?? $namaaja;
    echo $x;
?>
<!-- -------------------------------------------------------------------- -->
