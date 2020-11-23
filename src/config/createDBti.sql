create table usuario (
    ip INT UNSIGNED NOT NULL,
    usuario VARCHAR(100) NOT NULL,
    setor VARCHAR(100) NOT NULL,
    homeOffice varchar(3) NOT NULL,
    UNIQUE KEY (ip),
    PRIMARY KEY (ip)
);