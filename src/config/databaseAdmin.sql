create table wlan (
    id INT unsigned NOT NULL AUTO_INCREMENT,
    wlan VARCHAR(45) NOT NULL,
    PRIMARY KEY (id),
    UNIQUE KEY (wlan)
);

create table setor (
    id INT unsigned NOT NULL AUTO_INCREMENT,
    setor VARCHAR(45) NOT NULL,
    PRIMARY KEY (id),
    UNIQUE KEY (setor)
);

create table modelo_maquina (
    id INT unsigned NOT NULL AUTO_INCREMENT,
    modelo_maquina VARCHAR(45) NOT NULL,
    PRIMARY KEY (id),
    UNIQUE KEY (modelo_maquina)
);

create table tipo_maquina (
    id INT unsigned NOT NULL AUTO_INCREMENT,
    tipo_maquina VARCHAR(45) NOT NULL,
    PRIMARY KEY (id),
    UNIQUE KEY (tipo_maquina)
);

create table sistema_operacional (
    id INT unsigned NOT NULL AUTO_INCREMENT,
    sistema_operacional VARCHAR(45) NOT NULL,
    PRIMARY KEY (id),
    UNIQUE KEY (sistema_operacional)
);

create table modelo_ms_office (
    id INT unsigned NOT NULL AUTO_INCREMENT,
    modelo_ms_office VARCHAR(45) NOT NULL,
    PRIMARY KEY (id),
    UNIQUE KEY (modelo_ms_office)
);

create table modelo_ramal (
    id INT unsigned NOT NULL AUTO_INCREMENT,
    modelo_ramal VARCHAR(45) NOT NULL,
    PRIMARY KEY (id),
    UNIQUE KEY (modelo_ramal)
);

create table modelo_impressora (
    id INT unsigned NOT NULL AUTO_INCREMENT,
    modelo_impressora VARCHAR(45) NOT NULL,
    PRIMARY KEY (id),
    UNIQUE KEY (modelo_impressora)
);

create table processador (
    id INT unsigned NOT NULL AUTO_INCREMENT,
    processador VARCHAR(45) NOT NULL,
    PRIMARY KEY (id),
    UNIQUE KEY (processador)
);