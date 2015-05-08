/*Inicio SQL SMV*/

CREATE TABLE tbl_estadosolicitacao(
  id_estadosolicitacao serial NOT NULL,
  estadosolicitacao character varying(10),
  CONSTRAINT pk_estadosolicitacao PRIMARY KEY (id_estadosolicitacao));

CREATE TABLE tbl_estadoveiculo(
  id_estadoveiculo serial NOT NULL,
  estadoveiculo character varying(15),
  CONSTRAINT pk_estadoveiculo PRIMARY KEY (id_estadoveiculo));

CREATE TABLE tbl_combustivel(
  id_combustivel serial NOT NULL,
  combustivel character varying(30),
  CONSTRAINT pk_combustivel PRIMARY KEY (id_combustivel));

CREATE TABLE tbl_estadoitem(
  id_estadoitem serial NOT NULL,
  estadoitem character varying(7),
  CONSTRAINT pk_estadoitem PRIMARY KEY (id_estadoitem));

CREATE TABLE tbl_unidademedida(
  id_unidademedida serial NOT NULL,
  unidademedida character varying(3),
  CONSTRAINT pk_unidademedida PRIMARY KEY (id_unidademedida));

CREATE TABLE tbl_marcaitens(
  id_marcaitens serial NOT NULL,
  marcaitens character varying(20),
  CONSTRAINT pk_marcaitens PRIMARY KEY (id_marcaitens));

CREATE TABLE tbl_grupoitens(
  id_grupoitens serial NOT NULL,
  grupoitens character varying(30),
  CONSTRAINT pk_grupoitens PRIMARY KEY (id_grupoitens));

CREATE TABLE tbl_montadora(
  id_montadora serial NOT NULL,
  montadora character varying(30),
  CONSTRAINT pk_montadora PRIMARY KEY (id_montadora));

CREATE TABLE tbl_secao(
  id_secao serial NOT NULL,
  secao character varying(50),
  codsecao character varying(15),
  CONSTRAINT pk_secao PRIMARY KEY (id_secao));

CREATE TABLE tbl_tiposervico(
  id_tiposervico serial NOT NULL,
  tiposervico character varying(20),
  CONSTRAINT pk_tiposervico PRIMARY KEY (id_tiposervico));

CREATE TABLE tbl_estadoordemservico(
  id_estadoordemservico serial NOT NULL,
  estadoordemservico character varying(10),
  CONSTRAINT pk_estadoordemservico PRIMARY KEY (id_estadoordemservico));

CREATE TABLE tbl_divisao(
  id_divisao serial NOT NULL,
  divisao character varying(50),
  coddivisao character varying(15),
  CONSTRAINT pk_divisao PRIMARY KEY (id_divisao));

CREATE TABLE tbl_setor(
  id_setor serial NOT NULL,
  setor character varying(50),
  codsetor character varying(15),
  CONSTRAINT pk_setor PRIMARY KEY (id_setor));

CREATE TABLE tbl_depto(
  id_depto serial NOT NULL,
  depto character varying(50),
  coddepto character varying(15),
  CONSTRAINT pk_depto PRIMARY KEY (id_depto));

CREATE TABLE tbl_objeto(
  id_objeto serial NOT NULL,
  objetotitulo character varying(100),
  objetotexto character varying(700),
  CONSTRAINT pk_objeto PRIMARY KEY (id_objeto));

CREATE TABLE tbl_modalidadedelicitacao(
  id_modalidadedelicitacao serial NOT NULL,
  modalidadedelicitacao character varying(40),
  CONSTRAINT pk_modalidadedelicitacao PRIMARY KEY (id_modalidadedelicitacao));

CREATE TABLE tbl_segmento(
  id_segmento serial NOT NULL,
  segmento character varying(30),
  CONSTRAINT pk_segmento PRIMARY KEY (id_segmento));

CREATE TABLE tbl_tipodotacao(
  id_tipodotacao serial NOT NULL,
  tipodotacao character varying(8),
  CONSTRAINT pk_tipodotacao PRIMARY KEY (id_tipodotacao));

