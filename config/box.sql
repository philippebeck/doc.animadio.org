USE animadio;

CREATE TABLE BoxProperty
(
    id          TINYINT     UNSIGNED    PRIMARY KEY AUTO_INCREMENT,
    property    VARCHAR(20) NOT NULL    UNIQUE
)
    ENGINE=INNODB DEFAULT CHARSET=UTF8;

INSERT INTO BoxProperty
(property)
VALUES
('margin'),
('margin-top'),
('margin-right'),
('margin-bottom'),
('margin-left'),
('border-style'),
('border-width'),
('border-radius'),
('border-color'),
('padding'),
('padding-top'),
('padding-right'),
('padding-bottom'),
('padding-left'),
('height'),
('max-height'),
('min-height'),
('width'),
('max-width'),
('min-width');

CREATE TABLE Box
(
    id          TINYINT         UNSIGNED    PRIMARY KEY AUTO_INCREMENT,
    class       VARCHAR(20)     NOT NULL    UNIQUE,
    valor       VARCHAR(30)     NOT NULL,
    property    TINYINT         UNSIGNED    NOT NULL,
    source      TINYINT         UNSIGNED    NOT NULL,
    media       TINYINT         UNSIGNED    NOT NULL,
    concat      TINYINT(1)      NOT NULL,
    CONSTRAINT  box_property    FOREIGN KEY (property)  REFERENCES  BoxProperty(id)
)
    ENGINE=INNODB DEFAULT CHARSET=UTF8;


