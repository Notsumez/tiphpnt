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

