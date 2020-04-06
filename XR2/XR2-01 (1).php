<?php
   $angka1 = $_POST["angka1"];
   $angka2 = $_POST["angka2"];

if ($_POST["submit"] == "Jumlah"){
    $hasil = $angka1 + $angka2;
    echo "$angka1 + $angka2 = $hasil";
}
else if ($_POST["submit"] == "Kurang"){
    $hasil = $angka1 - $angka2;
    echo "$angka1 - $angka2 = $hasil";
}
else if ($_POST["submit"] == "Kali"){
    $hasil = $angka1 * $angka2;
    echo "$angka1 * $angka2 = $hasil";
}
else if ($_POST["submit"] == "Bagi"){
    $hasil = $angka1 / $angka2;
    echo "$angka1 / $angka2 = $hasil";
}
?>