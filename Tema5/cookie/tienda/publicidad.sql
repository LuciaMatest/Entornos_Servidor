create database publicidad;

use publicidad;


create table producto (
	codigo numeric(5) primary key,
	nombre varchar(25) not null,
	descripcion text,
	alta varchar(50) not null,
	baja varchar(50) not null
);

insert into producto (codigo,nombre,descripcion,alta,baja) values
(1,'Barra',
'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce facilisis faucibus ipsum, in cursus ligula pulvinar eu. Aliquam molestie ac lacus a aliquet. Cras vitae eros ac quam vestibulum suscipit. Cras mi lorem, semper at purus in, lacinia tristique erat. Morbi magna erat, mattis eu augue in, interdum ultricies sapien. Suspendisse potenti. Phasellus vitae iaculis erat, non sagittis risus. Donec arcu odio, porta quis neque sed, pellentesque suscipit mi. Vivamus dignissim eros nec odio auctor laoreet. In hac habitasse platea dictumst. Integer ut auctor ligula, et consequat nulla. Curabitur cursus tempor cursus. Maecenas auctor dui vel sapien posuere varius.',
'imagenes/pan1.png',
'imagenes/pan1p.png'
);
insert into producto (codigo,nombre,descripcion,alta,baja) values
(2,'Pan de pueblo',
'Nunc ultricies elit auctor mauris congue, eget lacinia ex imperdiet. Quisque porttitor hendrerit rhoncus. Cras tincidunt finibus arcu sit amet pharetra. Aenean eleifend leo in orci malesuada, eu semper magna viverra. Ut sollicitudin sed lorem sed euismod. Maecenas gravida sapien ornare risus ornare, eu mollis nulla posuere. Nam tincidunt velit quis elementum finibus. Mauris a dolor vehicula, maximus neque vel, semper metus. Cras quis ultrices est. Aenean eu leo vulputate neque ullamcorper pharetra vitae eu nulla. Morbi porta luctus justo. Phasellus auctor tempor neque, id pulvinar ex. Pellentesque faucibus pulvinar interdum. Sed porta mauris vitae ultrices luctus.',
'imagenes/pan2.png',
'imagenes/pan2p.png'
);
insert into producto (codigo,nombre,descripcion,alta,baja) values
(3,'Bollo',
'Donec vel arcu ut ligula vestibulum ultricies. Curabitur ut semper ex, id venenatis quam. In imperdiet molestie eros a pretium. Aliquam sed ligula vitae augue commodo varius vitae vitae diam. In a odio et urna commodo ultrices consectetur in metus. Curabitur at blandit quam, sit amet malesuada nisl. Pellentesque sapien neque, hendrerit quis risus vitae, euismod convallis felis. Vivamus aliquam nisl in nibh posuere, eget pretium sapien viverra. Fusce cursus augue nec lacus pharetra, venenatis ultricies neque accumsan. Aenean ultricies ex fermentum dapibus euismod.',
'imagenes/pan3.png',
'imagenes/pan3p.png'
);
insert into producto (codigo,nombre,descripcion,alta,baja) values
(4,'Pan artístico',
'Aliquam at lorem sollicitudin, gravida odio vel, mattis nisi. Duis sagittis nisi mauris, vel molestie quam cursus non. Donec vitae mattis nunc, at tincidunt ante. Duis tellus odio, volutpat in efficitur ac, mattis euismod nibh. Pellentesque at gravida sapien. Aliquam eget pharetra massa. Quisque aliquet hendrerit dolor nec rhoncus. Phasellus eget consectetur arcu. Sed id quam commodo, tristique purus nec, faucibus quam. Suspendisse tempus metus gravida pellentesque molestie.',
'imagenes/pan4.png',
'imagenes/pan4p.png'
);
insert into producto (codigo,nombre,descripcion,alta,baja) values
(5,'Pan hamburguesa',
'Suspendisse potenti. Duis mattis nibh diam, et tincidunt lorem venenatis eget. Pellentesque volutpat rutrum urna, at sodales mi semper non. Nunc feugiat lorem ac est blandit molestie. Phasellus vulputate, lacus quis vehicula pretium, metus felis bibendum metus, quis aliquet tortor massa vel ligula. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras at risus finibus, vestibulum mi nec, posuere lectus. Vivamus ornare scelerisque viverra. In vestibulum lacus nec rhoncus tincidunt. Duis sit amet mi neque.',
'imagenes/pan5.png',
'imagenes/pan5p.png'
);
