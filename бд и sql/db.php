CREATE DATABASE my_db DEFAULT CHARSET SET utf8;

CREATE TABLE `athletes` (
    `athlete_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
    `full_name` varchar(100) DEFAULT NULL,
    `e-mail` varchar(255) DEFAULT NULL,
    `phone` int(11) DEFAULT NULL,
    `birth_date` date,
    `age` int(3) DEFAULT NULL,
    `creation_date` datetime,
    `passport_id` int(6) DEFAULT NULL,
    `average_place` int DEFAULT NULL,
    `biography` varchar(max) DEFAULT NULL,
    `video_presentation` varchar(255) DEFAULT NULL,
    PRIMARY KEY (`athlete_id`)
) ENGINE=InnoDB DEFAULT=utf8;


SELECT DISTINCT `athletes`.`athlete_id` , `athletes`.`full_name` , COUNT(`results`.`competition_id`) AS `counts` FROM `results`
INNER JOIN `athletes` ON `athletes`.`athlete_id` = `results`.`athlete_id`
GROUP BY `athlete_id`
ORDER BY `counts` DESC
LIMIT 2
