	<div>
		<?php echo anchor('main/redirecionar/criar-novo_Contrato_Ata', '<button class="btn btn-info pull-center"> Criar novo Contrato/Ata </button>')?>
	</div>

	<table class="table table-striped table-hover table-condensed" id="tabela">
		<thead> 
			<tr>
				<th class="span3">Número do Contrato/Ata</th>
				<th class="span2">Processo Administrativo</th>
				<th class="span2">Data Homologação</th>
				<th class="span2">Número da Licitação</th>
				<th class="span2">Alterar</th>
			</tr>
		</thead>

		<tbody>
				<?php

					foreach ($pack['contratoata'] as $contratoata) {
						echo "<tr>";
						    echo "<td>$contratoata->numerocontratoata</td>";
						    echo "<td>$contratoata->procadmin</td>";

						    $data=$contratoata->datahomologacao;
						    $dataatual = explode("-",$data);
							$ano = $dataatual['0'];//ano
							$mes = $dataatual['1'];//mes
							$dia = $dataatual['2'];//dia
							$datahomologacao = $dia.'/'.$mes.'/'.$ano;

							echo '<td>'.$datahomologacao.'</td>';
							echo "<td>$contratoata->numerolicitacao</td>";
							echo '<td>'.anchor('edicoes/editar_Contrato_Ata/'.$contratoata->id_contratoata.'','Editar').'</td>';
						echo "</tr>";
					}
				?>
		</tbody>
	</table>