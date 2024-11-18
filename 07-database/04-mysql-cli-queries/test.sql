-- LOGIN IN MYSQL
- Open The Cmd Terminal
- enter: mysql -u root -p
- enter your password


-- SHOW DATABASES
SHOW DATABASES;

-- USE DATABASE
USE MyDatabaseName;

--SHOW ALL TABLES FROM DATABASE
SHOW TABLES;


-- CREATING TABLE FOR THE DATABASE EXAMPLE
CREATE TABLE posts(
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    body TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);



-- INSERT RECORD INTO TABLE EXAMPLE
INSERT INTO posts(title, body) VALUES('Post One', 'This is post one');

-- INSERTING MUTIPLE RECORDS AT ONCE
INSERT INTO posts(title, body) VALUES('Post Three', 'This is post three'), ('Post Four', 'This is post four');



-- UPDATE EXAMPLE
UPDATE posts SET body = 'this is an updated post' WHERE id = 1;

--UPDATING MULTIPLE FIELDS AT ONCE EXAMPLE
UPDATE posts SET body = 'this is an updated post', title = 'this is an updated title' WHERE id = 1;



-- DELETE SINGLE RECORD EXAMPLE
DELETE FROM posts WHERE id = 2;

-- DELETE ALL RECORDS FROM A TABLE;
TRUNCATE  posts;

--DELETE DATABASE EXAMPLE
DROP posts



-- QUERY EXAMPLES
SELECT * FROM posts;
SELECT title FROM posts;
SELECT * FROM posts WHERE id = 1;
SELECT * FROM posts WHERE body = 'This is post three';