CREATE TABLE tbl_dotacao(
  id_dotacao serial NOT NULL,
  codigonumero character varying(40),
  id_segmento integer,
  idtipodotacao integer,
  statusdotacao integer,
  CONSTRAINT pk_dotacao PRIMARY KEY (id_dotacao),
  CONSTRAINT fk_segmento FOREIGN KEY (id_segmento) REFERENCES tbl_segmento (id_segmento),
  CONSTRAINT fk_tipodotacao FOREIGN KEY (idtipodotacao) REFERENCES tbl_tipodotacao (id_tipodotacao));

CREATE TABLE tbl_uf(
  id_uf serial NOT NULL,
  uf character varying(2),
  CONSTRAINT pk_uf PRIMARY KEY (id_uf));

CREATE TABLE tbl_servicos(
  id_servicos serial NOT NULL,
  servico character varying(50),
  valorunitario real,
  id_fornecedorprestador integer,
  id_unidademedida integer,
  CONSTRAINT pk_servicos PRIMARY KEY (id_servicos),
  CONSTRAINT fk_fornecedorprestador FOREIGN KEY (id_fornecedorprestador) REFERENCES tbl_fornecedorprestador (id_fornecedorprestador),
  CONSTRAINT fk_unidademedida FOREIGN KEY (id_unidademedida) REFERENCES tbl_unidademedida (id_unidademedida));

CREATE TABLE tbl_fornecedorprestador(
  id_fornecedorprestador serial NOT NULL,
  codigo character varying(20),
  nome character varying(50),
  rua character varying(100),
  numero character varying(6),
  complemento character varying(30),
  cidade character varying(30),
  uf character varying(2),
  tel1 bigint,
  tel2 bigint,
  fax bigint,
  contato character varying(20),
  email character varying(40),
  cnpj bigint,
  id_tiposervico smallint,
  cep character varying(9),
  CONSTRAINT pk_fornecedorprestador PRIMARY KEY (id_fornecedorprestador),
  CONSTRAINT fk_tiposervico FOREIGN KEY (id_tiposervico) REFERENCES tbl_tiposervico (id_tiposervico));

CREATE TABLE tbl_afpecas_x_empenho(
  id_afpecas_x_empenho serial NOT NULL,
  id_afpecas integer,
  id_empenho integer,
  CONSTRAINT pk_afpecas_x_empenho PRIMARY KEY (id_afpecas_x_empenho),
  CONSTRAINT fk_afpecas FOREIGN KEY (id_afpecas) REFERENCES tbl_autofornecpecas (id_afpecas),
  CONSTRAINT fk_empenho FOREIGN KEY (id_empenho) REFERENCES tbl_empenho (id_empenho));

CREATE TABLE tbl_afpecas_x_itens(
  id_afpecas_x_itens serial NOT NULL,
  id_afpecas integer,
  id_itens integer,
  quantidade real,
  CONSTRAINT pk_afpecas_x_itens PRIMARY KEY (id_afpecas_x_itens),
  CONSTRAINT fk_afpecas FOREIGN KEY (id_afpecas) REFERENCES tbl_autofornecpecas (id_afpecas),
  CONSTRAINT fk_itens FOREIGN KEY (id_itens) REFERENCES tbl_itens (id_itens));

CREATE TABLE tbl_afservicos_x_empenho(
  id_afservicos_x_empenho serial NOT NULL,
  id_afservicos integer,
  id_empenho serial NOT NULL,
  CONSTRAINT pk_afservicos_x_empenho PRIMARY KEY (id_afservicos_x_empenho),
  CONSTRAINT fk_afservicos FOREIGN KEY (id_afservicos) REFERENCES tbl_autofornecservicos (id_afservicos),
  CONSTRAINT fk_empenho FOREIGN KEY (id_empenho) REFERENCES tbl_empenho (id_empenho));

CREATE TABLE tbl_afservicos_x_itens(
  id_afservicos_x_itens serial NOT NULL,
  id_afservicos integer,
  id_itens integer,
  quantidade real,
  CONSTRAINT pk_afservicos_x_itens PRIMARY KEY (id_afservicos_x_itens),
  CONSTRAINT fk_afservicos FOREIGN KEY (id_afservicos) REFERENCES tbl_autofornecservicos (id_afservicos),
  CONSTRAINT fk_itens FOREIGN KEY (id_itens) REFERENCES tbl_itens (id_itens));

