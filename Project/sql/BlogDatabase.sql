

CREATE DATABASE IF NOT EXISTS `BlogDatabase`;
USE `BlogDatabase`;


CREATE TABLE `Users`
(
    `UserId`        bigint(12)  NOT NULL AUTO_INCREMENT,
    `Full_Name`     varchar(70) NOT NULL DEFAULT '',
    `Email`         varchar(50) NOT NULL DEFAULT '',
    `Phone_Number`  varchar(10) NOT NULL DEFAULT '',
    `Address`       varchar(70) NOT NULL DEFAULT '',
    `Username`      varchar(70) NOT NULL DEFAULT '',
    `User_Password` varchar(60) NOT NULL DEFAULT '',
    `UserType`      varchar(20) NOT NULL DEFAULT '',
    `AccessTime`    bigint(12)  NOT NULL DEFAULT 0,
    `Profile_Image` varchar(50) NOT NULL DEFAULT '',

    PRIMARY KEY (`UserId`)
);

CREATE TABLE `Articles`
(

    `Article_id`           bigint(10) NOT NULL AUTO_INCREMENT,
    `Author_id`            bigint(12) NOT NULL,
    `Article_title`        text       NOT NULL,
    `Article_full_text`    text       NOT NULL,
    `Article_created_date` bigint(10) NOT NULL DEFAULT 0,
    `Article_last_update`  bigint(10) NOT NULL DEFAULT 0,
    `Article_display`      tinyint(1) NOT NULL DEFAULT 0,
    `Article_order`        bigint(12) NOT NULL DEFAULT 0,

    FOREIGN KEY (`Author_id`) REFERENCES `Users` (`UserId`),
	PRIMARY KEY (`Article_id`)
);
