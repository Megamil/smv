<!DOCTYPE html>
<html lang="pt-BR">

	<head>

		<meta charset="utf-8"/>
		<title>Login</title>
		<!--Indicação do css estilizado e imagem do favicon-->
	    <link rel="stylesheet" href="<?php echo base_url(); ?>style/css/login.css" class="stylesheet">
	    <link rel="shortcut icon" href="<?php echo base_url(); ?>style/img/favicon-login.png" type="image/x-icon">
	    <!--Indicação do css estilizado e imagem do favicon FIM-->
	    
	</head>

	<body>
	
	<p class="nome">Sistema de Manutenção de Veículos</p>

	<p class="versao">Versão Beta V 0.1</p>
	<p class="navegador">Recomendado utilizar o navegador <a href="http://www.google.com.br/chrome/browser/desktop/">CHROME</a>
	<img src="<?php echo base_url(); ?>style/img/chrome.ico" width=20 height=20></p>

	<?php echo form_open("main/login") ?>

	<div class="caixaLogin">
		
		<img src="<?php echo base_url(); ?>style/img/cadeado.png" height="90" width="90" alt="Logo" id="img">
		<p class="login">Entre com seu usuário e senha</p>

		<table>

			<tr><td class="aviso"><?php echo $this->session->userdata('aviso');
			$this->session->set_userdata('aviso',null); ?></td></tr>
			
			<tr>
				<td><input type="text" name="user" placeholder="Usuário" id="usuario"/></td>
			</tr>
			
			<tr>
				<td><input type="password" name="pass" placeholder="Senha" id="senha"/></td>
			</tr>

			<tr>
				<td><?php echo form_submit(array('name'=>'cadastrar2'),'Entrar', 'type="button" id="button"'); ?></td>
			</tr>

		</table>

	</div>

	<?php echo form_close(); ?>
		
	</body>

</html>