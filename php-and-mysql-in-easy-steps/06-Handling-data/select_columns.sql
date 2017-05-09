create table if not exists phones
(
	id 	int	auto_increment primary key, 
	make 		char(16),
	model 		char(16), 
	platform	char(16)
);

insert into phones(make,model,platform)
values 
("Apple","iPhone","iOS"),
("RIM","Curve","BlackBerry"), 
("HTC","Desire","Android"), 
("Nokia","Lumia","Windows");

select * from phones; 

select id, make from phones; 

select make, model from phones; 

select id, platform from phones;  
