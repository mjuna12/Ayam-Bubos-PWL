<?php
include 'koneksi/connection.php';
session_start();

$id_buku = $_GET['id_buku'];
$_SESSION['nomor']+=1;


if(isset($_SESSION['keranjang'][$id_buku]))
{
    $_SESSION['keranjang'][$id_buku]+=1;
    
}

else
{
    $_SESSION['keranjang'][$id_buku] = 1;
}

header("location:../cart.php");

?>