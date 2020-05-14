--drop table users;
CREATE TABLE users
(
id_user INT IDENTITY(1,1) primary key,
nama varchar(255) not null,
email varchar(255),
pass varchar(255) not null,
alamat varchar(255),
no_hp varchar(15),
);

/*
insert into users values('Bastian','bastian.f@gmail.com','admin','keputih','081911262915');

select * from users;
*/

--drop table produk;
create table produk
(
	id_produk INT IDENTITY(1,1) primary key,
	nama_produk varchar(255) not null,
	brand_produk varchar(50) not null,
	deskripsi_produk varchar(255) not null,
	harga_produk money not null,
	foto_produk varchar(500),
	status_produk bit not null,	
);

