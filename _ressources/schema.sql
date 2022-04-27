
-- Schema table 'cours'
CREATE TABLE `cours` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(65) NOT NULL UNIQUE,
  `description` text CHARACTER SET utf8mb4,
  `url` varchar(255) NOT NULL UNIQUE,
  `date` date NOT NULL UNIQUE,
  `duration` int NOT NULL,
  `teacher` varchar(65) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
