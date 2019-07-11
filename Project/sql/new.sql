

CREATE DATABASE IF NOT EXISTS `blogger`;
USE blogger;


CREATE TABLE `Users`
(
    `UserId`        bigint(12)  NOT NULL AUTO_INCREMENT,
    `Full_Name`     varchar(70) NOT NULL DEFAULT '',
    `email`         varchar(50) NOT NULL DEFAULT '',
    `phone_Number`  varchar(10) NOT NULL DEFAULT '',
    `Address`       varchar(70) NOT NULL DEFAULT '',
    `Username`      varchar(70) NOT NULL DEFAULT '',
    `User_Password` varchar(60) NOT NULL DEFAULT '',
    `UserType`      varchar(20) NOT NULL DEFAULT '',
    `AccessTime`    bigint(12)  NOT NULL DEFAULT 0,
    `profile_Image` varchar(50) NOT NULL DEFAULT '',

    PRIMARY KEY (`UserId`)
);

CREATE TABLE `articles`
(

    `article_id`           bigint(10) NOT NULL AUTO_INCREMENT,
    `author_id`            bigint(12) NOT NULL,
    `article_title`        text       NOT NULL,
    `article_full_text`    text       NOT NULL,
    `article_created_date` bigint(10) NOT NULL DEFAULT 0,
    `article_last_update`  bigint(10) NOT NULL DEFAULT 0,
    `article_display`      tinyint(1) NOT NULL DEFAULT 0,
    `article_order`        bigint(12) NOT NULL DEFAULT 0,

    FOREIGN KEY (`author_id`) REFERENCES `Users` (`UserId`),
	PRIMARY KEY (`article_id`)
);
