create table if not exists pans
(
	id	int		not null, 
	pattern varchar(25)	not null, 
	price 	decimal(6,2) 
); 

explain pans; 

alter table pans
add primary key(id), 
add column code int unique not null, 
change pattern pan_pattern varchar(25) not null, 
drop column price; 

explain pans; 
