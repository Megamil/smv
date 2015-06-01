<script type="text/javascript" src="<?php echo base_url(); ?>style/js/calc.js"></script>

<?php echo form_fieldset("Novo Item"); ?>
<form action="/smv/criar/novo_Item" method="post" accept-charset="utf-8" name="form">
<script type="text/javascript">

	jQuery(document).ready(function(){

		$('#novoGrupo').click(function(){

			localStorage.setItem('codigomontadora', $("#codigomontadora").val());
			localStorage.setItem('descricao', $("#descricao").val());
			localStorage.setItem('id_unidademedida', $("#id_unidademedida").val());
			localStorage.setItem('nomegrupoitens', $("#nomegrupoitens").val());
			localStorage.setItem('id_montadora1', $("#id_montadora1").val());
			localStorage.setItem('id_montadora2', $("#id_montadora2").val());
			localStorage.setItem('localizacao', $("#localizacao").val());
			localStorage.setItem('gaveta', $("#gaveta").val());
			localStorage.setItem('id_estadoitem', $(".id_estadoitem").val());
			localStorage.setItem('precobruto', $("#preco").val());
			localStorage.setItem('desconto', $("#desconto").val());
			localStorage.setItem('precoliquido', $("#resultado").val());

		});

		$('#cancelarNovoGrupo').click(function(){

			$('#nomegrupoitens').val('');

		});
	 
			if(localStorage.getItem('codigomontadora')){ $("#codigomontadora").val(localStorage.getItem('codigomontadora')); }
			if(localStorage.getItem('descricao')){ $("#descricao").val(localStorage.getItem('descricao')); }
			if(localStorage.getItem('id_unidademedida')){ $("#id_unidademedida").val(localStorage.getItem('id_unidademedida')); }
			if(localStorage.getItem('id_montadora1')){ $("#id_montadora1").val(localStorage.getItem('id_montadora1')); }
			if(localStorage.getItem('id_montadora2')){ $("#id_montadora2").val(localStorage.getItem('id_montadora2')); }
			if(localStorage.getItem('localizacao')){ $("#localizacao").val(localStorage.getItem('localizacao')); }
			if(localStorage.getItem('gaveta')){ $("#gaveta").val(localStorage.getItem('gaveta')); }

			$(".id_estadoitem").each(function(){

				if($(this).val() == localStorage.getItem('id_estadoitem')){
					$(this).attr('checked', 'checked');
				}

			});

			if(localStorage.getItem('precobruto')){ $("#preco").val(localStorage.getItem('precobruto')); }
			if(localStorage.getItem('desconto')){ $("#desconto").val(localStorage.getItem('desconto')); }
			if(localStorage.getItem('precoliquido')){ $("#resultado").val(localStorage.getItem('precoliquido')); }

			localStorage.clear();
		
	});