CREATE TABLE tbl_afservicos_x_servicos(
  id_afservicos_x_servicos serial NOT NULL,
  id_afservicos integer,
  id_servicos integer,
  quantidade real,
  CONSTRAINT pk_afservicos_x_servicos PRIMARY KEY (id_afservicos_x_servicos),
  CONSTRAINT fk_afservicos FOREIGN KEY (id_afservicos) REFERENCES tbl_autofornecservicos (id_afservicos),
  CONSTRAINT fk_servicos FOREIGN KEY (id_servicos) REFERENCES tbl_servicos (id_servicos));  

CREATE TABLE tbl_autofornecpecas(
  id_afpecas serial NOT NULL,
  ano integer,
  numero bigint,
  id_fornecedorprestador integer,
  id_contratoata integer,
  id_objeto integer,
  contato character varying(50),
  id_colaborador integer,
  id_colaborador2 integer,
  observacoes character varying(500),
  id_veiculoprefixo integer,
  id_empenho integer,
  id_ordemservico integer,
  CONSTRAINT pk_autofornecpecas PRIMARY KEY (id_afpecas),
  CONSTRAINT fk_colaborador FOREIGN KEY (id_colaborador) REFERENCES tbl_colaboradores (id_colaborador),
  CONSTRAINT fk_contratoata FOREIGN KEY (id_contratoata) REFERENCES tbl_contratoata (id_contratoata),
  CONSTRAINT fk_empenho FOREIGN KEY (id_empenho) REFERENCES tbl_empenho (id_empenho),
  CONSTRAINT fk_fornecedorprestador FOREIGN KEY (id_fornecedorprestador) REFERENCES tbl_fornecedorprestador (id_fornecedorprestador),
  CONSTRAINT fk_objeto FOREIGN KEY (id_objeto) REFERENCES tbl_objeto (id_objeto),
  CONSTRAINT fk_ordemservico FOREIGN KEY (id_ordemservico) REFERENCES tbl_ordemservico (id_ordemservico),
  CONSTRAINT fk_veiculoprefixo FOREIGN KEY (id_veiculoprefixo) REFERENCES tbl_veiculo (id_veiculo));

CREATE TABLE tbl_autofornecservicos(
  id_afservicos serial NOT NULL,
  ano integer,
  numero bigint,
  id_fornecedor integer,
  id_contratoata integer,
  id_objeto integer,
  id_veiculoprefixo integer,
  id_colaborador integer,
  id_colaborador2 integer,
  contato character varying(50),
  orcamento character varying(15),
  observacoes character varying(500),
  id_ordemservico integer,
  CONSTRAINT pk_afservicos PRIMARY KEY (id_afservicos),
  CONSTRAINT fk_colaborador FOREIGN KEY (id_colaborador) REFERENCES tbl_colaboradores (id_colaborador),
  CONSTRAINT fk_contratoata FOREIGN KEY (id_contratoata) REFERENCES tbl_contratoata (id_contratoata),
  CONSTRAINT fk_fornecedorprestador FOREIGN KEY (id_fornecedor) REFERENCES tbl_fornecedorprestador (id_fornecedorprestador),
  CONSTRAINT fk_objeto FOREIGN KEY (id_objeto) REFERENCES tbl_objeto (id_objeto),
  CONSTRAINT fk_veiculoprefixo FOREIGN KEY (id_veiculoprefixo) REFERENCES tbl_veiculo (id_veiculo));

CREATE TABLE tbl_clientes(
  id_cliente serial NOT NULL,
  codigo character varying(20),
  nome character varying(50),
  rua character varying(100),
  numero character varying(6),
  complemento character varying(30),
  cidade character varying(30),
  uf integer,
  telramal1 bigint,
  telramal2 bigint,
  fax bigint,
  contato character varying(20),
  email character varying(40),
  cep character varying(8),
  CONSTRAINT pk_cliente PRIMARY KEY (id_cliente));

