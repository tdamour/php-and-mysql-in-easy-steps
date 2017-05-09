create table if not exists pens
(
	id int	auto_increment primary key, 
	maker char(32),
	model 	char(32), 
	price	decimal(6,2)
);

insert into pens(maker,model,price)
values("Montegrappa","Silver Dragon",950.00),
("Paul Rossi","Egyptian Lady",650.00), 
("Michel Perchin","Red Cross",450.00),
("Bexley","Poseidon Magnum",350.00); 

select * from pens;

delete from pens where maker = "Montegrappa"; 
select * from pens; 

delete from pens where model = "Egyptian Lady"; 
select * from pens; 

delete from pens where price = 450.00; 
select * from pens; 

delete from pens where id = 4; 
select * from pens;  