<script type="text/javascript">

function validaCPF() { 

	strCPF = document.getElementById('cpfValidar').value;
	strCPF = strCPF.replace(/[^\d]+/g,''); 
	var Soma; 
	var Resto; 
	var cboll = true; 
	Soma = 0; 

	if (strCPF.length != 11 || 
	strCPF == "00000000000" || 
	strCPF == "11111111111" || 
	strCPF == "22222222222" || 
	strCPF == "33333333333" || 
	strCPF == "44444444444" || 
	strCPF == "55555555555" || 
	strCPF == "66666666666" || 
	strCPF == "77777777777" || 
	strCPF == "88888888888" || 
	strCPF == "99999999999") 
	cboll = false; 


	for (i=1; i<=9; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (11 - i); 
		Resto = (Soma * 10) % 11; 

	if ((Resto == 10) || (Resto == 11)) Resto = 0; 
	if (Resto != parseInt(strCPF.substring(9, 10)) ) cboll = false; 

		Soma = 0; 
	for (i = 1; i <= 10; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (12 - i); 
		Resto = (Soma * 10) % 11; 

	if ((Resto == 10) || (Resto == 11)) Resto = 0; 
	if (Resto != parseInt(strCPF.substring(10, 11) ) ) cboll = false; 

	if(!cboll){
		$('#cpfValidar').css('background-color','#FF7171'); 
		$('#cpfValidar').focus();
	}else{ 
		$('#cpfValidar').css('background-color','#FFF'); 
	return cboll; 
	} 
}

</script>

<?php echo form_fieldset("Novo Colaborador"); 
$form = array('name' => 'form'); 
echo form_open("criar/novo_Colaborador",$form); ?>

	<div class="erro_Campo_Vazio" ></div>
	<table border="0" width="70%">
		<thead align="left"><span id="basic-addon1"></span></thead>
		<tbody>
		<tr>
			<td>
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Código</span>
					</div>
				</div>
			</td>
			<td>
				<div class="control-group">
					<div class="controls">
						<input type="text" class="form-control input_Vazio" name="codigocolaborador" onkeypress='return numero(event)' value="<?php echo $this->session->flashdata('codigocolaborador'); ?>" aria-describedby="basic-addon1" size="52" placeholder="Codigo" maxlength="40" />
					</div>
				</div>
			</td>
		
			<td valign="top">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Nome</span>
					</div>
				</div>
			</td>
			<td colspan="3">
				<div class="control-group">
					<div class="controls">
						<input type="text" class="form-control input_Vazio" name="nomecolaborador" value="<?php echo $this->session->flashdata('nomecolaborador'); ?>" aria-describedby="basic-addon1" size="85" placeholder="Nome do Colaborador" maxlength="100" />
					</div>
				</div>
			</td>
		</tr>

		<tr>
			<td valign="top">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">CPF</span>
					</div>
				</div>
			</td>
			<td>
				<div class="control-group">
					<div class="controls">
					<input type="text" class="form-control input_Vazio" name="cpfcolaborador" id="cpfValidar" onBlur='validaCPF()' value="<?php echo $this->session->flashdata('cpfcolaborador'); ?>" aria-describedby="basic-addon1" size="52" placeholder="CPF" maxlength="11" />
					</div>
				</div>
			</td>
		
			<td valign="top">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Email</span>
					</div>
				</div>
			</td>
			<td  colspan="3">
				<div class="control-group">
					<div class="controls">
					<input type="text" class="form-control input_Vazio" name="emailcolaborador" onblur="validacaoEmail(form.emailcolaborador)" value="<?php echo $this->session->flashdata('emailcolaborador'); ?>" aria-describedby="basic-addon1" size="100" placeholder="E-mail" maxlength="100" />
					<div id="msgemail"></div> <!--Aviso de e-mail incorreto-->
					</div>
				</div>
			</td>
		</tr>

		<tr>
			<td valign="top">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Telefone</span>
					</div>
				</div>
			</td>
			<td>
				<div class="control-group">
					<div class="controls">
					<input type="text" class="form-control input_Vazio telefoneValidar" name="telefonecolaborador" onkeypress='return numero(event)' value="<?php echo $this->session->flashdata('telefonecolaborador'); ?>" aria-describedby="basic-addon1" size="52" placeholder="Telefone" maxlength="6" />
					</div>
				</div>
			</td>
		
			<td valign="top">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Celular</span>
					</div>
				</div>
			</td>
			<td>
				<div class="control-group">
					<div class="controls">
					<input type="text" class="form-control input_Vazio telefoneValidar" name="celularcolaborador" value="<?php echo $this->session->flashdata('celularcolaborador'); ?>" aria-describedby="basic-addon1" size="52" placeholder="Celular" maxlength="30" />
					</div>
				</div>
			</td>
		</tr>

		<tr>
			<td valign="top">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Função</span>
					</div>
				</div>
			</td>
			<td>
				<div class="control-group">
					<div class="controls">
					<input type="text" class="form-control input_Vazio" name="funcaocolaborador" value="<?php echo $this->session->flashdata('funcaocolaborador'); ?>" aria-describedby="basic-addon1" size="52" placeholder="Função" maxlength="30" />
					</div>
				</div>
			</td>
		
			<td valign="top">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Setor</span>
					</div>
				</div>
			</td>
			<td>
				<div class="control-group">
					<div class="controls">


					<select class="form-control input_Vazio" name="setor" value="<?php echo $this->session->flashdata('setor'); ?>" placeholder="Setor">

						<option>Selecione...</option>

						<?php 

							foreach ($pack['setor'] as $setor) {
								
								if($this->session->flashdata('setor') == $setor->id_setor){

									echo '<option selected value="'.$setor->id_setor.'">'.$setor->setor.'</option>';
								
								} else {
								
									echo '<option value="'.$setor->id_setor.'">'.$setor->setor.'</option>';
								}
							
							}

						?>

					</select>

					</div>
				</div>
			</td>
		</tr>

		</tbody>
	</table>


	

	<?php echo form_submit(array('name'=>'cadastrarNovoObjeto'),'Criar Colaborador', 'class="btn btn-success" id="validar_Enviar"'); ?>
	<?php echo anchor('main/redirecionar/cadastros-colaborador', '<div class="btn btn-danger pull-center"> Cancelar </div>')?>

<?php echo form_fieldset_close(); ?>