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

}

 ?>