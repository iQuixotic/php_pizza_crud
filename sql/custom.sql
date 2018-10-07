
DROP DATABASE IF EXISTS pizzahouse;
CREATE DATABASE pizzahouse;

USE pizzahouse;

CREATE TABLE menu(
  pizza_name VARCHAR(200) NOT NULL,
  toppings VARCHAR(200) NOT NULL
);


