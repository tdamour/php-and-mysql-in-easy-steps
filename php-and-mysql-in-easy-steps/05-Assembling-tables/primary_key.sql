create table if not exists cups
(
	id int auto_increment  primary key,
	cup_pattern varchar(25)
);

create table if not exists pots
(
	id	int  auto_increment, 
	pot_pattern varchar(25), primary key(id)
);  