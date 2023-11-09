mysql -u root

show databases;

create database blog;

use blog;

CREATE TABLE posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    body TEXT NOT NULL,
    author VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

desc posts;
INSERT INTO posts (title, body, author) VALUES ('Naslov 1', 'Tekst prvog posta.', 'Autor 1');

INSERT INTO posts (title, body, author) VALUES ('Naslov 2', 'Tekst drugog posta.', 'Autor 2');

INSERT INTO posts (title, body, author) VALUES ('Naslov 3', 'Tekst trećeg posta.', 'Autor 1');

desc posts;