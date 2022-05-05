-- create and select the database
DROP DATABASE IF EXISTS studentList;
CREATE DATABASE studentList;
USE studentList;  -- MySQL command

-- create the tables
CREATE TABLE Student (
  StudentID       INT(11)        NOT NULL   AUTO_INCREMENT,
  firstName     VARCHAR(128)   NOT NULL,
  lastName     VARCHAR(50)   NOT NULL,
  dateOfBirth     VARCHAR(15)   NOT NULL,
  PRIMARY KEY (StudentID)
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
(1,  'Jacob', 'Chimitt', '01/31/1999'),
(2,  'Brandon', 'Freeman', '02/28/1998'),
(3,  'Patrick', 'Gorecki', '03/15/1997'),
(4,  'Mack', 'Tyler',  '04/06/2001'),
(5,  'Quinten', 'Ozahanics', '05/18/1995'),
(6,  'Patrick', 'Smith',  '06/04/2003'),
(7,  'Andrew', 'Vernier-Boklund','07/30/1996'),
(8,  'Phillip', 'Zuehlke',  '08/14/2001'),
(9,  'Sharyl', 'Riley', '09/12/1997'),
(10, 'Hilary', 'Baker', '10/27/1998'),
(11, 'Sara', 'Rodrigues', '11/19/1996'),
(12, 'Ghadir' ,'Alfaghl', '12/25/2000'),
(13, 'Anna', 'Weber', '04/14/1999'),
(14, 'Caitlin' ,'Cloud', '07/11/1994');

INSERT INTO administrators VALUES
('admin', 'admin');

INSERT INTO users VALUES
('sharyl', 'love'),
('sara', 'dog'),
('ghadir', 'bird'),
('anna', 'clouds'),
('hilary', 'lemon'),
('caitlin', 'cat');
