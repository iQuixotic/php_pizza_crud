
DROP DATABASE IF EXISTS pizzahouse;
CREATE DATABASE pizzahouse;

USE pizzahouse;

CREATE TABLE orders(
  id INTEGER PRIMARY KEY AUTO_INCREMENT,
  customer VARCHAR(200) NOT NULL,
  toppings VARCHAR(200) NOT NULL,
  size VARCHAR(200) NOT NULL,
  price VARCHAR(200) NOT NULL
);