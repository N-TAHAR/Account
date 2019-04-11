CREATE DATABASE account CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE account;

CREATE TABLE utilisateur (
  id INT(3) NOT NULL AUTO_INCREMENT,
  pseudo VARCHAR(20) NOT NULL,
  email VARCHAR(255) NOT NULL,
  mdp VARCHAR(255) NOT NULL,
  type VARCHAR(20) DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=INNODB;