CREATE TABLE tbl_colaboradores(
  id_colaborador serial NOT NULL,
  codigofuncional integer,
  nome character varying(50),
  cpf bigint,
  email character varying(40),
  telefone bigint,
  celular bigint,
  funcaocargo character varying(30),
  id_setor integer,
  CONSTRAINT pk_colaboradores PRIMARY KEY (id_colaborador),
  CONSTRAINT fk_setor FOREIGN KEY (id_setor) REFERENCES tbl_setor (id_setor));

CREATE TABLE tbl_contratoata(
  id_contratoata serial NOT NULL,
  numerocontratoata character varying(16),
  dtinivigencia date,
  dtfimvigencia date,
  numanoemissorprorrogacao character varying(35),
  dtinivigenciaprorrog date,
  dtfimvigenciaprorrog date,
  id_fornecedorprestador integer,
  cnpj bigint,
  procadmin character varying(10),
  id_modalidadelicitacao integer,
  numerolicitacao character varying(35),
  datahomologacao date,
  id_objetotitulo integer,
  prazoentrega character varying(20),
  prazopagto character varying(30),
  orgaosparticipantes character varying(50),
  CONSTRAINT pk_contratoata PRIMARY KEY (id_contratoata),
  CONSTRAINT fk_fornecedor FOREIGN KEY (id_fornecedorprestador) REFERENCES tbl_fornecedorprestador (id_fornecedorprestador),
  CONSTRAINT fk_modalidadelicitacao FOREIGN KEY (id_modalidadelicitacao) REFERENCES tbl_modalidadedelicitacao (id_modalidadedelicitacao),
  CONSTRAINT fk_objeto FOREIGN KEY (id_objetotitulo) REFERENCES tbl_objeto (id_objeto));

CREATE TABLE tbl_empenho(
  id_empenho serial NOT NULL,
  id_segmento integer,
  id_fornecedorprestador integer,
  numeroempenho character varying(20),
  valorempenho real,
  dtiniciovigencia date,
  dtfimvigencia date,
  numprocadmempenho character varying(30),
  numcontratoata integer,
  reservaorcamentaria character varying(10),
  numeroficha character varying(10),
  id_dotacao integer,
  numprocregpreco character varying(30),
  CONSTRAINT pk_empenho PRIMARY KEY (id_empenho),
  CONSTRAINT fk_dotacao FOREIGN KEY (id_dotacao) REFERENCES tbl_dotacao (id_dotacao),
  CONSTRAINT fk_fornecedor FOREIGN KEY (id_fornecedorprestador) REFERENCES tbl_fornecedorprestador (id_fornecedorprestador),
  CONSTRAINT fk_segmento FOREIGN KEY (id_segmento) REFERENCES tbl_segmento (id_segmento));

CREATE TABLE tbl_entradaitens(
  id_entradaitens serial NOT NULL,
  codigointerno bigint,
  quantidade real,
  numnotafiscal bigint,
  id_fornecedor integer,
  dataentrada date,
  observacoes character varying(500),
  estorno boolean,
  CONSTRAINT pk_entradaitens PRIMARY KEY (id_entradaitens),
  CONSTRAINT fk_fornecedor FOREIGN KEY (id_fornecedor) REFERENCES tbl_fornecedorprestador (id_fornecedorprestador),
  CONSTRAINT fk_itens FOREIGN KEY (codigointerno) REFERENCES tbl_itens (id_itens));

CREATE TABLE tbl_itens(
  id_itens serial NOT NULL,
  codigomontadora bigint,
  descricao character varying(100),
  id_unidademedida integer,
  id_grupoitens integer,
  id_montadora1 integer,
  id_montadora2 integer,
  localizacao character varying(35),
  gaveta character varying(20),
  precobruto real,
  desconto real,
  estoquedisponivel integer,
  id_estadoitem integer,
  id_fornecedorprestador integer,
  CONSTRAINT pk_itens PRIMARY KEY (id_itens),
  CONSTRAINT fk_estadoitem FOREIGN KEY (id_estadoitem) REFERENCES tbl_estadoitem (id_estadoitem),
  CONSTRAINT fk_fornecedorprestador FOREIGN KEY (id_fornecedorprestador) REFERENCES tbl_fornecedorprestador (id_fornecedorprestador),
  CONSTRAINT fk_grupoitens FOREIGN KEY (id_grupoitens) REFERENCES tbl_grupoitens (id_grupoitens),
  CONSTRAINT fk_montadora1 FOREIGN KEY (id_montadora1) REFERENCES tbl_montadora (id_montadora),
  CONSTRAINT fk_montadora2 FOREIGN KEY (id_montadora2) REFERENCES tbl_montadora (id_montadora),
  CONSTRAINT fk_unidademedida FOREIGN KEY (id_unidademedida) REFERENCES tbl_unidademedida (id_unidademedida));

