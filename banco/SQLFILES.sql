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

-- Criação tabela status 
CREATE TABLE status(
  id INT NOT NULL AUTO_INCREMENT,
  status VARCHAR(50) NULL,
  PRIMARY KEY(id)
);

-- criação tabela pedidos de reservas 
CREATE TABLE pedido_reserva(
  id INT NOT NULL AUTO_INCREMENT,
  acompanhantes INT NULL,
  cpf VARCHAR(14) NOT NULL,
  nome_completo VARCHAR(100) NOT NULL,
  email VARCHAR(60) NOT NULL,
  motivo_negativa VARCHAR(100) NULL,
  data_inicial DATE NOT NULL,
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

select * from status;
select * from pedido_reserva;

desc pedido_reserva;
desc status;

drop table status;
drop table pedido_reserva;
drop table mesa;
drop table reserva;

insert into status values ('1','Confirmado');
insert into status values ('2','Cancelado');
insert into status values ('3','Em Análise');

insert into pedido_reserva values ('1','2','400.289.221-21','jacinto leite','jleite@gmail.com','ola','2022/09/22','2022/09/27','1');
insert into pedido_reserva values ('2','1','422.279.221-01','thomas turbando','tTurbando@gmail.com','Oi amigos','2022/09/23','2022/09/29','2');