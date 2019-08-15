DROP DATABASE IF EXISTS animadio;
CREATE DATABASE animadio CHARACTER SET utf8;

USE animadio;

CREATE TABLE Media
(
    id              TINYINT         UNSIGNED    PRIMARY KEY     AUTO_INCREMENT,
    name            CHAR(2)         NOT NULL    UNIQUE,
    breakpoint      VARCHAR(10)     NOT NULL    UNIQUE
)
    ENGINE=INNODB DEFAULT CHARSET=UTF8;

CREATE TABLE State
(
    id          TINYINT         UNSIGNED    PRIMARY KEY     AUTO_INCREMENT,
    launcher    VARCHAR(20)     NOT NULL    UNIQUE,
    pivot       VARCHAR(10)     NOT NULL,
    target      VARCHAR(20)     NOT NULL    UNIQUE
)
    ENGINE=INNODB DEFAULT CHARSET=UTF8;

CREATE TABLE Property
(
    id      TINYINT         UNSIGNED    PRIMARY KEY     AUTO_INCREMENT,
    name    VARCHAR(30)     NOT NULL    UNIQUE
)
    ENGINE=INNODB DEFAULT CHARSET=UTF8;

CREATE TABLE Variable
(
    id      SMALLINT        UNSIGNED    PRIMARY KEY     AUTO_INCREMENT,
    name    VARCHAR(50)     NOT NULL    UNIQUE
)
    ENGINE=INNODB DEFAULT CHARSET=UTF8;

CREATE TABLE Class
(
    id              SMALLINT                UNSIGNED        PRIMARY KEY     AUTO_INCREMENT,
    name            VARCHAR(20)             NOT NULL        UNIQUE,
    property_id     TINYINT                 UNSIGNED        NOT NULL,
    variable_id     SMALLINT                UNSIGNED        NOT NULL,
    state           TINYINT                 UNSIGNED        NOT NULL,
    media           TINYINT                 UNSIGNED        NOT NULL,
    CONSTRAINT      selector_property_id    FOREIGN KEY     (property_id)   REFERENCES  Property(id),
    CONSTRAINT      selector_variable_id    FOREIGN KEY     (variable_id)   REFERENCES  Variable(id)
)
    ENGINE=INNODB DEFAULT CHARSET=UTF8;