CREATE TABLE tbl_ordemservico(
  id_ordemservico integer NOT NULL DEFAULT nextval('tbl_ordemservico_id_ordenservico_seq'::regclass),
  id_fornecedorprestador integer,
  prefixo character varying(10),
  id_unidadecliente integer,
  dataentrada date,
  datasaida date,
  observacoes character varying(500),
  id_colaborador integer,
  id_estadoordemservico integer,
  id_servico integer,
  id_materiaisutilizados integer,
  laudotecnicoocorrencia character varying(500),
  id_solicitacao smallint,
  CONSTRAINT pk_ordemservico PRIMARY KEY (id_ordemservico),
  CONSTRAINT fk_colaborador FOREIGN KEY (id_colaborador) REFERENCES tbl_colaboradores (id_colaborador),
  CONSTRAINT fk_estadoordemservico FOREIGN KEY (id_estadoordemservico) REFERENCES tbl_estadoordemservico (id_estadoordemservico),
  CONSTRAINT fk_fornecedorprestador FOREIGN KEY (id_fornecedorprestador) REFERENCES tbl_fornecedorprestador (id_fornecedorprestador),
  CONSTRAINT fk_materiaisutilizados FOREIGN KEY (id_materiaisutilizados) REFERENCES tbl_itens (id_itens),
  CONSTRAINT fk_servico FOREIGN KEY (id_servico) REFERENCES tbl_servicos (id_servicos),
  CONSTRAINT tbl_ordemservico_id_solicitacao_fkey FOREIGN KEY (id_solicitacao) REFERENCES tbl_solicitaordemservico (id_solicitaordemservico),
  CONSTRAINT tbl_ordemservico_id_solicitacao_key UNIQUE (id_solicitacao));

CREATE TABLE tbl_ordemservico_x_item(
  id_ordemservico_x_item serial NOT NULL,
  id_item integer,
  id_ordemservico integer,
  quantidade real,
  id_fornecedorprestador integer,
  CONSTRAINT pk_ordemservico_x_item PRIMARY KEY (id_ordemservico_x_item),
  CONSTRAINT fk_fornecedorprestador FOREIGN KEY (id_fornecedorprestador) REFERENCES tbl_fornecedorprestador (id_fornecedorprestador),
  CONSTRAINT fk_item FOREIGN KEY (id_item) REFERENCES tbl_itens (id_itens),
  CONSTRAINT fk_ordemservico FOREIGN KEY (id_ordemservico) REFERENCES tbl_ordemservico (id_ordemservico));

CREATE TABLE tbl_ordemservico_x_servico(
  id_ordemservico_x_servico serial NOT NULL,
  id_servico integer,
  id_ordemservico integer,
  quantidade real,
  id_fornecedorprestador integer,
  id_colaborador integer,
  id_unidademedida integer,
  CONSTRAINT pk_ordemservico_x_servico PRIMARY KEY (id_ordemservico_x_servico),
  CONSTRAINT fk_colaborador FOREIGN KEY (id_colaborador) REFERENCES tbl_colaboradores (id_colaborador),
  CONSTRAINT fk_fornecedorprestador FOREIGN KEY (id_fornecedorprestador) REFERENCES tbl_fornecedorprestador (id_fornecedorprestador),
  CONSTRAINT fk_ordemservico FOREIGN KEY (id_ordemservico) REFERENCES tbl_ordemservico (id_ordemservico),
  CONSTRAINT fk_servico FOREIGN KEY (id_servico) REFERENCES tbl_servicos (id_servicos),
  CONSTRAINT fk_unidademedida FOREIGN KEY (id_unidademedida) REFERENCES tbl_unidademedida (id_unidademedida));

