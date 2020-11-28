

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";




CREATE TABLE `filmek` (
  `id` int(11) NOT NULL,
  `cim` varchar(60) COLLATE utf8mb4_hungarian_ci NOT NULL
 
)
ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;



INSERT INTO `filmek` (`id`, `cim`) VALUES
(1, 'Másnaposok'),
(2, 'Nagyfiúk'),
(4, 'Underworld 4.  - Az ébredés'),
(5, 'A védhetetlen'),
(7, 'Rekviem egy álomért'),
(8, 'Fogadom'),
(9, 'Lost in space'),
(10, 'Polisse'),
(11, 'Spiderman'),
(12, 'Vasember'),
(13, 'Viharsziget'),
(14, 'Sonic'),
(15, 'Borotvaélen'),
(16, 'A vérdíj'),
(17, 'A szerelem művészete'),
(18, 'Apollo'),
(19, 'Útonállók');


ALTER TABLE `filmek`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `filmek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;
