<!--Usado para preencher alguns campos-->
<script type="text/javascript" src="<?php echo base_url(); ?>style/js/json.js"></script>
<?php echo form_fieldset("Nova Ordem de Serviço"); 
$form = array('name' => 'form'); 
echo form_open("criar/nova_Ordem_Servico",$form); ?>

	<div class="erro_Campo_Vazio" ></div>
	<table border="0">
		<thead align="left"><span id="basic-addon1"></span></thead>
		<tbody>
		<tr>
			<td>
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Número</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls">
						<input type="text" class="form-control input_Vazio" name="id_ordemservico" aria-describedby="basic-addon1" placeholder="Número" style="max-width:100px" disabled/>
					</div>
				</div>
			</td>
		
			<td valign="top" colspan="3">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Fornecedor / Prestador</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls">
					<select class="form-control input_Vazio"  name="id_fornecedorprestador" placeholder="Fornecedor" style="max-width:590px">
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
		<!-- ***************************** FINAL DA PRIMEIRA LINHA *********************************** -->
		<tr>
			<td valign="top">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Prefixo</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls input-group">
					<span class="input-group-addon" id="basic-addon1">DT- </span>
					<input type="text" class="form-control input_Vazio" name="prefixo" aria-describedby="basic-addon1" placeholder="Prefixo" style="max-width:100px"/>
					</div>
				</div>
			</td>

			<td valign="top" colspan="3">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Unidade Cliente</span>
					</div>
				</div>
				
				<div class="control-group">
					<div class="controls">
					<select class="form-control input_Vazio" name="id_unidadecliente" placeholder="Unidade Cliente" style="max-width:590px">
						<option>Selecione...</option>
						<?php 
							foreach ($pack['unidadecliente'] as $unidadecliente) {
								if($this->session->flashdata('id_unidadecliente') == $unidadecliente->id_unidadecliente){
									echo '<option selected value="'.$unidadecliente->id_unidadecliente.'">'.$unidadecliente->unidadesaude.'</option>';
								} else {
									echo '<option value="'.$unidadecliente->id_unidadecliente.'">'.$unidadecliente->unidadesaude.'</option>';
								}
							}
						?>
					</select>
					</div>
				</div>
			</td>
		</tr>
			<!-- ***************************** FINAL DA SEGUNDA LINHA *********************************** -->
		<tr>
			<td>
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Placa</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls">
					<input type="text" class="form-control" name="placa" aria-describedby="basic-addon1" placeholder="Placa" style="max-width:95px" disabled/>
					</div>
				</div>
			</td>
			
			<td valign="bottom">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Modelo</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls">
						<input type="text" class="form-control" name="modelo" aria-describedby="basic-addon1" placeholder="Modelo" style="max-width:220px" disabled/>
					</div>
				</div>
			</td>

			<td valign="bottom">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Marca</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls">
					<input type="text" class="form-control" name="marca" aria-describedby="basic-addon1"  placeholder="Marca" style="max-width:220px" disabled/>
					</div>
				</div>
			</td>

			<td valign="top" colspan="3">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Tipo</span>
					</div>
				</div>

				<div class="control-group">
					<div class="controls">
						<input type="text" class="form-control input_Vazio" name="tipo" aria-describedby="basic-addon1" placeholder="Tipo" style="max-width:180px" disabled />
					</div>
				</div>
			</td>
		</tr>
		<!-- ***************************** FINAL DA TERCEIRA LINHA *********************************** -->
		<tr>
			<td valign="top">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Número motor</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls">
					<input type="text" class="form-control input_Vazio" name="numeromotor" aria-describedby="basic-addon1" placeholder="Nº Motor" style="max-width:185px" maxlength="20" disabled/>
					</div>
				</div>
			</td>

			<td valign="top" colspan="3">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Detalhes motor</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls">
					<input type="text" class="form-control input_Vazio" name="detalhemotor" aria-describedby="basic-addon1" placeholder="Detalhe Motor" style="max-width:460px" disabled/>
					</div>
				</div>
			</td>
		</tr>
		<!-- ***************************** FINAL DA QUARTA LINHA *********************************** -->
		<tr>
			<td valign="middle">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">KM</span>
					</div>
				</div>
		
				<div class="control-group">
					<div class="controls">
					<input type="text" class="form-control input_Vazio" name="km" aria-describedby="basic-addon1" placeholder="KM" style="max-width:100px" disabled/>
					</div>
				</div>
			</td>

			<td valign="top" colspan="4">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Defeito apresentado</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls">
					<textarea name="defeitoapresentado" class="input_Vazio" cols="97" rows="1" placeholder="Defeito apresentado" disabled></textarea>
					</div>
				</div>
			</td>
		</tr>
		<!-- ***************************** FINAL DA QUINTA LINHA *********************************** -->
		<tr>
			<td valign="middle">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Data Entrada</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls">
					<input type="text" class="form-control input_Vazio dataValidar" name="dataentrada" aria-describedby="basic-addon1" placeholder="Data Entrada" style="max-width:100px"/>
					</div>
				</div>
			</td>

			<td valign="top" colspan="4">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Observações</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls">
					<textarea name="observacoes" class="input_Vazio" cols="97" rows="1" placeholder="Observações"></textarea>
					</div>
				</div>
			</td>
		</tr>
		<!-- ***************************** FINAL DA SEXTA LINHA *********************************** -->
		<tr>
			<td valign="top">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Data Saída</span>
					</div>
				</div>

				<div class="control-group">
					<div class="controls">
					<input type="text" class="form-control input_Vazio dataValidar" name="datasaida" aria-describedby="basic-addon1" placeholder="Data Saída" style="max-width:100px"/>
					</div>
				</div>
			</td>

			<td valign="top" colspan="3">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Colaborador</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls">
					<select class="form-control input_Vazio" name="id_colaborador" placeholder="Colaborador" style="max-width:240px">
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
		</tr>
		<!-- ***************************** FINAL DA SETIMA LINHA *********************************** -->
		<tr>
			<td colspan="2" align="left" valign="bottom">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">SERVIÇOS EXECUTADOS</span>
					</div>
				</div>
			</td>
			<td valign="middle" colspan="2" align="right">
				<div class="control-group">
					<div class="controls">
					<div class="btn btn-info pull-center" data-toggle="modal" data-target="#modelAdicionarServico">Incluir Serviço</div>
					</div>
				</div>	
			</td>
		</tr>
		<!-- ***************************** FINAL DA OITAVA LINHA *********************************** -->
		<tr>
			<td valign="top" colspan="4">
				AQUI IRÃO APARECER OS SERVIÇOS EXECUTADOS NA ORDEM DE SERVIÇO

			</td>
		</tr>
		<!-- ***************************** FINAL DA NONA LINHA *********************************** -->
		<tr>
			<td colspan="2" align="left" valign="bottom">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">MATERIAIS UTILIZADOS</span>
					</div>
				</div>
			</td>
			<td  valign="middle" colspan="2" align="right">
				<div class="control-group">
					<div class="controls">
						<div class="btn btn-info pull-center" data-toggle="modal" data-target="#modelAdicionarItem">Incluir Item</div>
					</div>
				</div>	
			</td>
		</tr>
		<!-- ***************************** FINAL DA DECIMA LINHA *********************************** -->
		<tr>	
			<td valign="top" colspan="4">
				AQUI IRÃO APARECER OS MATERIAIS UTILIZADOS NA ORDEM DE SERVIÇO

			</td>
		</tr>
		<!-- ***************************** FINAL DA DECIMA PRIMEIRA LINHA *********************************** -->
		<tr>
			<td valign="top" colspan="4">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Laudo Técnico / Ocorrências</span>
					</div>
				</div>
	
				<div class="control-group">
					<div class="controls">
					<textarea name="laudotecnicoocorrencia" class="input_Vazio" cols="127" rows="2" placeholder="Laudo Técnico"></textarea>
					</div>
				</div>
			</td>
		</tr>
		</tbody>
