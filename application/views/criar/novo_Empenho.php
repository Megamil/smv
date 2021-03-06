<!--Usado para preencher alguns campos-->
<script type="text/javascript" src="<?php echo base_url(); ?>style/js/json.js"></script>

<form action="/smv/criar/novo_Empenho" method="post" accept-charset="utf-8" name="form">

<script type="text/javascript">

	jQuery(document).ready(function(){

		$('#AdicionarDotacao').click(function(){

			localStorage.setItem('id_segmento', $("#id_segmento").val());
			localStorage.setItem('id_fornecedorprestador', $("#id_fornecedorprestador").val());
			localStorage.setItem('valorempenho', $("#valorempenho").val());
			localStorage.setItem('numeroempenho', $("#numeroempenho").val());
			localStorage.setItem('valorutilizado', $("#valorutilizado").val());
			localStorage.setItem('saldo', $("#saldo").val());
			localStorage.setItem('dtiniciovigencia', $("#dtiniciovigencia").val());
			localStorage.setItem('dtfimvigencia', $("#dtfimvigencia").val());
			localStorage.setItem('numprocadmempenho', $("#numprocadmempenho").val());
			localStorage.setItem('contrato', $("#contrato").val());
			localStorage.setItem('numprocregpreco', $("#numprocregpreco").val());
			localStorage.setItem('objetoTexto', $("#objetoTexto").val());
			localStorage.setItem('reservaorcamentaria', $("#reservaorcamentaria").val());
			localStorage.setItem('numeroficha', $("#numeroficha").val());


		});

		$('#cancelarNovaDotacao').click(function(){

			$('#segmento').val('Selecione...');
			$('#nomedotacao').val('');

			$('#estadodotacao').attr('checked', false);
			$('#tipodotacao').attr('checked', false);
			$('#estadodotacao2').attr('checked', false);
			$('#tipodotacao2').attr('checked', false);

		});
	 
			if(localStorage.getItem('id_segmento')){ $("#id_segmento").val(localStorage.getItem('id_segmento')); }
			if(localStorage.getItem('id_fornecedorprestador')){ $("#id_fornecedorprestador").val(localStorage.getItem('id_fornecedorprestador')); }
			if(localStorage.getItem('valorempenho')){ $("#valorempenho").val(localStorage.getItem('valorempenho')); }
			if(localStorage.getItem('numeroempenho')){ $("#numeroempenho").val(localStorage.getItem('numeroempenho')); }
			if(localStorage.getItem('valorutilizado')){ $("#valorutilizado").val(localStorage.getItem('valorutilizado')); }
			if(localStorage.getItem('saldo')){ $("#saldo").val(localStorage.getItem('saldo')); }
			if(localStorage.getItem('dtiniciovigencia')){ $("#dtiniciovigencia").val(localStorage.getItem('dtiniciovigencia')); }
			if(localStorage.getItem('dtfimvigencia')){ $("#dtfimvigencia").val(localStorage.getItem('dtfimvigencia')); }
			if(localStorage.getItem('numprocadmempenho')){ $("#numprocadmempenho").val(localStorage.getItem('numprocadmempenho')); }
			if(localStorage.getItem('contrato')){ $("#contrato").val(localStorage.getItem('contrato')); }
			if(localStorage.getItem('numprocregpreco')){ $("#numprocregpreco").val(localStorage.getItem('numprocregpreco')); }
			if(localStorage.getItem('objetoTexto')){ $("#objetoTexto").val(localStorage.getItem('objetoTexto')); }
			if(localStorage.getItem('reservaorcamentaria')){ $("#reservaorcamentaria").val(localStorage.getItem('reservaorcamentaria')); }
			if(localStorage.getItem('numeroficha')){ $("#numeroficha").val(localStorage.getItem('numeroficha')); }

			localStorage.clear();
		
	});
</script>

