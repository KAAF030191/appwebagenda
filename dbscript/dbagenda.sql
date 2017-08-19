create database dbagenda;
use dbagenda;

create table tpersona
(
idPersona int auto_increment not null,
nombre varchar(70) not null,
apellido varchar(70) not null,
dni char(8) not null,
sexo boolean not null,
fechaNacimiento datetime not null,
correoElectronico varchar(700) not null,
created_at datetime not null,
updated_at datetime not null,
primary key(idPersona)
);