</table>

	<?php echo form_submit(array('name'=>'cadastrarNovaOrdemServico'),'Criar Contrato/Ata', 'class="btn btn-success" id="validar_Enviar"'); ?>
	<?php echo anchor('main/redirecionar/ordemservico-ordem_Servico', '<div class="btn btn-danger pull-center"> Cancelar </div>')?>

<?php echo form_fieldset_close(); ?>


<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////// MODAL PARA ADICIONAR SERVIÇOS NA ORDEM ///////////////////////////////////////////// -->
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<div class="modal fade" id="modelAdicionarServico" tabindex="-1" role="dialog" aria-labelledby="modelAdicionar" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Sair</span></button>
        <h4 class="modal-title" id="modelDeletar"> Cancelar a adição do Serviço?</h4>
      </div>

      <div class="modal-body">
      	<table border="0">
      		<tr>
      			<td colspan="2">
      				<div class="control-group">
						<div class="controls">
							<span class="help-inline">Descrição do Serviço</span>
						</div>
					</div>
				
					<div class="control-group">
						<div class="controls">
							<select class="form-control input_Vazio" name="id_servico" placeholder="Servico" style="max-width:300px">
							<option>Selecione...</option>
							<?php 
								foreach ($pack['servico'] as $servico) {
									if($this->session->flashdata('id_colaborador') == $servico->id_servico){
										echo '<option selected value="'.$servico->id_servico.'">'.$servico->servico.'</option>';
									} else {
										echo '<option value="'.$servico->id_servico.'">'.$servico->servico.'</option>';
									}
								}
							?>
						</select>
						</div>
					</div>	
      			</td>
      			
      			<td>
      			    <div class="control-group">
						<div class="controls">
							<span class="help-inline">Valor Unitário</span>
						</div>
					</div>
				
					<div class="control-group">
						<div class="controls">
							<input type="text" class="form-control input_Vazio" name="valorunitario" aria-describedby="basic-addon1" placeholder="Valor Unitário" style="max-width:130px" disabled/>
						</div>
					</div>		
      			</td>
      		</tr>
      		<!-- *******************************************FINAL DA PRIMEIRA LINHA DO MODAL************************************* -->
      		<tr>
      			<td>
      				<div class="control-group">
						<div class="controls">
							<input type="radio" name="id_unidademedida" aria-describedby="basic-addon1" value="11" /> <span>Por Serviço</span>
						</div>	
						<div class="controls">
							<input type="radio" name="id_unidademedida" aria-describedby="basic-addon1" value="10" /> <span>Por Hora</span>
						</div>
					</div>
				</td>

      			<td>
	      			<div class="control-group">
						<div class="controls">
							<span class="help-inline">Quantidade</span>
						</div>
					</div>
					
					<div class="control-group">
						<div class="controls">
							<input type="text" class="form-control input_Vazio" name="quantidade" aria-describedby="basic-addon1" placeholder="Qtd" style="max-width:80px"/>
						</div>
					</div>		
      			</td>

      			<td>
	      			<div class="control-group">
						<div class="controls">
							<span class="help-inline">Valor Total</span>
						</div>
					</div>
					
					<div class="control-group">
						<div class="controls">
							<input type="text" class="form-control input_Vazio" name="valortotal" aria-describedby="basic-addon1" placeholder="Total" style="max-width:150px" disabled/>
						</div>
					</div>      				
      			</td>
      		</tr>
      		<tr>
      			<td colspan="2">
      				<div class="control-group">
						<div class="controls">
							<span class="help-inline">Prestador</span>
						</div>
					</div>
					
					<div class="control-group">
						<div class="controls">
						<select class="form-control input_Vazio"  name="id_fornecedorprestador" placeholder="Fornecedor" style="max-width:590px">
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

      			<td>
      				<div class="control-group">
						<div class="controls">
							<span class="help-inline">Colaborador</span>
						</div>
					</div>
					
					<div class="control-group">
						<div class="controls">
							<select class="form-control input_Vazio" name="id_colaborador" placeholder="Colaborador" style="max-width:240px">
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
      		</tr>

      	</table>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>
        <?php echo form_submit(array('name'=>'cadastrarNovoServicoOrdem'),'Incluir Serviço', 'class="btn btn-success" id="validar_Enviar"'); ?>
       </div>
    </div>
  </div>
