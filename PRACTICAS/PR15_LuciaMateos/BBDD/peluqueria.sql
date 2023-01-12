create database peluqueria;
use peluqueria;

CREATE TABLE roles (
    codigo CHAR(5) PRIMARY KEY,
	descripcion VARCHAR(30)
) engine=innodb;

create table usuarios (
	usuario CHAR(20) PRIMARY KEY,
	clave CHAR(40) NOT NULL,
	nombre VARCHAR(75) NOT NULL,
	correo VARCHAR(75) NOT NULL,
    fecha DATE NOT NULL,
	rol CHAR(5) NOT NULL,
	index (rol),
	foreign key (rol) references roles (codigo)
) engine=innodb;

CREATE TABLE productos (
    cod_producto INT PRIMARY KEY,
    imagen CHAR(30) NOT NULL,
    nombre CHAR(30) NOT NULL,
    descripcion CHAR(140) NOT NULL,
    precio NUMERIC(5,2) NOT NULL,
    stock INT(3) NOT NULL
) engine=innodb;

insert into roles (codigo, descripcion) values ('ADM01','Administrador');
insert into roles (codigo, descripcion) values ('M0001','Moderador');
insert into roles (codigo, descripcion) values ('U0001','Usuario');

insert into usuarios (usuario, clave, nombre, correo, fecha, rol) values ('Lulu','361c2042f695b5f3d30ee3ec0429750df6279a04','Lucia123','lucia@correo.com', '1994-10-11', 'ADM01');
insert into usuarios (usuario, clave, nombre, correo, fecha, rol) values ('Mod1','d2556a84b8b33416e0475cb7346fd65682bde4b6','Mod123','mod1@correo.com', '2015-09-14', 'M0001');
insert into usuarios (usuario, clave, nombre, correo, fecha, rol) values ('User1','1738fbf898038e1b9119d24c929804df51e506aa','Usu123','usu1@correo.com', '2001-05-22', 'U0001');

insert into productos (cod_producto, imagen, nombre, descripcion, precio, stock) values ('1117','./imagen/1.png','Tahe Botanic','Mascarilla Aceite de Árgan, Aceite de Amapola y Aceite de Palo de Rosa 700 ml','21.80','7');
insert into productos (cod_producto, imagen, nombre, descripcion, precio, stock) values ('2596','./imagen/2.png','Tahe Natural Hair','Champu Dermorelax Essence 1000 ml','19.95','10');
insert into productos (cod_producto, imagen, nombre, descripcion, precio, stock) values ('3030','./imagen/3.jpg','Postquam','Champú de hierbas 1000 ml','6.90','4');
insert into productos (cod_producto, imagen, nombre, descripcion, precio, stock) values ('3152','./imagen/4.jpg','Crawford','Champú nutrición 1000 ml','10.61','12');
insert into productos (cod_producto, imagen, nombre, descripcion, precio, stock) values ('3319','./imagen/5.png','Revlon','Champú Micellar Equave hidratante con queratina 250 ml','13.81','6');
insert into productos (cod_producto, imagen, nombre, descripcion, precio, stock) values ('4497','./imagen/6.jpg','Postquam','Emulsión Suavizante Cabellos Teñidos 1000 ml','8.90','2');

create table ventas (
    id_ventas INT PRIMARY KEY AUTO_INCREMENT,
    usuario_ventas CHAR(30) NOT NULL,
    fecha_compra DATE NOT NULL,
    cod_producto INT NOT NULL,
    cantidad INT NOT NULL,
    precio_total NUMERIC(10,2) NOT NULL,
	index(usuario_ventas),
    index(cod_Producto),
	foreign key (usuario_ventas) references usuarios (usuario),
	foreign key (cod_producto) references productos (cod_producto)
) engine=innodb;

insert into ventas (id_ventas, usuario_ventas, fecha_compra, cod_producto, cantidad, precio_total) values ('1117','Lulu','2015-09-14','3030','1','13.81');

create table albaran (
    id_albaran INT PRIMARY KEY AUTO_INCREMENT,
    fecha_albaran DATE NOT NULL,
    cod_producto INT NOT NULL,
    cantidad INT NOT NULL,
    usuario_albaran CHAR(30) NOT NULL,
    index(usuario_albaran),
    index(cod_Producto),
    foreign key (usuario_albaran) references usuarios (usuario),
	foreign key (cod_producto) references productos (cod_producto)
) engine=innodb;