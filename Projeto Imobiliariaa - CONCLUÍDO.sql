CREATE DATABASE IF NOT EXISTS bd_imobiliaria;
USE bd_imobiliaria;

CREATE TABLE tb_usuario (
    cd_usuario INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nm_usuario VARCHAR(45) NOT NULL,
    email VARCHAR(45) NOT NULL,
    senha_usuario TEXT
);

CREATE TABLE tb_cliente (
    cd_cliente INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nm_cliente VARCHAR(45) NOT NULL,
    cpf_cliente CHAR(11) NOT NULL,
    cnpj_cliente CHAR(14) NOT NULL,
    nm_endereco VARCHAR(45) NOT NULL,
    nr_endereco CHAR(5) NOT NULL,
    cep VARCHAR(10) NOT NULL,
    telefone VARCHAR(20) NOT NULL,
    email VARCHAR(45) NOT NULL
);

CREATE TABLE tb_imobiliaria (
    cd_imobiliaria INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nm_imobiliaria VARCHAR(45) NOT NULL,
    nm_endereco VARCHAR(45) NOT NULL,
    nr_endereco CHAR(10) NOT NULL,
    nm_bairro VARCHAR(45) NOT NULL,
    nm_cidade VARCHAR(45) NOT NULL,
    nm_estado VARCHAR(45) NOT NULL,
    cep_imobiliaria VARCHAR(10) NOT NULL
);

CREATE TABLE tb_corretor (
    cd_corretor INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nm_corretor VARCHAR(45) NOT NULL,
    creci_corretor CHAR(10) NOT NULL,
    telefone_corretor VARCHAR(20) NOT NULL,
    email_corretor VARCHAR(45) NOT NULL,
    fk_cd_usuario INT NOT NULL,
    fk_cd_imobiliaria INT NOT NULL,
    FOREIGN KEY (fk_cd_usuario) REFERENCES tb_usuario(cd_usuario),
    FOREIGN KEY (fk_cd_imobiliaria) REFERENCES tb_imobiliaria(cd_imobiliaria)
);


CREATE TABLE tb_imóvel (
    cd_imovel INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    tipo_imovel VARCHAR(45) NOT NULL,
    nm_endereco VARCHAR(45) NOT NULL,
    nr_endereco CHAR(10) NOT NULL,
    nm_complemento VARCHAR(45) NOT NULL,
    nm_bairro VARCHAR(45) NOT NULL,
    nm_cidade VARCHAR(45) NOT NULL,
    nm_estado VARCHAR(45) NOT NULL,
    cep_imovel VARCHAR(45) NOT NULL,
    valor_venda DOUBLE NOT NULL,
    valor_aluguel DOUBLE NOT NULL,
    descricao_imovel VARCHAR(45) NOT NULL,
    status_imovel VARCHAR(15) NOT NULL,
    fk_cd_imobiliaria INT NOT NULL,
    fk_cd_cliente INT NOT NULL,
    FOREIGN KEY (fk_cd_imobiliaria) REFERENCES tb_imobiliaria(cd_imobiliaria),
    FOREIGN KEY (fk_cd_cliente) REFERENCES tb_cliente(cd_cliente)
);

CREATE TABLE tb_visita (
    cd_visita INT PRIMARY KEY AUTO_INCREMENT,
    endereco_imovel VARCHAR(255),
    nr_endereco_imovel CHAR(10),
    nm_bairro VARCHAR(45),
    nm_cidade VARCHAR(45),
    nm_complemento VARCHAR(45),
    dt_visita DATETIME,
    fk_cd_cliente INT,
    FOREIGN KEY (fk_cd_cliente) REFERENCES tb_cliente(cd_cliente)
);

CREATE TABLE tb_contrato (
    cd_contrato INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    dt_inicio DATE NOT NULL,
    dt_fim DATE NOT NULL,
    valor_contrato DOUBLE NOT NULL,
    tipo_contrato VARCHAR(20) NOT NULL,
    fk_cd_imovel INT NOT NULL,
    fk_cd_cliente INT NOT NULL,
    fk_cd_corretor INT NOT NULL,
    fk_cd_imobiliaria INT NOT NULL,
    FOREIGN KEY (fk_cd_imovel) REFERENCES tb_imóvel(cd_imovel),
    FOREIGN KEY (fk_cd_cliente) REFERENCES tb_cliente(cd_cliente),
    FOREIGN KEY (fk_cd_corretor) REFERENCES tb_corretor(cd_corretor),
    FOREIGN KEY (fk_cd_imobiliaria) REFERENCES tb_imobiliaria(cd_imobiliaria)
);



INSERT INTO tb_usuario (cd_usuario, nm_usuario, email, senha_usuario)
VALUES (1, 'Danielle Vieira', 'danivieiraa.imobiliaria@gmail.com', '123456');

