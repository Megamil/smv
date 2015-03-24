<?php echo form_fieldset("Novo Veiculo"); 
$name = array('name' => 'novo'); /*Requerido para indicar de qual formulário é campo E-mail e Usuário no onblur*/
echo form_open("criar/novo_Veiculo  ",$name); ?>

	<div class="erro_Campo_Vazio" ></div>
	<div id="msgemail"></div> <!--Aviso de e-mail incorreto-->
	<table border="1">
		<thead align="left"><span id="basic-addon1"></span></thead>
		<tbody>
		<tr>
			<td>
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Prefixo</span>
					</div>
				</div>
			</td>
			<td>
				<div class="control-group">
					<div class="controls input-group">
						<span class="input-group-addon" id="basic-addon1">DT- </span>
						<input type="text" class="form-control input_Vazio" name="prefixoveiculo" value="<?php echo $this->session->flashdata('prefixoveiculo'); ?>" aria-describedby="basic-addon1" />
					</div>

				</div>
			</td>
		
			<td valign="top">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Modelo</span>
					</div>
				</div>
			</td>
			<td colspan="3">
				<div class="control-group">
					<div class="controls">
						<input type="text" class="form-control input_Vazio" name="modeloveiculo" value="<?php echo $this->session->flashdata('modeloveiculo'); ?>" aria-describedby="basic-addon1" size="25" placeholder="Modelo" maxlength="25" />
					</div>
				</div>
			</td>
		
			<td valign="top">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Marca</span>
					</div>
				</div>
			</td>
			<td>
				<div class="control-group">
					<div class="controls">
					<input type="text" class="form-control input_Vazio" id="cepValidar" name="marcaveiculo" onkeypress='return numero(event)' value="<?php echo $this->session->flashdata('marcaveiculo'); ?>" aria-describedby="basic-addon1" size="20" placeholder="Marca" maxlength="20" />
					</div>
				</div>
			</td>
		
			<td valign="top">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Tipo</span>
					</div>
				</div>
			</td>
			<td  colspan="3">
				<div class="control-group">
					<div class="controls">
					<input type="text" class="form-control input_Vazio" name="tipoveiculo" value="<?php echo $this->session->flashdata('tipoveiculo'); ?>" aria-describedby="basic-addon1" size="20" placeholder="Tipo" maxlength="30" />
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<td valign="top">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Ano Fab/Ano Mod</span>
					</div>
				</div>
			</td>
			<td>
				<div class="control-group">
					<div class="controls">
					<input type="text" class="form-control input_Vazio" name="anofabmodveiculo" value="<?php echo $this->session->flashdata('anofabmodveiculo'); ?>" aria-describedby="basic-addon1" size="10" placeholder="Nº" maxlength="9" />
					</div>
				</div>
			</td>
		
			<td valign="top">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Placa</span>
					</div>
				</div>
			</td>
			<td>
				<div class="control-group">
					<div class="controls">
					<input type="text" class="form-control input_Vazio" name="placaveiculo" value="<?php echo $this->session->flashdata('placaveiculo'); ?>" aria-describedby="basic-addon1" size="10" placeholder="Complemento" maxlength="9" />
					</div>
				</div>
			</td>

			<td valign="top">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Chassis</span>
					</div>
				</div>
			</td>
			<td>
				<div class="control-group">
					<div class="controls">
					<input type="text" class="form-control input_Vazio" name="chassisveiculo" value="<?php echo $this->session->flashdata('chassisveiculo'); ?>" aria-describedby="basic-addon1" size="19" placeholder="Cidade" maxlength="16" />
					</div>
				</div>
			</td>
		</tr>

		<tr>
			<td valign="top">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Número do Motor</span>
					</div>
				</div>
			</td>
			<td>
				<div class="control-group">
					<div class="controls">
					<input type="text" class="form-control input_Vazio" name="numeromotorveiculo" value="<?php echo $this->session->flashdata('numeromotorveiculo'); ?>" aria-describedby="basic-addon1" size="19" placeholder="Cidade" maxlength="16" />
					</div>
				</div>

			</td>

			<td valign="top">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Detalhes do Motos</span>
					</div>
				</div>
			</td>
			<td>
				<div class="control-group">
					<div class="controls">
					<input type="text" class="form-control input_Vazio telefoneValidar" name="detealhemotorveiculo" onkeypress='return numero(event)' value="<?php echo $this->session->flashdata('detalhemotorveiculo'); ?>" aria-describedby="basic-addon1" size="25" placeholder="Telefone" maxlength="50" />
					</div>
				</div>
			</td>

			<td valign="top">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Combustível</span>
					</div>
				</div>
			</td>

			<td>
				<div class="control-group">
					<div class="controls">
					<input type="text" class="form-control input_Vazio telefoneValidar" name="combustivelveiculo" onkeypress='return numero(event)' value="<?php echo $this->session->flashdata('combustivelveiculo'); ?>" aria-describedby="basic-addon1" size="52" placeholder="Telefone" maxlength="13" />
					</div>
				</div>
			</td>
		</tr>

		<tr>
			<td valign="top">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Unidade de Serviço</span>
					</div>
				</div>
			</td>
			<td>
				<div class="control-group">
					<div class="controls">
					
					<select class="form-control" name="unidadesaude" value="<?php echo $this->session->flashdata('unidadesaude'); ?>">

						<option>Selecione...</option>

						<?php 

							foreach ($pack['unidadesaude'] as $unidadesaude) {
								
								if($this->session->flashdata('unidadesaude') == $unidadesaude->id_unidadesaude){
									echo '<option selected value="'.$unidadesaude->id_unidadesaude.'">'.$unidadesaude->unidadesaude.'</option>';
								} else {
									echo '<option value="'.$unidadesaude->id_unidadesaude.'">'.$unidadesaude->unidadesaude.'</option>';
								}
							
							}

						?>

					</select>


					</div>
				</div>
			</td>
		</tr>

		<tr>
			<td valign="top">
				<span class="help-inline">Estado</span>
			</td>
			<td valign="top" colspan="3">					

			<?php 

				foreach ($pack['estadoveiculo'] as $estadoveiculo) {
					
					if($estadoveiculo->id_estadoveiculo == $this->session->flashdata('estadoveiculo')) {
						echo '<input type="radio" name="estadoveiculo" aria-describedby="basic-addon1" value="'.$estadoveiculo->id_estadoveiculo.'" checked /> '.$estadoveiculo->estadoveiculo.' ';
					} else {
						echo '<input type="radio" name="estadoveiculo" aria-describedby="basic-addon1" value="'.$estadoveiculo->id_estadoveiculo.'"/> '.$estadoveiculo->estadoveiculo.' ';
					}
				}

			 ?>

			<td valign="top">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Observações</span>
					</div>
				</div>
			</td>
			
			<td>
				<div class="control-group">
					<div class="controls">
					<input type="text" class="form-control input_Vazio telefoneValidar" name="observveiculo" onkeypress='return numero(event)' value="<?php echo $this->session->flashdata('observveiculo'); ?>" aria-describedby="basic-addon1" size="60" placeholder="Telefone" maxlength="300" />
					</div>
				</div>
			</td>
			</td>
		</tr>

		</tbody>
	</table>


	

	<?php echo form_submit(array('name'=>'cadastrarNovoObjeto'),'Criar Veiculo', 'class="btn btn-success" id="validar_Enviar"'); ?>
	<?php echo anchor('main/redirecionar/cadastros-veiculo', '<div class="btn btn-danger pull-center"> Cancelar </div>')?>

<?php echo form_fieldset_close(); ?>