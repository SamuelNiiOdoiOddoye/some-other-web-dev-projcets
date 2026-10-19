 
-- create users_test_table
 CREATE TABLE users_test_table(
  id INT(11) NOT NULL AUTO_INCREMENT,
  username VARCHAR(30) NOT NULL,
  pwd VARCHAR(20) NOT NULL,  
  email VARCHAR(100) NOT NULL, 
  created_at DATETIME NOT NULL DEFAULT CURRENT_TIME,
  PRIMARY KEY(id) 
 );


-- create comments table with foreign key referencing users_test_table
 CREATE TABLE comments (
 id INT(11) NOT NULL AUTO_INCREMENT,
 username VARCHAR(30) NOT NULL,
 comment_text TEXT NOT NULL,
 created_at DATETIME NOT NULL DEFAULT CURRENT_TIME,
 users_id INT(11),
 PRIMARY KEY(id),
 FOREIGN KEY(users_id) REFERENCES users_test_table(id) ON DELETE SET NULL
);


-- insert data into users_test_table
INSERT INTO users_test_table (username,pwd,email) VALUES ('ODDOYE','Pass*12#','johndoe@gmail.com');

-- insert data into comments table
UPDATE users_test_table SET username = 'telixIsCool', pwd = 'te3055' WHERE id=2;
UPDATE users_test_table SET username = 'SamuelIsTheGoat', pwd ='Sql395' WHERE username = 'ODDOYE' AND pwd = 'Pass*12#';
INSERT INTO users_test_table (username,pwd,email) VALUES ('Bruno','BsZ*12#','BrunoisdeGoat@gmail.com');
UPDATE users_test_table SET username = 'Zeus' , pwd ='ZfB%34*' WHERE username = 'Bruno' OR username ='Sasha'; 
UPDATE users_test_table SET username = 'Zeus' , pwd ='ZfB%34*' WHERE username = 'Bruno' OR id = 8; 

-- delete a user from users_test_table
DELETE FROM users_test_table WHERE id = 2;

-- insert more data into users_test_table and comments table
INSERT INTO users_test_table(username,pwd,email) VALUES ('krossing', 'dani123','johndoe@gmail.com');
INSERT INTO comments (username, comment_text, users_id) VALUES ('krossing','this is a comment on a website',3)

-- select specific data from users_test_table
SELECT username, email FROM users_test_table WHERE id = 3;
SELECT username, comment_text FROM comments WHERE users_id = 3;
SELECT * FROM comments WHERE users_id = 3;
SELECT * FROM users_test_table INNER JOIN comments ON users_test_table.id = comments.users_id;
SELECT users_test_table.username, comments.comment_text, comments.created_at FROM users_test_table INNER JOIN comments ON users_test_table.id = comments.users_id;
SELECT * FROM users_test_table LEFT JOIN comments ON users_test_table.id = comments.users_id;
SELECT * FROM users_test_table RIGHT JOIN comments ON users.id = comments.users_id

-- alter users_test_table to add more columns
ALTER TABLE users_test_table
ADD COLUMN first_name VARCHAR(100) AFTER id,
ADD COLUMN last_name VARCHAR(100) AFTER first_name,
ADD COLUMN other_names VARCHAR(100) AFTER last_name;

-- modify the newly added columns to set NOT NULL constraint
ALTER TABLE users_test_table
MODIFY COLUMN first_name VARCHAR(100) NOT NULL,
MODIFY COLUMN last_name VARCHAR(100) NOT NULL,
MODIFY COLUMN other_names VARCHAR(100) NOT NULL;
