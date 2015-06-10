<!--Usado para preencher alguns campos-->
<script type="text/javascript" src="<?php echo base_url(); ?>style/js/json.js"></script>
<?php echo form_fieldset("Nova Autorização de Fornecimento de Peças"); 
$form = array('name' => 'form'); 
echo form_open("criar/nova_Af_Pecas",$form); ?>
<div class="erro_Campo_Vazio" ></div>

	<table border="0">
		<thead align="left"><span id="basic-addon1"></span></thead>
		<tbody>
		<tr>
			<td>
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Ano</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls">
						<input type="text" class="form-control input_Vazio" value="<?php echo date("Y"); ?>" name="ano" aria-describedby="basic-addon1" placeholder="Ano" style="max-width:80px" />
					</div>
				</div>
			</td>			
			<td>
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Ordem de Serviço</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls">
						<select class="form-control input_Vazio"  name="id_ordemservico" id="id_ordemservico" placeholder="Ordem de Serviço">
						<option>Selecione...</option>
						<?php 
							foreach ($pack['ordemservico'] as $ordemservico) {
								if($this->session->flashdata('id_ordemservico') == $ordemservico->id_ordemservico){
									echo '<option selected value="'.$ordemservico->id_ordemservico.'">'.$ordemservico->id_ordemservico.'</option>';
								} else {
									echo '<option value="'.$ordemservico->id_ordemservico.'">'.$ordemservico->id_ordemservico.'</option>';
								}
							}
						?>
					</select>
					</div>
				</div>
			</td>
		
			<td valign="top" colspan="2">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Fornecedor / Prestador</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls">
					<select class="form-control input_Vazio"  name="id_fornecedorprestador" placeholder="Fornecedor/Prestador" style="max-width:450px">
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
		<tr>
			<td valign="top">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Contrato / Ata</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls input-group">

					<select class="form-control input_Vazio" name="id_contratoata" id="id_contratoata" placeholder="Contrato/Ata" style="max-width:400px">
							<option>Selecione...</option>
							<?php 
								foreach ($pack['contratoata'] as $contratoata) {

									$inicio = substr($contratoata->numerocontratoata, 0, 4);
									$meio = substr($contratoata->numerocontratoata, 4, 4);
									$fim = substr($contratoata->numerocontratoata, 8, 4);
									$formatado = $inicio . "/" . $meio. "-" .$fim;	

									if($this->session->flashdata('id_contratoata') == $contratoata->id_contratoata){
										echo '<option selected value="'.$contratoata->id_contratoata.'">'.$formatado.'</option>';
									} else {
										echo '<option value="'.$contratoata->id_contratoata.'">'.$formatado.'</option>';
									}
								}
							?>
						</select>
					</div>
				</div>
			</td>

			<td valign="top">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Início da vigência</span>
					</div>
				</div>
				
				<div class="control-group">
					<div class="controls">
					<input type="date" class="form-control input_Vazio" name="iniciovigencia" id="iniciovigencia" aria-describedby="basic-addon1" placeholder="Inicio Vigência" style="max-width:150px" disabled/>
					</div>
				</div>
			</td>

			<td>
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Término da vigência</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls">
					<input type="date" class="form-control input_Vazio" name="fimvigencia" id="fimvigencia" aria-describedby="basic-addon1" placeholder="Fim Vigência" style="max-width:150px" disabled/>
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
						<input type="text" class="form-control processo" name="paregprecos" id="paregprecos" aria-describedby="basic-addon1" placeholder="PA Reg. Preços" style="max-width:220px" disabled/>
					</div>
				</div>
			</td>

			<td valign="bottom">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">P.A. de empenho</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls">
					<input type="text" class="form-control processo" name="paempenho" id="paempenho" aria-describedby="basic-addon1"  placeholder="PA Empenho" style="max-width:220px" disabled/>
					</div>
				</div>
			</td>
		</tr>
		<!-- ***************************** FINAL DA SÉTIMA LINHA *********************************** -->
		<tr>
			<td valign="top" colspan="5">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Objeto</span>
					</div>
				</div>

				<div class="control-group">
					<div class="controls">
						<textarea name="id_objeto" class="form-control input_Vazio" cols="140" id="objeto" rows="1" placeholder="Objeto" disabled></textarea>
					</div>
				</div>
			</td>
		</tr>
		<!-- ***************************** FINAL DA OITAVA LINHA *********************************** -->
		<tr>
			<td valign="top">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Prazo de entrega</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls">
					<input type="text" class="form-control input_Vazio" name="prazoentrega" id="prazoentrega" aria-describedby="basic-addon1" placeholder="Prazo Entrega" style="max-width:185px" maxlength="20" disabled/>
					</div>
				</div>
			</td>

			<td valign="top">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Prazo de pagamento</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls">
					<input type="text" class="form-control input_Vazio" name="prazopagto" id="prazopagto" aria-describedby="basic-addon1" placeholder="Prazo Pagto" style="max-width:460px" disabled/>
					</div>
				</div>
			</td>

			<td valign="middle">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Contato</span>
					</div>
				</div>
		
				<div class="control-group">
					<div class="controls">
					<input type="text" class="form-control input_Vazio" name="contato" value="<?php echo $this->session->flashdata('contato'); ?>" aria-describedby="basic-addon1" placeholder="Contato" />
					</div>
				</div>
			</td>

			<td valign="top">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Veículo Prefixo</span>
					</div>
				</div>

				<div class="control-group">
					<div class="controls input-group">
					<span class="help-inline input-group-addon">DT-</span>
					<input type="text" class="form-control input_Vazio" name="id_veiculoprefixo" id="id_veiculoprefixo" aria-describedby="basic-addon1" placeholder="Prefixo" style="max-width:100px" disabled/> 
					</div>
				</div>
			</td>
			<td>
				<div class="control-group">	
					<div class="controls">
					<span class="help-inline">Data A.F.</span>
					<input type="text" class="form-control" name="dataafpecas" value="<?php echo date('d/m/Y'); ?>" placeholder="Data AF Pecas" disabled/>
					</div>
				</div>	
			</td>
		</tr>
		<!-- ***************************** FINAL DA NONA LINHA *********************************** -->
		<tr>
			<td valign="middle" colspan="2">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Colaborado responsável 1</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls">
						<select class="form-control input_Vazio" name="id_colaborador" placeholder="Colaborador 1" style="max-width:240px">
							<option>Selecione...</option>
							<?php 
								foreach ($pack['colaborador'] as $colaborador) {
									if($this->session->flashdata('id_colaborador') == $colaborador->id_colaborador){
										echo '<option selected value="'.$colaborador->id_colaborador.'">'.$colaborador->nome.'</option>';
									} else {
										echo '<option value="'.$colaborador->id_colaborador.'">'.$colaborador->nome.'</option>';
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
						<span class="help-inline">Colaborado responsável 2</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls">
						<select class="form-control input_Vazio" name="id_colaborador2" placeholder="Colaborador 2" style="max-width:240px">
							<option>Selecione...</option>
							<?php 
								foreach ($pack['colaborador'] as $colaborador) {
									if($this->session->flashdata('id_colaborador2') == $colaborador->id_colaborador){
										echo '<option selected value="'.$colaborador->id_colaborador.'">'.$colaborador->nome.'</option>';
									} else {
										echo '<option value="'.$colaborador->id_colaborador.'">'.$colaborador->nome.'</option>';
									}
								}
							?>
						</select>
					</div>
				</div>
			</td>
		</tr>
		<!-- ***************************** FINAL DA DECIMA LINHA *********************************** -->
		<tr>
			<td valign="top" colspan="5">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Observações</span>
					</div>
				</div>

				<div class="control-group">
					<div class="controls">
						<textarea name="observacoes" class="form-control textarea_Vazio" cols="140" rows="1" placeholder="Observacoes"> <?php echo $this->session->flashdata('observacoes'); ?></textarea>
					</div>
				</div>
			</td>
		</tr>
		<!-- ***************************** FINAL DA DECIMA PRIMEIRA LINHA *********************************** -->
		</tbody>
</table>

	<?php echo form_submit(array('name'=>'cadastrarNovaAutorizacaoPecas'),'Criar Autorização de Fornecimento de Peças', 'class="btn btn-success no-print" id="validar_Enviar"'); ?>
	<?php echo anchor('main/redirecionar/autorizacoes-af_Pecas', '<div class="btn btn-danger pull-center no-print"> Cancelar </div>')?>

<?php echo form_fieldset_close(); ?>