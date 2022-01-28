<?php
    // include DB connection file
    include '../../../../../koneksi/connection.php';

    // mendapatkan nilai dari form
    $id_customer        = mysql_escape_string($_POST['id_customer']);
    $nama_customer      = mysql_escape_string($_POST['nama_customer']);
    $jk_customer        = mysql_escape_string($_POST['jk_customer']);
    $alamat_customer      = mysql_escape_string($_POST['alamat_customer']);
    $email_customer      = mysql_escape_string($_POST['email_customer']);
    $telp_customer      = mysql_escape_string($_POST['telp_customer']);

    $query = "INSERT INTO customer VALUES ('$id_customer','$nama_customer','$jk_customer','$alamat_customer','$email_customer','$telp_customer',0)";

    // menjalankan query isi data
    if (mysqli_query($con, $query))
    {
        header("Location:../table_customer.php");
    }
    else
    {
        $error = urldecode("Data tidak berhasil ditambahkan");
        header("Location:../table_customer.php?error=$error");
    }

    mysqli_close($con);
?>
