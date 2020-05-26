CREATE TABLE `product_in_order` (
	`product_id` INT(11) NOT NULL,
	`order_id` INT(11) NOT NULL,
	`quantity` INT(11) NOT NULL,
	PRIMARY KEY (`order_id`, `product_id`),
	INDEX `FK_product_in_order_goods` (`product_id`),
	CONSTRAINT `FK_product_in_order_goods` FOREIGN KEY (`product_id`) REFERENCES `goods` (`id`),
	CONSTRAINT `FK_product_in_order_orders` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`)
)
COLLATE='utf8_general_ci'
ENGINE=InnoDB
;
