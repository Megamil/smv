<!--Usado para preencher alguns campos-->
<script type="text/javascript" src="<?php echo base_url(); ?>style/js/json.js"></script>
<?php echo form_fieldset("Editar Empenho"); ?>

<form action="/smv/edicoes/editando_Empenho" method="post" accept-charset="utf-8" name="form">

<script type="text/javascript">

	jQuery(document).ready(function(){

		$('#cancelarNovaDotacao').click(function(){

			$('#segmento').val('Selecione...');
			$('#nomedotacao').val('');

			$('#estadodotacao').attr('checked', false);
			$('#tipodotacao').attr('checked', false);
			$('#estadodotacao2').attr('checked', false);
			$('#tipodotacao2').attr('checked', false);

		});

	});

	</script>

<?php echo form_hidden('numeroempenhoOriginal', $pack['empenho']->row()->numeroempenho); ?>
<?php echo form_hidden('id_empenho', $pack['empenho']->row()->id_empenho); ?>

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
						<select class="form-control input_Vazio"  name="id_segmento" placeholder="Segmento">

						<option>Selecione...</option>

						<?php 

							foreach ($pack['segmento'] as $segmento) {
								
								if($pack['empenho']->row()->id_segmento == $segmento->id_segmento){

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
						<select class="form-control input_Vazio"  name="id_fornecedorprestador" placeholder="Fornecedor">

						<option>Selecione...</option>

						<?php 

							foreach ($pack['fornecedorprestador'] as $fornecedorprestador) {
								
								if($pack['empenho']->row()->id_fornecedorprestador == $fornecedorprestador->id_fornecedorprestador){

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
					<input type="text" value="<?php echo $pack['empenho']->row()->numeroempenho; ?>" class="form-control input_Vazio processo" name="numeroempenho" aria-describedby="basic-addon1" placeholder="Nº Empenho" />
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
						<input type="text" value="<?php echo $pack['empenho']->row()->valorempenho; ?>" class="form-control input_Vazio preco" onkeypress='return SomenteNumero(event)' name="valorempenho" aria-describedby="basic-addon1" placeholder="Valor empenho" />
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
			<?php if($pack['empenho']->row()->dtiniciovigencia != '') {$dtiniciovigencia = date("d-m-Y", strtotime($pack['empenho']->row()->dtiniciovigencia));} else {$dtiniciovigencia = '';} ?>
				<div class="control-group">
					<div class="controls">
					<input type="text" value="<?php echo $dtiniciovigencia; ?>" class="form-control input_Vazio dataValidar" name="dtiniciovigencia" aria-describedby="basic-addon1"  placeholder="Data Início"/>
					</div>
				</div>
			</td>

			<td valign="bottom">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Término da Vigência</span>
					</div>
				</div>
			<?php if($pack['empenho']->row()->dtfimvigencia != '') {$dtfimvigencia = date("d-m-Y", strtotime($pack['empenho']->row()->dtfimvigencia));} else {$dtfimvigencia = '';} ?>
				<div class="control-group">
					<div class="controls">
					<input type="text" value="<?php echo $dtfimvigencia; ?>" class="form-control input_Vazio dataValidar" name="dtfimvigencia" aria-describedby="basic-addon1"  placeholder="Data Fim"/>
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
					<input type="text" value="<?php echo $pack['empenho']->row()->numprocadmempenho; ?>" class="form-control input_Vazio processo" name="numprocadmempenho" aria-describedby="basic-addon1"  placeholder="PA Empenho"/>
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
								
								if($pack['empenho']->row()->numcontratoata == $contratoata->id_contratoata){

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
					<input type="text" value="<?php echo $pack['empenho']->row()->numprocregpreco; ?>" class="form-control input_Vazio processo" name="numprocregpreco" aria-describedby="basic-addon1"  placeholder="PA registro preço"/>
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
					<input type="text" value="<?php echo $pack['empenho']->row()->reservaorcamentaria; ?>" class="form-control input_Vazio" name="reservaorcamentaria" aria-describedby="basic-addon1" placeholder="Reserva Orçamentária" maxlength="5"/>
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
						<input type="text" value="<?php echo $pack['empenho']->row()->numeroficha; ?>" class="form-control input_Vazio" name="numeroficha" aria-describedby="basic-addon1" placeholder="Número Ficha" maxlength="5"/>
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
								
								if($pack['empenho']->row()->id_dotacao == $dotacao->id_dotacao){

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


	<?php echo form_submit(array('name'=>'cadastrarNovoEmpenho'),'Salvar Edição', 'class="btn btn-success" id="validar_Enviar"'); ?>
	<?php echo anchor('main/redirecionar/empenho-empenho', '<div class="btn btn-danger pull-center"> Cancelar </div>')?>

<?php echo form_fieldset_close(); ?>
</form>

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
        <button type="button" name="cadastrarNovaDotacao"  class="btn btn-success" id="AdicionarDotacao">Incluir Dotação</button>
       </div>
    </div>
  </div>
</div>