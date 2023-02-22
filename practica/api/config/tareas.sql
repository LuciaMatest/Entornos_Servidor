create database tareas;
use tareas;
create table tareas(
    id int primary key auto_increment,
    titulo varchar(50) not null,
    descripcion text not null,
    fecha_creacion datetime not null,
    fecha_vencida datetime not null,
    estado varchar(20)
);

insert into tareas values(null,'Los planeta', 'unos planetas que van por ahi bailando', '2023-02-15','2023-03-28','pediente');
insert into tareas values(null,'Los animales', 'unos animales blanditos y amorosos', '2023-04-02','2023-06-12','en progreso');
insert into tareas values(null,'Los humanos', 'unos humanos que no paran de dar por saco', '2023-10-11','2023-12-25','completada');
