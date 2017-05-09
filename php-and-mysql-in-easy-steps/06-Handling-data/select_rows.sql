create table if not exists coffee_machines 
(
	id int auto_increment primary key, 
	make char(16), 
	model char(16), 
	price decimal(6,2)
);

insert into coffee_machines(make,model,price)
values 
("Krups","Dolce Gusto",140.00),
("Gaggia","Cubika",170.00), 
("DeLonghi","Magnifica",500.00), 
("Magimix","Nespresso",300.00), 
("Cuisinart","Espresso",280.00); 

select * from coffee_machines where id = 3; 

select * from coffee_machines where make in ("Krups","Gaggia"); 

select * from coffee_machines where make not in ("Krups","Gaggia"); 