create table artists (

    id BIGINT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    band_artist CHAR NOT NULL CHECK (band_artist='b' or band_artist='a'),
    birth_formation YEAR NOT NULL,
    created_in TIMESTAMP NOT NULL DEFAULT current_timestamp(),
    edited_in TIMESTAMP NOT NULL DEFAULT current_timestamp() ON UPDATE CURRENT_TIMESTAMP

);

create table genres (

    id BIGINT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    created_in TIMESTAMP NOT NULL DEFAULT current_timestamp(),
    edited_in TIMESTAMP NOT NULL DEFAULT current_timestamp() ON UPDATE CURRENT_TIMESTAMP

);

create table albuns (

    id BIGINT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    description VARCHAR(255),
    release_date YEAR NOT NULL,
    genre int NOT NULL REFERENCES genres(id),
    artist int NOT NULL REFERENCES artists(id),
    created_in TIMESTAMP NOT NULL DEFAULT current_timestamp(),
    edited_in TIMESTAMP NOT NULL DEFAULT current_timestamp() ON UPDATE CURRENT_TIMESTAMP   

);

create table musics (

    id BIGINT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    album int REFERENCES albuns(id),
    created_in TIMESTAMP NOT NULL DEFAULT current_timestamp(),
    edited_in TIMESTAMP NOT NULL DEFAULT current_timestamp() ON UPDATE CURRENT_TIMESTAMP   

);

