create table if not exists users(
	user_id int unsigned not null auto_increment, 
	first_name varchar(20) not null, 
	last_name varchar(40) not null, 
	email varchar(60) not null, 
	pass char(40) not null,
	reg_date datetime not null, 
	primary key(user_id), 
	unique(email)

);