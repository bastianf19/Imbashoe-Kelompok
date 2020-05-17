CREATE TABLE users
(
id_user INT not null AUTO_INCREMENT,
username varchar(255) not null,
nama varchar(255) not null,
email varchar(255) not null,
pass varchar(255) not null,
alamat varchar(255),
no_hp varchar(15),
peran varchar(10),
PRIMARY KEY (id_user)
);

CREATE TABLE produk
(
    id_produk INT not null AUTO_INCREMENT,
    nama_produk varchar(255) not null,
    brand_produk varchar(50) not null,
    deskripsi_produk varchar(255) not null,
    harga_produk DECIMAL(13,0) not null,
    foto_produk varchar(500),
    kategori varchar(50) not null,
    status_produk bit not null,	
    PRIMARY KEY (id_produk)
);

CREATE TABLE wishlist
(
    id_wishlist INT not null AUTO_INCREMENT,
    id_produk INT,
    id_user INT,
    PRIMARY KEY (id_wishlist),
    FOREIGN KEY (id_produk) REFERENCES produk(id_produk)
    FOREIGN KEY (id_user) REFERENCES users(id_user)
);