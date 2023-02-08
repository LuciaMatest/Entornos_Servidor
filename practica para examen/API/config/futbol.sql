create database futbol;
use futbol;

create table equipo{
    idEquipo int primary key,
    nombreEquipo varchar(40) not null,
    localidadEquipo varchar(100)
} engine=innodb;

create table jugadores(
    idJugador int primary key auto_increment,
    nombreJugador varchar(40) not null,
    posicionJugador int not null,
    sueldoJugador float not null,
    equipoJugador int not null,
    index(equipoJugador),
    foreign key (equipoJugador) references equipo (idEquipo)
) engine=innodb;

insert into equipo (idEquipo,nombreEquipo,localidadEquipo) values (1,'F.C Barcelona','Barcelona');
insert into equipo (idEquipo,nombreEquipo,localidadEquipo) values (2,'Real Madrid C.F','Madrid');

insert into jugadores (idJugador,nombreJugador,posicionJugador,sueldoJugador,equipoJugador) values (null,'Ferran', 11, 30.152,1);
insert into jugadores (idJugador,nombreJugador,posicionJugador,sueldoJugador,equipoJugador) values (null,'Ousmane', 7, 63.257,1);
insert into jugadores (idJugador,nombreJugador,posicionJugador,sueldoJugador,equipoJugador) values (null,'Lewandowski', 9, 45.145,1);

insert into jugadores (idJugador,nombreJugador,posicionJugador,sueldoJugador,equipoJugador) values (null,'Valverde', 15, 75.265,2);
insert into jugadores (idJugador,nombreJugador,posicionJugador,sueldoJugador,equipoJugador) values (null,'Kroos', 8, 30.456,2);
insert into jugadores (idJugador,nombreJugador,posicionJugador,sueldoJugador,equipoJugador) values (null,'Tchouamen', 18, 15.456,2);