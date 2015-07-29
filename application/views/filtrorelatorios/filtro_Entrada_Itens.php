<script>
	
$(document).ready(function(){

	$("#enviarFiltro").click(function(){

		var inicio = new Date($("#dtinicioper").val());
		var fim = new Date($("#dtfimper").val());

		if(inicio > fim) {

			alert("A data de fim não pode ser menor que a de inicio.")
			return false;

		}

		if($("#dtfimcod").val() != '' && parseInt($("#dtiniciocod").val()) > parseInt($("#dtfimcod").val())) {

			alert("O código de fim não pode ser menor que o de inicio.")
			return false;

		}
		

	});

});


</script>

<?php echo form_open("filtros/realizar_filtro_entrada"); ?>

	<div class="erro_Campo_Vazio" ></div>

	<input type="hidden" value="relatorios-relatorio_Entrada_Itens" name="caminho">
	
	<table border="0">
		<tr>
			<td>
				<div>
					<span>Período de</span>
				</div>
			</td>
			<td>
				<div>
					<input type="date" class="form-control" name="dtinicioper" id="dtinicioper" aria-describedby="basic-addon1" placeholder="Data Inicio" />
				</div>
			</td>	
			<td>
				<div>
					<span>a</span>
				</div>
			</td>
			<td>
				<div>
					<input type="date" class="form-control" name="dtfimper" id="dtfimper" aria-describedby="basic-addon1" placeholder="Data Fim" />
				</div>
			</td>
		</tr>

		<tr>
			<td>
				<div>
					<span>Código de</span>
				</div>
			</td>
			<td>
				<div>
					<input type="text" class="form-control" name="dtiniciocod" id="dtiniciocod" aria-describedby="basic-addon1" placeholder="Inicio" />
				</div>
			</td>	
			<td>
				<div>
					<span>a</span>
				</div>
			</td>
			<td>
				<div>
					<input type="text" name="dtfimcod" id="dtfimcod" class="form-control" aria-describedby="basic-addon1" placeholder="Fim" />
				</div>
			</td>
		</tr>

		<tr>
			<td>
				<div>
					<span>Grupo</span>
				</div>
			</td>
			<td colspan="3">
				<div>
					<select name="grupoitens" id="grupoitens" placeholder="Grupo Itens" class="form-control" value="<?php echo $this->session->flashdata('grupoitens'); ?>">
						<option>Selecione...</option>
						<?php 
							foreach ($pack['grupoitens'] as $grupoitens) {
								if($this->session->flashdata('grupoitens') == $grupoitens->id_grupoitens){
									echo '<option selected value="'.$grupoitens->id_grupoitens.'">'.$grupoitens->id_grupoitens.'</option>';
								} else {
									echo '<option value="'.$grupoitens->id_grupoitens.'">'.$grupoitens->grupoitens.'</option>';
								}
							}
						?>
				</div>
			</td>
		</tr>

		<tr>
			<td>
				<div>
					<span>Fornecedor</span>
				</div>
			</td>
			<td colspan="3">
				<div>
					<select name="fornecedorprestador" id="fornecedorprestador" class="form-control" placeholder="Grupo Itens" value="<?php echo $this->session->flashdata('fornecedorprestador'); ?>">
						<option>Selecione...</option>
						<?php 
							foreach ($pack['fornecedorprestador'] as $fornecedorprestador) {
								if($this->session->flashdata('fornecedorprestador') == $fornecedorprestador->id_fornecedorprestador){
									echo '<option selected value="'.$fornecedorprestador->id_fornecedorprestador.'">'.$fornecedorprestador->id_fornecedorprestador.'</option>';
								} else {
									echo '<option value="'.$fornecedorprestador->id_fornecedorprestador.'">'.$fornecedorprestador->nome.'</option>';
								}
							}
						?>
				</div>
			</td>
		</tr> 
	
	</table>
	
	<button type="submit" class="btn btn-success" id="enviarFiltro">Exibir Relatório</button>

	<?php echo form_fieldset_close(); ?>
<?php echo form_close() ?>