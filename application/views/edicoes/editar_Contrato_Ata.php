<!--Usado para preencher alguns campos-->
<script type="text/javascript" src="<?php echo base_url(); ?>style/js/json.js"></script>
<?php echo form_fieldset("Editar Contrato/Ata"); 
$form = array('name' => 'form'); 
echo form_open_multipart("edicoes/editando_Contrato_Ata",$form); ?>

<script type="text/javascript">

	jQuery(document).ready(function(){

		$('#cancelarNovoObjeto').click(function(){

			$('#objetotitulo').val('');
			$('#objetotexto').val('');


		});
	 
		
	});
</script>

	<div class="erro_Campo_Vazio" ></div>

	<?php echo form_hidden('id_contratoata',$pack['contratoata']->row()->id_contratoata); ?>

	<table border="0">
		<thead align="left"><span id="basic-addon1"></span></thead>
		<tbody>
		<tr>
			<td>
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Número/Ano/Emissor</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls">
						<input type="text" class="form-control input_Vazio nem" value="<?php echo $pack['contratoata']->row()->numerocontratoata ?>" name="numerocontratoata" aria-describedby="basic-addon1" placeholder="Número/Ano/Emissor" />
					</div>
				</div>
			</td>
		
			<td valign="top">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Início da Vigência</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls">
						<!--Previne erro de 01/01/1970 que o PHP cria quando usamos a função strtotime sem uma variável vazia.-->
					<?php if($pack['contratoata']->row()->dtinivigencia != '') {$dtinivigencia = date("d-m-Y", strtotime($pack['contratoata']->row()->dtinivigencia));} else {$dtinivigencia = '';} ?>
						<input type="text" class="form-control input_Vazio dataValidar" value="<?php echo $dtinivigencia; ?>"  name="dtinivigencia" aria-describedby="basic-addon1" placeholder="Data Início" />
					</div>
				</div>
			</td>

			<td valign="top">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Término da Vigência</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls">
						<!--Previne erro de 01/01/1970 que o PHP cria quando usamos a função strtotime sem uma variável vazia.-->
					<?php if($pack['contratoata']->row()->dtfimvigencia != '') {$dtfimvigencia = date("d-m-Y", strtotime($pack['contratoata']->row()->dtfimvigencia));} else {$dtfimvigencia = '';} ?>
					<input type="text" class="form-control input_Vazio dataValidar" value="<?php echo $dtfimvigencia; ?>"  name="dtfimvigencia" aria-describedby="basic-addon1" placeholder="Data Fim" />
					</div>
				</div>
			</td>
		</tr>
		<!-- final da primeira linha da tela -->
		<tr>
			<td valign="top">
					<div class="control-group">
					<div class="controls">
						<span class="help-inline">Prorrogação</span>
					</div>
				</div>
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Documento: número/ano/emissor</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls">
					<input type="text" class="form-control nem" value="<?php echo $pack['contratoata']->row()->numanoemissorprorrogacao ?>"  name="numanoemissorprorrogacao" aria-describedby="basic-addon1" placeholder="Número Prorrogação" maxlength="15" />
					</div>
				</div>
			</td>
			
			<td valign="bottom">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Início da Vigência</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls">
					<!--Previne erro de 01/01/1970 que o PHP cria quando usamos a função strtotime sem uma variável vazia.-->
					<?php if($pack['contratoata']->row()->dtinivigenciaprorrog != '') {$dtinivigenciaprorrog = date("d-m-Y", strtotime($pack['contratoata']->row()->dtinivigenciaprorrog));} else {$dtinivigenciaprorrog = '';} ?>
						<input type="text" class="form-control dataValidar" value="<?php echo $dtinivigenciaprorrog; ?>"  name="dtinivigenciaprorrog" aria-describedby="basic-addon1" placeholder="Data Início"/>
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
					<!--Previne erro de 01/01/1970 que o PHP cria quando usamos a função strtotime sem uma variável vazia.-->
					<?php if($pack['contratoata']->row()->dtfimvigenciaprorrog != '') {$dtfimvigenciaprorrog = date("d-m-Y", strtotime($pack['contratoata']->row()->dtfimvigenciaprorrog));} else {$dtfimvigenciaprorrog = '';} ?>
					<input type="text" class="form-control dataValidar" value="<?php echo $dtfimvigenciaprorrog; ?>"  name="dtfimvigenciaprorrog" aria-describedby="basic-addon1"  placeholder="Data Fim"/>
					</div>
				</div>
			</td>
		</tr>
	<!-- final da segunda linha da tela -->
		<tr>
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
								
								if($pack['contratoata']->row()->id_fornecedorprestador == $fornecedorprestador->id_fornecedorprestador){

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
	<!-- final da terceira linha da tela -->
		<tr>
			<td valign="top">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">CNPJ</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls">
					<input type="text" class="form-control input_Vazio" value="<?php echo $pack['contratoata']->row()->cnpj; ?>"  name="cnpj" id="cnpjValidar" aria-describedby="basic-addon1" placeholder="CNPJ" />
					</div>
				</div>
			</td>

			<td valign="top">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Processo Administrativo</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls">
					<input type="text" class="form-control input_Vazio processo" value="<?php echo $pack['contratoata']->row()->procadmin; ?>" name="procadmin" aria-describedby="basic-addon1" placeholder="Nº Processo" />
					</div>
				</div>
			</td>
		</tr>
		<!-- final da quarta linha da tela -->
		<tr>
			<td valign="top">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Modalidade Licitação</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls">

					<select class="form-control input_Vazio" name="id_modalidadelicitacao" placeholder="Modalidade">
						<option>Selecione...</option>

						<?php 

							foreach ($pack['modalidadedelicitacao'] as $modalidadedelicitacao) {
								
								if($pack['contratoata']->row()->id_modalidadelicitacao == $modalidadedelicitacao->id_modalidadedelicitacao){

									echo '<option selected value="'.$modalidadedelicitacao->id_modalidadedelicitacao.'">'.$modalidadedelicitacao->modalidadedelicitacao.'</option>';

								} else {

									echo '<option value="'.$modalidadedelicitacao->id_modalidadedelicitacao.'">'.$modalidadedelicitacao->modalidadedelicitacao.'</option>';

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
						<span class="help-inline">Licitação</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls">
					<input type="text" class="form-control input_Vazio nem" value="<?php echo $pack['contratoata']->row()->numerolicitacao; ?>" name="numerolicitacao" aria-describedby="basic-addon1" placeholder="Nº Licitação" />
					</div>
				</div>
			</td>

			<td valign="top">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Data da Homologação</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls">
					<!--Previne erro de 01/01/1970 que o PHP cria quando usamos a função strtotime sem uma variável vazia.-->
					<?php if($pack['contratoata']->row()->datahomologacao != '') {$datahomologacao = date("d-m-Y", strtotime($pack['contratoata']->row()->datahomologacao));} else {$datahomologacao = '';} ?>
					<input type="text" class="form-control input_Vazio dataValidar" value="<?php echo $datahomologacao; ?>" name="datahomologacao" aria-describedby="basic-addon1" placeholder="Data Homologação" />
					</div>
				</div>
			</td>
		</tr>
	<!-- final da quinta linha da tela -->
		<tr>
			<td valign="top" colspan="2">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Objeto - Título</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls">
					<select class="form-control input_Vazio" name="id_objetotitulo" id="objeto" placeholder="Objeto">
						<option>Selecione...</option>
						<?php 
							foreach ($pack['objeto'] as $objeto) {
								if($pack['contratoata']->row()->id_objetotitulo == $objeto->id_objeto){
									echo '<option selected value="'.$objeto->id_objeto.'">'.$objeto->objetotitulo.'</option>';
								} else {
									echo '<option value="'.$objeto->id_objeto.'">'.$objeto->objetotitulo.'</option>';
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
					<div class="btn btn-success pull-center" data-toggle="modal" data-target="#modelAdicionar">NOVO</div>
					</div>
				</div>
			</td>
		</tr>
		<!-- final da sexta linha da tela -->
		<tr>
			<td colspan="3">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Objeto</span>
					</div>
				</div>

				<div class="control-group">
					<div class="controls">
					<textarea class="form-control" name="objetotexto" id="objetoTexto" cols="86" rows="3" disabled></textarea>
					</div>
				</div>
			</td>
		</tr>
		<!-- final da setima linha da tela -->
		<tr>
			<td valign="top">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Prazo de Entrega</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls">
					<input type="text" class="form-control input_Vazio" value="<?php echo $pack['contratoata']->row()->prazoentrega; ?>" name="prazoentrega" aria-describedby="basic-addon1" placeholder="Prazo de Entrega" />
					</div>
				</div>
			</td>
			<td>
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Prazo de pagamento</span>
					</div>
				</div>
	
				<div class="control-group">
					<div class="controls">
					<input type="text" class="form-control input_Vazio" value="<?php echo $pack['contratoata']->row()->prazopagto; ?>" name="prazopagto" aria-describedby="basic-addon1" placeholder="Prazo de Pagamento" />
					</div>
				</div>
			</td>
			<td>
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Orgãos Participantes</span>
					</div>
				</div>
	
				<div class="control-group">
					<div class="controls">
					<input type="text" class="form-control" value="<?php echo $pack['contratoata']->row()->orgaosparticipantes; ?>" name="orgaosparticipantes" aria-describedby="basic-addon1" placeholder="Orgãos participantes" />
					</div>
				</div>
			</td>
		</tr>
		<!-- final da oitava linha da tela -->
		<tr>
			<td><input type="file" class="form-control" name="userfile" aria-describedby="basic-addon1" size="52" placeholder="Nome do Anexo" maxlength="100" /></td>
			<td><?php echo anchor('main/redirecionar/', '<div class="btn btn-warning pull-center"> Excluir Anexo </div>')?></td>
		</tr>
		</tbody>
</table>

	<?php echo form_submit(array('name'=>'cadastrarNovoContratoAta'),'Editar Contrato/Ata', 'class="btn btn-success" id="validar_Enviar"'); ?>
	<?php echo anchor('main/redirecionar/contratoata-Contrato_Ata', '<div class="btn btn-danger pull-center"> Cancelar </div>')?>

<?php echo form_fieldset_close(); ?>

<!--//////////////////////////////////////////////////////////////////////////////////////////////////
	/////////////////////////////// Modal para Adicionar novo objeto /////////////////////////////////
	//////////////////////////////////////////////////////////////////////////////////////////////////-->

<div class="modal fade" id="modelAdicionar" tabindex="-1" role="dialog" aria-labelledby="modelAdicionar" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="errorModalObj"></div>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Sair</span></button>
        <h4 class="modal-title" id="modelDeletar"> Cancelar a adição do Obejto?</h4>
      </div>

      <div class="modal-body">
      	<table border="0">
			<thead align="left"><span id="basic-addon1"></span></thead>
				<tbody>
					<tr>
						<td>
							<div class="input-group">
								<span class="input-group-addon">Título</span>
								<input type="text" class="form-control" id="nomeobjetotitulo" name="nomeobjetotitulo" aria-describedby="basic-addon1" size="52" placeholder="Título do Objeto" maxlength="100" />
							</div>
						</td>
					</tr>
					<tr>
						<td valign="top">
							<div class="input-group">
								<span class="input-group-addon">Texto</span>
								<textarea name="nomeobjetotexto" id="nomeobjetotexto" type="text" cols="53" rows="10" placeholder="Texto do Objeto" maxlength="700"></textarea>
							</div>
						</td>
					</tr>
				</tbody>
		</table>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-dismiss="modal" id="cancelarNovoObjeto">Cancelar</button>
        <button type="button" class="btn btn-success" id="novoObjeto">Criar Objeto</button>
        </div>
    </div>
  </div>
</div>

<!--//////////////////////////////////////////////////////////////////////////////////////////////////
	/////////////////////////////// MODAL PARA INCLUIR ANEXO /////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////////////////////////////-->

<div class="modal fade" id="modelAdicionarAnexo" tabindex="-1" role="dialog" aria-labelledby="modelAdicionar" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
		<form method="post" action="uploadanexo.php" enctype="multipart/form-data" name="enviaranexos">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Sair</span></button>
	        <h4 class="modal-title" id="modelDeletar">Cancelar inclusão do anexo?</h4>
	      </div>

	      <div class="modal-body">
	      	<table border="0">
				<thead align="left"><span id="basic-addon1"></span></thead>
					<tbody>
						<tr>
							<td>
								<div class="input-group">
									<input type="file" class="form-control" name="anexo" aria-describedby="basic-addon1" size="52" placeholder="Nome do Anexo" maxlength="100" />
								</div>
							</td>
						</tr>
					</tbody>
			</table>
	      </div>

	      <div class="modal-footer">
	        <button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>
	        <input type="submit" class="btn btn-warning" name="enviar" value="Enviar">
	       </div>
    	</form>
    </div>
  </div>
</div>