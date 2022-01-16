<?php

include 'connect_db.php';

$con = mysqli_connect(HOST,UNAME,PASS,DB);

if (mysqli_connect_errno())
{
    echo "Gagal koneksi ke MySQL : " . mysqli_connect_error();
} 

?>