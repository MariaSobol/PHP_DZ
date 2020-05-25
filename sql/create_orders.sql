CREATE TABLE `orders` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`user_id` INT(11) NOT NULL,
	`status` VARCHAR(50) NULL DEFAULT 'Принят',
	PRIMARY KEY (`id`),
	INDEX `orders_users_id_fk` (`user_id`),
	CONSTRAINT `orders_users_id_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
)
COLLATE='utf8_general_ci'
ENGINE=InnoDB
;
