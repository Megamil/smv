<!DOCTYPE html>
<html lang="pt-BR">

<head>

  <meta charset="utf-8"/>
  <title><?php echo $titulo ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta name="description" content="<?php echo $titulo ?>"/>
  <meta name="author" content="Eduardo"/>
  
  <!--Importa o CSS, Jquery e JS que o Bootstrap precisa-->  
  <link rel="stylesheet" href="<?php echo base_url(); ?>style/css/bootstrap.css"/>
  <script type="text/javascript" src="<?php echo base_url(); ?>style/js/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>style/js/bootstrap.min.js"></script>
  <!--Importa o CSS, Jquery e JS que o Bootstrap precisa FIM--> 

  <!--Importa os Jquery's necessários para formatação de tabelas INCIO-->
  <link rel="stylesheet" href="<?php echo base_url(); ?>style/tabelas/css/jquery.dataTables.css"/><!--Formatação do layout da tabela-->
  <link rel="stylesheet" href="<?php echo base_url(); ?>style/tabelas/extensions/TableTools/css/dataTables.tableTools.css"/><!--CSS dos botões de exportar e imprimir-->
  <script type="text/javascript" src="<?php echo base_url(); ?>style/js/tabelas.js"></script><!--Funções que atribui a tabela e traduções-->
  
  <script type="text/javascript" src="<?php echo base_url(); ?>style/js/maskedinput.js"></script><!--JavaScript para mascara de campo-->
  
  <script type="text/javascript" src="<?php echo base_url(); ?>style/tabelas/js/jquery.dataTables.js"></script><!--Funcionalidades de busca e páginação-->
  <script type="text/javascript" src="<?php echo base_url(); ?>style/tabelas/extensions/TableTools/js/dataTables.tableTools.js"></script> <!--Botões de exportar e imprimir-->
  <script type="text/javascript" src="<?php echo base_url(); ?>style/tabelas/extensions/Responsive/js/dataTables.responsive.js"></script><!--Funcionalidades de responsividade-->
  <!--Importa os Jquery's necessários para formatação de tabelas FIM-->
  
  <!--Indicação do css e JS estilizado e imagem do favicon-->
  <link rel="stylesheet" href="<?php echo base_url(); ?>style/css/estilo.css" class="stylesheet">
  <link rel="shortcut icon" href="<?php echo base_url(); ?>style/img/favicon.png" type="image/x-icon">
  <script type="text/javascript" src="<?php echo base_url(); ?>style/js/formularios.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>style/js/validarcampo.js"></script>
  <!--Indicação do css e JS estilizado e imagem do favicon FIM-->
  
