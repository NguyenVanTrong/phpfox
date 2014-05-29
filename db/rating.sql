ALTER TABLE `phpfox_blog` ADD COLUMN `total_rating` INT(10) NOT NULL DEFAULT 0 AFTER `item_id` , ADD COLUMN `total_score` DECIMAL(4,2) NOT NULL DEFAULT 0.0 AFTER `total_rating` ; 
CREATE TABLE IF NOT EXISTS `phpfox_blog_rating` ( 
`rate_id` int(10) NOT NULL AUTO_INCREMENT, 
`item_id` int(10) NOT NULL, 
`user_id` int(10) NOT NULL, 
`rating` decimal(4,2) NOT NULL, 
`time_stamp` int(10) NOT NULL, 
PRIMARY KEY (`rate_id`) 
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ; 
