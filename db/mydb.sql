CREATE TABLE posts(
	id SERIAL,
	date date,
	postName varchar(80),
	author varchar(80),
	genre varchar(80)
	PRIMARY KEY (id)
);

CREATE TABLE author(
	id SERIAL,
	firstName varchar(80),
	secondName varchar(80),
	PRIMARY KEY (id),
	FOREIGN KEY(author) REFRENCES posts (id)
);
INSERT INTO posts VALUES ('2021-1-31', 'Harry Potter', 'JK Rowling', 'fantasy');