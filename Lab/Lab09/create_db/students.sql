-- create and select the database
DROP DATABASE IF EXISTS students;
CREATE DATABASE students;
USE students;  -- MySQL command

-- create the tables
CREATE TABLE Student (
  StudentID       INT(11)        NOT NULL   AUTO_INCREMENT,
  Name     VARCHAR(50)   NOT NULL,
  Hometown     VARCHAR(50)   NOT NULL,
  Age int(3) DEFAULT NULL,
  Major     VARCHAR(50)   DEFAULT NULL,
  Gender     VARCHAR(10)   NOT NULL,
  GPA DECIMAL(10,2)  NOT NULL,
  PRIMARY KEY (studentID)
);
CREATE TABLE administrators (
  username    VARCHAR(40)    NOT NULL     UNIQUE,
  password    VARCHAR(40)    NOT NULL,
  PRIMARY KEY (username)
);

CREATE TABLE users (
  username    VARCHAR(40)    NOT NULL     UNIQUE,
  password    VARCHAR(40)    NOT NULL,
  PRIMARY KEY (username)
);
-- insert data into the database

INSERT INTO student VALUES
(1,  'Jacob Chimitt', 'Valparsio', 24,'Computer Information Technology','Male', 2.5),
(2,  'Brandon Freeman', 'Plymouth', 19,'Computer Information Technology', 'Male', 3.0),
(3,  'Patrick Gorecki', 'Valparsio',21, 'Computer Information Technology', 'Male', 4.0),
(4,  'Mack Tyler', 'Westville', 22,'Computer Information Technology', 'Male', 2.5),
(5,  'Quinten Ozahanics', 'Valparsio', 29, 'Computer Information Technology', 'Male', 4.0),
(6,  'Patrick Towne', 'Chesterton',19, 'Computer Information Technology', 'Male', 3.5),
(7,  'Andrew Vernier-Boklund', 'LaPorte', 20, 'Artifical Inteligence', 'Male', 3.5),
(8,  'Phillip Zuehlke', 'South Bend', 29, 'Computer Information Technology', 'Male', 3.0),
(9,  'Sharyl Riley', 'Granger ', 30,'Cyber Security','Female', 3.5),
(10, 'Hilary Baker', 'Schererville ', 24,'Computer Information Technology','Female', 4.0),
(11, 'Sara Rodrigues', 'Hammond ', 22,'Cyber Security','Female', 3.0),
(12, 'Ghadir Alfaghl', 'Granger ', 27,'Cyber Security','Female', 4.0),
(13, 'Anna Weber', 'Portage ', 19,'Computer Information Technology','Female', 3.5),
(14, 'Caitlin Cloud', 'Gary ', 19,'Artifical Inteligence','Female', 4.0);

INSERT INTO administrators VALUES
('admin', 'admin');

INSERT INTO users VALUES
('sharyl', 'love'),
('sara', 'dog'),
('ghadir', 'bird'),
('anna', 'clouds'),
('hilary', 'lemon'),
('caitlin', 'cat');
