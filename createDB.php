CREATE DATABASE IF NOT EXISTS `resalaother` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;

CREATE DATABASE IF NOT EXISTS `resalastrategy` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;

CREATE DATABASE IF NOT EXISTS `resala` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `resala`.`student` (
`mobile` TEXT CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL ,
`l_name` TEXT CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL ,
`m_name` TEXT CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL ,
`f_name` TEXT CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL ,
`student_id` INT( 5 ) NOT NULL AUTO_INCREMENT PRIMARY KEY
) ENGINE = MYISAM CHARACTER SET utf8 COLLATE utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `resala`.`studentReport` (
`comment` TEXT CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL ,
`month` TEXT CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL ,
`student_id` INT( 5 ) NOT NULL ,
`report_id` INT( 5 ) NOT NULL AUTO_INCREMENT PRIMARY KEY
) ENGINE = MYISAM CHARACTER SET utf8 COLLATE utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `resala`.`stuff` (
`work` VARCHAR( 3 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL ,
`date2` TEXT CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL ,
`day2` TEXT CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL ,
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
`gs_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`group_id` INT NOT NULL ,
`student_id` INT NOT NULL
) ENGINE = MYISAM CHARACTER SET utf8 COLLATE utf8_unicode_ci;