create table artists (

    id BIGINT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    band_artist CHAR NOT NULL,
    birth_formation DATE NOT NULL,
    CONSTRAINT CHK_Artist CHECK (band_artist='b' or band_artist='a')

);

create table genres (

    id BIGINT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL

);

create table albuns (

    id BIGINT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    description VARCHAR(255),
    genre BIGINT REFERENCES genres(id),
    artists BIGINT REFERENCES artists(id)

);

create table musics (

    id BIGINT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR (50) NOT NULL,
    album BIGINT REFERENCES albuns(id)

);