INSERT INTO Box
(class,             valor,                      property,   source, media,  concat)
VALUES
('container-50tn',  '50%',                      19,         1,      1,      1),
('container-60tn',  '60%',                      19,         1,      1,      1),
('container-70tn',  '70%',                      19,         1,      1,      1),
('container-80tn',  '80%',                      19,         1,      1,      1),
('container-90tn',  '90%',                      19,         1,      1,      1),
('container-50sm',  '50%',                      19,         1,      2,      1),
('container-60sm',  '60%',                      19,         1,      2,      1),
('container-70sm',  '70%',                      19,         1,      2,      1),
('container-80sm',  '80%',                      19,         1,      2,      1),
('container-90sm',  '90%',                      19,         1,      2,      1),
('container-50md',  '50%',                      19,         1,      3,      1),
('container-60md',  '60%',                      19,         1,      3,      1),
('container-70md',  '70%',                      19,         1,      3,      1),
('container-80md',  '80%',                      19,         1,      3,      1),
('container-90md',  '90%',                      19,         1,      3,      1),
('container-50lg',  '50%',                      19,         1,      4,      1),
('container-60lg',  '60%',                      19,         1,      4,      1),
('container-70lg',  '70%',                      19,         1,      4,      1),
('container-80lg',  '80%',                      19,         1,      4,      1),
('container-90lg',  '90%',                      19,         1,      4,      1),
('container-50wd',  '50%',                      19,         1,      5,      1),
('container-60wd',  '60%',                      19,         1,      5,      1),
('container-70wd',  '70%',                      19,         1,      5,      1),
('container-80wd',  '80%',                      19,         1,      5,      1),
('container-90wd',  '90%',                      19,         1,      5,      1),
('mar-none',        '--margin-none',            1,          2,      1,      0),
('mar-top-none',    '--margin-none',            2,          2,      1,      0),
('mar-right-none',  '--margin-none',            3,          2,      1,      0),
('mar-bot-none',    '--margin-none',            4,          2,      1,      0),
('mar-left-none',   '--margin-none',            5,          2,      1,      0),
('mar-sm',          '--margin-sm',              1,          2,      1,      0),
('mar-md',          '--margin-md',              1,          2,      1,      0),
('mar-lg',          '--margin-lg',              1,          2,      1,      0),
('mar-top-sm',      '--margin-top-sm',          2,          2,      1,      0),
('mar-top-md',      '--margin-top-md',          2,          2,      1,      0),
('mar-top-lg',      '--margin-top-lg',          2,          2,      1,      0),
('mar-right-sm',    '--margin-right-sm',        3,          2,      1,      0),
('mar-right-md',    '--margin-right-md',        3,          2,      1,      0),
('mar-right-lg',    '--margin-right-lg',        3,          2,      1,      0),
('mar-bot-sm',      '--margin-bottom-sm',       4,          2,      1,      0),
('mar-bot-md',      '--margin-bottom-md',       4,          2,      1,      0),
('mar-bot-lg',      '--margin-bottom-lg',       4,          2,      1,      0),
('mar-left-sm',     '--margin-left-sm',         5,          2,      1,      0),
('mar-left-md',     '--margin-left-md',         5,          2,      1,      0),
('mar-left-lg',     '--margin-left-lg',         5,          2,      1,      0),
('bord',            '--border-style',           6,          3,      1,      0),
('bord-dash',       'dashed',                   6,          3,      1,      0),
('bord-dot',        'dotted',                   6,          3,      1,      0),
('bord-solid',      'solid',                    6,          3,      1,      0),
('bord-double',     'double',                   6,          3,      1,      0),
('bord-groove',     'groove',                   6,          3,      1,      0),
('bord-ridge',      'ridge',                    6,          3,      1,      0),
('bord-in',         'inset',                    6,          3,      1,      0),
('bord-out',        'outset',                   6,          3,      1,      0),
('bord-tn',         '--border-width-tn',        7,          3,      1,      0),
('bord-sm',         '--border-width-sm',        7,          3,      1,      0),
('bord-md',         '--border-width-md',        7,          3,      1,      0),
('bord-lg',         '--border-width-lg',        7,          3,      1,      0),
('bord-wd',         '--border-width-wd',        7,          3,      1,      0),
('bord-square',     '--border-radius-square',   8,          3,      1,      0),
('bord-curve',      '--border-radius-curve',    8,          3,      1,      0),
('bord-rounded',    '--border-radius-rounded',  8,          3,      1,      0),
('bord-circle',     '--border-radius-circle',   8,          3,      1,      0),
('bord-black',      '--black',                  9,          3,      1,      0),
('bord-slate',      '--slate',                  9,          3,      1,      0),
('bord-gray',       '--gray',                   9,          3,      1,      0),
('bord-silver',     '--silver',                 9,          3,      1,      0),
('bord-white',      '--white',                  9,          3,      1,      0),
('bord-magenta',    '--magenta',                9,          3,      1,      0),
('bord-red',        '--red',                    9,          3,      1,      0),
('bord-orange',     '--orange',                 9,          3,      1,      0),
('bord-gold',       '--gold',                   9,          3,      1,      0),
('bord-maroon',     '--maroon',                 9,          3,      1,      0),
('bord-green',      '--green',                  9,          3,      1,      0),
('bord-blue',       '--blue',                   9,          3,      1,      0),
('bord-navy',       '--navy',                   9,          3,      1,      0),
('bord-purple',     '--purple',                 9,          3,      1,      0),
('bord-pink',       '--pink',                   9,          3,      1,      0),
('bord-tomato',     '--tomato',                 9,          3,      1,      0),
('bord-coral',      '--coral',                  9,          3,      1,      0),
('bord-yellow',     '--yellow',                 9,          3,      1,      0),
('bord-brown',      '--brown',                  9,          3,      1,      0),
('bord-aqua',       '--aqua',                   9,          3,      1,      0),
('bord-cyan',       '--cyan',                   9,          3,      1,      0),
('bord-sky',        '--sky',                    9,          3,      1,      0),
('bord-violet',     '--violet',                 9,          3,      1,      0),
('pad-none',        '--padding-none',           10,         4,      1,      0),
('pad-top-none',    '--padding-none',           11,         4,      1,      0),
('pad-right-none',  '--padding-none',           12,         4,      1,      0),
('pad-bot-none',    '--padding-none',           13,         4,      1,      0),
('pad-left-none',   '--padding-none',           14,         4,      1,      0),
('pad-sm',          '--padding-sm',             10,         4,      1,      0),
('pad-md',          '--padding-md',             10,         4,      1,      0),
('pad-lg',          '--padding-lg',             10,         4,      1,      0),
('pad-top-sm',      '--padding-top-sm',         11,         4,      1,      0),
('pad-top-md',      '--padding-top-md',         11,         4,      1,      0),
('pad-top-lg',      '--padding-top-lg',         11,         4,      1,      0),
('pad-right-sm',    '--padding-right-sm',       12,         4,      1,      0),
('pad-right-md',    '--padding-right-md',       12,         4,      1,      0),
('pad-right-lg',    '--padding-right-lg',       12,         4,      1,      0),
('pad-bot-sm',      '--padding-bottom-sm',      13,         4,      1,      0),
('pad-bot-md',      '--padding-bottom-md',      13,         4,      1,      0),
('pad-bot-lg',      '--padding-bottom-lg',      13,         4,      1,      0),
('pad-left-sm',     '--padding-left-sm',        14,         4,      1,      0),
('pad-left-md',     '--padding-left-md',        14,         4,      1,      0),
('pad-left-lg',     '--padding-left-lg',        14,         4,      1,      0),
('height-sm',       '--height-sm',              15,         5,      1,      0),
('height-md',       '--height-md',              15,         5,      1,      0),
('height-lg',       '--height-lg',              15,         5,      1,      0),
('max-h-sm',        '--max-height-sm',          16,         5,      1,      0),
('max-h-md',        '--max-height-md',          16,         5,      1,      0),
('max-h-lg',        '--max-height-lg',          16,         5,      1,      0),
('min-h-sm',        '--min-height-sm',          17,         5,      1,      0),
('min-h-md',        '--min-height-md',          17,         5,      1,      0),
('min-h-lg',        '--min-height-lg',          17,         5,      1,      0),
('width-sm',        '--width-sm',               18,         6,      1,      0),
('width-md',        '--width-md',               18,         6,      1,      0),
('width-lg',        '--width-lg',               18,         6,      1,      0),
('max-w-sm',        '--max-width-sm',           19,         6,      1,      0),
('max-w-md',        '--max-width-md',           19,         6,      1,      0),
('max-w-lg',        '--max-width-lg',           19,         6,      1,      0),
('min-w-sm',        '--min-width-sm',           20,         6,      1,      0),
('min-w-md',        '--min-width-md',           20,         6,      1,      0),
('min-w-lg',        '--min-width-lg',           20,         6,      1,      0);
