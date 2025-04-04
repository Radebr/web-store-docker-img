CREATE DATABASE IF NOT EXISTS store;
USE store;


CREATE TABLE IF NOT EXISTS customers (
  cust_id INT(11) NOT NULL AUTO_INCREMENT,
  cust_name VARCHAR(20) NOT NULL,
  cust_pass VARCHAR(15) NOT NULL,
  cust_email VARCHAR(30) NOT NULL,
  cust_bdate DATE NOT NULL,
  PRIMARY KEY (cust_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;


CREATE TABLE IF NOT EXISTS stockes (
  id_stock INT(11) NOT NULL AUTO_INCREMENT,
  codb_stock INT(11) NOT NULL,
  pri_stock DOUBLE(13,2) NOT NULL,
  nom_stock VARCHAR(50) NOT NULL,
  type_stock VARCHAR(50) NOT NULL,
  img_stock VARCHAR(100) NOT NULL,
  pro_stock DATE NOT NULL,
  exp_stock DATE NOT NULL,
  quant_stock INT(11) DEFAULT NULL,
  update_stock TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (id_stock)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;


ALTER TABLE customers AUTO_INCREMENT = 1;
ALTER TABLE stockes AUTO_INCREMENT = 1;


INSERT INTO `store`.`customers` (`cust_id`, `cust_name`, `cust_pass`, `cust_email`, `cust_bdate`) 
VALUES (1, 'admin', 'admin', 'radebr@yandex.ru', CURDATE());