create table geral(
    ip INT UNSIGNED NOT NULL AUTO_INCREMENT,
    usuario VARCHAR(100) NOT NULL,
    setor varchar(100) NOT NULL,
    homeOffice varchar(10) NOT NULL,
    tag VARCHAR(100) NOT NULL,
    modelo VARCHAR(100) NOT NULL,
    tipo VARCHAR(100) NOT NULL,
    processador VARCHAR(100) NOT NULL,
    memoria VARCHAR(100) NOT NULL,
    armazenamento VARCHAR(100) NOT NULL,
    sistema_operacional VARCHAR(100) NOT NULL,
    nfcompra VARCHAR(100) NOT NULL,
    datacompra VARCHAR(100) NOT NULL,
    distribuidora VARCHAR(100) NOT NULL,
    nfgarantia VARCHAR(100) NOT NULL,
    datagarantia VARCHAR(100) NOT NULL,
    inicio VARCHAR(10) NOT NULL,
    chave_produto VARCHAR(100) NOT NULL,
    versao_office VARCHAR(100) NOT NULL,
    ipRamal VARCHAR(10) NOT NULL,
    ramal VARCHAR(100) NOT NULL,
    modelo_ramal VARCHAR(100) NOT NULL,
    PRIMARY KEY(ip),
    UNIQUE KEY(ip),
    UNIQUE KEY(tag),
    UNIQUE KEY(inicio)
);