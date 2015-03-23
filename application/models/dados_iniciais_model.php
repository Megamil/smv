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
		$pack = $this->db->get('tbl_dotacao');
		return $pack->result();

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
		$pack = $this->db->get('tbl_servicos');
		return $pack->result();
	}

	public function editar_Servico(){

		$pack = array(
			'servico' => $this->db->query('select * from tbl_servicos where id_servicos = '.$this->session->userdata('idEditar').';'), 
			'unidademedida' => $this->db->get('tbl_unidademedida')->result());

	}

	public function servicos(){ /*Carrega a lista com todos as marcas dos itens*/
		$pack = $this->db->get('tbl_servicos');
		return $pack->result();

	}
	/*Fim das codificações das telas de Marcas de Itens*/

}

?>