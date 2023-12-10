CREATE DATABASE IF NOT EXISTS reg;
USE reg;

CREATE TABLE IF NOT EXISTS registrations (
    /*id INT AUTO_INCREMENT PRIMARY KEY,*/
    name VARCHAR(255) NOT NULL,
    phone VARCHAR(10) NOT NULL,
    address VARCHAR(255) NOT NULL,
    date DATE NOT NULL,
    event VARCHAR(20) NOT NULL
);

select * from registrations;
drop table registrations;