</div>

<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////// MODAL PARA ADICIONAR ITENS NA ORDEM //////////////////////////////////////////////// -->
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<div class="modal fade" id="modelAdicionarItem" tabindex="-1" role="dialog" aria-labelledby="modelAdicionar" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Sair</span></button>
        <h4 class="modal-title" id="modelDeletar"> Cancelar a adição do Material?</h4>
      </div>

      <div class="modal-body">
      		<table border="0">
      		<tr>
      			<td colspan="3">
      				<div class="control-group">
						<div class="controls">
							<span class="help-inline">Descrição do Material</span>
						</div>
					</div>
				
					<div class="control-group">
						<div class="controls">
							<select class="form-control input_Vazio" name="id_servico" placeholder="Servico" >
							<option>Selecione...</option>
							<?php 
								foreach ($pack['itens'] as $itens) {
									if($this->session->flashdata('id_itens') == $itens->id_itens){
										echo '<option selected value="'.$itens->id_itens.'">'.$itens->descricao.'</option>';
									} else {
										echo '<option value="'.$itens->id_itens.'">'.$itens->descricao.'</option>';
									}
								}
							?>
						</select>
						</div>
					</div>	
      			</td>
      		</tr>
      		<!-- *******************************************FINAL DA PRIMEIRA LINHA DO MODAL************************************* -->
      		<tr>
      			<td>
      			    <div class="control-group">
						<div class="controls">
							<span class="help-inline">Quatidade</span>
						</div>
					</div>
				
					<div class="control-group">
						<div class="controls">
							<input type="text" class="form-control input_Vazio" name="quantidade" aria-describedby="basic-addon1" placeholder="Quantidade" style="max-width:130px" />
						</div>
					</div>		
      			</td>

      			<td>
					<div class="control-group">
						<div class="controls">
							<span class="help-inline">Valor unitário</span>
						</div>
					</div>
				
					<div class="control-group">
						<div class="controls">
							<input type="text" class="form-control input_Vazio" name="valorunitario" aria-describedby="basic-addon1" placeholder="Valor unitário" disabled/>
						</div>
					</div>	
				</td>

      			<td>
	      			<div class="control-group">
						<div class="controls">
							<span class="help-inline">Valor Total</span>
						</div>
					</div>
					
					<div class="control-group">
						<div class="controls">
							<input type="text" class="form-control input_Vazio" name="valortotal" aria-describedby="basic-addon1" placeholder="Total" disabled/>
						</div>
					</div>		
      			</td>
			</tr>
			<!-- *******************************************FINAL DA SEGUNDA LINHA DO MODAL************************************* -->
			<tr>
      			<td colspan="3">
      				<div class="control-group">
						<div class="controls">
							<span class="help-inline">Fornecedor</span>
						</div>
					</div>
					
					<div class="control-group">
						<div class="controls">
						<select class="form-control input_Vazio"  name="id_fornecedorprestador" placeholder="Fornecedor" style="max-width:590px">
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

      	</table>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>
        <?php echo form_submit(array('name'=>'cadastrarNovoMaterialOrdem'),'Incluir Material', 'class="btn btn-success" id="validar_Enviar"'); ?>
       </div>
    </div>
  </div>
</div>