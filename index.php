<?php


/* before doing any thing you have 2 ways to create database 
choose one of 2 option and type this query on any of theme
1- open localhost/phpmyadmin
 and go to sql and create data base and copy past this query or 
2- cmd - then mysql -u root 
query 

create database facebook;


create table users(
        id int primary key AUTO_INCREMENT,
        username varchar(255),
        password varchar(255),
        phone int
);
*/



                include './includes/connect.php';

 /** includeing the connection file to  my data base  */
// create my first table for users 

include './includes/header.php';
include './includes/content.php';
include './includes/footer.php';