CREATE TABLE tbl_saidaitens(
  id_saidaitens serial NOT NULL,
  codigointerno integer,
  quantidade real,
  ordemservico integer,
  id_cliente integer,
  datasaida date,
  observacoes character varying(500),
  estorno boolean,
  CONSTRAINT pk_saidaitens PRIMARY KEY (id_saidaitens),
  CONSTRAINT fk_cliente FOREIGN KEY (id_cliente) REFERENCES tbl_clientes (id_cliente),
  CONSTRAINT fk_itens FOREIGN KEY (codigointerno) REFERENCES tbl_itens (id_itens));

CREATE TABLE tbl_solicitaordemservico(
  id_solicitaordemservico serial NOT NULL,
  id_unidadesolicitante integer,
  id_veiculo integer,
  km bigint,
  defeitoapresentado character varying(500),
  id_estadosolicitacao integer,
  CONSTRAINT pk_solicitaordemservico PRIMARY KEY (id_solicitaordemservico),
  CONSTRAINT fk_estadosolicitacao FOREIGN KEY (id_estadosolicitacao) REFERENCES tbl_estadosolicitacao (id_estadosolicitacao),
  CONSTRAINT fk_veiculo FOREIGN KEY (id_veiculo) REFERENCES tbl_veiculo (id_veiculo));

CREATE TABLE tbl_unidadesaude(
  id_unidadesaude serial NOT NULL,
  cnes integer NOT NULL,
  unidadesaude character varying(70),
  CONSTRAINT pk_unidadesaude PRIMARY KEY (id_unidadesaude));

CREATE TABLE tbl_unidadeutilizadora(
  id_unidadeutilizadora integer NOT NULL DEFAULT nextval('tbl_unidadeutilizadora_id_unidadeutilzadora_seq'::regclass),
  cep character varying(9),
  rua character varying(100),
  numero character varying(6),
  complemento character varying(30),
  cidade character varying(30),
  uf integer,
  telefone bigint,
  ramal integer,
  fax bigint,
  contato character varying(20),
  email character varying(40),
  cnpj bigint,
  cepfaturamento character varying(8),
  ruafaturamento character varying(100),
  numerofaturamento character varying(6),
  complementofaturamento character varying(30),
  cidadefaturamento character varying(30),
  uffaturamento integer,
  id_depto integer,
  id_divisao integer,
  id_secao integer,
  id_setor integer,
  CONSTRAINT pk_unidadeutilzadora PRIMARY KEY (id_unidadeutilizadora),
  CONSTRAINT fk_departamento FOREIGN KEY (id_depto) REFERENCES tbl_depto (id_depto));

CREATE TABLE tbl_veiculo(
  id_veiculo integer NOT NULL DEFAULT nextval('tbl_veiculos_id_veiculo_seq'::regclass),
  prefixo character varying(10),
  modelo character varying(30),
  marca character varying(20),
  tipo character varying(20),
  anomodelo character varying(9),
  placa character varying(9),
  chassis character varying(20),
  numeromotor character varying(20),
  detalhemotor character varying(40),
  id_combustivel integer,
  id_unidadeservicosaude integer,
  id_estadoveiculo integer,
  observ character varying(500),
  CONSTRAINT pk_veiculo PRIMARY KEY (id_veiculo),
  CONSTRAINT fk_combustivel FOREIGN KEY (id_combustivel) REFERENCES tbl_combustivel (id_combustivel),
  CONSTRAINT fk_estadoveiculo FOREIGN KEY (id_estadoveiculo) REFERENCES tbl_estadoveiculo (id_estadoveiculo));

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

