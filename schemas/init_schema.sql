CREATE DATABASE footmarkt;
 USE footmarkt;

CREATE TABLE IF NOT EXISTS stats(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    appearances INT,
    goals INT,
    assists INT,
    pitch_time INT,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);
CREATE TABLE IF NOT EXISTS player_position(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(3) NOT NULL,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);
CREATE TABLE IF NOT EXISTS nationality(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);

 CREATE TABLE IF NOT EXISTS league(
     id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
     name VARCHAR(30) NOT NULL,
     nationality_id INT(3) NOT NULL,
     created_ad TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,

     FOREIGN KEY (nationality_id) REFERENCES nationality (id)
 );

 CREATE TABLE IF NOT EXISTS club(
     id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
     name VARCHAR(30) NOT NULL,
     league_id INT NOT NULL,
     created_ad TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,

     FOREIGN KEY (league_id) REFERENCES league (id)
 );

 CREATE TABLE IF NOT EXISTS player(
     id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
     name VARCHAR(100) NOT NULL,
     surname VARCHAR(100) NOT NULL,
     birth DATE NOT NULL,
     position_id INT(2) NOT NULL,
     nationality_id INT(3) NOT NULL,
     club_id INT (10) NOT NULL,
     value BIGINT NOT NULL,
     rate INT(3) NOT NULL,
     created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,

     FOREIGN KEY (position_id) REFERENCES player_position (id),
     FOREIGN KEY (nationality_id) REFERENCES nationality (id),
     FOREIGN KEY (club_id) REFERENCES club (id)
 );

CREATE TABLE IF NOT EXISTS user_group(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name TEXT(64) NOT NULL,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS user(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    user_group_id INT(2) NOT NULL,
    login VARCHAR(30) NOT NULL,
    password VARCHAR(30) NOT NULL,
    last_login TIMESTAMP NOT NULL,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,

    FOREIGN KEY (user_group_id) REFERENCES user_group (id)
);

CREATE TABLE IF NOT EXISTS permission(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name TEXT(64) NOT NULL,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS user_group_permission(
    user_group_id INT(2) NOT NULL,
    permission_id INT(2) NOT NULL,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,

    PRIMARY KEY (user_group_id, permission_id),
    FOREIGN KEY (permission_id) REFERENCES permission (id)
);

CREATE TABLE IF NOT EXISTS comments(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(30) NOT NULL,
    content VARCHAR(30) NOT NULL,
    user_id INT,
    player_id INT,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,

    FOREIGN KEY (user_id) REFERENCES user (id),
    FOREIGN KEY (player_id) REFERENCES player (id)
);
