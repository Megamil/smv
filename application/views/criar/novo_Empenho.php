<?php echo form_fieldset("Novo Empenho"); 
$form = array('name' => 'form'); 
echo form_open("criar/novo_Empenho",$form); ?>

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
						<select class="form-control input_Vazio"  name="id_fornecedorprestador" placeholder="Fornecedor">

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
						<select class="form-control input_Vazio"  name="id_fornecedorprestador" placeholder="Fornecedor">

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
					<input type="text" class="form-control input_Vazio" name="numeroempenho" aria-describedby="basic-addon1" placeholder="Nº Empenho" />
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
						<div class="controls">
						<input type="text" class="form-control input_Vazio" name="valorempenho" aria-describedby="basic-addon1" placeholder="Valor empenho" />
						</div>
					</div>
			</td>

			<td>	
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Valor utilizado</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls">
					<input type="text" class="form-control input_Vazio" name="--------" aria-describedby="basic-addon1" placeholder="Valor Utilizado" disabled/>
					</div>
				</div>
			</td>
			
			<td valign="bottom">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Saldo</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls">
						<input type="text" class="form-control input_Vazio" name="--------" aria-describedby="basic-addon1" placeholder="Saldo" disabled/>
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
					<input type="text" class="form-control input_Vazio dataValidar" name="dtiniciovigencia" aria-describedby="basic-addon1"  placeholder="Data Início"/>
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
					<input type="text" class="form-control input_Vazio dataValidar" name="dtfimvigencia" aria-describedby="basic-addon1"  placeholder="Data Fim"/>
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
					<input type="text" class="form-control input_Vazio processo" name="numprocadmempenho" aria-describedby="basic-addon1"  placeholder="PA Empenho"/>
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
					<select class="form-control input_Vazio"  name="id_fornecedorprestador" placeholder="Fornecedor">

						<option>Selecione...</option>

						<?php 

							foreach ($pack['contratoata'] as $contratoata) {
								
								if($this->session->flashdata('id_contratoata') == $contratoata->id_contratoata){

									echo '<option selected value="'.$contratoata->id_contratoatao.'">'.$contratoata->numerocontratoata.'</option>';
								
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
					<input type="text" class="form-control input_Vazio processo" name="numprocregpreco" aria-describedby="basic-addon1"  placeholder="PA registro preço"/>
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
					<textarea name="id_objeto" cols="110" rows="2" class="textarea_Vazio" placeholder="Objeto"></textarea>
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
					<input type="text" class="form-control input_Vazio" name="reservaorcamentaria" aria-describedby="basic-addon1" placeholder="Reserva Orçamentária" />
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
						<input type="text" class="form-control input_Vazio" name="numeroficha" aria-describedby="basic-addon1" placeholder="Número Ficha" />
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
					<select class="form-control input_Vazio"  name="id_fornecedorprestador" placeholder="Fornecedor">

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
					<?php echo anchor('main/redirecionar/criar-nova_Dotacao', '<div class="btn btn-info pull-center"> NOVO </div>')?>	
					</div>
				</div>
			</td>
		</tr>
<!-- final da sexta linha da tela -->
		</tbody>
</table>

	<?php echo form_submit(array('name'=>'cadastrarNovoEmpenho'),'Criar Empenho', 'class="btn btn-success" id="validar_Enviar"'); ?>
	<?php echo anchor('main/redirecionar/empenho-empenho', '<div class="btn btn-danger pull-center"> Cancelar </div>')?>

<?php echo form_fieldset_close(); ?>