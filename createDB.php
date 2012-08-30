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
`schedule_id` INT( 5 ) NOT NULL ,
`group_id` INT( 5 ) NOT NULL ,
`stuff_id` INT( 5 ) NOT NULL ,
`report_id` INT( 5 ) NOT NULL AUTO_INCREMENT PRIMARY KEY
) ENGINE = MYISAM CHARACTER SET utf8 COLLATE utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `resala`.`group` (
`name` TEXT CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL ,
`group_id` INT( 5 ) NOT NULL AUTO_INCREMENT PRIMARY KEY
) ENGINE = MYISAM CHARACTER SET utf8 COLLATE utf8_unicode_ci;

INSERT INTO `resala`.`group` (`name`, `group_id`) VALUES ('أولى أبتدائى أ', NULL);
INSERT INTO `resala`.`group` (`name`, `group_id`) VALUES ('أولى أبتدائى ب', NULL);

INSERT INTO `resala`.`group` (`name`, `group_id`) VALUES ('تانية أبتدائى أ', NULL);
INSERT INTO `resala`.`group` (`name`, `group_id`) VALUES ('تانية أبتدائى ب', NULL);

INSERT INTO `resala`.`group` (`name`, `group_id`) VALUES ('ثالثة أبتدائى أ', NULL);
INSERT INTO `resala`.`group` (`name`, `group_id`) VALUES ('ثالثة أبتدائى ب', NULL);

INSERT INTO `resala`.`group` (`name`, `group_id`) VALUES ('رابعة أبتدائى أ', NULL);
INSERT INTO `resala`.`group` (`name`, `group_id`) VALUES ('رابعة أبتدائى ب', NULL);

INSERT INTO `resala`.`group` (`name`, `group_id`) VALUES ('خامسة أبتدائى أ', NULL);
INSERT INTO `resala`.`group` (`name`, `group_id`) VALUES ('خامسة أبتدائى ب', NULL);

INSERT INTO `resala`.`group` (`name`, `group_id`) VALUES ('سادسة أبتدائى أ', NULL);
INSERT INTO `resala`.`group` (`name`, `group_id`) VALUES ('سادسة أبتدائى ب', NULL);

INSERT INTO `resala`.`group` (`name`, `group_id`) VALUES ('أولى أعدادى أ', NULL);
INSERT INTO `resala`.`group` (`name`, `group_id`) VALUES ('أولى أعدادى ب', NULL);

INSERT INTO `resala`.`group` (`name`, `group_id`) VALUES ('تانية أعدادى أ', NULL);
INSERT INTO `resala`.`group` (`name`, `group_id`) VALUES ('تانية أعدادى ب', NULL);

INSERT INTO `resala`.`group` (`name`, `group_id`) VALUES ('ثالثة أعدادى أ', NULL);
INSERT INTO `resala`.`group` (`name`, `group_id`) VALUES ('ثالثة أعدادى ب', NULL);

INSERT INTO `resala`.`group` (`name`, `group_id`) VALUES ('أولى ثانوى أ', NULL);
INSERT INTO `resala`.`group` (`name`, `group_id`) VALUES ('أولى ثانوى ب', NULL);

INSERT INTO `resala`.`group` (`name`, `group_id`) VALUES ('تانية ثانوى أ', NULL);
INSERT INTO `resala`.`group` (`name`, `group_id`) VALUES ('تانية ثانوى ب', NULL);

INSERT INTO `resala`.`group` (`name`, `group_id`) VALUES ('ثالثة ثانوى أ', NULL);
INSERT INTO `resala`.`group` (`name`, `group_id`) VALUES ('ثالثة ثانوى ب', NULL);

CREATE TABLE  `resala`.`groupStudent` (
`group_id` INT NOT NULL ,
`student_id` INT NOT NULL ,
UNIQUE (`group_id` ,`student_id` )
) ENGINE = MYISAM CHARACTER SET utf8 COLLATE utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `resala`.`schedule` (
`schedule_id` INT( 5 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`stuff_id` INT( 5 ) NOT NULL ,
`group_id` INT( 5 ) NOT NULL , 
`day` TEXT CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL ,
`dayOrder` TEXT CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL ,
`date` TEXT CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL ,
`hasAttend` INT( 5 ) NOT NULL ,
UNIQUE (`schedule_id`, `stuff_id`,`group_id`)
) ENGINE = MYISAM CHARACTER SET utf8 COLLATE utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `resala`.`attend` (
`attend_id` INT( 5 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`schedule_id` INT( 5 ) NOT NULL ,
`group_id` INT( 5 ) NOT NULL ,
`stuff_id` INT( 5 ) NOT NULL ,
`student_id` INT( 5 ) NOT NULL ,
`percentage` INT( 5 ) NOT NULL ,
`currentClass` INT( 5 ) NOT NULL ,
UNIQUE (`schedule_id` , `group_id` , `stuff_id`, `student_id`)
) ENGINE = MYISAM CHARACTER SET utf8 COLLATE utf8_unicode_ci;

CREATE TABLE  `resala`.`studentComments` (
`comment_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`student_id` INT NOT NULL ,
`group_id` INT NOT NULL ,
`schedule_id` INT NOT NULL ,
`stuff_id` INT NOT NULL ,
`comment` TEXT CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE = MYISAM CHARACTER SET utf8 COLLATE utf8_unicode_ci;
