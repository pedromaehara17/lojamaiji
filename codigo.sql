create database lojamaiji;

use lojamaiji;

create table usuario(
id INT auto_increment,
nome varchar(60),
email varchar(60),
sexo varchar(60),
dia varchar(2),
mes varchar(2),
ano varchar(4),
cpf varchar(20),
cep varchar(20),
rua varchar(900),
telefone varchar(15),
senha varchar(20),
confsenha varchar(20),
primary key(id)
);



create table produto(
idproduto INT auto_increment,
nomeproduto varchar(60),
categoria varchar(60),
preco double(10,2),
descricao varchar(100),
quantidade varchar(5),
imagem varchar(60),
primary key(idproduto)
);

INSERT INTO produto(idproduto,nomeproduto,categoria,preco,descricao,quantidade,imagem)
VALUES (1, "O cortiço", 'nacionais', 20.99, 'O cortiço é uma obra legal', '30', 'koala.jpg'),
(2, "Dom Casmurro", 'nacionais', 39.99, 'Dom Casmurro é bem legal', '50', 'Tulips.jpg'),
(3, "Homem-aranha", 'hqs', 26.99, 'homem aranha eh bem legal', '20', 'Jellyfish.jpg');



create table pedido(
idpedido INT auto_increment,
id varchar(60),
vlrtotal DECIMAL(6,2),
dtpedido DATETIME,
dtentrega DATETIME,
foreign key(id) REFERENCES usuario(id),
primary key(idpedido)
);



create table itempedido(
iditempedido INT auto_increment,
idPedido INT NOT NULL,
idProduto INT NOT NULL,
quantidade INT NOT NULL,
FOREIGN KEY(idpedido) REFERENCES pedido(idPedido),
FOREIGN KEY(idproduto) REFERENCES produto(idproduto),
primary key(iditempedido)
);

create table cupom(
idcupom INT auto_increment,
nomecupom varchar(60),
valorcupom INT,
primary key(idcupom)
);