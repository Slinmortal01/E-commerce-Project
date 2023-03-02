CREATE DATABASE IF NOT EXISTS amazing; 

USE amazing;

CREATE TABLE IF NOT EXISTS products
(
    id varchar(255) NOT NULL,
    product_name varchar (80) NOT NULL,
    product_description text,
    product_price float,
    product_quantity int,
    PRIMARY KEY(id)
);
CREATE TABLE IF NOT EXISTS orders
(
    order_id varchar(255) not null, 
    order_total float,
    order_completed_at date,
    PRIMARY KEY(order_id)
   
);
CREATE TABLE IF NOT EXISTS order_items
(
    order_id varchar(255),
    product_id varchar(255),
    quantity int,
    price float,
    PRIMARY KEY (order_id, product_id),
    FOREIGN KEY (order_id) REFERENCES orders(order_id),
    FOREIGN KEY (product_id) REFERENCES products(id)
);

