<?php
    // include DB connection file
    include '../../../../../koneksi/connection.php';

    // mendapatkan nilai dari form
    $id_makanan      = mysql_escape_string($_POST['id_makanan']);
    $nama_makanan   = mysql_escape_string($_POST['nama_makanan']);
    $id_kategori    = mysql_escape_string($_POST['id_kategori']);
    $stok           = mysql_escape_string($_POST['stok']);
    $harga          = mysql_escape_string($_POST['harga']);
    $deskripsi      = mysql_escape_string($_POST['deskripsi']);

    $nama_folder    = "images";
    $nama_file      = $_FILES["gambar"]["name"];
    $tmp            = $_FILES["gambar"]["tmp_name"];
    $path           = "../../../../../$nama_folder/$nama_file";
    $tipe_file      = array("image/jpeg","image/png","image/jpg");

    $query = "INSERT INTO makanan VALUES ('$id_makanan','$nama_makanan','$id_kategori',$stok,$harga,'$deskripsi','$nama_file',0)";

    if(!in_array($_FILES["gambar"]["type"],$tipe_file) && $nama_file != "")
    {
        $error = urldecode("Cek kembali ekstensi file anda (*.jpg,*.gif,*.png)");
        header("Location:../hal_makanan.php?error=$error");
    }
    else if(in_array($_FILES["gambar"]["type"],$tipe_file) && $nama_file != "")
    {
        if (mysqli_query($con, $query))
        {
            move_uploaded_file($tmp,$path);
            header("Location:../hal_makanan.php");
        }
        else
        {
            $error = urldecode("Data tidak berhasil ditambahkan");
            header("Location:../hal_makanan.php?error=$error");
        }
    mysqli_close($con);
    }
?>
