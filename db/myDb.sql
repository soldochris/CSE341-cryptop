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


