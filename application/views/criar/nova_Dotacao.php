<?php echo form_fieldset("Nova Dotação"); 
$form = array('name' => 'form'); 
echo form_open("criar/nova_Dotacao",$form); ?>

	<div class="erro_Campo_Vazio" ></div>
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
						<input type="radio" name="tipodotacao" aria-describedby="basic-addon1" value="1" <?php echo $check; ?> checked/>
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

						<input type="radio" name="estadodotacao" aria-describedby="basic-addon1" value="1" <?php echo $check; ?> checked/>
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
						<input type="radio" name="tipodotacao" aria-describedby="basic-addon1" value="2" <?php echo $check; ?> />
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
						<input type="radio" name="estadodotacao" aria-describedby="basic-addon1" value="0" <?php echo $check; ?> />
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
					<input type="text" class="form-control input_Vazio" name="nomedotacao" aria-describedby="basic-addon1" size="42" maxlength="40" placeholder="Número da Dotação" value="<?php echo $this->session->flashdata('nomedotacao'); ?>">
				</div>
			</td>
		</tr>

		<tr>
			<td colspan="2">
				<div class="input-group"  width="200px">
					<span class="input-group-addon" id="basic-addon1">Segmento</span>

					<select class="form-control input_Vazio" name="segmento" placeholder="Segmento">

						<option>Selecione...</option>

						<?php 

							foreach ($pack as $segmentos) {
								
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


	

	<?php echo form_submit(array('name'=>'criarDotacao'),'Criar Dotação', 'class="btn btn-success" id="validar_Enviar"'); ?>
	<?php echo anchor('main/redirecionar/cadastros-dotacao', '<div class="btn btn-danger pull-center"> Cancelar </div>')?>

<?php echo form_fieldset_close(); ?>