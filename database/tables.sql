create table artists (

    id BIGINT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    banda_artist CHAR NOT NULL,
    birth_formation DATE NOT NULL,
    created_in DATE NOT NULL DEFAULT current_timestamp(),
    edited_in DATE NOT NULL DEFAULT current_timestamp() ON UPDATE CURRENT_TIMESTAMP,
    CONSTRAINT CHK_Artist CHECK (banda_artist='b' or band_artist='a')

);

create table genres (

    id BIGINT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    created_in DATE NOT NULL DEFAULT current_timestamp(),
    edited_in DATE NOT NULL DEFAULT current_timestamp() ON UPDATE CURRENT_TIMESTAMP

);

create table albuns (

    id BIGINT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    description VARCHAR,
    genre int REFERENCES  

);