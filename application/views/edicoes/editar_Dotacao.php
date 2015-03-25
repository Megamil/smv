<?php echo form_fieldset("Editar Dotação"); 
$form = array('name' => 'form');
echo form_open("edicoes/editando_Dotacao",$form); ?>

	<div class="erro_Campo_Vazio" ></div>

	<?php echo form_hidden('id_dotacao', $pack['dotacao']->row()->id_dotacao); ?>

	<table border="0">
		<thead align="left"><span id="basic-addon1">Marque as opções</span></thead>
		<tbody>
		<tr>
			<td>
				<div class="control-group">
					<div class="controls">
						<?php if($pack['dotacao']->row()->idtipodotacao == 1){
							$checkservico = 'checked';	
						}else{
							$checkservico = '';
						}
							
						?>
						<input type="radio" name="tipodotacao" aria-describedby="basic-addon1" value="1" <?php echo $checkservico; ?>/>
						<span class="help-inline"> Serviços</span>
					</div>
				</div>
			</td>

			<td width="200px"></td>

			<td>
				<div class="control-group">
					<div class="controls">
						<?php if($pack['dotacao']->row()->statusdotacao == 1){
							$checkstatus = 'checked';	
						}else{
							$checkstatus = '';
						}
							
						?>			

						<input type="radio" name="estadodotacao" aria-describedby="basic-addon1" value="1" <?php echo $checkstatus; ?>/>
						<span class="help-inline"> Ativo</span>
					</div>
				</div>
			</td>
		</tr>
		
		<tr>
			<td>
				<div class="control-group">
					<div class="controls">

						<?php if($pack['dotacao']->row()->idtipodotacao == 2){
							$checktipo1 = 'checked';	
						}else{
							$checktipo1 = '';
						}
							
						?>
						<input type="radio" name="tipodotacao" aria-describedby="basic-addon1" value="2" <?php echo $checktipo1; ?> />
						<span class="help-inline"> Peças</span>
					</div>
				</div>
			</td>

			<td></td>

			<td>
				<div class="control-group">
					<div class="controls">
						<?php if($pack['dotacao']->row()->statusdotacao == 0){
							$checkstatus1 = 'checked';	
						}else{
							$checkstatus1 = '';
						}
							
						?>	
						<input type="radio" name="estadodotacao" aria-describedby="basic-addon1" value="0" <?php echo $checkstatus1; ?> />
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
					<input type="text" class="form-control input_Vazio" name="nomedotacao" aria-describedby="basic-addon1" size="42" maxlength="40" value="<?php echo $pack['dotacao']->row()->codigonumero; ?>">
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
							foreach ($pack['segmentos'] as $segmentos) {
								
								if($pack['dotacao']->row()->id_segmento == $segmentos->id_segmento){

									echo '<option selected value="'.$segmentos->id_segmento.'">'.$segmentos->segmento.'</option>';
								
								}else{
								
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


	

	<?php echo form_submit(array('name'=>'editarDotacao'),'Editar Dotação', 'class="btn btn-success" id="validar_Enviar"'); ?>
	<?php echo anchor('main/redirecionar/cadastros-dotacao', '<div class="btn btn-danger pull-center"> Cancelar </div>')?>

<?php echo form_fieldset_close(); ?>