</head>

 <body data-spy="scroll" data-target=".sidebar">

    <nav class="navbar navbar-default">
      
      <div class="container">

        <div class="navbar-header">

          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">Menu</button>
          <span class="icon-bar"></span>
          <a class="navbar-brand" href="<?php echo base_url(); ?>">SMV</a>

        </div>
        
        <div class="collapse navbar-collapse navbar-ex1-collapse">
         
           <!--Parte do menu fixo a esquerda--> 
           <!--O MENU SERÁ ATIVO QUANDO O NOME DA APLICAÇÃO FOR IGUAL O NOME DO TÍTULO DA TELA ATIVA-->
          <ul class="nav navbar-nav navbar-left">

          <!--GUIA CADASTROS INICIO-->
            <li> 

              <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">Cadastros
                <span class="caret"></span> 
              </a> 
              
              <ul class="dropdown-menu">
              <!--O MENU SERÁ ATIVO QUANDO O NOME DA APLICAÇÃO FOR IGUAL O NOME DO TÍTULO DA TELA ATIVA-->
                <li <?php if($ativo == 'seguranca-usuarios') {echo 'class="active"';}?>>
                <?php echo anchor('main/redirecionar/', 'Fornecedor/Prestador')?></li>

                <li <?php if($ativo == 'cadastros-servicos') {echo 'class="active"';}?>>
                <?php echo anchor('main/redirecionar/cadastros-servicos', 'Serviços')?></li>

                <li <?php if($ativo == 'seguranca-usuarios') {echo 'class="active"';}?>>
                <?php echo anchor('main/redirecionar/', 'Cliente')?></li>

                <li <?php if($ativo == 'cadastros-dotacao') {echo 'class="active"';}?>>
                <?php echo anchor('main/redirecionar/cadastros-dotacao', 'Dotacao')?></li>

                <li <?php if($ativo == 'cadastros-grupo_Itens') {echo 'class="active"';}?>>
                <?php echo anchor('main/redirecionar/cadastros-grupo_Itens', 'Grupo dos Itens')?></li>

                <li <?php if($ativo == 'cadastros-objeto') {echo 'class="active"';}?>>
                <?php echo anchor('main/redirecionar/cadastros-objeto', 'Objetos')?></li>

                <li <?php if($ativo == 'seguranca-usuarios') {echo 'class="active"';}?>>
                <?php echo anchor('main/redirecionar/', 'Veículo')?></li>

                <li <?php if($ativo == 'seguranca-usuarios') {echo 'class="active"';}?>>
                <?php echo anchor('main/redirecionar/', 'Colaboradores')?></li>

                <li <?php if($ativo == 'seguranca-usuarios') {echo 'class="active"';}?>>
                <?php echo anchor('main/redirecionar/', 'Unidade Utilizadora')?></li>

              </ul>

            </li>
            <!--GUIA CADASTROS FIM-->

            <!--GUIA ORDEM DE SERVIÇO INICIO-->
            <li> 

              <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">Ordem de Serviço
                <span class="caret"></span> 
              </a> 
              
              <ul class="dropdown-menu">
              <!--O MENU SERÁ ATIVO QUANDO O NOME DA APLICAÇÃO FOR IGUAL O NOME DO TÍTULO DA TELA ATIVA-->
                <li <?php if($ativo == 'seguranca-usuarios') {echo 'class="active"';}?>>
                <?php echo anchor('main/redirecionar/', 'Solicitar')?></li>

                <li <?php if($ativo == 'seguranca-usuarios') {echo 'class="active"';}?>>
                <?php echo anchor('main/redirecionar/', 'Consultar')?></li>

              </ul>

            </li>
            <!--GUIA ORDEM DE SERVIÇO FIM-->

            <!--GUIA ESTOQUE INICIO-->
            <li> 

              <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">Estoque
                <span class="caret"></span> 
              </a> 
              
              <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
              <!--O MENU SERÁ ATIVO QUANDO O NOME DA APLICAÇÃO FOR IGUAL O NOME DO TÍTULO DA TELA ATIVA-->
                <li <?php if($ativo == 'seguranca-usuarios') {echo 'class="active"';}?>>
                <?php echo anchor('main/redirecionar/seguranca-usuarios', 'Consultar')?></li>

                  <li class="dropdown-submenu">
                    <a tabindex="-1" href="#">Relatórios</a>
                    <ul class="dropdown-menu">

                      <li <?php if($ativo == 'seguranca-usuarios') {echo 'class="active"';}?>>
                      <?php echo anchor('main/redirecionar/', 'Entrada de itens')?></li>

                      <li <?php if($ativo == 'seguranca-usuarios') {echo 'class="active"';}?>>
                      <?php echo anchor('main/redirecionar/', 'Saída de itens')?></li>

                      <li <?php if($ativo == 'seguranca-usuarios') {echo 'class="active"';}?>>
                      <?php echo anchor('main/redirecionar/', 'Inventario')?></li>

                      <li <?php if($ativo == 'seguranca-usuarios') {echo 'class="active"';}?>>
                      <?php echo anchor('main/redirecionar/', 'Estoque Ativo')?></li>

                      <li <?php if($ativo == 'seguranca-usuarios') {echo 'class="active"';}?>>
                      <?php echo anchor('main/redirecionar/', 'Itens com estoque limite')?></li>

                      <li <?php if($ativo == 'seguranca-usuarios') {echo 'class="active"';}?>>
                      <?php echo anchor('main/redirecionar/', 'Etiquetas')?></li>

                    </ul>
                  </li>

              </ul>

            </li>
            <!--GUIA ESTOQUE FIM-->
            
            <!--GUIA Contrato/ATA Inicio-->
             <li> 

              <a class="btn" href="#">Contrato/Ata
              </a> 

            </li>
            <!--GUIA Contrato/ATA FIM-->

            <!--GUIA Emprenho Inicio-->
             <li> 

              <a class="btn" href="#">Empenho
              </a> 

            </li>
            <!--GUIA Emprenho FIM-->

            <!--GUIA Autorização de fornecimento Inicio-->
             <li> 

              <a class="btn" href="#">Autorização
              </a> 

            </li>
            <!--GUIA Autorização de fornecimento FIM-->

            <!--GUIA CADASTROS INICIO-->
            <li> 

              <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">Adicionar
                <span class="caret"></span> 
              </a>  
              
              <ul class="dropdown-menu">
              <!--O MENU SERÁ ATIVO QUANDO O NOME DA APLICAÇÃO FOR IGUAL O NOME DO TÍTULO DA TELA ATIVA-->

                <li <?php if($ativo == 'adicionar-marca_Itens') {echo 'class="active"';}?>>
                <?php echo anchor('main/redirecionar/adicionar-marca_Itens', 'Marca dos Itens')?></li>

                <li <?php if($ativo == 'adicionar-montadora') {echo 'class="active"';}?>>
                <?php echo anchor('main/redirecionar/adicionar-montadora', 'Montadora')?></li>

                <li <?php if($ativo == 'adicionar-secao') {echo 'class="active"';}?>>
                <?php echo anchor('main/redirecionar/adicionar-secao', 'Seção')?></li>

                <li <?php if($ativo == 'adicionar-setor') {echo 'class="active"';}?>>
                <?php echo anchor('main/redirecionar/adicionar-setor', 'Setor')?></li>

                <li <?php if($ativo == 'adicionar-divisao') {echo 'class="active"';}?>>
                <?php echo anchor('main/redirecionar/adicionar-divisao', 'Divisão')?></li>

                <li <?php if($ativo == 'adicionar-departamento') {echo 'class="active"';}?>>
                <?php echo anchor('main/redirecionar/adicionar-departamento', 'Departamento')?></li>

                <li <?php if($ativo == 'adicionar-modalidade_Licitacao') {echo 'class="active"';}?>>
                <?php echo anchor('main/redirecionar/adicionar-modalidade_Licitacao', 'Modalidade de Licitacao')?></li>

              </ul>

            </li>
            <!--GUIA CADASTROS FIM-->
           
          </ul>
          <!--Parte do menu fixo a esquerda FIM-->

          <!--Parte do menu fixo a direita-->
          <ul class="nav navbar-nav navbar-right">

            <li> 

              <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">Segurança
                <span class="caret"></span> 
              </a> 
              
              <ul class="dropdown-menu">
              <!--O MENU SERÁ ATIVO QUANDO O NOME DA APLICAÇÃO FOR IGUAL O NOME DO TÍTULO DA TELA ATIVA-->
                <li <?php if($ativo == 'seguranca-usuarios') {echo 'class="active"';}?>>
                <?php echo anchor('main/redirecionar/seguranca-usuarios', 'Usuários')?></li>

                <li <?php if($ativo == 'seguranca-grupos') {echo'class="active"';} ?>>
                <?php echo anchor('main/redirecionar/seguranca-grupos', 'Grupos')?></li>

                <li <?php if($ativo == 'seguranca-alterar_Senha') {echo 'class="active"';}?>>
                <?php echo anchor('main/redirecionar/seguranca-alterar_Senha', 'Alterar senha')?> </li>
                
                <li> <?php echo anchor('seguranca/deslogar', 'Sair')?> </li>
              </ul>

            </li>

          </ul>
          <!--Parte do menu fixo a direita FIM-->

        </div> <!--collapse navbar-collapse navbar-ex1-collapse-->

      </div> <!--Container-->

      <header class="jumbotron"> <!--Banner superior com título da tela atual-->
        <div class="container">
          <h1><?php echo $tela ?></h1>
        </div>
      </header>

    </nav> <!--navbar navbar-default-->

      <!--Aqui são exibidos todos os avisos passados para o userdata, e o tipo de alerta, sucesso, perigo etc...-->
      <!--OS AVISOS DEVERIAM SER PELO FLASHDATA, PORÉM APRESENTOU ERROS E POR ISSO USO O USERDATA E EM SEGUIDA APAGO SEU CONTEÚDO-->
      <?php 
        if(!empty($this->session->userdata('aviso'))) {
          echo'<div class="aviso alert alert-block alert-'.$this->session->userdata('tipo').'" role="alert" align="center">
          <button type="button" class="close" data-dismiss="alert">x</button>'.$this->session->userdata('aviso').'</div>'; 
          $this->session->set_userdata('aviso',null); /*Apaga o aviso para garantir que não irá aparecer de forma aleatória.*/
          $this->session->set_userdata('tipo',null); /*Apaga o tipo para garantir que não irá aparecer de forma aleatória.*/
        } 
      ?>
      <!--Div centralizada o conteúdo no cetro da tela abaixo do aviso-->
      <div class="corpo" align="center">