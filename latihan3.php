<?php
// contoh array
$cars = array("Ferarry", "Lamborghini aventador", "Audi");
$negara = ["Singapura", "Indonesia", "Jepang"];
$kota = array("singaparna", "indramayu", "jepara");

// //menampilkan array
// echo "I Like " . $cars[0] . "," . $cars[1] . "and" . $cars[2] . ".";
// echo "<br>";
// var_dump($negara);
// echo "<br>";
// print_r($kota);

// menambhkan array
var_dump($kota);
$kota[] = "Bogor";
echo "<br>";
var_dump($kota);
$kota[4] = "Jayapura";
echo "<br>";
var_dump($kota);
?>