<?php echo form_fieldset("Novo Empenho"); ?>

	<div class="erro_Campo_Vazio" ></div>
	<table border="0">
		<thead align="left"><span id="basic-addon1"></span></thead>
		<tbody>
		<tr>
			<td>
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Segmento</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls">
						<select class="form-control input_Vazio"  name="id_segmento" id="id_segmento" placeholder="Segmento">

						<option>Selecione...</option>

						<?php 

							foreach ($pack['segmento'] as $segmento) {
								
								if($this->session->flashdata('id_segmento') == $segmento->id_segmento){

									echo '<option selected value="'.$segmento->id_segmento.'">'.$segmento->segmento.'</option>';
								
								} else {
								
									echo '<option value="'.$segmento->id_segmento.'">'.$segmento->segmento.'</option>';
								}
							
							}

						?>

					</select>
					</div>
				</div>
			</td>
		
			<td valign="top" colspan="3">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Fornecedor</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls">
						<select class="form-control input_Vazio" id="id_fornecedorprestador"  name="id_fornecedorprestador" placeholder="Fornecedor">

						<option>Selecione...</option>

						<?php 

							foreach ($pack['fornecedorprestador'] as $fornecedorprestador) {
								
								if($this->session->flashdata('id_fornecedorprestador') == $fornecedorprestador->id_fornecedorprestador){

									echo '<option selected value="'.$fornecedorprestador->id_fornecedorprestador.'">'.$fornecedorprestador->nome.'</option>';
								
								} else {
								
									echo '<option value="'.$fornecedorprestador->id_fornecedorprestador.'">'.$fornecedorprestador->nome.'</option>';
								}
							
							}

						?>

					</select>
					</div>
				</div>
			</td>
		</tr>
<!-- final da primeira linha -->
		<tr>
			<td valign="top">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Empenho/Ano</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls">
					<input type="text" value="<?php echo $this->session->flashdata('numeroempenho'); ?>" class="form-control input_Vazio processo" name="numeroempenho" id="numeroempenho" aria-describedby="basic-addon1" placeholder="Nº Empenho" />
					</div>
				</div>
			</td>

			<td valign="top">
					<div class="control-group">
						<div class="controls">
							<span class="help-inline">Valor do empenho</span>
						</div>
					</div>
					<div class="control-group">
						<div class="controls input-group">
						<span class="input-group-addon" id="basic-addon1">R$</span>
						<input type="text" value="<?php echo $this->session->flashdata('valorempenho'); ?>" class="form-control input_Vazio preco" onkeypress='return SomenteNumero(event)' id="valorempenho" name="valorempenho" aria-describedby="basic-addon1" placeholder="Valor empenho" />
						</div>
					</div>
			</td>
		</tr>
<!-- final da segunda linha -->
		<tr>
			<td valign="bottom">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Início da Vigência</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls">
					<input type="text" value="<?php echo $this->session->flashdata('dtiniciovigencia'); ?>" class="form-control input_Vazio dataValidar" id="dtiniciovigencia" name="dtiniciovigencia" aria-describedby="basic-addon1"  placeholder="Data Início"/>
					</div>
				</div>
			</td>

			<td valign="bottom">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Término da Vigência</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls">
					<input type="text" value="<?php echo $this->session->flashdata('dtfimvigencia'); ?>" class="form-control input_Vazio dataValidar" name="dtfimvigencia" id="dtfimvigencia" aria-describedby="basic-addon1"  placeholder="Data Fim"/>
					</div>
				</div>
			</td>

			<td valign="bottom">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">P.A. Empenho</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls">
					<input type="text" value="<?php echo $this->session->flashdata('numprocadmempenho'); ?>" class="form-control input_Vazio processo" name="numprocadmempenho" id="numprocadmempenho" aria-describedby="basic-addon1"  placeholder="PA Empenho"/>
					</div>
				</div>
			</td>
		</tr>
