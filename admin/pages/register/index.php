<?php include('../../../koneksi/connection.php'); ?>

<?php include('../../../partials/headerregister.php'); ?>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Registrasi</h2>
                    <form action="process/add_data.php" method="POST">
                    <?php 
                        $tampilkan_isi = "select count(id_customer) as jumlah from customer;";
                        $tampilkan_isi_sql = mysqli_query($con,$tampilkan_isi);
                        $no = 1;
                    
                        while ($isi = mysqli_fetch_array($tampilkan_isi_sql))
                        {
                        $jumlah = $isi['jumlah'];
                        ?>

                                <input type="hidden" name="id_customer" value="CUS-<?php echo $no+$jumlah; ?>">

                        <?php } ?>
                        <div class="input-group">
                            <label class="label">Nama</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <input class="input--style-4" type="text" name="nama_customer">
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-4">
                                <div class="input-group">
                                    <label class="label">Jenis Kelamin</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Laki-Laki
                                            <input type="radio" name="jk_customer" value="Laki-Laki">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Perempuan
                                            <input type="radio" name="jk_customer" value="Perempuan">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <label class="label">Alamat</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <textarea name="alamat_customer" cols="50" rows="5" class="input--style-4"></textarea>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Email</label>
                                    <input class="input--style-4" type="email" name="email_customer">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Phone Number</label>
                                    <input class="input--style-4" type="number" name="telp_customer">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Username</label>
                                    <input class="input--style-4" type="text" name="username">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Password</label>
                                    <input class="input--style-4" type="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                                    title="Harus berisi setidaknya satu angka, satu huruf besar dan kecil, dan setidaknya 8 karakter atau lebih" required>
                                </div>
                            </div>
                        </div>
                        <div class="p-t-15 center justify-content-center">
                            <button class="btn btn--radius-2 btn--blue btn-block" type="submit">Submit</button>
                            <br><br>
                            <div><a href="../../index.php">Sudah punya akun?</a></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>
    <script src="js/global.js"></script>

</body>

</html>
