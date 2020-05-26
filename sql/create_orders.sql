CREATE TABLE `orders` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`user_id` INT(11) NOT NULL,
	`status_id` INT(11) NULL DEFAULT '1',
	PRIMARY KEY (`id`),
	INDEX `orders_users_id_fk` (`user_id`),
	INDEX `orders_order_status_fk` (`status_id`),
	CONSTRAINT `orders_order_status_fk` FOREIGN KEY (`status_id`) REFERENCES `order_status` (`id`),
	CONSTRAINT `orders_users_id_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
)
COLLATE='utf8_general_ci'
ENGINE=InnoDB
AUTO_INCREMENT=15
;