<!-- final da terceira linha da tela -->
		<tr>
			<td valign="top" colspan="2">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Contrato / Ata</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls">
					<select class="form-control input_Vazio" id="contrato"  name="numcontratoata" placeholder="Contrato / Ata">

						<option>Selecione...</option>

						<?php 

							foreach ($pack['contratoata'] as $contratoata) {
								
								if($this->session->flashdata('numcontratoata') == $contratoata->id_contratoata){

									echo '<option selected value="'.$contratoata->id_contratoata.'">'.$contratoata->numerocontratoata.'</option>';
								
								} else {
								
									echo '<option value="'.$contratoata->id_contratoata.'">'.$contratoata->numerocontratoata.'</option>';

								}
							
							}

						?>

					</select>
					</div>
				</div>
			</td>

			<td valign="bottom">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">P.A. registro de preços</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls">
					<input type="text" value="<?php echo $this->session->flashdata('numprocregpreco'); ?>" class="form-control input_Vazio processo" name="numprocregpreco" id="numprocregpreco" aria-describedby="basic-addon1"  placeholder="PA registro preço"/>
					</div>
				</div>
			</td>
			<td></td>

		</tr>
<!-- final da quarta linha da tela -->
		<tr>
			<td valign="top" colspan="4">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Objeto</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls">
					<textarea class="form-control" id="objetoTexto" name="id_objeto" cols="110" rows="2" class="textarea_Vazio" placeholder="Objeto" disabled></textarea>
					</div>
				</div>
			</td>
		</tr>
<!-- final da quinta linha da tela -->
		<tr>
			<td valign="top">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Reserva orçamentária</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls">
					<input type="text" value="<?php echo $this->session->flashdata('reservaorcamentaria'); ?>" class="form-control input_Vazio" id="reservaorcamentaria" name="reservaorcamentaria" aria-describedby="basic-addon1" placeholder="Reserva Orçamentária" maxlength="5"/>
					</div>
				</div>
			</td>

			<td valign="top">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Número ficha</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls">
						<input type="text" value="<?php echo $this->session->flashdata('numeroficha'); ?>" class="form-control input_Vazio" id="numeroficha" name="numeroficha" aria-describedby="basic-addon1" placeholder="Número Ficha" required="required" pattern="[0-9]" maxlength="5"/>
					</div>
				</div>
			</td>

			<td valign="top">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Dotação</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls">
					<select class="form-control input_Vazio"  name="id_dotacao" placeholder="Dotação">

						<option>Selecione...</option>

						<?php 

							foreach ($pack['dotacao'] as $dotacao) {
								
								if($this->session->flashdata('id_dotacao') == $dotacao->id_dotacao){

									echo '<option selected value="'.$dotacao->id_dotacao.'">'.$dotacao->codigonumero.'</option>';
								
								} else {
								
									echo '<option value="'.$dotacao->id_dotacao.'">'.$dotacao->codigonumero.'</option>';
								}
							
							}

						?>

					</select>
					</div>
				</div>
			</td>
			
			<td valign="bottom">
				<div class="control-group">
					<div class="controls">
					<div class="btn btn-info pull-center" data-toggle="modal" data-target="#modelAdicionarDotacao">NOVO</div>
					
					</div>
				</div>
			</td>
		</tr>
<!-- final da sexta linha da tela -->
		</tbody>
</table>

	<button type="submit" name="cadastrarNovoEmpenho"  class="btn btn-success" id="validar_Enviar" >Criar Empenho</button>
	<?php echo anchor('main/redirecionar/empenho-empenho', '<div class="btn btn-danger pull-center"> Cancelar </div>')?>
	</form>
<?php echo form_fieldset_close(); ?>


<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////// MODAL PARA ADICIONAR DOTACAO ///////////////////////////////////////////// -->
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

