

/*
CREATE TABLE IF NOT EXISTS `withdrawals` (
    `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
    `payment_method` tinyint(4) NOT NULL,
    `type` tinyint(4) NOT NULL,
    `date` timestamp NOT NULL DEFAULT current_timestamp(),
    `amount` float NOT NULL DEFAULT 0,
    `description` text NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;


CREATE TABLE IF NOT EXISTS `incomes` (
    `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
    `payment_method` tinyint(4) NOT NULL,
    `type` tinyint(4) NOT NULL,
    `date` timestamp NOT NULL DEFAULT current_timestamp(),
    `amount` float NOT NULL DEFAULT 0,
    `description` text NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;
*/



