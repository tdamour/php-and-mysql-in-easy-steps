create table if not exists shop(
	item_id int unsigned not null auto_increment, 
	item_name	varchar(20) not null, 
	item_desc	varchar(200) not null, 
	item_img	varchar(20)	not null, 
	item_price	decimal(4,2) not null, 
	primary key(item_id));
	
	insert into shop(item_name,item_desc,item_img,item_price)
	values
	("Cow","A friendly field buddy.","images/cow.png",19.99), 
	("Dog","A friendly lap dog.","images/dog.png",14.99),
	("Goat","A friendly mountain buddy.","images/goat.png",16.99),
	("Leopard","A friendly spotted buddy.","images/leopard.png",17.99),
	("Rhino","A friendly jungle buddy.","images/rhino.png",29.99); 