<?php

// irwan nauli


$server = "localhost" ;
$user = "root";
$pass = "";
$db = "lesson";

$koneksi = mysql_connect($server = "localhost", $user="root", $pass="", $db="lesson") ;

if ($koneksi) {
    
    echo "ditemukan";
}
else {
    "anda belum cukup umur";
}


