CREATE DATABASE fitnessfeak;
USE fitnessfreak;

CREATE TABLE members (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    age INT NOT NULL,
    gender VARCHAR(10) NOT NULL,
    contact VARCHAR(15) NOT NULL
);