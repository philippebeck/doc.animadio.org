DROP DATABASE IF EXISTS animadio;
CREATE DATABASE animadio CHARACTER SET utf8;

USE animadio;

CREATE TABLE Keyframes
(
    id      TINYINT     UNSIGNED    PRIMARY KEY AUTO_INCREMENT,
    name    VARCHAR(10) NOT NULL    UNIQUE,
    effect  VARCHAR(30) NOT NULL    UNIQUE
)
    ENGINE=INNODB DEFAULT CHARSET=UTF8;

INSERT INTO Keyframes
(name,          effect)
VALUES
('bounce',      'scale(-2, -2)'),
('flipperX',    'scale(0, -2)'),
('flipperY',    'scale(-2, 0)'),
('openX',       'scale(2, 0)'),
('openY',       'scale(0, 2)'),
('flipX',       'scale(1, -2)'),
('flipY',       'scale(-2, 1)'),
('fallX',       'scale(2, -2)'),
('fallY',       'scale(-2, 2)'),
('grow',        'scale(0, 0)'),
('growX',       'scale(0, 1)'),
('growY',       'scale(1, 0)'),
('shrink',      'scale(2, 2)'),
('shrinkX',     'scale(5, 1)'),
('shrinkY',     'scale(1, 5)'),
('twistT',      'skew(0, -90deg)'),
('twistR',      'skew(90deg, 0)'),
('twistB',      'skew(0, 90deg)'),
('twistL',      'skew(-90deg, 0)'),
('torsionT',    'skew(0, -180deg)'),
('torsionR',    'skew(180deg, 0)'),
('torsionB',    'skew(0, 180deg)'),
('torsionL',    'skew(-180deg, 0)'),
('twisterT',    'skew(-90deg, -90deg)'),
('twisterR',    'skew(90deg, -90deg)'),
('twisterB',    'skew(90deg, 90deg)'),
('twisterL',    'skew(-90deg, 90deg)'),
('cycloneT',    'skew(-180deg, -180deg)'),
('cycloneR',    'skew(180deg, -180deg)'),
('cycloneB',    'skew(180deg, 180deg)'),
('cycloneL',    'skew(-180deg, 180deg)'),
('half',        'rotate3d(0, 0, 1, 180deg)'),
('halfX',       'rotate3d(1, 0, 0, 180deg)'),
('halfY',       'rotate3d(0, 1, 0, 180deg)'),
('halfXY',      'rotate3d(1, 1, 0, 180deg)'),
('halfXZ',      'rotate3d(1, 0, 1, 180deg)'),
('halfYZ',      'rotate3d(0, 1, 1, 180deg)'),
('half3D',      'rotate3d(1, 1, 1, 180deg)'),
('full',        'rotate3d(0, 0, 1, 360deg)'),
('fullX',       'rotate3d(1, 0, 0, 360deg)'),
('fullY',       'rotate3d(0, 1, 0, 360deg)'),
('fullXY',      'rotate3d(1, 1, 0, 360deg)'),
('fullXZ',      'rotate3d(1, 0, 1, 360deg)'),
('fullYZ',      'rotate3d(0, 1, 1, 360deg)'),
('full3D',      'rotate3d(1, 1, 1, 360deg)'),
('slipT',       'translate(0, 5vh)'),
('slipR',       'translate(-5vw, 0)'),
('slipB',       'translate(0, -5vh)'),
('slipL',       'translate(5vw, 0)'),
('slipTR',      'translate(-5vw, 5vh)'),
('slipBR',      'translate(-5vw, -5vh)'),
('slipBL',      'translate(5vw, -5vh)'),
('slipTL',      'translate(5vw, 5vh)'),
('slideT',      'translate(0, 50vh)'),
('slideR',      'translate(-50vw, 0)'),
('slideB',      'translate(0, -50vh)'),
('slideL',      'translate(50vw, 0)'),
('slideTR',     'translate(-50vw, 50vh)'),
('slideBR',     'translate(-50vw, -50vh)'),
('slideBL',     'translate(50vw, -50vh)'),
('slideTL',     'translate(50vw, 50vh)');
