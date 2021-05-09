create database Kurma;

create table stock( 
    Id_Stock varchar (15) not null primary key,
    Jenis_Kurma varchar (20) not null,
    Qualitas_Kurma varchar (10) not null,
    Asal_Negara varchar (30),
    Ketersediaan_Kg int not null
);

create table provide (
    Id_Stock varchar (15) not null,
    Id_Supplier varchar (15) not null,
    Tgl_Ambil date not null,
    foreign key (Id_Stock) references stock (Id_Stock),
    foreign key (Id_Supplier) references supplier (Id_Supplier)
);

create table supplier (
    Id_Supplier varchar (15) not null primary key,
    Nama_Supplier varchar (20) not null,
    Tgl_Masuk date not null
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

create table store (
    Id_Store varchar (15) not null primary key,
    Jenis_Kurma varchar (20),
    Qualitas_Kurma varchar (10),
    Harga_Rp_perKg int not null,
    Jumlah_Kg int not null,
    Nama_Pegawai varchar (20) not null
);

create table transaksi (
    Id_Transaksi varchar (15) not null primary key,
    Id_Store varchar (15) not null,
    Nama_Buyer varchar (50) not null,
    Tgl_Transaksi date not null,
    foreign key (Id_Store) references store (Id_Store)
);

insert into stock values
("KUR101","Sukari Al-Qassim","Star","Arab Saudi",800),
("KUR102","Sukari Deluxe","Premium","Madinah",900),
("KUR103","Sukari Libya","Standard","Libya",1000),
("KUR201","Palm Frutt Madu","Standard","Tunisia",1500),
("KUR301","Ajwa","Star","Madinah",500);

insert into supplier values
("SUP001","SUKARI COMPANY","2021-02-28"),
("SUP002","PT. PALM FRUTT","2021-02-20"),
("SUP003","AJWA COMPANY","2021-02-27");

insert into provide values
("KUR101","SUP001","2021-03-30"),
("KUR102","SUP001","2021-03-30"),
("KUR103","SUP001","2021-03-30"),
("KUR201","SUP002","2021-03-15"),
("KUR301","SUP003","2021-03-20");

insert into store values
("STO001","Sukari Al-Qassim","Star",100000,30,"Agus"),
("STO001","Ajwa","Star",170000,15,"Agus"),
("STO002","Sukari Deluxe","Premium",80000,50,"Rheza"),
("STO002","Sukari Libya","Standard",65000,100,"Rheza"),
("STO003","Palm Frutt Madu","Standard",40000,200,"Oded");

insert into ship values
("SUP001","STO001","2021-04-01", "2021-04-04", "PT. CARGO 5"),
("SUP003","STO001","2021-04-01", "2021-04-04", "PT. CARGO 5"),
("SUP001","STO002","2021-04-02", "2021-04-05", "PT. ILLUMINATY"),
("SUP001","STO002","2021-04-02", "2021-04-05", "PT. ILLUMINATY"),
("SUP002","STO003","2021-04-03", "2021-04-06", "PT. PTPT");

insert into transaksi values
("TR001","STO001","Dika","2021-05-01"),
("TR002","STO001","Dika","2021-05-03"),
("TR003","STO001","Sahabat","2021-05-03"),
("TR004","STO001","Afgan","2021-05-04"),
("TR005","STO001","Kiwil","2021-05-04"),
("TR006","STO001","Kiwil","2021-05-05"),
("TR006","STO001","Afgan","2021-05-06");