/* Tabela UF inserts*/
Insert into tbl_uf (uf) values ('AC');
Insert into tbl_uf (uf) values ('AL');
Insert into tbl_uf (uf) values ('AP');
Insert into tbl_uf (uf) values ('AM');
Insert into tbl_uf (uf) values ('BA');
Insert into tbl_uf (uf) values ('CE');
Insert into tbl_uf (uf) values ('DF');
Insert into tbl_uf (uf) values ('ES');
Insert into tbl_uf (uf) values ('GO');
Insert into tbl_uf (uf) values ('MA');
Insert into tbl_uf (uf) values ('MT');
Insert into tbl_uf (uf) values ('MS');
Insert into tbl_uf (uf) values ('MG');
Insert into tbl_uf (uf) values ('PR');
Insert into tbl_uf (uf) values ('PB');
Insert into tbl_uf (uf) values ('PA');
Insert into tbl_uf (uf) values ('PE');
Insert into tbl_uf (uf) values ('PI');
Insert into tbl_uf (uf) values ('RJ');
Insert into tbl_uf (uf) values ('RN');
Insert into tbl_uf (uf) values ('RS');
Insert into tbl_uf (uf) values ('RO');
Insert into tbl_uf (uf) values ('RR');
Insert into tbl_uf (uf) values ('SC');
Insert into tbl_uf (uf) values ('SE');
Insert into tbl_uf (uf) values ('SP');
Insert into tbl_uf (uf) values ('TO');
  
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

