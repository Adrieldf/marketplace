CREATE TABLE produto (
  idProduto INTEGER UNSIGNED  NOT NULL   AUTO_INCREMENT,
  nome VARCHAR(100)  NULL  ,
  modelo VARCHAR(100)  NULL  ,
  Segmento VARCHAR(100)  NULL  ,
  Descrição VARCHAR(1000)  NULL  ,
  preco DECIMAL(10,2)  NULL  ,
PRIMARY KEY(idProduto));

CREATE TABLE Vendedor (
  idVendedor INTEGER UNSIGNED  NOT NULL   AUTO_INCREMENT,
  nome VARCHAR(100)  NULL  ,
  cpf VARCHAR(100)  NULL  ,
  cep VARCHAR(100)  NULL  ,
  rua VARCHAR(100)  NULL  ,
  numero VARCHAR(100)  NULL  ,
  bairro VARCHAR(100)  NULL  ,
  cidade VARCHAR(100)  NULL  ,
  estado VARCHAR(100)  NULL  ,
  pais VARCHAR(100)  NULL  ,
  telefone VARCHAR(100)  NULL  ,
  celular VARCHAR(100)  NULL  ,
  email VARCHAR(200)  NULL  ,
PRIMARY KEY(idVendedor));

CREATE TABLE usuario (
  idUsuario INTEGER UNSIGNED  NOT NULL   AUTO_INCREMENT,
  nome VARCHAR(100)  NULL  ,
  email VARCHAR(200)  NULL  ,
  usuario VARCHAR(20)  NULL  ,
  senha VARCHAR(20)  NULL    ,
PRIMARY KEY(idUsuario));

CREATE TABLE pedido (
  idPedido INTEGER UNSIGNED  NOT NULL   AUTO_INCREMENT,
  nomecartao VARCHAR(100)  NULL  ,
  numerocartao VARCHAR(200)  NULL  ,
  datavalidade VARCHAR(20)  NULL  ,
  codigoseguranca VARCHAR(20)  NULL  ,
PRIMARY KEY(idPedido));