</script>

	<div class="erro_Campo_Vazio" ></div>
	<table border="0">
		<thead align="left"><span id="basic-addon1"></span></thead>
		<tbody>
		<tr>
			<td colspan="4">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Código Montadora</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls">
						<input type="text" class="form-control input_Vazio" id="codigomontadora" onkeypress='return Numero(event)' value="<?php echo $this->session->flashdata('codigomontadora'); ?>" name="codigomontadora" aria-describedby="basic-addon1" placeholder="Código Montadora" style="max-width:160px"/>
					</div>
				</div>
			</td>
		</tr>
		
		<!-- final da primeira linha da tela -->
		<tr>
			<td valign="top" colspan="3">
					<div class="control-group">
					<div class="controls">
						<span class="help-inline">Descrição</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls">
					<input type="text" class="form-control input_Vazio" name="descricao" id="descricao" value="<?php echo $this->session->flashdata('descricao'); ?>" aria-describedby="basic-addon1" placeholder="Descrição do item" maxlength="100" style="max-width:350px"/>
					</div>
				</div>
			</td>

			<td valign="bottom">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Unidade</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls">
						<select class="form-control input_Vazio" name="id_unidademedida" id="id_unidademedida" placeholder="Unidade de Medida" style="max-width:160px">
							<option>Selecione...</option>
							<?php 
								foreach ($pack['unidademedida'] as $unidademedida) {
									if($this->session->flashdata('id_unidademedida') == $unidademedida->id_unidademedida){
										echo '<option selected value="'.$unidademedida->id_unidademedida.'">'.$unidademedida->unidademedida.'</option>';
									} else {
										echo '<option value="'.$unidademedida->id_unidademedida.'">'.$unidademedida->unidademedida.'</option>';
									}
								}
							?>
						</select>
					</div>
				</div>
			</td>
		</tr>
		<!-- final da segunda linha -->
		<tr>
			<td valign="bottom">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Grupo Itens</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls">
						<select class="form-control input_Vazio" name="id_grupoitens" id="id_grupoitens" placeholder="Grupo Itens">
							<option>Selecione...</option>
							<?php 
								foreach ($pack['grupoitens'] as $grupoitens) {
									if($this->session->flashdata('id_grupoitens') == $grupoitens->id_grupoitens){
										echo '<option selected value="'.$grupoitens->id_grupoitens.'">'.$grupoitens->grupoitens.'</option>';
									} else {
										echo '<option value="'.$grupoitens->id_grupoitens.'">'.$grupoitens->grupoitens.'</option>';
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
						<div class="btn btn-info pull-center" data-toggle="modal" data-target="#modelAdicionarGrupo">NOVO</div>
				</div>
			</td>
			</td>

			<td valign="top">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Marca veículo utilização</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls">
					<select class="form-control" style="max-width:160px" name="id_montadora1" id="id_montadora1" placeholder="Marca do Item 1">

						<option>Selecione...</option>

						<?php 

							foreach ($pack['montadora'] as $montadora) {
								
								if($this->session->flashdata('id_montadora1') == $montadora->id_montadora){

									echo '<option selected value="'.$montadora->id_montadora.'">'.$montadora->montadora.'</option>';
								
								} else {
								
									echo '<option value="'.$montadora->id_montadora.'">'.$montadora->montadora.'</option>';
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
						<span class="help-inline">Marca veículo utilização</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls">
					<select class="form-control" style="max-width:160px" name="id_montadora2" id="id_montadora2" placeholder="Marca do Item 2">

						<option>Selecione...</option>

						<?php 

							foreach ($pack['montadora'] as $montadora) {
								
								if($this->session->flashdata('id_montadora2') == $montadora->id_montadora){

									echo '<option selected value="'.$montadora->id_montadora.'">'.$montadora->montadora.'</option>';
								
								} else {
								
									echo '<option value="'.$montadora->id_montadora.'">'.$montadora->montadora.'</option>';
								}
							
							}

						?>

					</select>
					</div>
				</div>
			</td>
		</tr>
		<!-- final da terceira linha -->
		<tr>
			<td valign="top" colspan="2">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Localização</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls">
					<input type="text" class="form-control" name="localizacao" id="localizacao" value="<?php echo $this->session->flashdata('localizacao'); ?>" aria-describedby="basic-addon1" placeholder="Localização" />
					</div>
				</div>
			</td>

			<td valign="top">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Gaveta</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls">
					<input type="text" class="form-control" name="gaveta" id="gaveta" value="<?php echo $this->session->flashdata('gaveta'); ?>" aria-describedby="basic-addon1" placeholder="Gaveta" style="max-width:120px" maxlength="20"/>
					</div>
				</div>
			</td>
			
			<td valign="top">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Status</span>
					</div>
				</div>

				<?php 
					foreach ($pack['estadoitem'] as $estadoitem) {
						if($estadoitem->id_estadoitem == $this->session->flashdata('id_estadoitem')) {
							echo '<input type="radio" name="id_estadoitem" class="id_estadoitem" aria-describedby="basic-addon1" value="'.$estadoitem->id_estadoitem.'" checked /> '.$estadoitem->estadoitem.' ';
						} else {
							echo '<input type="radio" name="id_estadoitem" class="id_estadoitem" aria-describedby="basic-addon1" value="'.$estadoitem->id_estadoitem.'"/> '.$estadoitem->estadoitem.' ';
						}
					}
				 ?>
			</td>

		</tr>
		<!-- final da quarta linha da tela -->
		<tr>
			<td valign="top">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Preço Bruto</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls">
						<input type="text" class="form-control" id="preco" value="<?php echo $this->session->flashdata('precobruto'); ?>" onkeypress='return SomenteNumero(event)' name="precobruto" aria-describedby="basic-addon1" placeholder="Preço Bruto" style="max-width:120px" />
					</div>
				</div>
			</td>

			<td valign="top">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Desconto %</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls">
						<input type="text" class="form-control" id="desconto" value="<?php echo $this->session->flashdata('desconto'); ?>" onkeypress='return SomenteNumero(event)' name="desconto" aria-describedby="basic-addon1" placeholder="Desconto %" style="max-width:100px"/>
					</div>
				</div>
			</td>

			<td valign="top">
				<div class="control-group">
					<div class="controls">
						<span class="help-inline">Preço Líquido</span>
					</div>
				</div>
			
				<div class="control-group">
					<div class="controls">
					<input type="text" class="form-control" id="resultado" name="precoliquido" aria-describedby="basic-addon1" placeholder="Preço Liquido" style="max-width:120px" disabled/>
					</div>
				</div>
			</td>
		</tr>
	
		</tbody>
</table>


	<?php echo form_submit(array('name'=>'cadastrarNovoContratoAta'),'Criar Item', 'class="btn btn-success" id="validar_Enviar"'); ?>
	<?php echo anchor('main/redirecionar/estoque-itens', '<div class="btn btn-danger pull-center"> Cancelar </div>')?>

<?php echo form_fieldset_close(); ?>
</form>

<!--//////////////////////////////////////////////////////////////////////////////////////////////////
	/////////////////////////////// MODAL PARA INCLUIR GRUPO /////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////////////////////////////-->
	
<div class="modal fade" id="modelAdicionarGrupo" tabindex="-1" role="dialog" aria-labelledby="modelAdicionar" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="/smv/criar/novo_Grupo_Itens_Interno" method="post" accept-charset="utf-8"> 
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Sair</span></button>
        <h4 class="modal-title" id="modelDeletar"> Cancelar inclusão do Grupo de Itens?</h4>
      </div>

      <div class="modal-body">
      	
		<table border="0">
			<thead align="left"><span id="basic-addon1"></span></thead>
			<tbody>
				<tr>
					<td>
						<div class="input-group">
							<span class="input-group-addon">Grupo de Itens</span>
							<input class="form-control" type="text" name="nomegrupoitens" id="nomegrupoitens" aria-describedby="basic-addon1" size="80" maxlength="30" placeholder="Nome do Grupo dos Itens"/>
						</div>
					</td>
				</tr>
			</tbody>
		</table>

      </div>

      <div class="modal-footer">
        <button type="reset" class="btn btn-info" data-dismiss="modal" id="cancelarNovoGrupo">Cancelar</button>
        <button type="submit" class="btn btn-success" id="novoGrupo">Incluir Grupo</button>
      </div>
    	</form>
    </div>
  </div>
</div>