mysql -u root

show databases;

create database blog;

use blog;

CREATE TABLE posts (
    Id INT AUTO_INCREMENT PRIMARY KEY,
    Title VARCHAR(255) NOT NULL,
    Body TEXT NOT NULL,
    Author VARCHAR(100) NOT NULL,
    Created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

desc posts;
INSERT INTO posts (Title, Body, Author) VALUES ('Naslov 1', 'Tekst prvog posta.', 'Autor 1');

INSERT INTO posts (Title, Body, Author) VALUES ('Naslov 2', 'Tekst drugog posta.', 'Autor 2');

INSERT INTO posts (Title, Body, Author) VALUES ('Naslov 3', 'Tekst trećeg posta.', 'Autor 1');

desc posts;