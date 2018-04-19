
CREATE TABLE Movie (
	id INT PRIMARY KEY,
	title VARCHAR(100) NOT NULL,
	year INT NOT NULL,
	rating VARCHAR(10),
	company VARCHAR(50)
) ENGINE = INNODB;

CREATE TABLE Actor (
	id INT PRIMARY KEY,
	last VARCHAR(20) NOT NULL,
	first VARCHAR(20) NOT NULL,
	sex VARCHAR(6) NOT NULL,
	dob DATE NOT NULL,
	dod DATE
) ENGINE = INNODB;

CREATE TABLE Director (
	id INT PRIMARY KEY,
	last VARCHAR(20) NOT NULL,
	first VARCHAR(20) NOT NULL,
	dob DATE NOT NULL,
	dod DATE
) ENGINE = INNODB;

CREATE TABLE MovieGenre (
	mid INT,
	genre VARCHAR(20) NOT NULL,
	PRIMARY KEY(mid,genre),
	Foreign KEY (mid) REFERENCES Movie(id)
) ENGINE = INNODB;

CREATE TABLE MovieDirector (
	mid INT PRIMARY KEY,
	did INT NOT NULL,
	Foreign KEY (mid) REFERENCES Movie(id),
	Foreign KEY (did) REFERENCES Director(id)
) ENGINE = INNODB;

CREATE TABLE MovieActor (
	mid INT,
	aid INT,
	role VARCHAR(50),
	PRIMARY KEY(mid, aid),
	Foreign KEY (mid) REFERENCES Movie(id),
	Foreign KEY (aid) REFERENCES Actor(id)
) ENGINE = INNODB;

CREATE TABLE Review (
	name VARCHAR(20),
	time TIMESTAMP,
	mid INT NOT NULL,
	rating INT NOT NULL,
	comment VARCHAR(500),
	PRIMARY KEY(name, time),
	Foreign KEY (mid) REFERENCES Movie(id)
) ENGINE = INNODB;

CREATE TABLE MaxPersonID (
	id INT PRIMARY KEY
) ENGINE = INNODB;

CREATE TABLE MaxMovieID(id) (
	id INT PRIMARY KEY
) ENGINE = INNODB;




