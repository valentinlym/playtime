DROP DATABASE IF EXISTS playtime;
CREATE DATABASE playtime CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE playtime;

CREATE TABLE users (
    iduser int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    email VARCHAR(255) NOT NULL,
    pseudo VARCHAR(30) NOT NULL,
    password VARCHAR(255) NOT NULL,
    avatar VARCHAR(30) NOT NULL,
    admin BOOLEAN NOT NULL
);

CREATE TABLE platforms (
    platform VARCHAR(30) PRIMARY KEY NOT NULL
);

CREATE TABLE categories (
    categorie VARCHAR(30) PRIMARY KEY NOT NULL 
);

CREATE TABLE games (
    idgame INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    description VARCHAR(1000),
    releasedate VARCHAR(50),
    developper VARCHAR(255)
);

CREATE TABLE games_details (
    fk_idgame INT(11) NOT NULL,
    fk_categorie VARCHAR(30) NOT NULL,
    fk_platform VARCHAR(30) NOT NULL,
    FOREIGN KEY (fk_idgame) REFERENCES games(idgame),
    FOREIGN KEY (fk_categorie) REFERENCES categories(categorie),
    FOREIGN KEY (fk_platform) REFERENCES platforms(platform)
);

CREATE TABLE status (
	typestatus VARCHAR(30) NOT NULL,
    fk_iduser INT(11) NOT NULL,
    fk_idgame INT(11) NOT NULL,
    FOREIGN KEY (fk_iduser) REFERENCES users(iduser),
    FOREIGN KEY (fk_idgame) REFERENCES games(idgame)
);