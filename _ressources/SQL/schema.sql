
-- Schema BDD

CREATE TABLE IF NOT EXISTS `cours` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(65) NOT NULL,
  `desc` TEXT CHARACTER SET utf8  NULL,
  `url` VARCHAR(255) NOT NULL,
  `date` DATE NOT NULL,
  `duration` INT NOT NULL,
  `teacher` VARCHAR(65) NOT NULL,
  PRIMARY KEY (`id`)
);

-- Champs uniques

ALTER TABLE `cours`
  ADD UNIQUE KEY `name_UNIQUE` (`name`),
  ADD UNIQUE KEY `date_UNIQUE` (`date`),
  ADD UNIQUE KEY `url_UNIQUE` (`url`);
