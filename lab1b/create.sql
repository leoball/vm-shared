CREATE TABLE Movie (
	id				INT PRIMARY KEY,
	title			VARCHAR(100),
	year			INT,
	rating			VARCHAR(10),
	company			VARCHAR(50)
);

CREATE TABLE MovieGenre (
	mid				INT PRIMARY KEY,
	genre			VARCHAR(20)
);

CREATE TABLE MovieActor (
	mid				INT,
	aid				INT,
	role			VARCHAR(50),
	PRIMARY KEY(mid, aid)
);

CREATE TABLE Review (
	name			VARCHAR(20),
	time			TIMESTAMP,
	mid				INT,
	rating			INT,
	comment			VARCHAR(500),
	PRIMARY KEY(name, time)
);

CREATE TABLE MaxPersonID (
	id				INT PRIMARY KEY
);

CREATE TABLE MaxMovieID(id) (
	id				INT PRIMARY KEY
);