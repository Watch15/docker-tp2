DROP DATABASE IF EXISTS mydatabase;
CREATE DATABASE mydatabase;
USE mydatabase;
CREATE TABLE test_table (
    id INT AUTO_INCREMENT PRIMARY KEY,
    value FLOAT NOT NULL
);
