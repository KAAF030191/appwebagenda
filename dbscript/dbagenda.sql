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

tpersonatpersonattelefonocreate table ttelefono
(
idTelefono int auto_increment not null,
idPersona int not null,
operador varchar(20) not null,
numero varchar(20) not null,
created_at datetime not null,
updated_at datetime not null,
foreign key(idPersona) references tpersona(idPersona)
on delete cascade on update cascade,
primary key(idTelefono)
);