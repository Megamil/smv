/*INICIO DO SQL*/
/*create database NOME DO BANCO; (pode ser que n�o aceite, melhor criar pela interface)
use databasedbteste; (se criado por interface, n�o se aplica)*/

CREATE TABLE usuarios (   

id_usuario serial NOT NULL,
usuario character varying(15) NOT NULL,
email character varying(40),
  senha character varying(32) NOT NULL,
  telefone character varying(11),
  cpf bigint,
  fk_unidade_utilizadora smallint,
nome character varying(40),
ativo boolean,
  CONSTRAINT primary_usuarios_key PRIMARY KEY (id_usuario),
  CONSTRAINT unique_email_key UNIQUE (email),
  CONSTRAINT unique_email_key UNIQUE (cpf),
  CONSTRAINT unique_nome_key UNIQUE (usuario)

);

Create table grupos (  

id_grupo serial NOT NULL,
nome_grupo character varying(15) NOT NULL,
descricao_grupo text,
  CONSTRAINT primary_grupos_key PRIMARY KEY (id_grupo),
  CONSTRAINT unique_nome_grupo_key UNIQUE (nome_grupo)

);

Create table aplicacoes (  

id_aplicacao serial NOT NULL,
nome_aplicacao text NOT NULL,
descricao_aplicacao text,
  CONSTRAINT primary_aplicacoes_key PRIMARY KEY (id_aplicacao),
  CONSTRAINT unique_nome_aplicacao_key UNIQUE (nome_aplicacao)

);

CREATE TABLE grupo_aplicacoes (   

id_grupo_aplicacao serial NOT NULL,
fk_grupo smallint,
fk_aplicacao smallint,

  CONSTRAINT primary_aplicacoes_pkey PRIMARY KEY (id_grupo_aplicacao),
  CONSTRAINT grupo_aplicacoes_fk_aplicacao_fkey FOREIGN KEY (fk_aplicacao)
      REFERENCES aplicacoes (id_aplicacao) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION,
  CONSTRAINT grupo_aplicacoes_fk_grupo_fkey FOREIGN KEY (fk_grupo)
      REFERENCES grupos (id_grupo) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION
);


CREATE TABLE grupo_usuarios (   

id_grupo_usuarios serial NOT NULL,
fk_grupo smallint,
fk_usuario smallint,
  CONSTRAINT primary_usuarios_pkey PRIMARY KEY (id_grupo_usuarios),

  CONSTRAINT grupo_usuarios_fk_grupo_fkey FOREIGN KEY (fk_grupo)
      REFERENCES grupos (id_grupo) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION,

  CONSTRAINT grupo_usuarios_fk_usuario_fkey FOREIGN KEY (fk_usuario)
      REFERENCES usuarios (id_usuario) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION
);
/*=========================================*/
/*Para inserir um usu�rio use: (Esta senha � 123 em padr�o MD5).*/
Insert into usuarios (usuario,email,senha,nome,telefone,ativo)values ('Administrador','email@admin.com','202cb962ac59075b964b07152d234b70','Usuario administrativo','11962782329',TRUE);
/*Criando Grupo Administrador:*/
Insert into grupos (nome_grupo,descricao_grupo) values ('Administrador', 'Acesso Total');

/*Inserindo as aplica��es iniciais:*/
Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('alterar_Senha', 'Alterar senha.');
Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('grupos', 'Exibir grupos existentes.');
Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('novo_Usuario', 'Criar novo usu�rio.');
Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('usuarios', 'Exibir usu�rios existentes.');
Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('editar_Usuario', 'Alterar dados dos usu�rios e atribuir grupos.');
Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('editar_Grupo', 'Alterar dados dos grupos e atribuir aplica��es a eles.');
Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('novo_Grupo', 'Criar novo grupo.');
/*Dando permiss�o de acesso ao grupo Administrador:*/
Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,1);
Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,2);
Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,3);
Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,4);
Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,5);
Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,6);
Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,7);
/*Adicionando o usu�rio ao grupo:*/
Insert into grupo_usuarios(fk_grupo, fk_usuario) values (1,1);
/*FIM DOS SQL*/
