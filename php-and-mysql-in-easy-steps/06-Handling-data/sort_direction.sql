create table if not exists top_5_films
(
	position	int primary key,
	title		char(32) not null,
	year		int not null
);

insert into top_5_films(position,title,year)
values 
(1,"Citizen Kane",1941), 
(2,"Casablanca",1942), 
(3,"The Godfather",1972), 
(4,"Gone With The Wind",1939),
(5,"Lawrence Of Arabia",1962); 

select * from top_5_films order by position desc; 

select year,title from top_5_films order by year asc; 

select title, year from top_5_films order by title asc; 