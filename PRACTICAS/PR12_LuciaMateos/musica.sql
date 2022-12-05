create table musica;
use musica;
grant all on musica.* to musica;

CREATE TABLE canciones (
    id INT PRIMARY KEY,
    fecha DATE NOT NULL,
    cancion VARCHAR(50) NOT NULL,
    duracion FLOAT NOT NULL
) engine =innodb;

INSERT INTO canciones VALUES (1, '1975-10-31', 'Bohemian Rhapsody', 5.55 );
INSERT INTO canciones VALUES (2, '1987-11-09', 'The Way You Make Me Feel', 4.58);
INSERT INTO canciones VALUES (3, '1975-12-12', 'Wish You Were Here', 5.40 );
INSERT INTO canciones VALUES (4, '1971-11-08', 'Stairway to Heaven', 8.05 );
INSERT INTO canciones VALUES (5, '1983-01-21', 'Sweet Dreams', 3.35 );
INSERT INTO canciones VALUES (6, '1978-10-27', 'I Will Survive', 8.01 );
INSERT INTO canciones VALUES (7, '1984-01-23', 'Radio Ga Ga', 5.47 );
INSERT INTO canciones VALUES (8, '1978-10-27', 'I Will Survive', 8.01 );
INSERT INTO canciones VALUES (9, '1975-03-12', 'Mamma Mia', 3.35 );
INSERT INTO canciones VALUES (10, '1984-09-17', 'Purple Rain', 8.41 );
INSERT INTO canciones VALUES (11, '1994-10-29', 'All I Want for Christmas Is You', 4.01 );
INSERT INTO canciones VALUES (12, '1970-07-10', 'Paranoid', 2.53 );
INSERT INTO canciones VALUES (13, '1976-07-16', 'Dancing Queen', 4.03 );
INSERT INTO canciones VALUES (14, '1976-12-08', 'Hotel California', 6.30 );
INSERT INTO canciones VALUES (15, '1984-01-23', 'Thriller', 5.58 );
INSERT INTO canciones VALUES (16, '1989-03-03', 'Like a prayer', 5.19 );
INSERT INTO canciones VALUES (17, '1987-02-16', 'With or without you', 4.56 );
INSERT INTO canciones VALUES (18, '1995-10-30', 'Wonderwall', 4.18 );
INSERT INTO canciones VALUES (19, '2008-09-26', 'Poker face', 3.59 );
INSERT INTO canciones VALUES (20, '2002-03-11', 'Complicated', 4.04 );
