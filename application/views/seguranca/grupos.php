	<div>
		<?php echo anchor('main/redirecionar/seguranca-novo_Grupo', '<button class="btn btn-info pull-center"> Criar novo grupo </button>')?>
	</div>

	<table class="table table-striped table-hover table-condensed" id="tabela">
		<thead> 
			<tr>
				<th class="span3">ID</th>
				<th class="span2">Nome do grupo</th>
				<th class="span2">Descrição</th>
				<th class="span2">Alterar</th>
			</tr>
		</thead>

		<tbody>
				<?php

					foreach ($pack['grupo'] as $group) {
					     $group_id = $group->id_grupo;
						 $group_nome = $group->nome_grupo;
						 $group_email = $group->descricao_grupo;

						 echo "<tr>";
						     echo "<td>$group_id</td>";
						     echo "<td>$group_nome</td>";
						     echo "<td>$group_email</td>";
						     if($group_nome != 'Administrador'){ /*Grupo Administrador não pode ser editado*/
						     echo '<td>'.anchor('seguranca/editarGrupo/'.$group_nome.'','Editar').'</td>';
						 		}else{
						 	 echo '<td>ESTE GRUPO NÃO ACEITA EDIÇÕES</td>';	
						 		}
						 echo "</tr>";
					}
				?>
		</tbody>
	</table>