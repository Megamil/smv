<!--Usado para preencher alguns campos-->
<script type="text/javascript" src="<?php echo base_url(); ?>style/js/jsonOS.js"></script>

<?php 
	echo form_fieldset("Editar Ordem de Serviço"); 
	$form = array('name' => 'form'); 
	echo form_open("edicoes/editando_Ordem_Servico",$form); 
	echo form_hidden('id_ordemservico', $pack['ordemservico']->row()->id_ordemservico); 
?>

	<div class="erro_Campo_Vazio" ></div>
	<table border="0">
		<thead align="left"><span id="basic-addon1"></span></thead>
		<tbody>
		<tr>
			<td>
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Número Order de serviço</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls">
						<input type="text" class="form-control" value="<?php echo $pack['ordemservico']->row()->id_ordemservico; ?>" name="id_ordemservico" id="id_ordemservico" aria-describedby="basic-addon1" placeholder="Número" style="max-width:100px" disabled/>
					</div>
				</div>
			</td>

			<td>
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Número Solicitação</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls">
						<input type="text" class="form-control" value="<?php echo $pack['ordemservico']->row()->id_solicitacao; ?>" name="id_solicitacao" id="id_solicitacao" aria-describedby="basic-addon1" placeholder="Número" style="max-width:100px" disabled/>
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
					<select class="form-control input_Vazio"  name="id_fornecedorprestador" id="id_fornecedorprestador" placeholder="Fornecedor" style="max-width:590px">
						<option>Selecione...</option>
						<?php 
							foreach ($pack['fornecedorprestador'] as $fornecedorprestador) {
								if($this->session->flashdata('id_fornecedorprestador') == $fornecedorprestador->id_fornecedorprestador){

									echo '<option selected value="'.$fornecedorprestador->id_fornecedorprestador.'">'.$fornecedorprestador->nome.'</option>';

								} else if($this->session->flashdata('id_fornecedorprestador') == '' && $pack['ordemservico']->row()->id_fornecedorprestador == $fornecedorprestador->id_fornecedorprestador) {

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
						<input type="text" class="form-control" name="prefixo" id="dt" aria-describedby="basic-addon1" placeholder="Número" style="max-width:100px" disabled/>
					</div>

				</div>
			</td>
				<td colspan="3">
					<div class="control-group">
						<div class="controls">
						<span class="help-inline">Unidade</span>
						</div>
					</div>

					<div class="control-group">
						<div class="controls input-group">
							<select class="form-control input_Vazio" name="unidadesolicitante" id="unidadesolicitante" placeholder="Unidade Solicitante" disabled>
									<?php 
										foreach ($pack['unidadesaude'] as $unidadesaude) {

												echo '<option value="'.$unidadesaude->cnes.'">'.$unidadesaude->unidadesaude.'</option>';


										foreach ($pack['unidadeutilizadora'] as $unidadeutilizadora) {

											if(count($unidadeutilizadora->depto) > 0) {$departamento = 'Depto: '.$unidadeutilizadora->depto.' / ';} else {$departamento = '';}
											if(count($unidadeutilizadora->divisao) > 0) {$divisao = 'Divisão: '.$unidadeutilizadora->divisao.' / ';} else {$divisao = '';}
											if(count($unidadeutilizadora->secao) > 0) {$secao = 'Seção: '.$unidadeutilizadora->secao.' / ';} else {$secao = '';}
											if(count($unidadeutilizadora->setor) > 0) {$setor = 'Setor: '.$unidadeutilizadora->setor;} else {$setor = '';}

											echo '<option value="'.$unidadeutilizadora->id_unidadeutilizadora.'">'.$departamento.' '.$divisao.' '.$secao.' '.$setor.'</option>';

										}

										}
									?>
							</select>
						</div>
					</div>
				</td>
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
					<input type="text" class="form-control placaValidar" id="placa" name="placa" aria-describedby="basic-addon1" placeholder="Placa" style="max-width:95px" disabled/>
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
						<input type="text" class="form-control" name="modelo" id="modelo" aria-describedby="basic-addon1" placeholder="Modelo" style="max-width:220px" disabled/>
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
					<input type="text" class="form-control" id="marca" name="marca" aria-describedby="basic-addon1"  placeholder="Marca" style="max-width:220px" disabled/>
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
						<input type="text" class="form-control input_Vazio" id="tipo" name="tipo" aria-describedby="basic-addon1" placeholder="Tipo" style="max-width:180px" disabled />
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
					<input type="text" class="form-control input_Vazio" id="numeromotor" name="numeromotor" aria-describedby="basic-addon1" placeholder="Nº Motor" style="max-width:185px" maxlength="20" disabled/>
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
					<input type="text" class="form-control input_Vazio" id="detalhemotor" name="detalhemotor" aria-describedby="basic-addon1" placeholder="Detalhe Motor" style="max-width:460px" disabled/>
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
					<input type="text" class="form-control input_Vazio" id="km" name="km" aria-describedby="basic-addon1" placeholder="KM" style="max-width:100px" disabled/>
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
					<textarea class="form-control" id="defeitoapresentado" name="defeitoapresentado" class="input_Vazio" cols="97" rows="1" placeholder="Defeito apresentado" disabled></textarea>
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
					<?php if($this->session->flashdata('dataentrada') == '') {
							if($pack['ordemservico']->row()->dataentrada != '') {$dataentrada = date("d-m-Y", strtotime($pack['ordemservico']->row()->dataentrada));} else {$dataentrada = '';} 
							echo '<input type="text" class="form-control input_Vazio dataValidar" value="'.$dataentrada.'" name="dataentrada" id="dataentrada" aria-describedby="basic-addon1" placeholder="Data Entrada" style="max-width:100px"/>';
						
						} else {
							if($this->session->flashdata('dataentrada') != '') {$dataentrada = date("d-m-Y", strtotime($this->session->flashdata('dataentrada')));} else {$dataentrada = '';} 
							echo '<input type="text" class="form-control input_Vazio dataValidar" value="'.$dataentrada.'" name="dataentrada" id="dataentrada" aria-describedby="basic-addon1" placeholder="Data Entrada" style="max-width:100px"/>';

						} 
					
					?>
					
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

					<?php if($this->session->flashdata('observacoes') == '') {
							
							echo '<textarea class="form-control" name="observacoes" id="observacoes" class="input_Vazio" cols="97" rows="1" placeholder="Observações">'.$pack['ordemservico']->row()->observacoes.'</textarea>';

						} else {

							echo '<textarea class="form-control" name="observacoes" id="observacoes" class="input_Vazio" cols="97" rows="1" placeholder="Observações">'.$this->session->flashdata('observacoes').'</textarea>';

						} 
					
					?>

					
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


					<?php if($this->session->flashdata('datasaida') == '') {
							if($pack['ordemservico']->row()->datasaida != '') {$datasaida = date("d-m-Y", strtotime($pack['ordemservico']->row()->datasaida));} else {$datasaida = '';} 
							echo '<input value="'.$datasaida.'" type="text" class="form-control input_Vazio dataValidar" name="datasaida" id="datasaida"  aria-describedby="basic-addon1" placeholder="Data Saída" style="max-width:100px"/>';
						
						} else {
							if($this->session->flashdata('datasaida') != '') {$datasaida = date("d-m-Y", strtotime($this->session->flashdata('datasaida')));} else {$datasaida = '';} 
							echo '<input value="'.$datasaida.'" type="text" class="form-control input_Vazio dataValidar" id="datasaida"  name="datasaida" aria-describedby="basic-addon1" placeholder="Data Saída" style="max-width:100px"/>';

						} 
					
					?>
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
					<select class="form-control input_Vazio" name="id_colaborador" id="id_colaborador" placeholder="Colaborador" style="max-width:240px">
						<option>Selecione...</option>
							<?php 
								foreach ($pack['colaborador'] as $colaborador) {
									if($this->session->flashdata('id_colaborador') == $colaborador->id_colaborador){

										echo '<option selected value="'.$colaborador->id_colaborador.'">'.$colaborador->nome.'</option>';

									} else if ($this->session->flashdata('id_colaborador') == '' && $pack['ordemservico']->row()->id_colaborador == $colaborador->id_colaborador) {
										
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
						<span class="help-inline"><h3> SERVIÇOS EXECUTADOS </h3></span>
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
			<td valign="top" colspan="7">
					<table class="table table-striped table-hover table-condensed">
						<thead> 
							<tr>
								<th class="span2">Descrição</th>
								<th class="span2">Qtd</th>
								<th class="span2">Valor</th>
								<th class="span2">Valor Total</th>
								<th class="span2">Cobrado:</th>
								<th class="span2">Prestador / Colaborador</th>
								<th class="span2">Excluir</th>
							</tr>
						</thead>

						<tbody>
							<?php
								foreach ($pack["subtelaservicos"] as $subtelaservicos) {
									echo "<tr>";
									echo '<input type="hidden" name="id_ordemservico_x_servico" id="bkp_servico" value="'.$subtelaservicos->id_ordemservico_x_servico.'">';
									echo '<td>'.$subtelaservicos->descricao.'</td>';
									echo '<td>'.$subtelaservicos->quantidade.'</td>';
									echo '<td> R$ '.$subtelaservicos->valor.'</td>';
									echo '<td> R$ '.$subtelaservicos->valor * $subtelaservicos->quantidade.'</td>';

									if($subtelaservicos->id_unidademedida == 11) {
										echo '<td> Por Serviço </td>';
									} else if ($subtelaservicos->id_unidademedida == 10){
										echo '<td> Por Hora </td>';
									} else {
										echo '<td> Não definido </td>'; //Não pode cair neste Else,
									}

									if($subtelaservicos->prestador != ''){
										echo '<td>'.$subtelaservicos->prestador.'</td>';
									} else {
										echo '<td>'.$subtelaservicos->colaborador.'</td>';
									}

									//uri 4 usado para saber qual item deletar, uri 5 usado para redirecionar para está ordem de serviço.
									echo '<td>'.anchor('edicoes/excluirServico/'.$subtelaservicos->id_ordemservico_x_servico.'/'.$subtelaservicos->id_ordemservico.'','EXCLUIR').'</td>';
									echo "</tr>";
								}
							?>
						</tbody>
					</table>
			</td>
		</tr>
		<!-- ***************************** FINAL DA NONA LINHA *********************************** -->
		<tr>
			<td colspan="2" align="left" valign="bottom">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline"> <h3>MATERIAIS UTILIZADOS</h3></span>
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
				<table class="table table-striped table-hover table-condensed">
						<thead> 
							<tr>
								<th class="span2">Código Interno</th>
								<th class="span2">Código Montadora</th>
								<th class="span2">Descrição</th>
								<th class="span2">Qtd</th>
								<th class="span2">Valor Unitário</th>
								<th class="span2">Valor Total</th>
								<th class="span2">Prestador / Colaborador</th>
								<th class="span2">Excluir</th>
							</tr>
						</thead>

						<tbody>
							<?php
								foreach ($pack["subtelaitens"] as $subtelaitens) {
									echo "<tr>";
									echo '<input type="hidden" name="id_ordemservico_x_item" id="bkp_itens" value="'.$subtelaitens->id_ordemservico_x_item.'">';
									echo '<td>'.$subtelaitens->id_item.'</td>';
									echo '<td>'.$subtelaitens->codigomontadora.'</td>';
									echo '<td>'.$subtelaitens->descricao.'</td>';
									echo '<td>'.$subtelaitens->quantidade.'</td>';
									echo '<td> R$ '.$subtelaitens->liquido.'</td>';
									echo '<td> R$ '.($subtelaitens->liquido * $subtelaitens->quantidade).'</td>';
									echo '<td>'.$subtelaitens->nome.'</td>';
									//uri 4 usado para saber qual item deletar, uri 5 usado para redirecionar para está ordem de serviço.
									echo '<td>'.anchor('edicoes/excluirItem/'.$subtelaitens->id_ordemservico_x_item.'/'.$subtelaitens->id_ordemservico.'','EXCLUIR').'</td>';
									echo "</tr>";
								}
							?>
						</tbody>
					</table>

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

					<?php if($this->session->flashdata('laudotecnicoocorrencia') == '') {
							
							echo '<textarea class="form-control input_Vazio" name="laudotecnicoocorrencia" id="laudotecnicoocorrencia" class="input_Vazio" cols="127" rows="2" placeholder="Laudo Técnico">'.$pack['ordemservico']->row()->laudotecnicoocorrencia.'</textarea>';

						} else {

							echo '<textarea class="form-control input_Vazio" name="laudotecnicoocorrencia" id="laudotecnicoocorrencia" class="input_Vazio" cols="127" rows="2" placeholder="Laudo Técnico">'.$this->session->flashdata('laudotecnicoocorrencia').'</textarea>';

						} 
					
					?>

					</div>
				</div>
			</td>
		</tr>
		</tbody>
</table>

	<?php echo form_submit(array('name'=>'form'),'Editar Ordem Serviço', 'class="btn btn-success" id="validar_Enviar"'); ?>
	<?php echo anchor('main/redirecionar/ordemservico-ordem_Servico', '<div class="btn btn-danger pull-center"> Cancelar </div>')?>
</form>

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
	<div class="errorModalServico"></div>
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
							<select class="form-control input_Servico_Vazio" id="Servico_id_servicos" name="Servico_id_servicos" placeholder="Servico" style="max-width:300px">
							<option>Selecione...</option>
							<?php 
								foreach ($pack['servico'] as $servico) {
									if($this->session->flashdata('id_servicos') == $servico->id_servicos){
										echo '<option selected value="'.$servico->id_servicos.'">'.$servico->servico.'</option>';
									} else {
										echo '<option value="'.$servico->id_servicos.'">'.$servico->servico.'</option>';
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
						<div class="controls input-group">
						<span class="input-group-addon" id="basic-addon1">R$</span>
							<input type="text" class="form-control" id="Servico_valorunitario" name="Servico_valorunitario" aria-describedby="basic-addon1" placeholder="Valor Unitário" style="max-width:130px" disabled/>
						</div>
					</div>		
      			</td>
      		</tr>
      		<!-- *******************************************FINAL DA PRIMEIRA LINHA DO MODAL************************************* -->
      		<tr>
      			<td>
      				<div class="control-group">
						<div class="controls">
							<input type="radio" name="Servico_id_unidademedida" id="Servico_id_unidademedida1" aria-describedby="basic-addon1" value="11" checked/> <span>Por Serviço</span>
						</div>	
						<div class="controls">
							<input type="radio" name="Servico_id_unidademedida" id="Servico_id_unidademedida2" aria-describedby="basic-addon1" value="10" /> <span>Por Hora</span>
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
							<input type="text" class="form-control input_Servico_Vazio" name="Servico_quantidade" id="Servico_quantidade" aria-describedby="basic-addon1" placeholder="Qtd" style="max-width:80px"/>
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
						<div class="controls input-group">
						<span class="input-group-addon" id="basic-addon1">R$</span>
							<input type="text" class="form-control" name="Servico_valortotal" id="Servico_valortotal" aria-describedby="basic-addon1" placeholder="Total" style="max-width:150px" disabled/>
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
						<select class="form-control"  name="Servico_id_fornecedorprestador" id="Servico_id_fornecedorprestador" placeholder="Fornecedor" style="max-width:590px">
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
							<select class="form-control" name="Servico_id_colaborador" id="Servico_id_colaborador" placeholder="Colaborador" style="max-width:240px">
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
        <button type="button" class="btn btn-success" id="AdicionarServico">Incluir Serviço</button>
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
      <div class="errorModalItem" ></div>
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
							<select class="form-control input_Item_Vazio" name="item_id_servico" id="item_id_servico" placeholder="Servico" >
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
							<input type="text" class="form-control input_Item_Vazio" name="item_quantidade" id="item_quantidade" aria-describedby="basic-addon1" placeholder="Quantidade" style="max-width:130px" />
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
						<div class="controls input-group">
						<span class="input-group-addon" id="basic-addon1">R$</span>
							<input type="text" class="form-control" name="item_valorunitario" id="item_valorunitario" aria-describedby="basic-addon1" placeholder="Valor unitário" disabled/>
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
						<div class="controls input-group">
						<span class="input-group-addon" id="basic-addon1">R$</span>
							<input type="text" class="form-control" name="item_valortotal" id="item_valortotal" aria-describedby="basic-addon1" placeholder="Total" disabled/>
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
						<select class="form-control input_Item_Vazio"  name="item_id_fornecedorprestador" id="item_id_fornecedorprestador" placeholder="Fornecedor" style="max-width:590px">
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
        <button type="button" class="btn btn-info" data-dismiss="modal">Cancelar</button>
        <a  class="btn btn-success" id="AdicionarItem">Incluir Material</a>

       </div>
    </div>
  </div>
</div>