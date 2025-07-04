
CREATE DATABASE pemrograman_web_contoh;
USE pemrograman_web_contoh;

-- Tabel buku
CREATE TABLE buku (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    Judul VARCHAR(255),
    Penulis VARCHAR(255),
    Tahun_Terbit INT,
    Harga DECIMAL(10,2),
    stok INT
);

-- Tabel pelanggan
CREATE TABLE pelanggan (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    Nama VARCHAR(255),
    Alamat VARCHAR(255),
    Email VARCHAR(255),
    Telepon VARCHAR(20)
);

-- Tabel pesanan
CREATE TABLE pesanan (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    Tanggal_Pesanan DATE,
    Pelanggan_ID INT,
    Total_Harga DECIMAL(10,2),
    FOREIGN KEY (Pelanggan_ID) REFERENCES pelanggan(ID)
);

-- Tabel detail_pesanan
CREATE TABLE detail_pesanan (
    Pesanan_ID INT,
    Buku_ID INT,
    Kuantitas INT,
    Harga_Per_Satuan DECIMAL(10,2),
    PRIMARY KEY (Pesanan_ID, Buku_ID),
    FOREIGN KEY (Pesanan_ID) REFERENCES pesanan(ID),
    FOREIGN KEY (Buku_ID) REFERENCES buku(ID)
);
