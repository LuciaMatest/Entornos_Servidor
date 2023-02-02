create database tienda;
use tienda;

create table roles(
    id char(5) primary key,
    descripcion char(30)
) engine=innodb;

INSERT INTO roles VALUES ('ADM01','Administrador');
INSERT INTO roles VALUES ('MOD02','Moderador');
INSERT INTO roles VALUES ('NOR03','Usuario normal');

create table usuarios(
    usuario char(20) primary key,
    clave char(40) not null,
    nombre varchar(75) not null,
	correo varchar(75) not null,
    fecha date not null,
	roles char(5) not null,
	index (roles),
	foreign key (roles) references roles (id)
)engine=innodb;


INSERT INTO usuarios VALUES ('admin','8c9c8ccfcbf6e09beb44b8e25841037ee2292cfe','admin','admin@admin.com','2023-01-15','ADM01');

INSERT INTO usuarios VALUES ('mod','aa0e39d753ded291efa2454e91b40b18442af243','mod','mod@mod.com','2023-01-15','MOD02');

INSERT INTO usuarios VALUES ('normi','1cc75cf56f6263ee1af243787705c56688071e59','normi','normi@normi.com','2023-01-15','NOR03');

create table productos(
    idProducto int primary key auto_increment,
    nombre char(60) not null,
    precio numeric(5,2) not null,
    descripcion char(85) not null,
    stock int(3) not null,
    url char(30) not null
)engine=innodb;

INSERT INTO productos (nombre,precio,descripcion,stock,url) VALUES ('Paleta de bellota 5 Jotas','167.45','Bellota 100% ibérica 5 J ','10','./web/img/bellota5j.png');
INSERT INTO productos (nombre,precio,descripcion,stock,url) VALUES ('Jamon Benito','133.65','El jamon Benito Etiqueta Negra Seleccion de Autor','3','./web/img/benito.png');
INSERT INTO productos (nombre,precio,descripcion,stock,url) VALUES ('Paletilla Serrana Manuel Diaz','28.00','Prestigiosa marca Manuel Diaz 50% raza Duroc','5','./web/img/manuel.jpg');
INSERT INTO productos (nombre,precio,descripcion,stock,url) VALUES ('Jamon Reserva El Pozo','66.00','Jamón serrano Reserva Serie Oro  El Pozo.','12','./web/img/elpozo.jpg');
INSERT INTO productos (nombre,precio,descripcion,stock,url) VALUES ('Jamon Joselito 100%','475.00','Jamon Joselito 100% natural con mas de 48 meses de curacion.','2','./web/img/joselito.jpg');
INSERT INTO productos (nombre,precio,descripcion,stock,url) VALUES ('Paletilla Bodega Los Romeros','30.00','Paleta Serrana Bodega Los Romeros','20','./web/img/romeros.jpg');

create table ventas(
    idVenta int primary key auto_increment,
    cliente char(20) not null,
    fechaVent date not null,
    idProducto int not null,
    cantidad int not null,
    precioTotal numeric(7,2) not null,
    index(cliente),
    foreign key (cliente) references usuarios(usuario),
    index(idProducto),
    foreign key (idProducto) references productos(idProducto)
)engine=innodb;

create table albaran(
    idAlbaran int primary key auto_increment,
    fechaAlbaran date not null,
    idProducto int not null,
    cantidad int not null,
    usuario char(20) not null,
    index(idProducto),
    foreign key (idProducto) references productos(idProducto),
    index(usuario),
    foreign key (usuario) references usuarios(usuario)
)engine=innodb;