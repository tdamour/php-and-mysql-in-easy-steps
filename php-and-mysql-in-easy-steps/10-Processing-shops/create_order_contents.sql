create table if not exists order_contents(
	content_id int unsigned not null auto_increment, 
	order_id int unsigned not null, 
	item_id int unsigned not null, 
	quantity int unsigned not null default 1, 
	price decimal(4,2) not null, 
	primary key(content_id)
);