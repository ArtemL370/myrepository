CREATE TABLE `post` (
	`id` INT(10) NOT NULL AUTO_INCREMENT,
	`title` VARCHAR(255) NOT NULL COLLATE 'utf8mb4_unicode_ci',
	`subtitle` VARCHAR(255) NOT NULL COLLATE 'utf8mb4_unicode_ci',
	`img_src` VARCHAR(255) NOT NULL COLLATE 'utf8mb4_unicode_ci',
	`img_alt` VARCHAR(255) NOT NULL COLLATE 'utf8mb4_unicode_ci',
	`author` VARCHAR(255) NOT NULL COLLATE 'utf8mb4_unicode_ci',
	`timestamp` INT(10) NOT NULL,
	`author_img` VARCHAR(255) NOT NULL COLLATE 'utf8mb4_unicode_ci',
	`author_img_alt` VARCHAR(255) NOT NULL COLLATE 'utf8mb4_unicode_ci',
	`label` INT(10) NOT NULL,
	`content` TEXT NOT NULL COLLATE 'utf8mb4_unicode_ci',
	`featured` INT(10) NOT NULL,
	PRIMARY KEY (`id`) USING BTREE
)
COLLATE='utf8mb4_unicode_ci'
ENGINE=InnoDB
AUTO_INCREMENT=23
;
