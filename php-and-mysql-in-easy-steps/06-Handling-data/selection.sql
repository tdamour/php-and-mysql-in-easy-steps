create table if not exists paintings
(
	id int	auto_increment primary key, 
	artists char(32),
	titles 	char(64), 
	styles	char(16)
);

insert into paintings(artists,titles,styles)
values 
("Salvador Dali", "Meditative Rose", "Surrealist"),
("Henri Matisse","Blue Hair","Impressionist"), 
("Pablo Picasso", "Girl Reading", "Cubist"), 
("Marc Chegall","Bonjour Paris","Primitivist"); 

select * from paintings; 

select artists from paintings; 

select titles from paintings; 

select styles from paintings; 