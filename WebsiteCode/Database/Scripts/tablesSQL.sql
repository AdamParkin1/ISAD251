create table Customers (
id INT(5) UNSIGNED auto_increment primary key,
forename varchar(30) not null,
surname varchar(30) not null,
telephone int(11)
);

create table FoodDrink (
id INT(5) UNSIGNED auto_increment primary key,
itemName varchar(30) not null,
price decimal(3,2) not null,
stock int(2)
);

create table tableorder (
id INT(5) UNSIGNED auto_increment primary key,
customerID int unsigned,
tableno int(2) not null,
price decimal(3,2) not null,
orderList int,
foreign key (customerID) references customers(id)
);

create table orderitem (
orderID INT unsigned, 
foodID int unsigned,
amount int(2) not null,
foreign key(orderID) references tableorder(id),
foreign key(foodID) references fooddrink(id)
);