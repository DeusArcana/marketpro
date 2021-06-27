
CREATE DATABASE `marketpro` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;


CREATE TABLE IF NOT EXISTS `offers` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `intro` VARCHAR(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `description` VARCHAR(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `image` VARCHAR(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `price` DECIMAL(10, 2),
  `discount_price` DECIMAL(10,2),

  PRIMARY KEY `pk_id`(`id`)
) ENGINE = InnoDB;


INSERT INTO `offers`(`name`, `intro`, `description`, `image`, `price`, `discount_price`) VALUES
	('Special sushi', 'All japanese flavor in one bite', 'Beautiful nigiri with the most delicious rice', '../img/sushi.jpg', 389.99, 49.99)
;

