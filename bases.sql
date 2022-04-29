create database bank_db;
use database bank_db;



create table users(
	
	id int primary key auto_increment,
	fullname varchar(50),
	username varchar(50) unique,
	password varchar(50),
	phone int

);


create table kinhseis(

	id int primary key auto_increment,
	id_users int,
	hmerominia date,
	poso int,
	typos varchar(50),
	foreign key(id_users) references users(id)


);
