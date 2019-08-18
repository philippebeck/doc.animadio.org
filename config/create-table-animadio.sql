DROP DATABASE IF EXISTS animadio;
CREATE DATABASE animadio CHARACTER SET utf8;

USE animadio;

CREATE TABLE Part
(
    id          TINYINT         UNSIGNED    PRIMARY KEY     AUTO_INCREMENT,
    part        VARCHAR(10)     NOT NULL    UNIQUE
)
    ENGINE=INNODB DEFAULT CHARSET=UTF8;

CREATE TABLE Source
(
    id          TINYINT         UNSIGNED    PRIMARY KEY     AUTO_INCREMENT,
    source      VARCHAR(10)     NOT NULL    UNIQUE
)
    ENGINE=INNODB DEFAULT CHARSET=UTF8;

CREATE TABLE Property
(
    id          TINYINT         UNSIGNED    PRIMARY KEY     AUTO_INCREMENT,
    property    VARCHAR(30)     NOT NULL    UNIQUE
)
    ENGINE=INNODB DEFAULT CHARSET=UTF8;

CREATE TABLE Variable
(
    id          SMALLINT        UNSIGNED    PRIMARY KEY     AUTO_INCREMENT,
    variable    VARCHAR(50)     NOT NULL    UNIQUE
)
    ENGINE=INNODB DEFAULT CHARSET=UTF8;

CREATE TABLE Media
(
    id          TINYINT         UNSIGNED    PRIMARY KEY     AUTO_INCREMENT,
    media       CHAR(2)         NOT NULL    UNIQUE,
    screen      VARCHAR(20)     NOT NULL    UNIQUE
)
    ENGINE=INNODB DEFAULT CHARSET=UTF8;

CREATE TABLE Class
(
    id              SMALLINT            UNSIGNED        PRIMARY KEY     AUTO_INCREMENT,
    class           VARCHAR(20)         NOT NULL        UNIQUE,
    part_id         TINYINT             UNSIGNED        NOT NULL,
    source_id       TINYINT             UNSIGNED        NOT NULL,
    property_id     TINYINT             UNSIGNED        NOT NULL,
    variable_id     SMALLINT            UNSIGNED        NOT NULL,
    media_id        TINYINT             UNSIGNED        NOT NULL,
    concat          BOOLEAN             NOT NULL,
    state           BOOLEAN             NOT NULL,
    CONSTRAINT      fk_part_id          FOREIGN KEY     (part_id)       REFERENCES  Part(id),
    CONSTRAINT      fk_source_id        FOREIGN KEY     (source_id)     REFERENCES  Source(id),
    CONSTRAINT      fk_property_id      FOREIGN KEY     (property_id)   REFERENCES  Property(id),
    CONSTRAINT      fk_variable_id      FOREIGN KEY     (variable_id)   REFERENCES  Variable(id),
    CONSTRAINT      fk_media_id         FOREIGN KEY     (media_id)      REFERENCES  Media(id)
)
    ENGINE=INNODB DEFAULT CHARSET=UTF8;