INSERT INTO tb_cliente (cd_cliente, nm_cliente, cpf_cliente, cnpj_cliente, nm_endereco, nr_endereco, cep, telefone, email)
VALUES (1, 'Ana Beatriz Souza', '12345678900', '', 'Rua da Harmonia', 45, '01001-000', '(11) 91234-5678', 'ana.souza@email.com'),
(2, 'Fernando Lima', '23456789011', '', 'Av. Paulista', 1000, '01310-100', '(11) 99876-5432', 'fernando.lima@email.com'),
(3, 'Juliana Ribeiro', '34567890122', '', 'Rua das Laranjeiras', 77, '22240-003', '(21) 98765-4321', 'juliana.ribeiro@email.com'),
(4, 'Lucas Fernandes', '45678901233', '', 'Travessa da Serra', 10, '30130-000', '(31) 97654-3210', 'lucas.fernandes@email.com'),
(5, 'Patrícia Gomes', '56789012344', '', 'Rua Bela Vista', 205, '69005-070', '(92) 96543-2109', 'patricia.gomes@email.com'),
(6, 'GlobalTech LTDA', '', '12345678000190', 'Av. das Nações', 1500, '04567-000', '(11) 4002-8922', 'contato@globaltech.com.br'),
(7, 'AgroVale S/A', '', '23456789000101', 'Rod. BR-101', 6000, '49000-970', '(79) 3234-5678', 'vendas@agrovale.com.br'),
(8, 'Construtora Alpha ME', '', '34567890000112', 'Rua do Engenho', 333, '04000-020', '(11) 3333-4444', 'alpha@construtora.com.br'),
(9, 'Editora Nova Era EPP', '', '45678901000123', 'Rua das Letras', 120, '01400-100', '(21) 3555-6677', 'contato@novaera.com'),
(10, 'Logística Rápida Express', '', '56789012000134', 'Av. do Transporte', 845, '05000-300', '(31) 3003-7788', 'logistica@rapidaexpress.com.br');

INSERT INTO tb_imobiliaria (cd_imobiliaria, nm_imobiliaria, nm_endereco, nr_endereco, nm_bairro, nm_cidade, nm_estado, cep_imobiliaria)
VALUES (1, 'Dani Imóveis', 'Avenida Nossa Senhora de Fátima', '100', 'Agenor de Campos', 'Mongaguá', 'SP', '11730-000');

INSERT INTO tb_corretor (cd_corretor, nm_corretor, creci_corretor, telefone_corretor, email_corretor, fk_cd_usuario, fk_cd_imobiliaria)
VALUES (1, 'Danielle Vieira', '340862', '(11) 91234-5678', 'danivieiraa.imobiliaria@gmail.com', 1, 1);

INSERT INTO tb_imóvel (cd_imovel, tipo_imovel, nm_endereco, nr_endereco, nm_complemento, nm_bairro, nm_cidade, nm_estado, cep_imovel, valor_venda, valor_aluguel, descricao_imovel, status_imovel, fk_cd_imobiliaria, fk_cd_cliente)
VALUES (1, 'Apartamento', 'Avenida São Paulo', '5300', 'Apto 12', 'Centro', 'Mongaguá', 'SP', '11730-000', 500000, 2.500, 'Apartamento com 2 dormitórios e 2 banheiros', 'Disponível', 1, 1),
(2, 'Casa', 'Avenida Presidente Kennedy', '15300', 'Casa 1', 'Guilhermina', 'Praia Grande', 'SP', '11703-500', 1500000.00, 5500, 'Casa com 4 dormitórios e 2 banheiros', 'Disponível', 1, 3);

INSERT INTO tb_visita (cd_visita, endereco_imovel, nr_endereco_imovel, nm_bairro, nm_cidade, nm_complemento, dt_visita, fk_cd_cliente)
VALUES (1, 'Avenida São Paulo', '5300', 'Centro', 'Mongaguá', 'Apto 12', '2025-06-01 14:00:00', 1),
(2, 'Avenida Ayrton Senna da Silva', '1500', 'Boqueirão', 'Praia Grande', 'Casa', '2025-06-02 15:00:00', 2),
(3, 'Avenida São Paulo', '200', 'Centro', 'Mongaguá', 'Apto 5', '2025-06-03 16:00:00', 3),
(4, 'Avenida Presidente Kennedy', '15300', 'Guilhermina', 'Praia Grande', 'Casa 1', '2025-06-04 11:00:00', 3),
(5, 'Avenida São Paulo', '4500', 'Centro', 'Mongaguá', 'Apto 6', '2025-06-05 13:00:00', 5);

INSERT INTO tb_contrato (dt_inicio, dt_fim, valor_contrato, tipo_contrato, fk_cd_imovel, fk_cd_cliente, fk_cd_corretor, fk_cd_imobiliaria) 
VALUES ('2025-06-10', '2026-06-10', 3000.00, 'Aluguel', 1, 1, 1, 1);

UPDATE tb_imóvel
SET valor_aluguel = 3000
WHERE cd_imovel = 1;

UPDATE tb_imóvel
SET valor_aluguel = 5500
WHERE cd_imovel = 2;


DELETE FROM tb_visita
WHERE cd_visita = 5;

SELECT 
    i.cd_imovel,
    i.tipo_imovel,
    i.nm_endereco AS endereco_imovel,
    i.nr_endereco,
    i.nm_bairro,
    i.nm_cidade,
    i.valor_venda,
    i.valor_aluguel,
    i.status_imovel,
    c.nm_cliente AS dados_cliente,
    im.nm_imobiliaria AS nome_imobiliaria,
    cor.nm_corretor AS nome_corretor,
    cor.email_corretor
FROM tb_imóvel i
JOIN tb_cliente c ON i.fk_cd_cliente = c.cd_cliente
JOIN tb_imobiliaria im ON i.fk_cd_imobiliaria = im.cd_imobiliaria
JOIN tb_corretor cor ON cor.fk_cd_imobiliaria = im.cd_imobiliaria
WHERE i.status_imovel = 'Disponível'
ORDER BY i.valor_venda DESC;

select * from tb_usuario;
select * from tb_cliente;
select * from tb_corretor;
select * from tb_imobiliaria;
select * from tb_imóvel;
select * from tb_visita;
select * from tb_contrato;
