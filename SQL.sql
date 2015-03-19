/*Inicio SQL SMV*/

Create table tbl_estadosolicitacao(

id_estadosolicitacao serial not null,
estadosolicitacao varchar(10),

CONSTRAINT pk_estadosolicitacao primary key (id_estadosolicitacao)

);

Create table tbl_estadoveiculo(

id_estadoveiculo serial not null,
estadoveiculo varchar(15),

CONSTRAINT pk_estadoveiculo primary key (id_estadoveiculo)

);

Create table tbl_combustivel(

id_combustivel serial not null,
combustivel varchar(30),

CONSTRAINT pk_combustivel primary key (id_combustivel)

);

Create table tbl_estadoitem(

id_estadoitem serial not null,
estadoitem varchar(7),

CONSTRAINT pk_estadoitem primary key (id_estadoitem)

);

Create table tbl_unidademedida(

id_unidademedida serial not null,
unidademedida varchar(3),
      
CONSTRAINT pk_unidademedida primary key (id_unidademedida)

);

Create table tbl_marcaitens(

id_marcaitens serial not null,
marcaitens varchar(3),

CONSTRAINT pk_marcaitens primary key (id_marcaitens)

);

Create table tbl_grupoitens(

id_grupoitens serial not null,
grupoitens varchar(3),


CONSTRAINT pk_grupoitens primary key (id_grupoitens)

);

Create table tbl_montadora(

id_montadora serial not null,
montadora varchar(30),

CONSTRAINT pk_montadora primary key (id_montadora)

);

Create table tbl_secao(

id_secao serial not null,
secao varchar(50),

CONSTRAINT pk_secao primary key (id_secao)

);

Create table tbl_tiposervico(

id_tiposervico serial not null,
tiposervico varchar(20),

CONSTRAINT pk_tiposervico primary key (id_tiposervico)

);

Create table tbl_estadoordemservico(

id_estadoordemservico serial not null,
estadoordemservico varchar(10),

CONSTRAINT pk_estadoordemservico primary key (id_estadoordemservico)

);

Create table tbl_divisao(

id_divisao serial not null,
divisao varchar(50),

CONSTRAINT pk_divisao primary key (id_divisao)

);

Create table tbl_depto(

id_depto serial not null,
depto varchar(50),

CONSTRAINT pk_depto primary key (id_depto)

);

Create table tbl_objeto(

id_objeto serial not null,
objetotitulo varchar(100),
objetotexto varchar(700),

CONSTRAINT pk_objeto primary key (id_objeto)

);

Create table tbl_modalidadedelicitacao(

id_modalidadedelicitacao serial not null,
modalidadedelicitacao varchar(40),

CONSTRAINT pk_modalidadedelicitacao primary key (id_modalidadedelicitacao)

);

Create table tbl_segmento(

id_segmento serial not null,
segmento varchar(30),

CONSTRAINT pk_segmento primary key (id_segmento)

);

Create table tbl_tipodotacao(

id_tipodotacao serial not null,
tipodotacao varchar(7),

CONSTRAINT pk_tipodotacao primary key (id_tipodotacao)

);

/*Fim SQL SMV*/

/*Inserts SMV Inicio*/

/*Tabela tbl_estadosolicitacao dados retirados da PG 28*/
Insert into tbl_estadosolicitacao (id_estadosolicitacao, estadosolicitacao) values (1,'Pendente');
Insert into tbl_estadosolicitacao (id_estadosolicitacao, estadosolicitacao) values (2,'Atribuída');
Insert into tbl_estadosolicitacao (id_estadosolicitacao, estadosolicitacao) values (3,'Cancelada');

/*Tabela tbl_estadoveiculo dados retirados da PG 19*/
Insert into tbl_estadoveiculo (id_estadoveiculo, estadoveiculo) values (1,'Ativo');
Insert into tbl_estadoveiculo (id_estadoveiculo, estadoveiculo) values (2,'Transferido');
Insert into tbl_estadoveiculo (id_estadoveiculo, estadoveiculo) values (3,'Outros');

