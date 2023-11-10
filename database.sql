//zadatak 4
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

select * from posts;

//zadatak 5
CREATE TABLE comments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    author VARCHAR(255) NOT NULL,
    text TEXT NOT NULL,
    post_id INT NOT NULL,
    FOREIGN KEY (post_id) REFERENCES posts(id));

    desc comments;

    INSERT INTO comments (author, text, post_id)
VALUES ('Korisnik 1', 'Ovo je prvi komentar na post', 1);


INSERT INTO comments (author, text, post_id)
VALUES ('Korisnik 2', 'Ovo je drugi komentar na post', 1);

INSERT INTO comments (author, text, post_id)
VALUES ('Korisnik 3', 'Ovo je treći komentar na post', 2);

select * from comments;