create table if not exists products 
(
  id	 int unique		auto_increment, 
  code	 int 			not null, 
  name	 varchar(25)	not null,
  quanity int 			default 1 null, 
  price   decimal(6,2)  not null 
);