<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class dados_iniciais_model extends CI_Model {


	public function usuarios(){ /*Carrega a lista com todos os usuários*/

		$pack = $this->db->get('usuarios');

		return $pack->result();

	}

	public function grupos(){ /*Carrega a lista com todos os grupos*/

		$pack = $this->db->get('grupos');

		return $pack->result();

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

		$pack = $this->db->get('tbl_montadora');

		return $pack->result();

	}

	/*Seção*/
	public function secao(){ /*Carrega a lista com todos os grupos*/

		$pack = $this->db->get('tbl_secao');

		return $pack->result();

	}

	/*Divisão*/
	public function divisao(){ /*Carrega a lista com todos os grupos*/

		$pack = $this->db->get('tbl_divisao');

		return $pack->result();

	}

	/*Departamento*/
	public function departamento(){ /*Carrega a lista com todos os grupos*/

		$pack = $this->db->get('tbl_depto');

		return $pack->result();

	}

	/*Modalidade de licitação*/
	public function modalidade_Licitacao(){ /*Carrega a lista com todos os grupos*/

		$pack = $this->db->get('tbl_modalidadedelicitacao');

		return $pack->result();

	}

	public function editar_Montadora(){

		$pack = $this->db->query('select * from tbl_montadora where id_montadora = '.$this->session->userdata('idEditar').';');
		return $pack;

	}

	public function editar_Secao(){

		$pack = $this->db->query('select * from tbl_secao where id_secao = '.$this->session->userdata('idEditar').';');
		return $pack;

	}

	public function editar_Divisao(){

		$pack = $this->db->query('select * from tbl_divisao where id_divisao = '.$this->session->userdata('idEditar').';');
		return $pack;

	}

	public function editar_Departamento(){

		$pack = $this->db->query('select * from tbl_depto where id_depto = '.$this->session->userdata('idEditar').';');
		return $pack;

	}

	public function editar_Modalidade_Licitacao(){
		$pack = $this->db->query('select * from tbl_modalidadedelicitacao where id_modalidadedelicitacao = '.$this->session->userdata('idEditar').';');
		return $pack;

	}

	/*Inicio das codificações referente as telas de Dotação*/
	public function nova_Dotacao(){
		$pack = $this->db->get('tbl_segmento');
		return $pack->result();
	}

	public function editar_Dotacao(){

		$pack = array(
			'dotacao' => $this->db->query('select * from tbl_dotacao where id_dotacao = '.$this->session->userdata('idEditar').';'), 
			'segmentos' => $this->db->get('tbl_segmento')->result());
		return $pack;

	}

	public function dotacao(){ /*Carrega a lista com todos as dotações*/
		$pack = array (

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
		$pack = $this->db->get('tbl_grupoitens');
		return $pack->result();

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
		$pack = $this->db->get('tbl_objeto');
		return $pack->result();

	}
	/*Fim das codificações das telas de Objeto*/

	/*----------------------------------------------------------------------------------------------------------*/

	/*Inicio das codificações referente as telas de Setor*/
	public function novo_Setor(){
		$pack = $this->db->get('tbl_setor');
		return $pack->result();
	}

	public function editar_Setor(){

		$pack = $this->db->query('select * from tbl_setor where id_setor = '.$this->session->userdata('idEditar').';');
		return $pack;

	}

	public function setor(){ /*Carrega a lista com todos os setores*/
		$pack = $this->db->get('tbl_setor');
		return $pack->result();

	}
	/*Fim das codificações das telas de Setor*/
	
	/*----------------------------------------------------------------------------------------------------------*/

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
		$pack = $this->db->get('tbl_marcaitens');
		return $pack->result();

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
			'unidademedida' => $this->db->get('tbl_unidademedida')->result());
		return $pack;

	}

	public function servicos(){ /*Carrega a lista com todos as marcas dos itens*/
		$pack = array ('servicos' => $this->db->get('tbl_servicos')->result(),
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
		$pack = $this->db->get('tbl_fornecedorprestador');
		return $pack->result();
		
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
		$pack = $this->db->get('tbl_clientes');
		return $pack->result();
		
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
		$pack = array ('colaborador' => $this->db->get('tbl_colaboradores')->result(), 'setor' => $this->db->get('tbl_setor')->result());
		return $pack;
		
	}
	/*Fim das codificações das telas de Colaboradores*/

	/*----------------------------------------------------------------------------------------------------------*/

	/*Inicio das codificações referente as telas de Veículos*/
	public function novo_Veiculo(){
		$pack = array ('veiculo' => $this->db->get('tbl_veiculo')->result(), 
		  //'unidadeservico' => $this->db->get('tbl_unidadesaude')->result()),
			'estadoveiculo' => $this->db->get('tbl_estadoveiculo')->result());
		return $pack;
	}

	public function editar_Veiculo(){

		$pack = array ('veiculo' => $this->db->query('select * from tbl_veiculo where id_veiculo = '.$this->session->userdata('idEditar').';'),
				//'unidadeservico' => $this->db->get('tbl_unidadeservico')->result(),
				'estadoveiculo' => $this->db->get('tbl_estadoveiculo')->result());
		return $pack;

	}

	public function veiculo(){ /*Carrega a lista com todos as marcas dos itens*/
		$pack = array ('veiculo' => $this->db->get('tbl_veiculo')->result(), 
			//'unidadeservico' => $this->db->get('tbl_unidadeservico')->result()),
			'estadoveiculo' => $this->db->get('tbl_estadoveiculo')->result());
		return $pack;
		
	}
	/*Fim das codificações das telas de Veículos*/

}

?>