/*Tabela tbl_combustivel dados */
Insert into tbl_combustivel (id_combustivel, combustivel) values (1,'Álcool');
Insert into tbl_combustivel (id_combustivel, combustivel) values (2,'Gasolina');
Insert into tbl_combustivel (id_combustivel, combustivel) values (3,'Diesel');
Insert into tbl_combustivel (id_combustivel, combustivel) values (4,'Gasogenio');
Insert into tbl_combustivel (id_combustivel, combustivel) values (5,'Gás Metano');
Insert into tbl_combustivel (id_combustivel, combustivel) values (6,'El Ft Interna');
Insert into tbl_combustivel (id_combustivel, combustivel) values (7,'El Ft Externa');
Insert into tbl_combustivel (id_combustivel, combustivel) values (8,'Gasolina/GNC');
Insert into tbl_combustivel (id_combustivel, combustivel) values (9,'Alcool/GNC');
Insert into tbl_combustivel (id_combustivel, combustivel) values (10,'Diesel/GNC');
Insert into tbl_combustivel (id_combustivel, combustivel) values (11,'Gasolina/GNV');
Insert into tbl_combustivel (id_combustivel, combustivel) values (12,'Alcool/GNV');
Insert into tbl_combustivel (id_combustivel, combustivel) values (13,'Diesel/GNV');
Insert into tbl_combustivel (id_combustivel, combustivel) values (14,'GNV');
Insert into tbl_combustivel (id_combustivel, combustivel) values (15,'Gasolina/Alcool');
Insert into tbl_combustivel (id_combustivel, combustivel) values (16,'Gasolina/Eletrico');
  
/*Tabela tbl_unidademedida dados */
Insert into tbl_unidademedida (id_unidademedida, unidademedida) values (1,'mg');
Insert into tbl_unidademedida (id_unidademedida, unidademedida) values (2,'g');
Insert into tbl_unidademedida (id_unidademedida, unidademedida) values (3,'kg');
Insert into tbl_unidademedida (id_unidademedida, unidademedida) values (4,'ml');
Insert into tbl_unidademedida (id_unidademedida, unidademedida) values (5,'L');
Insert into tbl_unidademedida (id_unidademedida, unidademedida) values (6,'PÇ');
Insert into tbl_unidademedida (id_unidademedida, unidademedida) values (7,'cm');
Insert into tbl_unidademedida (id_unidademedida, unidademedida) values (8,'M');
Insert into tbl_unidademedida (id_unidademedida, unidademedida) values (9,'km');

/*Tabela tbl_estadoordemservico dados retirados da PG 33*/
Insert into tbl_estadoordemservico (id_estadoordemservico, estadoordemservico) values (1,'Em Aberto');
Insert into tbl_estadoordemservico (id_estadoordemservico, estadoordemservico) values (2,'Fechada');


/*Inserts SMV Fim*/

/*-----------*/

/*INICIO DO SQL de segurança ✔*/
/*create database NOME DO BANCO; (pode ser que não aceite, melhor criar pela interface)
use databasedbteste; (se criado por interface, não se aplica)*/

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
/*Para inserir um usuário use: (Esta senha é 123 em padrão MD5).*/
Insert into usuarios (usuario,email,senha,nome,telefone,ativo)values ('Administrador','email@admin.com','202cb962ac59075b964b07152d234b70','Usuario administrativo','11962782329',TRUE);
/*Criando Grupo Administrador:*/
Insert into grupos (nome_grupo,descricao_grupo) values ('Administrador', 'Acesso Total');

/*Inserindo as aplicações iniciais:*/
Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('alterar_Senha', 'Alterar senha.');
Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('grupos', 'Exibir grupos existentes.');
Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('novo_Usuario', 'Criar novo usuário.');
Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('usuarios', 'Exibir usuários existentes.');
Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('editar_Usuario', 'Alterar dados dos usuários e atribuir grupos.');
Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('editar_Grupo', 'Alterar dados dos grupos e atribuir aplicações a eles.');
Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('novo_Grupo', 'Criar novo grupo.');

Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('montadora', 'Criar nova montadora.');
Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('nova_Montadora', 'Criar nova montadora.');
Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('editar_Montadora', 'Criar nova montadora.');

Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('secao', 'Criar nova Seção.');
Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('nova_Secao', 'Criar nova Seção.');
Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('editar_Secao', 'Criar nova Seção.');

Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('divisao', 'Criar nova Divisão.');
Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('nova_Divisao', 'Criar nova Divisão.');
Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('editar_Divisao', 'Criar nova Divisão.');

Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('departamento', 'Criar nova Departamento.');
Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('novo_Departamento', 'Criar nova Departamento.');
Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('editar_Departamento', 'Criar nova Departamento.');
Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('nova_Dotacao', 'Criar nova Dotação.');

Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('modalidade_Licitacao', 'Criar nova Modalidade de licitação.');
Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('nova_Modalidade_Licitacao', 'Criar nova Modalidade de licitação.');
Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('editar_Modalidade_Licitacao', 'Criar nova Modalidade de licitação.');

/*Dando permissão de acesso ao grupo Administrador:*/
Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,1);
Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,2);
Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,3);
Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,4);
Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,5);
Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,6);
Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,7);

Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,8);
Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,9);
Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,10);
Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,11);
Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,12);
Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,13);
Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,14);
Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,15);
Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,16);
Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,17);
Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,18);
Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,19);
Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,20);
Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,21);
Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,22);
Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,23);

/*Adicionando o usuário ao grupo:*/
Insert into grupo_usuarios(fk_grupo, fk_usuario) values (1,1);
/*FIM DOS SQL de segurança*/
