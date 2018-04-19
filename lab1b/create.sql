<<<<<<< Updated upstream
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
=======
CREATE TABLE Actor(
	id INT PRIMARY KEY,
	last VARCHAR(20),
	first VARCHAR(20),
	sex VARCHAR(6),
	dob DATE,
	dod DATE

);
CREATE TABLE Director(
	id INT PRIMARY KEY,
	last VARCHAR(20),
	first VARCHAR(20),
	dob DATE,
	dod DATE


);
CREATE TABLE MovieDirector(
	mid INT PRIMARY KEY,
	did INT
) 
>>>>>>> Stashed changes
