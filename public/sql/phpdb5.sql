drop database if exists knitted_clothing; 
create database knitted_clothing;
use knitted_clothing;

drop table if exists images;
create table images(
    id serial PRIMARY KEY,
    server_adress varchar(255) NOT NULL,
    img_name VARCHAR(124) not NULL,
    size float unsigned not null,
    views int unsigned  null DEFAULT 0
);
drop table if exists users;
CREATE TABLE users(  
    id serial primary key COMMENT 'Primary Key',
    full_name VARCHAR(255) not null,
    email VARCHAR(124) NOT Null,
    `password` VARCHAR(255) NOT NULL,
    create_time DATETIME COMMENT 'Create Time'
);
TRUNCATE users;
INSERT INTO images (id, server_adress, img_name, size)
VALUES  (1, 'images/photo-1.jpg', 'photo-1', 242),
        (2, 'images/photo-2.jpg', 'photo-2', 60.4),
        (3, 'images/photo-3.jpg', 'photo-3', 76),
        (4, 'images/photo-4.jpg', 'photo-4', 77.2),
        (5, 'images/photo-5.jpg', 'photo-5', 100),
        (6, 'images/photo-6.jpg', 'photo-6', 60.1),
        (7, 'images/photo-7.jpg', 'photo73', 103),
        (8, 'images/photo-8.jpg', 'photo-8', 110),
        (9, 'images/photo-9.jpg', 'photo-9', 74.7),
        (10, 'images/photo-10.jpg', 'photo-10', 54.4),
        (11, 'images/photo-11.jpg', 'photo-11', 80.8),
        (12, 'images/photo-12.jpg', 'photo-12', 64.8),
        (13, 'images/photo-13.jpg', 'photo-13', 86.2),
        (14, 'images/photo-14.jpg', 'photo-14', 73),
        (15, 'images/photo-15.jpg', 'photo-15', 70.8),
        (16, 'images/photo-16.jpg', 'photo-16', 58.6),
        (17, 'images/photo-17.jpg', 'photo-17', 34.9);