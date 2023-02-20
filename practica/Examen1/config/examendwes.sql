SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

drop database examendwes;
create database `examendwes`;
use examendwes;

-- --------------------------------------------------------
CREATE TABLE `apuesta` (
  `id` int(11) NOT NULL,
  `fecha` date DEFAULT (CURRENT_DATE),
  `iduser` int(11) NOT NULL,
  `n1` int(11) NOT NULL,
  `n2` int(11) NOT NULL,
  `n3` int(11) NOT NULL,
  `n4` int(11) NOT NULL,
  `n5` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `apuesta` (`id`, `fecha`, `iduser`, `n1`, `n2`, `n3`, `n4`, `n5`) VALUES
(1, '2023-02-08', 3, 2, 3, 4, 6, 1);

-- --------------------------------------------------------
CREATE TABLE `sorteo` (
  `id` int(11) NOT NULL,
  `fecha` date DEFAULT (CURRENT_DATE),
  `n1` int(11) NOT NULL,
  `n2` int(11) NOT NULL,
  `n3` int(11) NOT NULL,
  `n4` int(11) NOT NULL,
  `n5` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `sorteo` (`id`, `fecha`, `n1`, `n2`, `n3`, `n4`, `n5`) VALUES
(3, '2023-02-08', 2, 29, 12, 23, 45);

-- --------------------------------------------------------
CREATE TABLE `usuarios` (
  `iduser` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `perfil` enum('user','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `usuarios` (`iduser`, `nombre`, `password`, `perfil`) VALUES
(1, 'maria', 'maria', 'admin'),
(2, 'pepe', 'pepe', 'user'),
(3, 'lolo', 'lolo', 'user');

--
-- Indices de la tabla `apuesta`
--
ALTER TABLE `apuesta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profe` (`iduser`);

ALTER TABLE `sorteo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profe` (`id`);
--
-- AUTO_INCREMENT
--
ALTER TABLE `apuesta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `sorteo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;