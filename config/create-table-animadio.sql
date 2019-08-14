DROP DATABASE IF EXISTS animadio;
CREATE DATABASE animadio CHARACTER SET utf8;

USE animadio;

CREATE TABLE Property
(
    id              TINYINT         UNSIGNED        PRIMARY KEY     AUTO_INCREMENT,
    name            VARCHAR(50)     NOT NULL        UNIQUE
)
    ENGINE=INNODB DEFAULT CHARSET=UTF8;

CREATE TABLE Valor
(
    id              SMALLINT                UNSIGNED        PRIMARY KEY     AUTO_INCREMENT,
    name            VARCHAR(50)             NOT NULL        UNIQUE
)
    ENGINE=INNODB DEFAULT CHARSET=UTF8;

CREATE TABLE Variable
(
    id              SMALLINT                UNSIGNED        PRIMARY KEY     AUTO_INCREMENT,
    name            VARCHAR(50)             NOT NULL        UNIQUE,
    valor_id        SMALLINT                UNSIGNED        NOT NULL,
    CONSTRAINT      variable_valor_id       FOREIGN KEY     (valor_id)      REFERENCES  Valor(id)
)
    ENGINE=INNODB DEFAULT CHARSET=UTF8;

CREATE TABLE State
(
    id              TINYINT                 UNSIGNED        PRIMARY KEY     AUTO_INCREMENT,
    name            VARCHAR(50)             NOT NULL        UNIQUE,
    cause           VARCHAR(25)             NOT NULL,
    target          VARCHAR(25)             NOT NULL
)
    ENGINE=INNODB DEFAULT CHARSET=UTF8;

CREATE TABLE Effect
(
    id              SMALLINT                UNSIGNED        PRIMARY KEY     AUTO_INCREMENT,
    name            VARCHAR(25)             NOT NULL        UNIQUE,
    property_id     TINYINT                 UNSIGNED        NOT NULL,
    valor_id        SMALLINT                UNSIGNED        NOT NULL,
    variable_id     SMALLINT                UNSIGNED,
    state           TINYINT                 UNSIGNED        NOT NULL,
    CONSTRAINT      selector_property_id    FOREIGN KEY     (property_id)   REFERENCES  Property(id),
    CONSTRAINT      selector_valor_id       FOREIGN KEY     (valor_id)      REFERENCES  Valor(id),
    CONSTRAINT      selector_variable_id    FOREIGN KEY     (variable_id)   REFERENCES  Variable(id)
)
    ENGINE=INNODB DEFAULT CHARSET=UTF8;
