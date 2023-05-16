DROP DATABASE IF EXISTS toko_kue;

CREATE DATABASE toko_kue;
USE toko_kue;

CREATE TABLE user_pelanggan (
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(100) UNIQUE,
    nama TEXT NOT NULL,
    password TEXT NOT NULL,
    no_hp TEXT NOT NULL,
    email TEXT NOT NULL,
    alamat TEXT NOT NULL
);

INSERT INTO user_pelanggan (username, nama, password, no_hp, email, alamat) VALUES ('dummy','dummy user',MD5('dummy'),'0','dummy@dummy.dummy','');

CREATE TABLE produk (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nama TEXT NOT NULL,
    harga INT NOT NULL,
    path_gambar TEXT NOT NULL,
    keterangan TEXT
);

INSERT INTO produk (nama, harga, path_gambar, keterangan) VALUES ('dummy produk','123','/img/dummy produk.jpg','dummy produk');