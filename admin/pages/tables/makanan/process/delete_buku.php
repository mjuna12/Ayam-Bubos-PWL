<?php
    // include DB connection file
    include '../../../../../koneksi/connection.php';

    // mendapatkan nilai dari form
    $id_makanan = $_GET['id_makanan'];

    $query = "DELETE FROM makanan WHERE id_makanan='" . $id_makanan . "'";

    // menjalankan query isi data
    if (mysqli_query($con, $query))
    {
        header("Location:../hal_makanan.php");
    }
    else
    {
        $error = urldecode("Data tidak berhasil dihapus");
        header("Location:../hal_makanan.php?error=$error");
    }

    mysqli_close($con);
?>