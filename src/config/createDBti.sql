create table usuario (
    wlan VARCHAR(45) NOT NULL,
    ip INT UNSIGNED NOT NULL,
    usuario VARCHAR(100) NOT NULL,
    setor VARCHAR(100) NOT NULL,
    homeOffice varchar(3) NOT NULL,
    UNIQUE KEY (ip),
    UNIQUE KEY (usuario),
    PRIMARY KEY (ip)
);