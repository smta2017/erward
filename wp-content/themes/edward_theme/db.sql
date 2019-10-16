-- 
-- Set character set the client will use to send SQL statements to the server
--
SET NAMES 'utf8';

--
-- Set default database
--
USE wordpress;

--
-- Create table `students`
--
CREATE TABLE students (
  sname varchar(50) DEFAULT NULL,
  age varchar(255) DEFAULT NULL,
  dep varchar(255) DEFAULT NULL
)
ENGINE = INNODB,
AVG_ROW_LENGTH = 16384,
CHARACTER SET utf8,
COLLATE utf8_general_ci;