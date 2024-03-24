CREATE TABLE `post` (
	`id` INT(10) NOT NULL AUTO_INCREMENT,
	`title` VARCHAR(255) NOT NULL COLLATE 'utf8mb4_unicode_ci',
	`subtitle` VARCHAR(255) NOT NULL COLLATE 'utf8mb4_unicode_ci',
	`img_link` VARCHAR(255) NOT NULL COLLATE 'utf8mb4_unicode_ci',
	`img_alt` VARCHAR(255) NOT NULL COLLATE 'utf8mb4_unicode_ci',
	`author` VARCHAR(255) NOT NULL COLLATE 'utf8mb4_unicode_ci',
	`date` TIMESTAMP NOT NULL,
	`link` VARCHAR(255) NOT NULL COLLATE 'utf8mb4_unicode_ci',
	`author_icon` VARCHAR(255) NOT NULL COLLATE 'utf8mb4_unicode_ci',
	`autor_icon_alt` VARCHAR(255) NOT NULL COLLATE 'utf8mb4_unicode_ci',
	`label` SET('false','true') NOT NULL DEFAULT 'false' COLLATE 'utf8mb4_unicode_ci',
	`block_element` VARCHAR(255) NOT NULL COLLATE 'utf8mb4_unicode_ci',
	PRIMARY KEY (`id`) USING BTREE
)
COLLATE='utf8mb4_unicode_ci'
ENGINE=InnoDB
AUTO_INCREMENT=10
;
