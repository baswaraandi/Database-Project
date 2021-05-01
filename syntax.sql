create database Kurma;

create table stock( 
    Id_Stock varchar (15) primary key,
    Jenis_Kurma varchar (20) not null,
    Qualitas_Kurma varchar (10)not null,
    Asal_Negara varchar (30),
    Ketersediaan(Kg) int not null
);

create table supplier (
    Id_Supplier varchar (15) primary key,
    Nama_Supplier varchar (20) not null,
    Tgl_Masuk date not null
);

create table store (
    Id_Store varchar (15) primary key,
    Harga varchar (20) not null,
    Jumlah(Kg) varchar (10) not null,
    Nama_Pegawai varchar (20) not null
);

create table provide (
    Id_Stock varchar (15) not null,
    Id_Supplier varchar (15) not null,
    Tgl_Ambil date not null,
    foreign key (Id_Stock) references stock (Id_Stock),
    foreign key (Id_Supplier) references stock (Id_Supplier)
);

create table ship (
    Id_Supplier varchar (15) not null,
    Id_Store varchar (15) not null,
    Tgl_Kirim date not null,
    Tgl_Sampai date not null,
    Jasa_Kirim varchar (15) not null,
    foreign key (Id_Supplier) references supplier (Id_Supplier),
    foreign key (Id_Store) references store (Id_Store)
);

create table pegawai (
    Id_Store varchar (15) not null,
    Nama_Pegawai varchar (20),
    foreign key (Id_Store) references store (Id_Store)
);

insert into stock values
("KUR101","Sukari Al-Qassim","Star","Arab Saudi",50)
("KUR102","Sukari Deluxe","Premium","Madinah",50),
("KUR103","Sukari Libya","Standard","Libya",20),
("KUR201","Palm Frutt Madu","Standard","Tunisia",10),
("KUR301","Ajwa","Star","Madinah",100),

insert into supplier values
("SUP001","SUKARI AL-SWAG COMPANY","2021-02-31")
("SUP002","PT. PALM FRUTT","2021-02-20")
("SUP003","AJWA COMPANY","2021-02-31")
("KUR101","Sukari Al-Qassim","Star",50),
("KUR102","Sukari Deluxe","Premium",50),
("KUR103","Sukari Libya","Standard",20),
("KUR201","Palm Frutt Madu","Standard",10),
("KUR501","Ajwa","Star",100);
