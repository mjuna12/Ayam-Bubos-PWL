
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `makanan` (
  `id_makanan` varchar(50) NOT NULL,
  `nama_makanan` varchar(200) NOT NULL,
  `id_kategori` varchar(20) NOT NULL,
  `stok` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `deleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `makanan` (`id_makanan`, `nama_makanan`, `id_kategori`, `stok`, `harga`, `deskripsi`, `gambar`, `deleted`) VALUES
('M-1', 'Ayam Suwir', 'K-1', 10 , 15000, 'Potongan Ayam Suwir', 'ayam suwir.jpeg', 0);
INSERT INTO `makanan` (`id_makanan`, `nama_makanan`, `id_kategori`, `stok`, `harga`, `deskripsi`, `gambar`, `deleted`) VALUES
('M-2', 'Bakso Pedas', 'K-2', 11 , 18000, 'Bakso Pedas Level Setan', 'bakso pedas.jpeg', 0);
INSERT INTO `makanan` (`id_makanan`, `nama_makanan`, `id_kategori`, `stok`, `harga`, `deskripsi`, `gambar`, `deleted`) VALUES
('M-3', 'Mie Setan', 'K-3', 15 , 8000, 'Mie Setan Level Terpedas', 'mie level.jpeg', 0);


CREATE TABLE `customer` (
  `id_customer` varchar(20) NOT NULL,
  `nama_customer` varchar(100) NOT NULL,
  `jk_customer` enum('Laki-Laki','Perempuan') NOT NULL,
  `alamat_customer` varchar(200) NOT NULL,
  `email_customer` varchar(100) NOT NULL,
  `telp_customer` varchar(20) NOT NULL,
  `deleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `kategori` (
  `id_kategori` varchar(20) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL,
  `deleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `deleted`) VALUES
('K-1', 'Ayam', 0),
('K-2', 'Bakso', 0),
('K-3', 'Mie', 0);

CREATE TABLE `transaksi` (
  `id_transaksi` varchar(50) NOT NULL,
  `id_customer` varchar(20) NOT NULL,
  `id_makanan` varchar(50) NOT NULL,
  `tgl_transaksi` datetime NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `transaksi` (`id_transaksi`, `id_customer`, `id_makanan`, `tgl_transaksi`, `jumlah`, `total`) VALUES
('TR-1', 'CUS-1', 'M-1', '2021-12-20 12:59:36', 3, 45000),
DELIMITER $$
CREATE TRIGGER `makanan_baru` AFTER DELETE ON `transaksi` FOR EACH ROW BEGIN
	UPDATE makanan SET stok=stok+OLD.jumlah WHERE id_makanan=OLD.id_makanan;
END
$$
DELIMITER ;

CREATE TABLE `user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `tipe_user` enum('Customer','Admin') NOT NULL,
  `id_customer` varchar(20) DEFAULT NULL,
  `deleted` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
INSERT INTO `user` (`username`, `password`, `tipe_user`, `id_customer`, `deleted`) VALUES
('admin', 'admin', 'Admin', 1 , 0);
INSERT INTO `user` (`username`, `password`, `tipe_user`, `id_customer`, `deleted`) VALUES
('customer', 'customer', 'Customer', 1 , 0);

ALTER TABLE `makanan`
  ADD PRIMARY KEY (`id_makanan`);

ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

ALTER TABLE `transaksi`
ADD PRIMARY KEY (`id_transaksi`);

ALTER TABLE `user`
  ADD KEY `user_customer` (`id_customer`);

ALTER TABLE `makanan`
  ADD INDEX `makanan_kategori` ( `id_kategori` );

ALTER TABLE `transaksi`
  ADD INDEX `transaksi_customer` ( `id_customer` ),
  ADD INDEX `transaksi_makanan` ( `id_makanan` );

ALTER TABLE `user`
  ADD CONSTRAINT `user_customer` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`);
COMMIT;
