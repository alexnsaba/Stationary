<?php
$con =mysqli_connect("localhost","root","");
mysqli_query($con,"create database IF NOT EXISTS psisp");
mysqli_select_db($con,"psisp");
#creating the manager table
mysqli_query($con,"create table IF NOT EXISTS admin(AdminId int(20) primary key not null auto_increment,name varchar(30) not null ,
email varchar(40) not null unique,password varchar(40) not null unique,phone varchar(13) not null unique,photo blob)");
/* $pass=sha1("Alex11994");
$a=mysqli_query($con,"insert into admin(name,email,password,phone,photo) values('Niyonsaba Alex','alexnewzniyo@gmail.com',
'$pass','0787946565','avatar.png')"); */
//creating table transactions
mysqli_query($con,"create table IF NOT EXISTS transaction(TransactionId int(20) primary key not null auto_increment,
productName varchar(40) ,Amount int(40) not null unique,quantity int(20),date timestamp  not null DEFAULT CURRENT_TIMESTAMP,
type varchar(10) not null,customerName varchar(20) not null,customer_phone varchar(13) not null unique,SalesMan_name varchar(30) not null)");
//creatig products table
mysqli_query($con,"create table IF NOT EXISTS product(ProductId int(20) primary key not null auto_increment,
productName varchar(100) not null ,PPrice int(40) not null ,SPrice int(40) not null,Quantity int(40) not null,date timestamp  not null DEFAULT CURRENT_TIMESTAMP,ResponsilePerson varchar(100) not null)");


?>