create database sesiones2;
use sesiones2;


create table perfil (
	codigo char(5) primary key,
	descripcion varchar(30)
) engine=innodb;

create table usuarios (
	usuario char(20) primary key,
	clave char(40) not null,
	nombre varchar(75) not null,
	correo varchar(75) not null,
	perfil char(5) not null,
	index (perfil),
	foreign key (perfil) references perfil (codigo)
) engine=innodb;

create table paginas (
	codigo char(5) primary key,
	descripcion varchar(50),
	url varchar(75) not null
) engine=innodb;

create table accede (
	codigoPerfil char(5) not null,
	codigoPagina char(5) not null,
	index(codigoPerfil),
	index(codigoPagina),
	primary key (codigoPerfil,codigoPagina),
	foreign key (codigoPerfil) references perfil (codigo),
	foreign key (codigoPagina) references paginas (codigo)
) engine=innodb;


insert into perfil (codigo, descripcion) values ('ADM01','Administrador');
insert into perfil (codigo, descripcion) values ('P0001','Perfil 1');
insert into perfil (codigo, descripcion) values ('P0002','Perfil 2');

insert into usuarios (usuario,clave, nombre, correo,perfil) values ('u1','356a192b7913b04c54574d18c28d46e6395428ab','Alfredo Ginés Areces','aga@correo.es','ADM01');
insert into usuarios (usuario,clave, nombre, correo,perfil) values ('u2','da4b9237bacccdf19c0760cab7aec4a8359010b0','Javier Gracia Cubo','jgc@correo.es','P0001');
insert into usuarios (usuario,clave, nombre, correo,perfil) values ('u3','77de68daecd823babbb58edb1c8e14d7106e83bb','Lucia Romera Ganso','lrg@correo.es','P0002');
insert into usuarios (usuario,clave, nombre, correo,perfil) values ('u4','1b6453892473a467d07372d45eb05abc2031647a','Marina Soler Leal','msl@correo.es','P0002');

insert into paginas (codigo,descripcion,url) values ('PAG01','Página 1','pagina1.php');
insert into paginas (codigo,descripcion,url) values ('PAG02','Página 2','pagina2.php');
insert into paginas (codigo,descripcion,url) values ('PAG03','Página 3','pagina3.php');
insert into paginas (codigo,descripcion,url) values ('PAG04','Página 4','pagina4.php');
insert into paginas (codigo,descripcion,url) values ('PAG05','Página 5','pagina5.php');
insert into paginas (codigo,descripcion,url) values ('PAG06','Página 6','pagina6.php');

insert into accede (codigoPerfil,codigoPagina) values ('ADM01','PAG01');
insert into accede (codigoPerfil,codigoPagina) values ('ADM01','PAG02');
insert into accede (codigoPerfil,codigoPagina) values ('ADM01','PAG03');
insert into accede (codigoPerfil,codigoPagina) values ('ADM01','PAG04');
insert into accede (codigoPerfil,codigoPagina) values ('ADM01','PAG05');
insert into accede (codigoPerfil,codigoPagina) values ('ADM01','PAG06');
insert into accede (codigoPerfil,codigoPagina) values ('P0001','PAG02');
insert into accede (codigoPerfil,codigoPagina) values ('P0001','PAG03');
insert into accede (codigoPerfil,codigoPagina) values ('P0001','PAG05');
insert into accede (codigoPerfil,codigoPagina) values ('P0002','PAG02');
insert into accede (codigoPerfil,codigoPagina) values ('P0002','PAG03');
insert into accede (codigoPerfil,codigoPagina) values ('P0002','PAG04');
insert into accede (codigoPerfil,codigoPagina) values ('P0002','PAG05');
insert into accede (codigoPerfil,codigoPagina) values ('P0002','PAG06');




