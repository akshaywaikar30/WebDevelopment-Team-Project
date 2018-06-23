create database currencyfluctuation;
use currencyfluctuation;

create table Person (
name varchar(50),
email varchar(50),
password varchar(200),
DOB date,
contact varchar(10),
address varchar(50),
userType varchar(20),
PRIMARY KEY(email)
);

create table currency (
cName varchar(20),
country varchar(20),
PRIMARY KEY(cName)
);

create table item (
itemID varchar(20),
iName varchar(20),
cost varchar(20),
currName varchar(20),
primary key(itemID),
foreign key (currName) references currency(cName)
);

create table currencyDetails (
currencyName varchar(20),
value varchar(20),
cDate date,
foreign key (currencyName) references currency(cName) 
);

create table tradeItems (
userID varchar(50),
itemID varchar(20),
tradeType varchar(20),
foreign key(userID) references Person(email),
foreign key(itemID) references item(itemID)
);
