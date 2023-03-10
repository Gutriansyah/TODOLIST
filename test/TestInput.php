<?php

require_once "../helper/input.php";

$name = input("name");
echo " hello $name";

//* menjalankan function menggunakan variabel untuk mengambil return value
$gender = input("kelamin");
// * menampilkan return yang diambil
echo $gender;
