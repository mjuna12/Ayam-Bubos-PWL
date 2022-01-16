<?php
    // include DB connection file
    include '../../../../../koneksi/connection.php';

    // mendapatkan nilai dari form
    $id_makanan     = $_POST['id_makanan'];
    $nama_makanan   = $_POST['nama_makanan'];
    $id_kategori    = $_POST['id_kategori'];
    $stok           = $_POST['stok'];
    $harga          = $_POST['harga'];
    $deskripsi      = $_POST['deskripsi'];

    $nama_folder    = "images";
    $nama_file      = $_FILES["gambar"]["name"];
    $tmp            = $_FILES["gambar"]["tmp_name"];
    $path           = "../../../../../$nama_folder/$nama_file";
    $tipe_file      = array("image/jpeg","image/png","image/jpg","image/jpeg");

    $query = "UPDATE makanan SET nama_makanan = '$nama_makanan', id_kategori = '$id_kategori', stok = $stok, harga = $harga, deskripsi = '$deskripsi' WHERE id_makanan = '$id_makanan'";

    // syarat upload foto
    if(!in_array($_FILES["gambar"]["type"],$tipe_file) && $nama_file != "")
    {
        $error = urldecode("Cek kembali ekstensi file anda (*.jpg,*.gif,*.png,*.jpeg)");
        header("Location:../hal_makanan.php?error=$error");
    }
    else if(in_array($_FILES["gambar"]["type"],$tipe_file) && $nama_file != "")
    {
        // jika gambar diubah
        $query_gambar = "SELECT gambar FROM makanan WHERE id_makanan=$id_makanan";
        $result       = mysqli_query($connect, $query_gambar); 
        $hasil        = mysqli_fetch_assoc($result);
        $gambar       = $hasil['gambar'];

        // menghapus gambar lama
        unlink('../../../../../images/'. $gambar);
        
        // upload gambar baru
        move_uploaded_file($tmp,$path);
        
        // query untuk mengupdate data + gambar
	    $query = "UPDATE makanan SET nama_makanan = '$nama makanan', id_kategori = '$id_kategori', stok = $stok, harga = $harga, deskripsi = '$deskripsi', gambar='$nama_file' WHERE id_makanan = '$id_makanan'";

        // menjalankan query isi data
        if (mysqli_query($con, $query))
        {
            header("Location:../hal_makanan.php");
        }
        else
        {
            $error = urldecode("Data tidak berhasil diupdate");
            header("Location:../hal_makanan.php?error=$error");
        }
    }
    else if($nama_file == "")
    {
	// query untuk mengupdate data
        $query = "UPDATE makanan SET nama_makanan = '$nama_makanan', id_kategori = '$id_kategori', stok = $stok, harga = $harga, deskripsi = '$deskripsi' WHERE id_makanan = '$id_makanan'";

        // menjalankan query update data
        if (mysqli_query($con, $query))
        {
            header("Location:../hal_makanan.php");
        }
        else
        {
            $error = urldecode("Update gagal dijalankan");
            header("Location:../hal_makanan.php?error=$error");
        }
    }

    mysqli_close($con);
?>
