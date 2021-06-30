create database imss;
use imss;
create table registro(
idRegistro int(8) unsigned primary key auto_increment not null, 
nombre varchar(35) not null,
apellidoPaterno varchar(35) not null,
apellidoMaterno varchar(35) not null,
Domicilio varchar(40) not null,
Ciudad varchar(35) not null,
Estado varchar(35) not null,
NSS varchar(35) not null,
correo varchar(35) not null,
password varchar(35) not null
);

create table usuario(
idUsuario int(8) unsigned primary key auto_increment not null, 
usuario varchar(35) not null,
password varchar(35) not null
);

CREATE TABLE citas(
idCita int(8) unsigned primary key auto_increment not null,
enfermedad varchar(40) not null,
fecha date not null,
time time not  null
-- aqui no se si tambien debe de ir clinica y domicilio de la clinica
);
 create database notificacion(
 
 );