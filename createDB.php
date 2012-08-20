CREATE DATABASE IF NOT EXISTS `resalaother` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;

CREATE DATABASE IF NOT EXISTS `resalastrategy` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;

CREATE DATABASE IF NOT EXISTS `resala` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `resala`.`student` (
`gender` TEXT CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL ,
`mobile` TEXT CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL ,
`l_name` TEXT CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL ,
`m_name` TEXT CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL ,
`f_name` TEXT CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL ,
`student_id` INT( 5 ) NOT NULL AUTO_INCREMENT PRIMARY KEY
) ENGINE = MYISAM CHARACTER SET utf8 COLLATE utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS  `resala`.`studentReport` (
`sr_id` INT( 5 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`student_id` INT( 5 ) NOT NULL ,
`group_id` INT( 5 ) NOT NULL ,
`schedule_id` INT( 5 ) NOT NULL ,
`comment` TEXT CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL ,
`1st_monthly` TEXT CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL ,
`2nd_monthly` TEXT CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL ,
`3rd_monthly` TEXT CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL ,
`4th_monthly` TEXT CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE = MYISAM CHARACTER SET utf8 COLLATE utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `resala`.`stuff` (
`slot2` TEXT CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL ,
`date2` TEXT CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL ,
`day2` TEXT CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL ,
`slot1` TEXT CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL ,
`date1` TEXT CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL ,
`day1` TEXT CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL ,
`mobile` TEXT CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL ,
`l_name` TEXT CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL ,
`m_name` TEXT CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL ,
`f_name` TEXT CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL ,
`subject` TEXT CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL ,
`stuff_id` INT( 5 ) NOT NULL AUTO_INCREMENT PRIMARY KEY
) ENGINE = MYISAM CHARACTER SET utf8 COLLATE utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `resala`.`stuffReport` (
`comment` TEXT CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL ,
`month` TEXT CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL ,
`stuff_id` TEXT CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL ,
`report_id` INT( 5 ) NOT NULL AUTO_INCREMENT PRIMARY KEY
) ENGINE = MYISAM CHARACTER SET utf8 COLLATE utf8_unicode_ci;

CREATE TABLE  `resala`.`group` (
`name` TEXT CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL ,
`group_id` INT( 5 ) NOT NULL AUTO_INCREMENT PRIMARY KEY
) ENGINE = MYISAM CHARACTER SET utf8 COLLATE utf8_unicode_ci;

CREATE TABLE  `resala`.`groupStudent` (
`group_id` INT NOT NULL ,
`student_id` INT NOT NULL ,
UNIQUE (`group_id` ,`student_id` )
) ENGINE = MYISAM CHARACTER SET utf8 COLLATE utf8_unicode_ci;

CREATE TABLE  `resala`.`schedule` (
`schedule_id` INT( 5 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`stuff_id` INT( 5 ) NOT NULL ,
`group_id` INT( 5 ) NOT NULL , 
`day` TEXT CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL ,
`dayOrder` TEXT CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL ,
`date` TEXT CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL ,
UNIQUE (`schedule_id`, `stuff_id`,`group_id`)
) ENGINE = MYISAM CHARACTER SET utf8 COLLATE utf8_unicode_ci;

CREATE TABLE  `resala`.`attend` (
`attend_id` INT( 5 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`schedule_id` INT( 5 ) NOT NULL ,
`group_id` INT( 5 ) NOT NULL ,
`stuff_id` INT( 5 ) NOT NULL ,
`student_id` INT( 5 ) NOT NULL ,
`percentage` INT( 5 ) NOT NULL ,
`currentClass` INT( 5 ) NOT NULL ,
UNIQUE (`schedule_id` , `group_id` , `stuff_id`, `student_id`)
) ENGINE = MYISAM CHARACTER SET utf8 COLLATE utf8_unicode_ci;