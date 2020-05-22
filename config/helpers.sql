USE sc1beph7875_animadio;

CREATE TABLE HelpersProperty
(
    id          TINYINT     UNSIGNED    PRIMARY KEY AUTO_INCREMENT,
    property    VARCHAR(30) NOT NULL    UNIQUE
)
    ENGINE=INNODB DEFAULT CHARSET=UTF8;

INSERT INTO HelpersProperty
(property)
VALUES
('font-weight'),
('font-style'),
('font-family'),
('text-transform'),
('text-align'),
('text-decoration-line'),
('text-decoration-style'),
('text-decoration-color'),
('text-shadow'),
('box-shadow'),
('cursor');

CREATE TABLE Helpers
(
    id          TINYINT             UNSIGNED    PRIMARY KEY AUTO_INCREMENT,
    class       VARCHAR(20)         NOT NULL    UNIQUE,
    valor       VARCHAR(30)         NOT NULL,
    property    TINYINT             UNSIGNED    NOT NULL,
    source      TINYINT             UNSIGNED    NOT NULL,
    media       TINYINT             UNSIGNED    NOT NULL,
    concat      TINYINT(1)          NOT NULL,
    CONSTRAINT  helpers_property    FOREIGN KEY (property)  REFERENCES  HelpersProperty(id)
)
    ENGINE=INNODB DEFAULT CHARSET=UTF8;


INSERT INTO Helpers
(class,                 valor,                      property,   source, media,  concat)
VALUES
('font-bold',           'bold',                     1,          1,      1,      0),
('font-italic',         'italic',                   2,          1,      1,      0),
('font-oblique',        'oblique',                  2,          1,      1,      0),
('font-sans-serif',     '--sans-serif-font-family', 3,          1,      1,      0),
('font-serif',          '--serif-font-family',      3,          1,      1,      0),
('font-monospace',      '--monospace-font-family',  3,          1,      1,      0),
('font-cursive',        '--cursive-font-family',    3,          1,      1,      0),
('font-fantasy',        '--fantasy-font-family',    3,          1,      1,      0),
('trans-cap',           'capitalize',               4,          2,      1,      0),
('trans-up',            'uppercase',                4,          2,      1,      0),
('trans-low',           'lowercase',                4,          2,      1,      0),
('align-center',        'center',                   5,          3,      1,      0),
('align-justify',       'justify',                  5,          3,      1,      0),
('align-right',         'right',                    5,          3,      1,      0),
('align-left',          'left',                     5,          3,      1,      0),
('deco',                '--text-decoration-line',   6,          4,      1,      0),
('deco-none',           'none',                     6,          4,      1,      0),
('deco-under',          'underline',                6,          4,      1,      0),
('deco-over',           'overline',                 6,          4,      1,      0),
('deco-through',        'line-through',             6,          4,      1,      0),
('deco-dash',           'dashed',                   7,          4,      1,      0),
('deco-dot',            'dotted',                   7,          4,      1,      0),
('deco-solid',          'solid',                    7,          4,      1,      0),
('deco-double',         'double',                   7,          4,      1,      0),
('deco-wavy',           'wavy',                     7,          4,      1,      0),
('deco-black',          '--black',                  8,          4,      1,      0),
('deco-blue',           '--blue',                   8,          4,      1,      0),
('deco-gray',           '--gray',                   8,          4,      1,      0),
('deco-green',          '--green',                  8,          4,      1,      0),
('deco-maroon',         '--maroon',                 8,          4,      1,      0),
('deco-navy',           '--navy',                   8,          4,      1,      0),
('deco-orange',         '--orange',                 8,          4,      1,      0),
('deco-purple',         '--purple',                 8,          4,      1,      0),
('deco-red',            '--red',                    8,          4,      1,      0),
('deco-yellow',         '--yellow',                 8,          4,      1,      0),
('shatex-sm',           '--text-shadow-sm',         9,          5,      1,      0),
('shatex-md',           '--text-shadow-md',         9,          5,      1,      0),
('shatex-lg',           '--text-shadow-lg',         9,          5,      1,      0),
('shatex-blur',         '--text-shadow-blur',       9,          5,      1,      0),
('shatex-blur-sm',      '--text-shadow-blur-sm',    9,          5,      1,      0),
('shatex-blur-md',      '--text-shadow-blur-md',    9,          5,      1,      0),
('shatex-blur-lg',      '--text-shadow-blur-lg',    9,          5,      1,      0),
('shabox-sm',           '--box-shadow-sm',          10,         6,      1,      0),
('shabox-md',           '--box-shadow-md',          10,         6,      1,      0),
('shabox-lg',           '--box-shadow-lg',          10,         6,      1,      0),
('shabox-blur',         '--box-shadow-blur',        10,         6,      1,      0),
('shabox-blur-sm',      '--box-shadow-blur-sm',     10,         6,      1,      0),
('shabox-blur-md',      '--box-shadow-blur-md',     10,         6,      1,      0),
('shabox-blur-lg',      '--box-shadow-blur-lg',     10,         6,      1,      0),
('shabox-spread',       '--box-shadow-spread',      10,         6,      1,      0),
('shabox-spread-sm',    '--box-shadow-spread-sm',   10,         6,      1,      0),
('shabox-spread-md',    '--box-shadow-spread-md',   10,         6,      1,      0),
('shabox-spread-lg',    '--box-shadow-spread-lg',   10,         6,      1,      0),
('shabox-in-sm',        '--box-shadow-sm',          10,         6,      1,      0),
('shabox-in-md',        '--box-shadow-md',          10,         6,      1,      0),
('shabox-in-lg',        '--box-shadow-lg',          10,         6,      1,      0),
('shabox-in-blur',      '--box-shadow-blur',        10,         6,      1,      0),
('shabox-in-blur-sm',   '--box-shadow-blur-sm',     10,         6,      1,      0),
('shabox-in-blur-md',   '--box-shadow-blur-md',     10,         6,      1,      0),
('shabox-in-blur-lg',   '--box-shadow-blur-lg',     10,         6,      1,      0),
('shabox-in-spread',    '--box-shadow-spread',      10,         6,      1,      0),
('shabox-in-spread-sm', '--box-shadow-spread-sm',   10,         6,      1,      0),
('shabox-in-spread-md', '--box-shadow-spread-md',   10,         6,      1,      0),
('shabox-in-spread-lg', '--box-shadow-spread-lg',   10,         6,      1,      0),
('cursor-cell',         'cell',                     11,         7,      1,      0),
('cursor-cross',        'crosshair',                11,         7,      1,      0),
('cursor-hand',         'pointer',                  11,         7,      1,      0),
('cursor-help',         'help',                     11,         7,      1,      0),
('cursor-move',         'move',                     11,         7,      1,      0),
('cursor-none',         'not-allowed',              11,         7,      1,      0),
('cursor-text',         'text',                     11,         7,      1,      0);
