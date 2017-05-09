create table if not exists items 
(
	id		 int		auto_increment	primary key, 
	name	 char(16)	not null, 
	quantity int		not null, 
	pass	 text(256)	not null, 
	stamp	 datetime	not null
);

insert into items(name,quantity,pass,stamp)
values
("Alan",10,SHA2("m00nriver",256), NOW() ), 
("Dean",20,SHA2("bluem00n",256), NOW() ), 
("Gary",30,SHA2("m00nlight",256), NOW() ), 
("Mike",40,SHA2("m00nshine",256), NOW() ); 

-- add query to display names and quantities by comparing "quantity" values
select name, quantity from items
where quantity between 15 and 35; 

-- query to display one timestamp and one checksum 
select stamp, pass from items
where quantity < 15; 