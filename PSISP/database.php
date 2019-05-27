<?php
$con =mysqli_connect("localhost","root","");
mysqli_query($con,"create database IF NOT EXISTS psisp");
mysqli_select_db($con,"psisp");
#creating the manager table
mysqli_query($con,"create table IF NOT EXISTS user(userId int(20) primary key not null auto_increment,name varchar(100) not null ,
email varchar(40) not null unique,password varchar(100) not null,phone varchar(13) not null,type varchar(100) not null,photo blob ,photo_name varchar(100))");
//creating table transactions
mysqli_query($con,"create table IF NOT EXISTS transaction(TransactionId int(20) primary key not null auto_increment,
productName varchar(40) ,Amount int(40) not null unique,quantity int(20),date timestamp  not null DEFAULT CURRENT_TIMESTAMP,
type varchar(10) not null,customerName varchar(20) not null,customer_phone varchar(13) not null,SalesMan_name varchar(30) not null)");
//creatig products table
mysqli_query($con,"create table IF NOT EXISTS product(ProductId int(20) primary key not null auto_increment,
productName varchar(100) not null ,PPrice int(40) not null ,SPrice int(40) not null,Quantity int(40) not null,date timestamp  not null DEFAULT CURRENT_TIMESTAMP,ResponsilePerson varchar(100) not null)");

//creatig expense table
mysqli_query($con,"create table IF NOT EXISTS expense(expenseId int(20) primary key not null auto_increment,
expenseType varchar(100) not null ,expenseAmount int(40) not null,date timestamp  not null DEFAULT CURRENT_TIMESTAMP,ResponsilePerson varchar(100) not null)");
?>