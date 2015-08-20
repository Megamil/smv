<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class dados_iniciais_model extends CI_Model {


	public function usuarios(){ /*Carrega a lista com todos os usuários*/

		$pack = array ($this->db->order_by('id_usuario','asc'),
		'usuario' => $this->db->get('usuarios')->result());

		return $pack;

	}

	public function grupos(){ /*Carrega a lista com todos os grupos*/

		$pack = array ($this->db->order_by('id_grupo','asc'),
		'grupo' => $this->db->get('grupos')->result());

		return $pack;

	}

	public function editar_Usuario(){

		/*Traz os dados do usuário a ser editado*/
		$usuario = $this->db->get_where('usuarios', array ('usuario' => $this->session->userdata('usuarioASerEditado')))->row(); 

 		/*Passa as informações do usuário como a quais grupos pertence*/
		$pack = array (
			'pack' => $this->db->query('
			select G.id_grupo, G.nome_grupo, G.descricao_grupo, GU.fk_usuario > 0 pertence
			from grupos G LEFT OUTER join grupo_usuarios GU on GU.fk_usuario = '.$usuario->id_usuario.' 
			and GU.fk_grupo = G.id_grupo
			group by G.id_grupo, G.nome_grupo, G.descricao_grupo, GU.fk_usuario, pertence order by G.id_grupo;')->result(),
			  
			'usuario' => $usuario
			);

		return $pack;

	}

	public function editar_Grupo(){

	/*Traz os dados do grupo a ser editado*/
	$grupo = $this->db->get_where('grupos', array ('nome_grupo' => $this->session->userdata('grupoASerEditado')))->row();

	/*Passa as informações do grupo como a quais aplicações tem permissão*/
	$pack = array (

		'pack' => $this->db->query('select A.id_aplicacao, A.nome_aplicacao, A.descricao_aplicacao, GA.fk_grupo > 0 pertence
		from aplicacoes A LEFT OUTER join grupo_aplicacoes GA on GA.fk_grupo = '.$grupo->id_grupo.' 
		and GA.fk_aplicacao = A.id_aplicacao
		group by A.id_aplicacao, A.nome_aplicacao, A.descricao_aplicacao, GA.fk_aplicacao, pertence order by A.id_aplicacao')->result(),

		'grupo' => $grupo
		 
		);

		return $pack;

	}

	/*Montadora*/
	public function montadora(){ /*Carrega a lista com todos os grupos*/

		$pack = array ($this->db->order_by('id_montadora','asc'),
		'montadora' => $this->db->get('tbl_montadora')->result());

		return $pack;

	}

	/*Seção*/
	public function nova_Secao(){
		$pack = array (
					'secao' => $this->db->get('tbl_secao')->result(),
					'divisao' => $this->db->get('tbl_divisao')->result(),
					'depto' => $this->db->get('tbl_depto')->result()
				);
		return $pack;
	}

	public function secao(){ /*Carrega a lista com todos os grupos*/

		$pack = array ($this->db->order_by('id_secao','asc'),
		'secao'	=> $this->db->get('tbl_secao')->result());
		return $pack;

	}

	/*Seção*/
	public function editar_Secao(){

		$pack = array (
			'secao' => $this->db->query('select * from tbl_secao where id_secao = '.$this->session->userdata('idEditar').';'),
			'divisao' => $this->db->get('tbl_divisao')->result(),
			'depto' => $this->db->get('tbl_depto')->result());
		return $pack;

	}

	/*Divisão*/
	public function nova_Divisao(){
		$pack = array (
			'divisao' => $this->db->get('tbl_divisao')->result(),
			'depto' => $this->db->get('tbl_depto')->result());
		return $pack;
	}

	public function divisao(){ /*Carrega a lista com todos os grupos*/

		$pack = array ($this->db->order_by('id_divisao','asc'),
		'divisao' => $this->db->get('tbl_divisao')->result());

		return $pack;

	}
	public function editar_Divisao(){

		$pack = array (
			'divisao' => $this->db->query('select * from tbl_divisao where id_divisao = '.$this->session->userdata('idEditar').';'),
			'depto' => $this->db->get('tbl_depto')->result());
		return $pack;

	}

	/*Departamento*/

	public function novo_Departamento(){
		$pack = $this->db->get('tbl_depto')->result();
		return $pack;
	}

	public function departamento(){ /*Carrega a lista com todos os grupos*/

		$pack = array ($this->db->order_by('id_depto','asc'),
		'departamento' => $this->db->get('tbl_depto')->result());

		return $pack;

	}

	public function editar_Departamento(){

		$pack = $this->db->query('select * from tbl_depto where id_depto = '.$this->session->userdata('idEditar').';');
		return $pack;

	}

	/*Inicio das codificações referente as telas de Setor*/
	public function novo_Setor(){
		$pack = array (
					'setor' => $this->db->get('tbl_setor')->result(),
					'secao'	=> $this->db->get('tbl_secao')->result(),
					'divisao' => $this->db->get('tbl_divisao')->result(),
					'depto' => $this->db->get('tbl_depto')->result()
				);
		return $pack;
	}

	public function editar_Setor(){

		$pack = array (
					'setor' => $this->db->query('select * from tbl_setor where id_setor = '.$this->session->userdata('idEditar').';'),
					'secao'	=> $this->db->get('tbl_secao')->result(),
					'divisao' => $this->db->get('tbl_divisao')->result(),
					'depto' => $this->db->get('tbl_depto')->result());
		return $pack;

	}

	public function setor(){ /*Carrega a lista com todos os setores*/
		$pack = array ($this->db->order_by('id_setor','asc'),
		'setor' => $this->db->get('tbl_setor')->result());
		return $pack;

	}
	/*Fim das codificações das telas de Setor*/

	/* ======================================================================================================================= */
	/*Modalidade de licitação*/
	public function modalidade_Licitacao(){ /*Carrega a lista com todos os grupos*/

		$pack = array ($this->db->order_by('id_modalidadedelicitacao','asc'),
		'modalidade' => $this->db->get('tbl_modalidadedelicitacao')->result());

		return $pack;

	}

	public function editar_Montadora(){

		$pack = $this->db->query('select * from tbl_montadora where id_montadora = '.$this->session->userdata('idEditar').';');
		return $pack;

	}

	public function editar_Modalidade_Licitacao(){
		$pack = $this->db->query('select * from tbl_modalidadedelicitacao where id_modalidadedelicitacao = '.$this->session->userdata('idEditar').';');
		return $pack;

	}
	/*----------------------------------------------------------------------------------------------------------*/
	/*Inicio das codificações referente as telas de Dotação*/
	public function nova_Dotacao(){
		$pack = $this->db->get('tbl_segmento')->result();
		return $pack;
	}

	public function editar_Dotacao(){

		$pack = array(
			'dotacao' => $this->db->query('select * from tbl_dotacao where id_dotacao = '.$this->session->userdata('idEditar').';'), 
			'segmentos' => $this->db->get('tbl_segmento')->result());
		return $pack;

	}

	public function dotacao(){ /*Carrega a lista com todos as dotações*/
		$pack = array ($this->db->order_by('id_dotacao','asc'),

			'dotacao' => $this->db->get('tbl_dotacao')->result(),
			'segmento' => $this->db->get('tbl_segmento')->result()

		);
		return $pack;

	}
	/*Fim das codificações das telas de Dotação*/
	
	/*----------------------------------------------------------------------------------------------------------*/

	/*Inicio das codificações referente as telas de Grupo de Itens*/
	public function novo_Grupo_Itens(){
		$pack = $this->db->get('tbl_grupoitens');
		return $pack->result();
	}

	public function editar_Grupo_Itens(){

		$pack = $this->db->query('select * from tbl_grupoitens where id_grupoitens = '.$this->session->userdata('idEditar').';');
		return $pack;

	}

	public function grupo_itens(){ /*Carrega a lista com todos os grupos de itens*/
		$pack = array ($this->db->order_by('id_grupoitens','asc'),
		'grupoitens' => $this->db->get('tbl_grupoitens')->result());
		return $pack;

	}
	/*Fim das codificações das telas de Grupo de Itens*/
	
	/*----------------------------------------------------------------------------------------------------------*/

	/*Inicio das codificações referente as telas de Objeto*/
	public function novo_Objeto(){
		$pack = $this->db->get('tbl_objeto');
		return $pack->result();
	}

	public function editar_Objeto(){

		$pack = $this->db->query('select * from tbl_objeto where id_objeto = '.$this->session->userdata('idEditar').';');
		return $pack;

	}

	public function objeto(){ /*Carrega a lista com todos os objetos*/
		$pack = array ($this->db->order_by('id_objeto','asc'),
		'objeto' => $this->db->get('tbl_objeto')->result());
		return $pack;

	}
	/*Fim das codificações das telas de Objeto*/

	/*Inicio das codificações referente as telas de Marcas de Itens*/
	public function novo_Marca_Itens(){
		$pack = $this->db->get('tbl_marcaitens');
		return $pack->result();
	}

	public function editar_Marca_Itens(){

		$pack = $this->db->query('select * from tbl_marcaitens where id_marcaitens = '.$this->session->userdata('idEditar').';');
		return $pack;

	}

	public function marca_Itens(){ /*Carrega a lista com todos as marcas dos itens*/
		$pack = array ($this->db->order_by('id_marcaitens','asc'),
		'marcaitens' => $this->db->get('tbl_marcaitens')->result());
		return $pack;

	}
	/*Fim das codificações das telas de Marcas de Itens*/

	/*----------------------------------------------------------------------------------------------------------*/

	/*Inicio das codificações referente as telas de Serviço*/
	public function novo_Servico(){
		$pack = array(
			'unidademedida' => $this->db->get('tbl_unidademedida')->result(),
			'fornecedorprestador' => $this->db->get('tbl_fornecedorprestador')->result());
		return $pack;
	}

	public function editar_Servico(){

		$pack = array(
			'servico' => $this->db->query('select * from tbl_servicos where id_servicos = '.$this->session->userdata('idEditar').';'), 
			'fornecedorprestador' => $this->db->get('tbl_fornecedorprestador')->result(),
			'unidademedida' => $this->db->get('tbl_unidademedida')->result());
		return $pack;

	}

	public function servicos(){ /*Carrega a lista com todos as marcas dos itens*/
		$pack = array ($this->db->order_by('id_servicos','asc'),
			'servicos' => $this->db->get('tbl_servicos')->result(),
			'fornecedorprestador' => $this->db->get('tbl_fornecedorprestador')->result(),
			'unidademedida' => $this->db->get('tbl_unidademedida')->result());
		return $pack;

	}
	/*Fim das codificações das telas de Serviço*/

	/*----------------------------------------------------------------------------------------------------------*/

	/*Inicio das codificações referente as telas de Fornecedor/Prestador*/
	public function novo_Fornecedor_Prestador(){
		$pack = array ('fornecedorprestador' => $this->db->get('tbl_fornecedorprestador')->result(), 
			'uf' => $this->db->get('tbl_uf')->result(),
			'tiposervico' => $this->db->get('tbl_tiposervico')->result());
		return $pack;
	}

	public function editar_Fornecedor_Prestador(){

		$pack = array ('fornecedor' => $this->db->query('select * from tbl_fornecedorprestador where id_fornecedorprestador = '.$this->session->userdata('idEditar').';'),
			'uf' => $this->db->get('tbl_uf')->result(),
			'tiposervico' => $this->db->get('tbl_tiposervico')->result());
		return $pack;

	}

	public function fornecedor_Prestador(){ /*Carrega a lista com todos as marcas dos itens*/
		$pack = array ($this->db->order_by('id_fornecedorprestador','asc'),
		'fornecedorprestador' => $this->db->get('tbl_fornecedorprestador')->result());
		return $pack;
		
	}
	/*Fim das codificações das telas de Fornecedor/Prestador*/

	/*----------------------------------------------------------------------------------------------------------*/

	/*Inicio das codificações referente as telas de Clientes*/
	public function novo_Cliente(){
		$pack = array ('cliente' => $this->db->get('tbl_clientes')->result(), 
			'uf' => $this->db->get('tbl_uf')->result(),
			'tiposervico' => $this->db->get('tbl_tiposervico')->result());
		return $pack;
	}

	public function editar_Cliente(){

		$pack = array ('cliente' => $this->db->query('select * from tbl_clientes where id_cliente = '.$this->session->userdata('idEditar').';'),
			'uf' => $this->db->get('tbl_uf')->result(),
			'tiposervico' => $this->db->get('tbl_tiposervico')->result());
		return $pack;

	}

	public function cliente(){ /*Carrega a lista com todos as marcas dos itens*/
		$pack = array ($this->db->order_by('id_cliente','asc'),
		'cliente' => $this->db->get('tbl_clientes')->result());
		return $pack;
		
	}
	/*Fim das codificações das telas de Clientes*/

	/*----------------------------------------------------------------------------------------------------------*/

	/*Inicio das codificações referente as telas de Colaboradores*/
	public function novo_Colaborador(){
		$pack = array ('colaborador' => $this->db->get('tbl_colaboradores')->result(), 
			'setor' => $this->db->get('tbl_setor')->result());
		return $pack;
	}

	public function editar_Colaborador(){

		$pack = array ('colaborador' => $this->db->query('select * from tbl_colaboradores where id_colaborador = '.$this->session->userdata('idEditar').';'),
				'setor' => $this->db->get('tbl_setor')->result());
		return $pack;

	}

	public function colaborador(){ /*Carrega a lista com todos as marcas dos itens*/
		$pack = array ($this->db->order_by('id_colaborador','asc'),
			'colaborador' => $this->db->get('tbl_colaboradores')->result(), 
			'setor' => $this->db->get('tbl_setor')->result());
		return $pack;
		
	}
	/*Fim das codificações das telas de Colaboradores*/

	/*----------------------------------------------------------------------------------------------------------*/

	/*Inicio das codificações referente as telas de Veículos*/
	public function novo_Veiculo(){
		$pack = array ('unidadesaude' => $this->db->get('tbl_unidadesaude')->result(),
		  'combustivel' => $this->db->get('tbl_combustivel')->result(),
		  'estadoveiculo' => $this->db->get('tbl_estadoveiculo')->result());
		return $pack;
	}

	public function editar_Veiculo(){

		$pack = array ('veiculo' => $this->db->query('select * from tbl_veiculo where id_veiculo = '.$this->session->userdata('idEditar').';'),
				'unidadesaude' => $this->db->get('tbl_unidadesaude')->result(),
				'combustivel' => $this->db->get('tbl_combustivel')->result(),
				'estadoveiculo' => $this->db->get('tbl_estadoveiculo')->result());
		return $pack;

	}

	public function veiculo(){ /*Carrega a lista com todos as marcas dos itens*/
		$pack = array ($this->db->order_by('id_veiculo','asc'),
			'veiculo' => $this->db->get('tbl_veiculo')->result(), 
			'unidadesaude' => $this->db->get('tbl_unidadesaude')->result(),
			'estadoveiculo' => $this->db->get('tbl_estadoveiculo')->result());
		return $pack;
		
	}
	/*Fim das codificações das telas de Veículos*/

	/*----------------------------------------------------------------------------------------------------------*/

	/*Inicio das codificações referente as telas de Unidades Utilizadoras*/
	public function nova_Unidade_Utilizadora(){
		$pack = array ('unidadeutilizadora' => $this->db->get('tbl_unidadeutilizadora')->result(), 
		  'depto' => $this->db->get('tbl_depto')->result(),
		  'divisao' => $this->db->get('tbl_divisao')->result(),
		  'setor' => $this->db->get('tbl_setor')->result(),
		  'uf' => $this->db->get('tbl_uf')->result(),
		  'secao' => $this->db->get('tbl_secao')->result());
		return $pack;
	}

	public function editar_Unidade_Utilizadora(){

		$pack = array ('unidadeutilizadora' => $this->db->query('select * from tbl_unidadeutilizadora where id_unidadeutilizadora = '.$this->session->userdata('idEditar').';'),
		  'depto' => $this->db->get('tbl_depto')->result(),
		  'divisao' => $this->db->get('tbl_divisao')->result(),
		  'setor' => $this->db->get('tbl_setor')->result(),
		  'uf' => $this->db->get('tbl_uf')->result(),
		  'secao' => $this->db->get('tbl_secao')->result());
		return $pack;

	}

	public function unidade_Utilizadora(){ /*Carrega a lista com todos as unidades utilizadoras*/
		$pack = array ($this->db->order_by('id_unidadeutilizadora','asc'),
		  'unidadeutilizadora' => $this->db->get('tbl_unidadeutilizadora')->result(), 
		  'depto' => $this->db->get('tbl_depto')->result(),
		  'divisao' => $this->db->get('tbl_divisao')->result(),
		  'setor' => $this->db->get('tbl_setor')->result(),
		  'uf' => $this->db->get('tbl_uf')->result(),
		  'secao' => $this->db->get('tbl_secao')->result());
		return $pack;
		
	}
	/*Fim das codificações das telas de Veículos*/

	/*----------------------------------------------------------------------------------------------------------*/

	/*Inicio das codificações referente as telas de Ordem de Serviço*/
	public function novo_Contrato_Ata(){
		$pack = array ('contratoata' => $this->db->get('tbl_contratoata')->result(), 
		  'fornecedorprestador' => $this->db->get('tbl_fornecedorprestador')->result(),
		  'modalidadedelicitacao' => $this->db->get('tbl_modalidadedelicitacao')->result(),
		  'objeto' => $this->db->get('tbl_objeto')->result());
		return $pack;
	}

	public function editar_Contrato_Ata(){
		$pack = array ('contratoata' => $this->db->query('select * from tbl_contratoata where id_contratoata = '.$this->session->userdata('idEditar').';'),
		  'fornecedorprestador' => $this->db->get('tbl_fornecedorprestador')->result(),
		  'modalidadedelicitacao' => $this->db->get('tbl_modalidadedelicitacao')->result(),
		  'anexos' => $this->db->query('select caminhoanexo, id_anexos from tbl_anexos where id_contratoata = '.$this->session->userdata('idEditar').';')->result(),
		  'objeto' => $this->db->get('tbl_objeto')->result());
		return $pack;

	}

	public function Contrato_Ata(){ 
		$pack = array ('contratoata' => $this->db->query('select id_contratoata, numerocontratoata, dtinivigencia, dtfimvigencia, numanoemissorprorrogacao, nome, objetotitulo from tbl_contratoata ca 
left join tbl_fornecedorprestador f on ca.id_fornecedorprestador = f.id_fornecedorprestador
left join tbl_objeto o on ca.id_objetotitulo = o.id_objeto
order by numerocontratoata')->result());
		return $pack;
	}
	/*Fim das codificações das telas de  de Ordem de Serviço*/

	/*----------------------------------------------------------------------------------------------------------*/

	/*Inicio das codificações referente as telas de Itens*/
	public function novo_Item(){
		$pack = array ('itens' => $this->db->get('tbl_itens')->result(), 
		  'unidademedida' => $this->db->get('tbl_unidademedida')->result(),
		  'grupoitens' => $this->db->get('tbl_grupoitens')->result(),
		  'montadora' => $this->db->get('tbl_montadora')->result(),
		  'estadoitem' => $this->db->get('tbl_estadoitem')->result(),
		  'fornecedorprestador' => $this->db->get('tbl_fornecedorprestador')->result(),
		  'marcaitens' => $this->db->get('tbl_marcaitens')->result());
		return $pack;
	}

	public function editar_Item(){
		$pack = array ('itens' => $this->db->query('select * from tbl_itens where id_itens = '.$this->session->userdata('idEditar').';'),
		  'unidademedida' => $this->db->get('tbl_unidademedida')->result(),
		  'grupoitens' => $this->db->get('tbl_grupoitens')->result(),
		  'montadora' => $this->db->get('tbl_montadora')->result(),
		  'estadoitem' => $this->db->get('tbl_estadoitem')->result(),
		  'fornecedorprestador' => $this->db->get('tbl_fornecedorprestador')->result(),
		  'marcaitens' => $this->db->get('tbl_marcaitens')->result());
		return $pack;
	}

	public function itens(){ 
		$pack = array ($this->db->order_by('id_itens','asc'),
		  'itens' => $this->db->get('tbl_itens')->result(), 
		  'unidademedida' => $this->db->get('tbl_unidademedida')->result(),
		  'grupoitens' => $this->db->get('tbl_grupoitens')->result(),
		  'montadora' => $this->db->get('tbl_montadora')->result(),
		  'estadoitem' => $this->db->get('tbl_estadoitem')->result(),
		  'fornecedorprestador' => $this->db->get('tbl_fornecedorprestador')->result(),
		  'marcaitens' => $this->db->get('tbl_marcaitens')->result());
		return $pack;
	}
	/*Fim das codificações das telas de  de Ordem de Serviço*/

	/*----------------------------------------------------------------------------------------------------------*/

	/*Inicio das codificações referente as telas de Entrada de Itens*/
	public function nova_Entrada_Itens(){
		$pack = array ('entradaitens' => $this->db->get('tbl_entradaitens')->result(), 
		'itens' => $this->db->get('tbl_itens')->result(), 
		'fornecedorprestador' => $this->db->get('tbl_fornecedorprestador')->result());
		return $pack;
	}

	public function editar_Entrada_Itens(){
		$pack = array ('entradaitens' => $this->db->query('select * from tbl_entradaitens where id_entradaitens = '.$this->session->userdata('idEditar').';'),
		'itens' => $this->db->get('tbl_itens')->result(), 
		'fornecedorprestador' => $this->db->get('tbl_fornecedorprestador')->result());
		return $pack;
	}

	public function entrada_Itens(){ 
		$pack = array ($this->db->order_by('codigointerno','asc'),
		'entradaitens' => $this->db->get('tbl_entradaitens')->result(), 
		'itens' => $this->db->get('tbl_itens')->result(), 
		'fornecedorprestador' => $this->db->get('tbl_fornecedorprestador')->result());
		return $pack;
	}
	/*Fim das codificações das telas de Entrada de Itens*/

	/*----------------------------------------------------------------------------------------------------------*/

	/*Inicio das codificações referente as telas de Saída de Itens*/
	public function nova_Saida_Itens(){
		$pack = array ('saidaitens' => $this->db->get('tbl_saidaitens')->result(),
		'itens' => $this->db->get('tbl_itens')->result(), 
		'cliente' => $this->db->get('tbl_clientes')->result(),
		'ordemservico' => $this->db->get('tbl_ordemservico')->result());
		return $pack;
	}

	public function editar_Saida_Itens(){
		$pack = array ('saidaitens' => $this->db->query('select * from tbl_saidaitens where id_saidaitens = '.$this->session->userdata('idEditar').';'),
		'itens' => $this->db->get('tbl_itens')->result(), 
		'cliente' => $this->db->get('tbl_clientes')->result(),
		'ordemservico' => $this->db->get('tbl_ordemservico')->result());
		return $pack;
	}

	public function saida_Itens(){ 
		$pack = array ($this->db->order_by('codigointerno','asc'),
		'saidaitens' => $this->db->get('tbl_saidaitens')->result(), 
		'itens' => $this->db->get('tbl_itens')->result(), 
		'cliente' => $this->db->get('tbl_clientes')->result());
		return $pack;
	}
	/*Fim das codificações das telas de Saída de Itens*/

	/*////////////////////////////////////////////////////////////////////////////////////////////////////////////////*/

	/*//////////////////////////Inicio das codificações referente a tela de Inventário////////////////////////////////*/

	public function ajuste_Inventario(){
		$pack = array ('itens' => $this->db->get('tbl_itens')->result(),
		'unidademedida' => $this->db->get('tbl_unidademedida')->result(),
		'entradas' => $this->db->query('select ti.descricao, te.codigointerno, sum(te.quantidade) quantidade from tbl_entradaitens te
			left join tbl_itens ti on ti.id_itens = te.codigointerno group by ti.descricao, te.codigointerno;')->result(),
		'saidas' => $this->db->query('select ti.descricao, te.codigointerno, sum(te.quantidade) quantidade from tbl_saidaitens te
			left join tbl_itens ti on ti.id_itens = te.codigointerno group by ti.descricao, te.codigointerno;')->result());
		return $pack;
	}

	/*////////////////////////////Fim das codificações referente a tela de Inventário/////////////////////////////////*/

	/*////////////////////////////////////////////////////////////////////////////////////////////////////////////////*/

	/*Inicio das codificações referente as telas de empenho*/
	public function novo_Empenho(){
		$pack = array ('empenho' => $this->db->get('tbl_empenho')->result(),
		'segmento' => $this->db->get('tbl_segmento')->result(),
		'contratoata' => $this->db->get('tbl_contratoata')->result(),
		'objeto' => $this->db->get('tbl_objeto')->result(),
		'dotacao' => $this->db->get('tbl_dotacao')->result(),
		'fornecedorprestador' => $this->db->get('tbl_fornecedorprestador')->result());
		return $pack;
	}

	public function editar_Empenho(){
		$pack = array ('empenho' => $this->db->query('select * from tbl_empenho where id_empenho = '.$this->session->userdata('idEditar').';'),
		'segmento' => $this->db->get('tbl_segmento')->result(),
		'contratoata' => $this->db->get('tbl_contratoata')->result(),
		'objeto' => $this->db->get('tbl_objeto')->result(),
		'dotacao' => $this->db->get('tbl_dotacao')->result(),
		'fornecedorprestador' => $this->db->get('tbl_fornecedorprestador')->result());
		return $pack;
	}

	public function empenho(){ 
		$pack = array (
		'empenho' => $this->db->query('select id_empenho, numeroempenho, valorempenho, nome, segmento, objetotitulo from tbl_empenho e
left join tbl_fornecedorprestador f on e.id_fornecedorprestador = f.id_fornecedorprestador
left join tbl_segmento s on e.id_segmento = s.id_segmento
left join tbl_contratoata ca on e.numcontratoata = ca.id_contratoata
left join tbl_objeto o on ca.id_objetotitulo = o.id_objeto
order by id_empenho')->result());
		return $pack;
	}
	/*Fim das codificações das telas de empenho*/

		/*----------------------------------------------------------------------------------------------------------*/

	/*Inicio das codificações referente as telas de Ordem de Serviço*/
	public function nova_Solicitacao_Ordem_Servico(){
		$pack = array ('solicitaordemservico' => $this->db->get('tbl_solicitaordemservico')->result(), 
		  'estadoordemservico' => $this->db->get('tbl_estadosolicitacao')->result(),
		  'unidadesaude' => $this->db->get('tbl_unidadesaude')->result(),
		  'unidadeutilizadora' => $this->db->query('select TU.*,setor,divisao,depto,secao from tbl_unidadeutilizadora TU
left join tbl_setor TS on TS.id_setor = TU.id_setor
left join tbl_secao TC on TC.id_secao = TU.id_secao
left join tbl_depto TD on TD.id_depto = TU.id_depto
left join tbl_divisao TV on TV.id_divisao = TU.id_divisao;')->result(),
		  'veiculo' => $this->db->get('tbl_veiculo')->result());
		return $pack;
	}

	public function editar_Solicitacao_Ordem_Servico(){

		$pack = array (

		  'solicitaordemservico' => $this->db->query('select * from tbl_solicitaordemservico where id_solicitaordemservico = '.$this->session->userdata('idEditar').';'),
		  'estadoordemservico' => $this->db->get('tbl_estadosolicitacao')->result(),
		  'unidadesaude' => $this->db->get('tbl_unidadesaude')->result(),
		  'unidadeutilizadora' => $this->db->query('select TU.*,setor,divisao,depto,secao from tbl_unidadeutilizadora TU
left join tbl_setor TS on TS.id_setor = TU.id_setor
left join tbl_secao TC on TC.id_secao = TU.id_secao
left join tbl_depto TD on TD.id_depto = TU.id_depto
left join tbl_divisao TV on TV.id_divisao = TU.id_divisao;')->result(),
		  'veiculo' => $this->db->get('tbl_veiculo')->result()

		 );

		return $pack;

	}

	public function solicita_Ordem_Servico(){ /*Carrega a lista com todos as ordens de serviço*/
		$pack = array ($this->db->order_by('id_solicitaordemservico','asc'),
		  'solicitaordemservico' => $this->db->get('tbl_solicitaordemservico')->result(), 
		  'estadoordemservico' => $this->db->get('tbl_estadosolicitacao')->result(),
		  'unidadesaude' => $this->db->get('tbl_unidadesaude')->result(),
		  'unidadeutilizadora' => $this->db->query('select TU.*,setor,divisao,depto,secao from tbl_unidadeutilizadora TU
left join tbl_setor TS on TS.id_setor = TU.id_setor
left join tbl_secao TC on TC.id_secao = TU.id_secao
left join tbl_depto TD on TD.id_depto = TU.id_depto
left join tbl_divisao TV on TV.id_divisao = TU.id_divisao;')->result(),
		  'veiculo' => $this->db->get('tbl_veiculo')->result(),

			'depto' => $this->db->get('tbl_depto')->result());
		return $pack;
		
	}
	/*Fim das codificações das telas de  de Ordem de Serviço*/

	/*----------------------------------------------------------------------------------------------------------*/

	/*----------------------------------------------------------------------------------------------------------*/

	public function editar_Ordem_Servico(){
		$pack = array ('ordemservico' => $this->db->query('select * from tbl_ordemservico where id_ordemservico = '.$this->session->userdata('idEditar').';'),
		'fornecedorprestador' => $this->db->get('tbl_fornecedorprestador')->result(),
		'unidadesaude' => $this->db->get('tbl_unidadesaude')->result(),
		'unidadeutilizadora' => $this->db->query('select TU.*,setor,divisao,depto,secao from tbl_unidadeutilizadora TU
		left join tbl_setor TS on TS.id_setor = TU.id_setor
		left join tbl_secao TC on TC.id_secao = TU.id_secao
		left join tbl_depto TD on TD.id_depto = TU.id_depto
		left join tbl_divisao TV on TV.id_divisao = TU.id_divisao;')->result(),
		'colaborador' => $this->db->get('tbl_colaboradores')->result(),
		'estadoordemservico' => $this->db->get('tbl_estadoordemservico')->result(),
		'subtelaitens' => $this->db->query('select id_ordemservico_x_item, toi.id_item,id_ordemservico,codigomontadora,descricao,quantidade,tf.nome,precobruto,desconto, precobruto - ((precobruto*desconto)/100) as liquido
		from tbl_itens ti 
		left join tbl_ordemservico_x_item toi on toi.id_item = ti.id_itens 
		left join tbl_colaboradores on id_colaborador = toi.id_fornecedorprestador 
		left join tbl_fornecedorprestador tf on tf.id_fornecedorprestador = toi.id_fornecedorprestador 
		where id_ordemservico ='.$this->session->userdata('idEditar').';')->result(),
		'subtelaservicos' => $this->db->query('select quantidade,id_ordemservico_x_servico,id_ordemservico,tos.id_unidademedida, servico descricao, valorunitario valor, tf.nome prestador, tc.nome colaborador from tbl_ordemservico_x_servico tos
		left join tbl_fornecedorprestador tf on tf.id_fornecedorprestador = tos.id_fornecedorprestador
		left join tbl_colaboradores tc on tc.id_colaborador = tos.id_colaborador
		left join tbl_servicos on id_servicos = tos.id_servico where id_ordemservico = '.$this->session->userdata('idEditar').';')->result(),
		'itens' => $this->db->get('tbl_itens')->result(),
		'solicitaordemservico' => $this->db->get('tbl_solicitaordemservico')->result(),
		
		'id_unidadecliente' => $this->db->query('select id_unidadesolicitante from tbl_solicitaordemservico so 
			left join tbl_ordemservico os on so.id_solicitaordemservico=os.id_solicitacao where id_ordemservico = id_ordemservico'),
		
		'servico' => $this->db->get('tbl_servicos')->result());
		return $pack;
	}
	
	public function ordem_Servico(){ 
		$pack = array (
		'ordemservico' => $this->db->query('SELECT  custo_solicitacao.valortotalitem,  valortotalservico,  prefixo,  id_solicitacao, laudotecnicoocorrencia, 
  id_estadosolicitacao,  id_colaborador,  observacoes,  datasaida,  dataentrada,  id_unidadesolicitante,  id_fornecedorprestador, id_ordemservico, (custo_solicitacao.valortotalitem + 
  custo_solicitacao.valortotalservico) total
FROM 
  public.custo_solicitacao;
')->result(),
		'fornecedorprestador' => $this->db->get('tbl_fornecedorprestador')->result(),
		'unidadesaude' => $this->db->get('tbl_unidadesaude')->result(),
		'unidadeutilizadora' => $this->db->query('select TU.*,setor,divisao,depto,secao from tbl_unidadeutilizadora TU
		left join tbl_setor TS on TS.id_setor = TU.id_setor
		left join tbl_secao TC on TC.id_secao = TU.id_secao
		left join tbl_depto TD on TD.id_depto = TU.id_depto
		left join tbl_divisao TV on TV.id_divisao = TU.id_divisao;')->result(),
		'colaborador' => $this->db->get('tbl_colaboradores')->result(),
		'veiculo' => $this->db->get('tbl_veiculo')->result(),
		'estadoordemservico' => $this->db->get('tbl_estadoordemservico')->result(),
		'unidademedida' => $this->db->get('tbl_unidademedida')->result(),
		'itens' => $this->db->get('tbl_itens')->result(),
		'solicitaordemservico' => $this->db->get('tbl_solicitaordemservico')->result(),
		'servico' => $this->db->get('tbl_servicos')->result());
		return $pack;
	}
	/*Fim das codificações das telas de ordem de serviço*/

	/*----------------------------------------------------------------------------------------------------------*/

	/*Inicio das codificações referente as telas de autorização de fornecimento de peças */
	public function nova_Af_Pecas(){
		$pack = array ('afpecas' => $this->db->get('tbl_autofornecpecas')->result(),
		'fornecedorprestador' => $this->db->get('tbl_fornecedorprestador')->result(),
		'contratoata' => $this->db->get('tbl_contratoata')->result(),
		'objeto' => $this->db->get('tbl_objeto')->result(),
		'colaborador' => $this->db->get('tbl_colaboradores')->result(),
		'veiculoprefixo' => $this->db->get('tbl_veiculo')->result(),
		'itens' => $this->db->query('select id_itens, descricao, precobruto - ((precobruto * desconto)/100) liquido from tbl_itens;')->result(),
		'ordemservico' => $this->db->get('tbl_ordemservico')->result(),
		'dotacao' => $this->db->get('tbl_dotacao')->result(),
		'segmento' => $this->db->get('tbl_segmento')->result(),
		'empenho' => $this->db->query('select id_empenho, numeroempenho, codigonumero dotacao, segmento from tbl_empenho te
left join tbl_segmento ts on ts.id_segmento = te.id_segmento
left join tbl_dotacao td on td.id_dotacao = te.id_dotacao')->result());
		return $pack;
	}

	public function editar_Af_Pecas(){
		$pack = array ('afpecas' => $this->db->query('select * from tbl_autofornecpecas where id_afpecas = '.$this->session->userdata('idEditar').';'),
		'afitens' => $this->db->query('select ti.*, id_afpecas_x_itens, unidademedida, quantidade from tbl_itens ti left join tbl_afpecas_x_itens tai on tai.id_itens = ti.id_itens
inner join tbl_autofornecpecas taf on taf.id_afpecas = tai.id_afpecas inner join tbl_unidademedida tu on tu.id_unidademedida = ti.id_unidademedida  where tai.id_afpecas ='.$this->session->userdata('idEditar').';')->result(),
		'afempenho' => $this->db->query('select segmento,id_afpecas_x_empenho, codigonumero,numeroempenho,valorempenho,numeroficha,numcontratoata from tbl_empenho te 
left join tbl_afpecas_x_empenho tae on tae.id_empenho = te.id_empenho
left join tbl_dotacao td on td.id_dotacao = te.id_dotacao
left join tbl_segmento ts on ts.id_segmento = te.id_segmento
where id_afpecas ='.$this->session->userdata('idEditar').';')->result(),
		'fornecedorprestador' => $this->db->get('tbl_fornecedorprestador')->result(),
		'contratoata' => $this->db->get('tbl_contratoata')->result(),
		'objeto' => $this->db->get('tbl_objeto')->result(),
		'colaborador' => $this->db->get('tbl_colaboradores')->result(),
		'veiculoprefixo' => $this->db->get('tbl_veiculo')->result(),
		'itens' => $this->db->query('select id_itens, descricao, precobruto - ((precobruto * desconto)/100) liquido from tbl_itens;')->result(),
		'ordemservico' => $this->db->get('tbl_ordemservico')->result(),
		'dotacao' => $this->db->get('tbl_dotacao')->result(),
		'segmento' => $this->db->get('tbl_segmento')->result(),
		'empenho' => $this->db->query('select id_empenho, numeroempenho, codigonumero dotacao, segmento from tbl_empenho te
left join tbl_segmento ts on ts.id_segmento = te.id_segmento
left join tbl_dotacao td on td.id_dotacao = te.id_dotacao')->result());
		return $pack;
	}

	public function af_Pecas() {


		$pack = $this->db->query('select af.id_afpecas, dataafpecas, prefixo, nome, round(cast(sum((precobruto-(precobruto*desconto)/100)*quantidade) as numeric),2) valoritens,
 (select round(cast(sum(cast(valorempenho as double precision))as numeric),2) from tbl_empenho e 
	left join tbl_afpecas_x_empenho afpe on e.id_empenho = afpe.id_empenho 
	left join tbl_autofornecpecas afp on afpe.id_afpecas = afp.id_afpecas
	where afp.id_afpecas = af.id_afpecas) valorempenho
from tbl_autofornecpecas af
left join tbl_fornecedorprestador f on af.id_fornecedorprestador = f.id_fornecedorprestador 
left join tbl_ordemservico os on af.id_ordemservico = os.id_ordemservico 
left join tbl_solicitaordemservico so on os.id_solicitacao = so.id_solicitaordemservico 
left join tbl_veiculo v on so.id_veiculo = v.id_veiculo 
left join tbl_afpecas_x_itens afi on af.id_afpecas = afi.id_afpecas
left join tbl_itens i on afi.id_itens = i.id_itens
group by af.id_afpecas, dataafpecas, prefixo, nome
order by af.id_afpecas')->result();

		return $pack;

	}

	/*Fim das codificações das telas de autorização de fornecimento de peças */

	/*----------------------------------------------------------------------------------------------------------*/

	/*Inicio das codificações referente as telas de autorização de fornecimento de serviços */
	public function nova_Af_Servicos(){
		$pack = array ('afservicos' => $this->db->get('tbl_autofornecservicos')->result(),
		'fornecedorprestador' => $this->db->get('tbl_fornecedorprestador')->result(),
		'contratoata' => $this->db->get('tbl_contratoata')->result(),
		'objeto' => $this->db->get('tbl_objeto')->result(),
		'colaborador' => $this->db->get('tbl_colaboradores')->result(),
		'veiculoprefixo' => $this->db->get('tbl_veiculo')->result(),
		'itens' => $this->db->get('tbl_itens')->result(),
		'ordemservico' => $this->db->get('tbl_ordemservico')->result(),
		'servico' => $this->db->get('tbl_servicos')->result(),
		'dotacao' => $this->db->get('tbl_dotacao')->result(),
		'segmento' => $this->db->get('tbl_segmento')->result(),
		'empenho' => $this->db->get('tbl_empenho')->result());
		return $pack;
	}

	public function editar_Af_Servicos(){
		$pack = array ('afservicos' => $this->db->query('select * from tbl_autofornecservicos where id_afservicos = '.$this->session->userdata('idEditar').';'),
		'fornecedorprestador' => $this->db->get('tbl_fornecedorprestador')->result(),
		'afitens' => $this->db->query('select ti.*, id_afservicos_x_itens, unidademedida, quantidade from tbl_itens ti left join tbl_afservicos_x_itens tai on tai.id_itens = ti.id_itens
inner join tbl_autofornecservicos tas on tas.id_afservicos = tai.id_afservicos inner join tbl_unidademedida tu on tu.id_unidademedida = ti.id_unidademedida  where tas.id_afservicos ='.$this->session->userdata('idEditar').';')->result(),
		'afempenho' => $this->db->query('select segmento,id_afservicos_x_empenho, codigonumero,numeroempenho,valorempenho,numeroficha,numcontratoata from tbl_empenho te 
left join tbl_afservicos_x_empenho tae on tae.id_empenho = te.id_empenho
left join tbl_dotacao td on td.id_dotacao = te.id_dotacao
left join tbl_segmento ts on ts.id_segmento = te.id_segmento
where id_afservicos ='.$this->session->userdata('idEditar').';')->result(),
		'afsservicos' => $this->db->query('select id_afservicos_x_servicos, servico descricao, unidademedida, quantidade,valorunitario, (quantidade * valorunitario) valortotal
from tbl_afservicos_x_servicos tas
left join tbl_servicos ts on tas.id_servicos = ts.id_servicos
left join tbl_unidademedida tu on tu.id_unidademedida = ts.id_unidademedida
where id_afservicos ='.$this->session->userdata('idEditar').';')->result(),
		'contratoata' => $this->db->get('tbl_contratoata')->result(),
		'objeto' => $this->db->get('tbl_objeto')->result(),
		'colaborador' => $this->db->get('tbl_colaboradores')->result(),
		'veiculoprefixo' => $this->db->get('tbl_veiculo')->result(),
		'itens' => $this->db->query('select id_itens, descricao, precobruto - ((precobruto * desconto)/100) liquido from tbl_itens;')->result(),
		'ordemservico' => $this->db->get('tbl_ordemservico')->result(),
		'servico' => $this->db->get('tbl_servicos')->result(),
		'dotacao' => $this->db->get('tbl_dotacao')->result(),
		'segmento' => $this->db->get('tbl_segmento')->result(),
		'empenho' => $this->db->query('select id_empenho, numeroempenho, codigonumero dotacao, segmento from tbl_empenho te
left join tbl_segmento ts on ts.id_segmento = te.id_segmento
left join tbl_dotacao td on td.id_dotacao = te.id_dotacao')->result());
		return $pack;
	}
	
	public function af_Servicos(){ 

		$pack = $this->db->query('select af.id_afservicos, nome, prefixo, dataafservicos, round(cast(sum((precobruto-(precobruto*desconto)/100)*quantidade) as numeric),2) valoritens,
(select round(sum(cast(valorunitario*quantidade as numeric)),2) from tbl_servicos s
	left join tbl_afservicos_x_servicos afss on afss.id_servicos = s.id_servicos 
	left join tbl_autofornecservicos afs on afss.id_afservicos = afs.id_afservicos
	where afs.id_afservicos = af.id_afservicos) valorservicos,

 (select round(cast(sum(cast(valorempenho as double precision))as numeric),2) from tbl_empenho e 
	left join tbl_afservicos_x_empenho afpe on e.id_empenho = afpe.id_empenho 
	left join tbl_autofornecservicos afs on afpe.id_afservicos = afs.id_afservicos
	where afs.id_afservicos = af.id_afservicos) valorempenho
from tbl_autofornecservicos af
left join tbl_contratoata ca on ca.id_contratoata = af.id_contratoata
left join tbl_ordemservico os on os.id_ordemservico = af.id_ordemservico
left join tbl_solicitaordemservico so on so.id_solicitaordemservico = os.id_solicitacao
left join tbl_veiculo v on v.id_veiculo = so.id_veiculo
left join tbl_fornecedorprestador f on af.id_fornecedor = f.id_fornecedorprestador
left join tbl_afservicos_x_itens afi on afi.id_afservicos = af.id_afservicos
left join tbl_itens i on i.id_itens = afi.id_itens
group by af.id_afservicos, dataafservicos, prefixo, nome
order by af.id_afservicos')->result();
		
		return $pack;
	}
	/*Fim das codificações das telas de autorização de fornecimento de serviços */

	/*===========================================================================================================*/
	/*                            INICIO DAS FUNÇÕES DOS RELATÓRIOS DO SISTEMA                                   */
	/*===========================================================================================================*/

	public function relatorio_Entrada_Itens(){ 
		$pack = array ('entradaitens' => $this->db->query('select id_entradaitens, codigointerno, codigomontadora, descricao, dataentrada, quantidade,
(precobruto-(precobruto*desconto)/100) valorunit, ((precobruto-(precobruto*desconto)/100)*quantidade) vtotal,
 numnotafiscal, nome, id_fornecedorprestador, id_grupoitens from tbl_entradaitens e
left join tbl_fornecedorprestador f on e.id_fornecedor = f.id_fornecedorprestador
left join tbl_itens i on e.codigointerno = i.id_itens
'.$this->session->userdata('where'))->result(),
		'grupoitens' => $this->db->query('select * from tbl_grupoitens '.$this->session->userdata('grupoFiltro')));
		return $pack;
	}
	
	public function relatorio_Saida_Itens(){ 
		$pack = array ('saidaitens' => $this->db->query('select id_saidaitens, codigointerno, codigomontadora, descricao, si.datasaida, quantidade, 
(precobruto-(precobruto*desconto)/100) valorunit, ((precobruto-(precobruto*desconto)/100) * quantidade) vtotal, 
ordemservico, nome,id_grupoitens,id_fornecedorprestador, prefixo 
from tbl_saidaitens si left join tbl_itens i on si.codigointerno = i.id_itens 
left join tbl_clientes c on si.id_cliente = c.id_cliente
left join tbl_ordemservico os on si.ordemservico = os.id_ordemservico 
left join tbl_solicitaordemservico so on os.id_solicitacao = so.id_solicitaordemservico 
left join tbl_veiculo v on so.id_veiculo = v.id_veiculo '.$this->session->userdata('where').'
group by id_saidaitens, codigointerno, codigomontadora, descricao, si.datasaida, quantidade, id_grupoitens,id_fornecedorprestador,
(precobruto-(precobruto*desconto)/100), ordemservico, nome, prefixo')->result(),
		'grupoitens' => $this->db->query('select * from tbl_grupoitens '.$this->session->userdata('grupoFiltro')));
		return $pack;
	}

	public function relatorio_Ordem_Servico(){ 
		$pack = array ($this->db->order_by('id_ordemservico','asc'),
		'ordemservico' => $this->db->get('tbl_ordemservico')->result(),
		'fornecedorprestador' => $this->db->get('tbl_fornecedorprestador')->result(),
		'unidadesaude' => $this->db->get('tbl_unidadesaude')->result(),
		'unidadeutilizadora' => $this->db->query('select TU.*,setor,divisao,depto,secao from tbl_unidadeutilizadora TU
		left join tbl_setor TS on TS.id_setor = TU.id_setor
		left join tbl_secao TC on TC.id_secao = TU.id_secao
		left join tbl_depto TD on TD.id_depto = TU.id_depto
		left join tbl_divisao TV on TV.id_divisao = TU.id_divisao;')->result(),
		'colaborador' => $this->db->get('tbl_colaboradores')->result(),
		'veiculo' => $this->db->get('tbl_veiculo')->result(),
		'estadoordemservico' => $this->db->get('tbl_estadoordemservico')->result(),
		'unidademedida' => $this->db->get('tbl_unidademedida')->result(),
		'itens' => $this->db->get('tbl_itens')->result(),
		'servico' => $this->db->get('tbl_servicos')->result(),
		'solicitaordemservico' => $this->db->get('tbl_solicitaordemservico')->result(),
		'prefixo' => $this->db->query('select s.id_solicitaordemservico, o.id_ordemservico, v.prefixo from tbl_veiculo v 
		inner join tbl_solicitaordemservico s on s.id_veiculo = v.id_veiculo, tbl_ordemservico o
		where o.id_solicitacao = s.id_solicitaordemservico;')->result());
		return $pack;
	}

	public function relatorio_Saldo_Estoque(){
		$pack = array ($this->db->order_by('id_itens','asc'),
			'itens' => $this->db->get('tbl_itens')->result(),
			'entradas' => $this->db->query('select ti.descricao, te.codigointerno, sum(te.quantidade) quantidade from tbl_entradaitens te
			left join tbl_itens ti on ti.id_itens = te.codigointerno group by ti.descricao, te.codigointerno;')->result(),
			'saidas' => $this->db->query('select ti.descricao, te.codigointerno, sum(te.quantidade) quantidade from tbl_saidaitens te
			left join tbl_itens ti on ti.id_itens = te.codigointerno group by ti.descricao, te.codigointerno;')->result(),
			'unidademedida' => $this->db->get('tbl_unidademedida')->result(),
			);
		return $pack;
	}

	public function relatorio_Estoque_Ativo(){ 
		$pack = array (
			'itens' => $this->db->query('select i.id_itens, i.codigomontadora,e.codigointerno,id_grupoitens,id_fornecedor, i.descricao, u.unidademedida, 
			sum(estoquedisponivel) estoque, (precobruto - (precobruto * desconto)/100) valorunitario, 
			((precobruto - (precobruto * desconto)/100) * sum(estoquedisponivel)) valortotal
			from tbl_itens i left join tbl_unidademedida u on i.id_unidademedida = u.id_unidademedida
			left join tbl_entradaitens e on i.id_itens = e.codigointerno 
			'.$this->session->userdata('where').' group by i.id_itens, i.precobruto, i.desconto, i.codigomontadora,e.codigointerno,id_grupoitens,id_fornecedor, i.descricao, u.unidademedida, i.estoquedisponivel')->result(),
			'grupoitens' => $this->db->query('select * from tbl_grupoitens '.$this->session->userdata('grupoFiltro')));
		return $pack;
	}

	/*===========================================================================================================*/
	/*                            FINAL DAS FUNÇÕES DOS RELATÓRIOS DO SISTEMA                                    */
	/*===========================================================================================================*/

	public function nova_Etiqueta(){ 

			$pack = array (

				$this->db->order_by('id_itens','asc'),
				'itens' => $this->db->get('tbl_itens')->result(),
				'etiquetas' => $this->db->get('tbl_etiquetas')->result()

			);
			
			return $pack;
	}

	public function filtro_Pdf_Vistoria(){
		$pack = $this->db->query('select id_ordemservico from tbl_ordemservico order by id_ordemservico');
		return $pack->result();
	}

	public function filtro_Pdf_Servicos_Externos(){
		$pack = $this->db->query('select id_ordemservico from tbl_ordemservico order by id_ordemservico');
		return $pack->result();
	}

	public function filtro_Pdf_Retirada_Estoque(){
		$pack = $this->db->query('select si.ordemservico from tbl_saidaitens si left join tbl_ordemservico os on
		si.ordemservico = os.id_ordemservico order by si.ordemservico');
		return $pack->result();
	}

	public function filtro_Pdf_Autorizacao_Fornecimento(){
		$pack = $this->db->query('select os.id_ordemservico from tbl_ordemservico os inner join tbl_autofornecpecas afp 
on os.id_ordemservico = afp.id_ordemservico
order by os.id_ordemservico');
		return $pack->result();
	}

	/*===========================================================================================================*/
	/*                            FINAL DAS FUNÇÕES DOS IMPRESSOS DO SISTEMA                                     */
	/*===========================================================================================================*/

	/*===========================================================================================================*/
	/*                            INICIO DAS FUNÇÕES DOS FILTROS DOS RELATÓRIOS                                  */
	/*===========================================================================================================*/	

	public function filtro_Entrada_Itens(){
		$pack = array (
			'grupoitens' => $this->db->get('tbl_grupoitens')->result(),
			'fornecedorprestador' => $this->db->get('tbl_fornecedorprestador')->result()
			);
		return $pack;
	}

	public function filtro_Saida_Itens(){
		$pack = array (
			'grupoitens' => $this->db->get('tbl_grupoitens')->result(),
			'fornecedorprestador' => $this->db->get('tbl_fornecedorprestador')->result()
			);
		return $pack;
	}

	public function filtro_Estoque_Ativo(){
		$pack = array (
			'grupoitens' => $this->db->get('tbl_grupoitens')->result(),
			'fornecedorprestador' => $this->db->get('tbl_fornecedorprestador')->result()
			);
		return $pack;
	}


}//Não apagar essa chave, todos os demais itens devem ser incluídos antes dela

?>