create table musica;
use musica;
grant all on musica.* to musica;

CREATE TABLE canciones (
    id INT PRIMARY KEY,
    fecha DATE NOT NULL,
    cancion VARCHAR(50) NOT NULL,
    duracion FLOAT
) 