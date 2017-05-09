create table if not exists tiles 
(
	id int	auto_increment primary key, 
	pattern char(16),
	color 	char(16), 
	price	decimal(6,2)
);

insert into tiles(pattern,color,price)
values("Spring", "Green",9.99),
("Summer", "Yellow",12.99), 
("Autumn", "Brown", 9.99),
("Winter","Blue",8.99); 

select * from tiles; 

update tiles
set pattern = "Fall" where pattern = "Autumn"; 
update tiles
set color = "Gold" where color = "Yellow";
update tiles
set price = 10.99 where price = 9.99;
update tiles
set price = 11.99 where id = 4;

select * from tiles; 