/*INICIO DO SQL de segurança */
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
Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('editar_Dotacao', 'Editar Dotação.');
Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('dotacao', 'Lista das Dotações.');

Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('novo_Grupo_Itens', 'Criar novo Grupo de Itens.');
Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('editar_Grupo_Itens', 'Editar Grupo de Itens.');
Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('grupo_Itens', 'Lista dos Grupos e Itens.');

Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('objeto', 'Lista dos Objetos.');
Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('novo_Objeto', 'Criar novo Objeto.');
Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('editar_Objeto', 'Editar Objeto.');

Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('setor', 'Lista dos Setores.');
Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('novo_Setor', 'Criar novo Setor.');
Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('editar_Setor', 'Editar Setor.');

Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('marca_Itens', 'Lista das Marcas dos Itens.');
Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('nova_Marca_Itens', 'Criar nova Marca de Item.');
Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('editar_Marca_Itens', 'Editar Marca de Item.');

Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('servicos', 'Lista dos Serviços.');
Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('novo_Servico', 'Criar novo Serviço.');
Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('editar_Servico', 'Editar Serviço.');

Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('fornecedor_Prestador', 'Lista dos Fornecedores e/ou Prestadores.');
Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('novo_Fornecedor_Prestador', 'Criar novo Fornecedor/Prstador.');
Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('editar_Fornecedor_Prestador', 'Editar Fornecedor/Prestador.');

Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('cliente', 'Lista dos Clientes.');
Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('novo_Cliente', 'Criar novo Cliente.');
Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('editar_Cliente', 'Editar Cliente');

Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('colaborador', 'Lista dos Colaboradores.');
Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('novo_Colaborador', 'Criar novo Colaborador.');
Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('editar_Colaborador', 'Editar Colaborador');

Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('veiculo', 'Lista dos Veículos.');
Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('novo_Veiculo', 'Criar novo Veículo.');
Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('editar_Veiculo', 'Editar Veículo');

Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('unidade_Utilizadora', 'Lista das Unidades Utilizadoras.');
Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('nova_Unidade_Utilizadora', 'Criar nova Unidade Utilizadora.');
Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('editar_Unidade_Utilizadora', 'Editar Unidade Utilizadora');

Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('solicita_Ordem_Servico', 'Lista das Solicitações Ordens de Serviço.');
Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('nova_Solicitacao_Ordem_Servico', 'Criar nova Solicitação de Ordem de Serviço.');
Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('editar_Solicitacao_Ordem_Servico', 'Editar Solicitação de Ordem de Serviço');

Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('Contrato_Ata', 'Lista dos Contratos / Atas.');
Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('novo_Contrato_Ata', 'Criar novo Contrato/Ata.');
Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('editar_Contrato_Ata', 'Editar Contrato/Ata');

Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('item', 'Lista dos Itens.');
Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('novo_Item', 'Criar novo Item.');
Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('editar_Item', 'Editar Item');

Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('entrada_Itens', 'Lista das Entradas dos Itens.');
Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('nova_Entrada_Itens', 'Criar nova Entrada de Itens.');
Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('editar_Entrada_Itens', 'Editar Entrada de Itens');

Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('saida_Itens', 'Lista das Saída dos Itens.');
Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('nova_Saida_Itens', 'Criar nova Saída de Itens.');
Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('editar_Saida_Itens', 'Editar Saída de Itens');

Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('empenho', 'Lista dos Empenhos.');
Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('novo_Empenho', 'Criar novo Empenho.');
Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('editar_Empenho', 'Editar Empenho');

Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('ordem_Servico', 'Lista das Ordens de Serviço.');
Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('nova_Ordem_Servico', 'Criar nova Ordem de Serviço.');
Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('editar_Ordem_Servico', 'Editar Ordem de Serviço');

Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('af_Pecas', 'Lista das Autorizações de Peças.');
Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('nova_Af_Pecas', 'Criar nova Autorização de Peças.');
Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('editar_Af_Pecas', 'Editar Autorização de Peças.');

Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('af_Servicos', 'Lista das Autorizações de Serviços.');
Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('nova_Af_Servicos', 'Criar nova Autorização de Serviços.');
Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('editar_Af_Servicos', 'Editar Autorização de Serviços.');

Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('relatorio_Entrada_Itens', 'Relatório das entradas dos itens no estoque.');
Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('relatorio_Estoque_Ativo', 'Relatório dos itens no estoque ativo.');
Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('relatorio_Estoque_Limite', 'Relatório dos itens com o estoque no limite.');
Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('relatorio_Inventario', 'Relatório de inventário.');
Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('relatorio_Ordem_Servico', 'Relatório das ordens de serviço.');
Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('relatorio_Saida_Itens', 'Relatório das saídas dos itens no estoque.');
Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('relatorio_Saldo_Estoque', 'Relatório do saldo do estoque.');

Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('modalidade_Licitacao', 'Criar nova Modalidade de licitação.');
Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('nova_Modalidade_Licitacao', 'Criar nova Modalidade de licitação.');
Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('editar_Modalidade_Licitacao', 'Criar nova Modalidade de licitação.');

Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('impresso_Vistoria', 'Formulário Impresso para Vistoria.');
Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('impresso_Servicos_Externos', 'Formulário Impresso para Serviços Externos.');
Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('impresso_Retirada_Estoque', 'Formulário Impresso para Retiradas do Estoque.');
Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('impresso_impresso_Autorizacao_Fornec_Exec_Servicos_pag1', 'Autorização de Fornecimento / Execução de Serviços');
Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('impresso_impresso_Autorizacao_Fornec_Exec_Servicos_pag2', 'Autorização de Fornecimento / Execução de Serviços');

Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('pdf_impresso_Vistoria', 'Impressão em PDF do Fomulario de Vistoria');
Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('pdf_impresso_Servicos_Externos', 'Impressão em PDF do Fomulario de Serviços Externos');
Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('pdf_impresso_Retirada_Estoque', 'Impressão em PDF de Retirada de Estoque');
Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('pdf_impresso_Autorizacao_Fornec_Exec_Servicos_pag1', 'Impressão Autorição Página 1');
Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('pdf_impresso_Autorizacao_Fornec_Exec_Servicos_pag2', 'Impressão Autorição Página 2');
Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('impresso_Etiqueta', 'Etiquetas para imprimir');
Insert into aplicacoes (nome_aplicacao,descricao_aplicacao) values ('pdf_impresso_Etiqueta', 'Impressão das Etiquetas');

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
Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,24);
Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,25);

Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,26);
Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,27);
Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,28);

Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,29);
Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,30);
Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,31);

Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,32);
Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,33);
Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,34);

Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,35);
Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,36);
Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,37);

Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,38);
Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,39);
Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,40);

Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,41);
Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,42);
Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,43);

Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,44);
Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,45);
Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,46);

Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,47);
Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,48);
Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,49);

Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,50);
Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,51);
Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,52);

Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,53);
Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,54);
Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,55);

Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,56);
Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,57);
Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,58);

Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,59);
Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,60);
Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,61);

Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,62);
Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,63);
Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,64);

Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,65);
Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,66);
Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,67);

Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,68);
Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,69);
Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,70);

Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,71);
Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,72);
Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,73);

Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,74);
Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,75);
Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,76);

Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,77);
Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,78);
Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,79);

Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,80);
Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,81);
Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,82);

Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,83);
Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,84);
Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,85);
Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,86);
Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,87);
Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,88);
Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,89);

Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,90);
Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,91);
Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,92);
Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,93);
Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,94);
Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,95);
Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,96);
Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,97);
Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,98);
Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,99);
Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,100);
Insert into grupo_aplicacoes (fk_grupo, fk_aplicacao) values (1,101);


/*Adicionando o usuário ao grupo:*/
Insert into grupo_usuarios(fk_grupo, fk_usuario) values (1,1);
/*FIM DOS SQL de segurança*/