<div class="modal fade" id="modelAdicionarDotacao" tabindex="-1" role="dialog" aria-labelledby="modelAdicionar" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Sair</span></button>
        <h4 class="modal-title" id="modelDeletar">Adição da Dotação</h4>
      </div>
	<div class="errorModalDotacao"></div>
      <div class="modal-body">
      	
			<table border="0">
		<thead align="left"><span id="basic-addon1">Marque as opções</span></thead>
		<tbody>
		<tr>
			<td>
				<div class="control-group">
					<div class="controls">
						<?php if($this->session->flashdata('tipodotacao') == 1){
							$check = 'checked';	
						}else{
							$check = '';
						}
							
						?>
						<input type="radio" id="tipodotacao" name="tipodotacao" aria-describedby="basic-addon1" value="1" <?php echo $check; ?>/>
						<span class="help-inline"> Serviços</span>
					</div>
				</div>
			</td>

			<td width="200px"></td>

			<td>
				<div class="control-group">
					<div class="controls">
						<?php if($this->session->flashdata('estadodotacao') == 1){
							$check = 'checked';	
						}else{
							$check = '';
						}
							
						?>			

						<input type="radio" name="estadodotacao" id="estadodotacao" aria-describedby="basic-addon1" value="1" <?php echo $check; ?>/>
						<span class="help-inline"> Ativo</span>
					</div>
				</div>
			</td>
		</tr>
		
		<tr>
			<td>
				<div class="control-group">
					<div class="controls">

						<?php if($this->session->flashdata('tipodotacao') == 2){
							$check = 'checked';	
						}else{
							$check = '';
						}
							
						?>
						<input type="radio" id="tipodotacao2" name="tipodotacao" aria-describedby="basic-addon1" value="2" <?php echo $check; ?> />
						<span class="help-inline"> Peças</span>
					</div>
				</div>
			</td>

			<td></td>

			<td>
				<div class="control-group">
					<div class="controls">
						<?php if($this->session->flashdata('estadodotacao') == 0 && $this->session->flashdata('estadodotacao') != ''){
							$check = 'checked';	
						}else{
							$check = '';
						}
							
						?>	
						<input type="radio" name="estadodotacao" id="estadodotacao2" aria-describedby="basic-addon1" value="0" <?php echo $check; ?> />
						<span class="help-inline"> Inativo</span>
					</div>
				</div>
			</td>
		</tr>
		</tbody>
	</table>

	<table>
		<tbody>
		<tr>
			<td colspan="2">
				<div class="input-group">
					
					
					<span class="input-group-addon" id="basic-addon1">Número / código da dotação</span>
					<input type="text" class="form-control" id="nomedotacao" name="nomedotacao" aria-describedby="basic-addon1" size="42" maxlength="40" placeholder="Número da Dotação" value="<?php echo $this->session->flashdata('nomedotacao'); ?>">
				</div>
			</td>
		</tr>

		<tr>
			<td colspan="2">
				<div class="input-group"  width="200px">
					<span class="input-group-addon" id="basic-addon1">Segmento</span>

					<select class="form-control" name="segmento" id="segmento" placeholder="Segmento">

						<option>Selecione...</option>

						<?php 

							foreach ($pack['segmento'] as $segmentos) {
								
								if($this->session->flashdata('segmento') == $segmentos->id_segmento){

									echo '<option selected value="'.$segmentos->id_segmento.'">'.$segmentos->segmento.'</option>';
								
								} else {
								
									echo '<option value="'.$segmentos->id_segmento.'">'.$segmentos->segmento.'</option>';
								}
							
							}

						?>

					</select>


				</div>
			</td>
		</tr>
		</tbody>
	</table>

      </div>
     

      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-dismiss="modal" id="cancelarNovaDotacao">Cancelar</button>
        <button type="button" name="cadastrarNovaDotacao"  class="btn btn-success validar_Enviar" id="AdicionarDotacao">Incluir Dotação</button>
       </div>
    </div>
  </div>
</div>