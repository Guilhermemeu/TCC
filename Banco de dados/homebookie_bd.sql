create database homebookie_bd;
use homebookie_bd;


CREATE TABLE usuario (
  idusuario int NOT NULL AUTO_INCREMENT,
  email varchar(100) NOT NULL,
  senha varchar(50) NOT NULL,
  nome varchar(100) NOT NULL DEFAULT 'Usuario',
  fotop varchar(200) NOT NULL DEFAULT 'FotoP.png',
  descricao varchar(500) NOT NULL,
  PRIMARY KEY (idusuario)
) ;
desc usuario;



/* TURMA tabela PAI*/
create table turma (
idturma int not null auto_increment,
nome varchar(100),
administrador varchar(100),
assunto varchar(100),
primary key (idturma)
);
desc turma;


/*TAREFAS, CHAT, CONTEUDOS são filhas da table TURMAS*/

create table tarefas(
idtarefas int primary key,
turma_id int,
data_tarefa datetime,
foreign key (turma_id) references turma(idturma)
);
desc tarefas;



create table mensagens( 
mensagem text,
data_mensagem datetime,
from_usuario int,
to_chat int,
foreign key (from_usuario) references usuario(idusuario),
foreign key (to_chat) references usuario(idusuario)
); 
desc mensagens;


create table chat( 
idchat int primary key,
mensagens text,  
data_chat datetime
);
desc chat;



create table conteudos(
idconteudos int primary key,
turma_id int,
data_conteudos datetime,
postagens text,
arquivos_anx varchar (200),
foreign key (turma_id) references turma(idturma)
);
desc conteudos;
