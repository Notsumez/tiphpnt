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

