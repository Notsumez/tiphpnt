select * from ti93phpdb01.tbusuarios;

alter table tbusuarios change column senha_usuario senha_usuario varchar(32);

update tbusuarios set senha_usuario = md5(senha_usuario) where id_usuario between 1 and 4;
update tbusuarios set senha_usuario = '1234' where id_usuario = 1;
update tbusuarios set senha_usuario = '1234' where id_usuario = 2;
update tbusuarios set senha_usuario = '789' where id_usuario = 3;
update tbusuarios set senha_usuario = '1234' where id_usuario = 4;

-- /////////////////////////////////////////////////////////////////////////////////

select * from tbusuarios;

update tbprodutos set destaque_produto = 'não' where id_produto = 1;

select * from tbprodutos;

-- /////////////////////////////////////////////////////////////////////////////////

select * from tbusuarios;

update tbprodutos set destaque_produto = 'não' where id_produto = 1;

select * from tbprodutos;

select * from tbtipos;
delete from tbtipos where id_tipo = 9;

select * from tbusuarios;

alter table tbusuarios change column nivel_usuario nivel_usuario varchar(4);
update tbusuarios set nivel_usuario = 'cli' where id_usuario = 3;

-- /////////////////////////////////////////////////////////////////////////////////

show tables;

-- Criação tabela status 
CREATE TABLE status(
  id INT NOT NULL AUTO_INCREMENT,
  status VARBINARY(50) NOT NULL,
  PRIMARY KEY(id)
);

-- criação tabela pedidos de reservas 
CREATE TABLE pedido_reserva(
  id INT NOT NULL AUTO_INCREMENT,
  acompanhantes INT NULL,
  cpf VARCHAR(11) NOT NULL,
  nome_completo VARCHAR(100) NOT NULL,
  email VARCHAR(60) NOT NULL,
  motivo_negativa VARCHAR(100) NULL,
  data_inicial DATETIME NOT NULL,
  data_final DATETIME NOT NULL,
  id_status INT NOT NULL,
  PRIMARY KEY(id),
  FOREIGN KEY(id_status) REFERENCES status(id)
);

-- criação tabela de mesas 
CREATE TABLE mesa(
  id INT NOT NULL AUTO_INCREMENT,
  id_status INT NOT NULL,
  PRIMARY KEY(id),
  FOREIGN KEY(id_status) REFERENCES status(id)
);

-- criação tabela de reserva 
CREATE TABLE reserva(
  id INT NOT NULL AUTO_INCREMENT,
  id_status INT NOT NULL,
  id_mesa INT NOT NULL,
  id_pedReserva INT NOT NULL,
  PRIMARY KEY(id),
  FOREIGN KEY(id_status) REFERENCES status(id),
  FOREIGN KEY(id_mesa) REFERENCES mesa(id),
  FOREIGN KEY(id_pedReserva) REFERENCES pedido_reserva(id)
);

desc status;
desc reserva;
desc pedido_reserva;
desc mesa;

drop table status;
drop table reserva;
drop table mesa;
drop table pedido_reserva;
