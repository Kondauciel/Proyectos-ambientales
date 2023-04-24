CREATE DATABASE IF NOT EXISTS  GuauMiau;
use GuauMiau;
create table Productos(
    Id int PRIMARY key AUTO_INCREMENT,
    Nombre varchar(120),
    Correo varchar(120),
    clave varchar(120)
);