create table if not exists watches
(
	id int auto_increment primary key, 
	model char(16), 
	style char(16), 
	price decimal(6,2)
);


insert into watches(model,style,price)
values 
("Boston","Gents",70.00),
("Avante","Ladies",90.00), 
("Club","Gents",60.00), 
("Denver","Ladies",80.00), 
("Eton","Gents",50.00); 

select * from watches order by price; 

select model,price from watches order by model; 

select model,style from watches order by style; 
