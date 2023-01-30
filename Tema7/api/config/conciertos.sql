create database conciertos;
use conciertos;
create table conciertos(
    id int primary key auto_increment,
    grupo varchar(40) not null,
    fecha date not null,
    precio float not null,
    lugar varchar(100)
);

insert into conciertos values(null,'Los planeta', '2023-02-15',25,'Auditorio Ruta de la Plata,Zamora');
insert into conciertos values(null,'Natos y Waor', '2023-03-01',25,'Multiusos, Salamanca');