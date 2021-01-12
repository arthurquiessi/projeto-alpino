create table usuario (
    ip INT UNSIGNED NOT NULL,
    usuario VARCHAR(100) NOT NULL,
    setor VARCHAR(100) NOT NULL,
    homeOffice varchar(3) NOT NULL,
    UNIQUE KEY (ip),
    PRIMARY KEY (ip)
);

create table maquina (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    tag VARCHAR(100) NOT NULL,
    modelo VARCHAR(100) NOT NULL,
    tipo VARCHAR(100) NOT NULL,
    processador VARCHAR(100) NOT NULL,
    memoria VARCHAR(100) NOT NULL,
    armazenamento VARCHAR(100) NOT NULL,
    sistema_operacional VARCHAR(100) NOT NULL,
    nfcompra VARCHAR(100) NOT NULL,
    datacompra DATE NOT NULL,
    distribuidora VARCHAR(100) NOT NULL,
    nfgarantia VARCHAR(100) NOT NULL,
    datagarantia DATE NOT NULL,
    statusmaq VARCHAR(100) NOT NULL,
    UNIQUE KEY (tag),
    PRIMARY KEY (id)
);

create table msOffice (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    inicio varchar(10) NOT NULL,
    chave_produto varchar(100) NOT NULL,
    versao_office varchar(100) NOT NULL,
    statusoffice varchar(100) NOT NULL,
    UNIQUE KEY(inicio),
    UNIQUE KEY(chave_produto),
    PRIMARY KEY(id)
);

create table ramal (
    ip INT UNSIGNED NOT NULL AUTO_INCREMENT,
    ramal varchar(100) NOT NULL,
    modelo_ramal varchar(100) NOT NULL,
    UNIQUE KEY(ip),
    UNIQUE KEY(ramal),
    PRIMARY KEY(ip)
);
