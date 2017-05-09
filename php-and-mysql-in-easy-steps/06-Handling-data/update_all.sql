create table if not exists towels 
(
	id 	int	 auto_increment primary key, 
	name char(16), 
	color char(16), 
	price decimal(6,2)
);

insert into towels(name,color,price)
values("Dolphin","Blue",9.99), 
("Wine","Maroon",12.99),
("Harvest","Beige",7.99),
("Daisy","Lilac",8.99),
("Starburst","Yellow",10.99); 

select * from towels; 

update towels set color = "White"; 
select * from towels; 

update towels set price = 5.99; 
select * from towels; 