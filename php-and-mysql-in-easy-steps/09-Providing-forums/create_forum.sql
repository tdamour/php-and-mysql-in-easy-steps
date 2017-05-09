create table if not exists forum(
	post_id int unsigned not null auto_increment, 
	first_name varchar(20) not null, 
	last_name varchar(40) not null, 
	subject varchar(60) not null, 
	message text not null, 
	post_date datetime not null, 
	primary key(post_id));