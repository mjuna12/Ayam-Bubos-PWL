<?php
include '../koneksi/connection.php';
session_start();

if($_SESSION['id_customer'] == '')
{
    header('location:../admin/index.php');
}
else
{
    $tampilkan_isi = "select count(id_transaksi) as jumlah from transaksi";
    $tampilkan_isi_sql = mysqli_query($con,$tampilkan_isi);
    $no = 1;
    while ($isi = mysqli_fetch_array($tampilkan_isi_sql))
    {
        $no=$no+$isi['jumlah'];
    }

    foreach ($_SESSION["keranjang"] as $id_makanan => $jumlah) 
    {
        $ambil = $con->query("SELECT * FROM makanan WHERE id_makanan='$id_makanan'");
        $pecah = $ambil->fetch_assoc();
        $id_makanan = $pecah["id_makanan"];
        $subharga =$pecah["harga"]*$jumlah;
        $id_customer = $_SESSION['id_customer'];

        $query = $con->query("INSERT INTO transaksi (id_transaksi, id_customer, id_makanan, tgl_transaksi, jumlah, total) VALUES ('TR-$no', '$id_customer','$id_makanan',now(), $jumlah, $subharga)");
        
        if($query)
        {
            $newqty = $pecah['stok'] - $jumlah;
            $con->query("UPDATE makanan SET stok = $newqty WHERE id_makanan = '$id_makanan'");
        }
        else
        {
            echo "<script>alert('tranksaksi gagal!');</script>";
        }

        $no++;
    }

    unset($_SESSION['keranjang']);
    unset($_SESSION['nomor']);
    header('location:../order.php');
}
?>