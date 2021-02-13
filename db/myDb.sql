create table users (
	user_id INT GENERATED ALWAYS AS IDENTITY PRIMARY KEY,
	user_name varchar(30) NOT NULL,
	user_email varchar(40) UNIQUE NOT NULL,
	user_pass varchar(255) NOT NULL
);


CREATE TABLE coins(
		fav_id INT GENERATED ALWAYS AS IDENTITY PRIMARY KEY,
    coin_id int NOT NULL,
		coin_name varchar(40) UNIQUE NOT NULL,
    user_id int references users(user_id) NOT NULL
);


insert into users (user_name, user_email, user_pass) values ('chris','soldo@chris.com','123456');
insert into users (user_name, user_email, user_pass) values ('lucio','lucio@mymail.com','123456');

insert into coins (coin,user_id) values (1,1);
insert into coins (coin,user_id) values (90,1);
insert into coins (coin,user_id) values (80,1);
insert into coins (coin,user_id) values (90,2);