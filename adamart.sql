CREATE DATABASE adamarket;
USE adamarket;

CREATE TABLE barang (
    id_barang INT AUTO_INCREMENT PRIMARY KEY,
    nama_barang VARCHAR(30),
    satuan VARCHAR(20),
    harga_satuan BIGINT(20)
);

CREATE TABLE kasir (
    id_kasir INT AUTO_INCREMENT PRIMARY KEY,
    nama_kasir VARCHAR(30),
    alamat VARCHAR(100),
    no_tlp BIGINT(20),
    no_ktp BIGINT(20),
    username VARCHAR(100),
    password VARCHAR(255)
);

CREATE TABLE shift (
    id_shift INT AUTO_INCREMENT PRIMARY KEY,
    id_kasir INT,
    saldo_awal BIGINT(20),
    jumlah_penjualan BIGINT(20),
    saldo_akhir BIGINT(20),
    waktu_buka DATETIME,
    waktu_tutup DATETIME,
    status ENUM('aktif', 'tidak'),
    
    FOREIGN KEY (id_kasir) REFERENCES kasir(id_kasir)
);

CREATE TABLE penjualan (
    id_penjualan INT AUTO_INCREMENT PRIMARY KEY,
    waktu_transaksi TIMESTAMP,
    total BIGINT(20),
    id_shift INT,

    FOREIGN KEY (id_shift) REFERENCES shift(id_shift)
);

CREATE TABLE detailpenjualan (
    id_detailpenjualan INT AUTO_INCREMENT PRIMARY KEY,
    id_penjualan INT,
    id_barang INT,
    kuantitas INT,
    harga_satuan BIGINT(20),
    sub_total BIGINT(20)

    FOREIGN KEY (id_penjualan) REFERENCES penjualan(id_penjualan),
    FOREIGN KEY (id_barang) REFERENCES barang(id_barang)
);

