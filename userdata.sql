-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-05-2022 a las 12:52:46
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `userdata`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `user` varchar(10) NOT NULL,
  `password` varchar(256) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(10) NOT NULL,
  `usr_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`user`, `password`, `email`, `name`, `usr_id`) VALUES
('Agni', '634cc7af20', 'ajimenezal01@gmail.com', 'alejandro', 1),
('Agni', '092bcba17fdee6ff9c3ce4262cd48bb3d9bfb042d8d14e2dc7b35a0ee3f92d0c040ea49a1820d6ea3f86ea159b8c2d3590ed7df4fb4ac20bb0ce35be6d80e1ab', 'aleajndro11@jimenez.al', 'Agni', 4),
('Agni', '4dbebc655a648082d425d89dd3c102d6e0188015abe17aecaf41b13b81e12775015b82f26a1b332f2bc7c25a9eb7b99896bd3260d0ef1186c7e5612c13b04d9c', 'ajaja@gmail.com', 'Agni', 6),
('agni', '496b6c738654834c38347a3f955a03797b37011dce236c312d70ff471f8800a2629b5a37deeb84ae04b0e85b83a90bfe9acf599254c5fb561d1cc87d7d7b96b6', 'alejandro@gmail.com', 'alejandro', 7),
('Agni', '496b6c738654834c38347a3f955a03797b37011dce236c312d70ff471f8800a2629b5a37deeb84ae04b0e85b83a90bfe9acf599254c5fb561d1cc87d7d7b96b6', 'al@gmail.com', 'Alejandro ', 10),
('agni', '634cc7af20e6e54680ab8fd96370b5a934133800ea77b3d6eea77d14b237c32b83d014d7257cbf4efc39a29adf26baec23f90ab02db35b97ed9834e827ace35e', 'ajimmez@gmail.com', 'Alejandro', 11),
('ale', '1865accebb2b168630fa7beddb2d0e2b8c825d407a6cbcf5221fd3e9aa01a626c6d5dc85f952468565bd9e0187079e6e8d7ec12832512f40addd32194560009e', 'ajmaj@gmail.com', 'alejandro', 12),
('agni', '634cc7af20e6e54680ab8fd96370b5a934133800ea77b3d6eea77d14b237c32b83d014d7257cbf4efc39a29adf26baec23f90ab02db35b97ed9834e827ace35e', 'ajajm@gmail.com', 'Alejandro', 13),
('ajam', '402bde4b137ccde918d6b33bbc8b2ed77f4d0b7283959ec89cbf3b19bd1968b45c2116028520ef5b1a4268567fb73bc87c7e716f17847165d6e119af618b2fc9', 'alej@jimez.com', 'Alejandro', 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reclamacio`
--

CREATE TABLE `reclamacio` (
  `usr_id` int(11) NOT NULL,
  `missatge` varchar(2000) DEFAULT NULL,
  `rec_type` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `reclamacio`
--

INSERT INTO `reclamacio` (`usr_id`, `missatge`, `rec_type`) VALUES
(1, 'La cascara del ahuacate', 'Justificante de retraso'),
(4, 'Hola', 'Hola'),
(11, '.        Introdueix aqui el text de la teva queixa\r\n        .', '.Justificante de retraso.'),
(14, '.        Introdueix aqui el text de la teva queixa\r\n        .', '.Justificante de retraso.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`usr_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indices de la tabla `reclamacio`
--
ALTER TABLE `reclamacio`
  ADD UNIQUE KEY `usr_id_3` (`usr_id`),
  ADD KEY `usr_id` (`usr_id`),
  ADD KEY `usr_id_2` (`usr_id`),
  ADD KEY `usr_id_4` (`usr_id`),
  ADD KEY `usr_id_5` (`usr_id`),
  ADD KEY `missatge` (`missatge`(768));

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `usr_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `reclamacio`
--
ALTER TABLE `reclamacio`
  ADD CONSTRAINT `reclamacio_ibfk_1` FOREIGN KEY (`usr_id`) REFERENCES `login` (`usr_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
