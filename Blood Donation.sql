-- Database Name : 'blooddonation'
-- create database blooddonation;

create table admininfo
(
adminname varchar(25) PRIMARY KEY,
adminpass varchar(25)
);
insert into admininfo values ('admin','A');

create table userinfo
(
    id bigint PRIMARY KEY AUTO_INCREMENT NOT NULL,
    username varchar(50) UNIQUE,
    email varchar(50),
    password varchar(50),
    mobileno varchar(15),
    country varchar(50),
    state varchar(50),
    city varchar(50),
    gender ENUM('Male', 'Female', 'Others'),
    DOB date
);
create table bloodrequest
(
    id bigint PRIMARY KEY AUTO_INCREMENT NOT NULL,
    patient_name varchar(50),
    blood_group varchar(50),
    no_of_units int,
    description varchar(150),
    mobileno bigint
);
create table donorlist
(
    id bigint PRIMARY KEY AUTO_INCREMENT NOT NULL,
    donor_name varchar(50),
    mobileno bigint,
    blood_group varchar(50),
    last_donated_date date,
    available ENUM('Yes', 'No')
);