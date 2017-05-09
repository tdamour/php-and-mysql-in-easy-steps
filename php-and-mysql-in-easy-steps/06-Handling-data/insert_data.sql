create table if not exists prints 
(
	id 	int auto_increment primary key, 
	name varchar(32), 
	price decimal(6,2)

); 

insert into prints(name,price)
value ("Merry Sturcture", 29.99),
("Heavy Red", 24.99), ("Black Lines", 45.99); 

select * from prints; 