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
NSS varchar(35) not null unique,
correo varchar(35) not null,
password varchar(35) not null
);
select * from registro;
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
drop table enfermedad;
 create table enfermedad(
 idenfer int(8) unsigned primary key auto_increment not null,
 nombre varchar(40) not null,
 registro_id int(8) unsigned not null,
  CONSTRAINT fk_Re FOREIGN KEY (registro_id)
        REFERENCES registro (idRegistro)
 );
 show tables;
ALTER TABLE enfermedad
    ADD COLUMN idRe int(8) not null default 1,
    ADD CONSTRAINT fk_relacion FOREIGN KEY (idRe)
        REFERENCES registro(idRegistro);
        
        
        ALTER TABLE ventas
    ADD COLUMN idMedico int(200) NOT NULL default 1,
    ADD CONSTRAINT `fk_id_medico` FOREIGN KEY (idMedico)
        REFERENCES medicos (id);