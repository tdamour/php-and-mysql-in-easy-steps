create table if not exists orders (
	order_id int unsigned not null auto_increment, 
	user_id int unsigned not null, 
	total decimal(8,2) not null, 
	order_date datetime not null, 
	primary key(order_id)
);