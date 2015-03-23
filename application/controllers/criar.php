<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

define('nomeAplicacao','Sistema de Manutenção de Veículos'); /*Nome da aplicação*/

class criar extends CI_Controller {

	public function nova_Montadora(){

		$this->form_validation->set_rules('nome','Nome','is_unique[tbl_montadora.montadora]');

		if($this->form_validation->run()) {

			$nome = array('montadora' => $this->input->post('nome'));

			if($this->novo->montadora_Nova($nome)) {

				$this->session->set_userdata('aviso','Montadora: '.$this->input->post('nome').' Adicionada com sucesso!');
				$this->session->set_userdata('tipo','success');

				redirect('main/redirecionar/criar-nova_Montadora');

			} else {

				$this->session->set_userdata('aviso','Erro ao cadastrar.');
				$this->session->set_userdata('tipo','danger');

				redirect('main/redirecionar/criar-nova_Montadora');
			}
		} else {

				$this->session->set_userdata('aviso',validation_errors());
				$this->session->set_userdata('tipo','danger');

				redirect('main/redirecionar/criar-nova_Montadora');

		}

	}

		public function nova_Divisao(){

		$this->form_validation->set_rules('nome','Nome','is_unique[tbl_divisao.divisao]');

		if($this->form_validation->run()) {

			$nome = array('divisao' => $this->input->post('nome'));

			if($this->novo->divisao_Nova($nome)) {

				$this->session->set_userdata('aviso','Divisao: '.$this->input->post('nome').' Adicionada com sucesso!');
				$this->session->set_userdata('tipo','success');

				redirect('main/redirecionar/criar-nova_Divisao');

			} else {

				$this->session->set_userdata('aviso','Erro ao cadastrar.');
				$this->session->set_userdata('tipo','danger');

				redirect('main/redirecionar/criar-nova_Divisao');
			}
		} else {

				$this->session->set_userdata('aviso',validation_errors());
				$this->session->set_userdata('tipo','danger');

				redirect('main/redirecionar/criar-nova_Divisao');
			
		}

	}

		public function nova_Secao(){

		$this->form_validation->set_rules('nome','Nome','is_unique[tbl_secao.secao]');

		if($this->form_validation->run()) {

			$nome = array('secao' => $this->input->post('nome'));

			if($this->novo->secao_Nova($nome)) {

				$this->session->set_userdata('aviso','Seção: '.$this->input->post('nome').' Adicionada com sucesso!');
				$this->session->set_userdata('tipo','success');

				redirect('main/redirecionar/criar-nova_Secao');

			} else {

				$this->session->set_userdata('aviso','Erro ao cadastrar.');
				$this->session->set_userdata('tipo','danger');

				redirect('main/redirecionar/criar-nova_Secao');
			}
		} else {

				$this->session->set_userdata('aviso',validation_errors());
				$this->session->set_userdata('tipo','danger');

				redirect('main/redirecionar/criar-nova_Secao');
			
		}

	}

		public function novo_Departamento(){

		$this->form_validation->set_rules('nome','Nome','is_unique[tbl_depto.depto]');

		if($this->form_validation->run()) {

			$nome = array('depto' => $this->input->post('nome'));

			if($this->novo->departamento_Novo($nome)) {

				$this->session->set_userdata('aviso','Departamento: '.$this->input->post('nome').' Adicionado com sucesso!');
				$this->session->set_userdata('tipo','success');

				redirect('main/redirecionar/criar-novo_Departamento');

			} else {

				$this->session->set_userdata('aviso','Erro ao cadastrar.');
				$this->session->set_userdata('tipo','danger');

				redirect('main/redirecionar/criar-novo_Departamento');
			}
		} else {

				$this->session->set_userdata('aviso',validation_errors());
				$this->session->set_userdata('tipo','danger');

				redirect('main/redirecionar/criar-novo_Departamento');
			
		}

	}

		public function nova_Modalidade_Licitatoria(){

		$this->form_validation->set_rules('nome','Nome','is_unique[tbl_modalidadedelicitacao.modalidadedelicitacao]');

		if($this->form_validation->run()) {

			$nome = array('modalidadedelicitacao' => $this->input->post('nome'));

			if($this->novo->modalidade_Licitatoria_Nova($nome)) {

				$this->session->set_userdata('aviso','Modalidade Licitatória: '.$this->input->post('nome').' Adicionado com sucesso!');
				$this->session->set_userdata('tipo','success');

				redirect('main/redirecionar/criar-nova_Modalidade_Licitacao');

			} else {

				$this->session->set_userdata('aviso','Erro ao cadastrar.');
				$this->session->set_userdata('tipo','danger');

				redirect('main/redirecionar/criar-nova_Modalidade_Licitacao');
			}
		} else {

				$this->session->set_userdata('aviso',validation_errors());
				$this->session->set_userdata('tipo','danger');

				redirect('main/redirecionar/criar-nova_Modalidade_Licitacao');
			
		}

	}

	public function nova_Dotacao(){

		$this->form_validation->set_rules('nomedotacao','Nome da Dotação','required');
		$this->form_validation->set_rules('segmento','Segmento','required');
		$this->form_validation->set_rules('estadodotacao','Segmento','required');
		$this->form_validation->set_rules('tipodotacao','Tipo dotação','required');

		if($this->input->post('segmento') == 'Selecione...') {

			$this->session->set_userdata('aviso','Campo de segmento é obrigatório');
			$this->session->set_userdata('tipo','danger');

			$this->session->set_flashdata('nomedotacao', $this->input->post('nomedotacao'));
			$this->session->set_flashdata('segmento', $this->input->post('segmento'));
			$this->session->set_flashdata('estadodotacao', $this->input->post('estadodotacao'));
			$this->session->set_flashdata('tipodotacao', $this->input->post('tipodotacao'));

			redirect('main/redirecionar/criar-nova_Dotacao');
		}

		if($this->form_validation->run()) {


			$dados = array (

				'codigonumero' => $this->input->post('nomedotacao'),
				'id_segmento' => $this->input->post('segmento'),
				'idtipodotacao' => $this->input->post('tipodotacao'),
				'statusdotacao' => $this->input->post('estadodotacao')

			);

			$this->novo->dotacao_Nova($dados);

			$this->session->set_userdata('aviso','Dotação : '.$this->input->post('nomedotacao').' Adicionada com sucesso!');
			$this->session->set_userdata('tipo','success');

			redirect('main/redirecionar/criar-nova_Dotacao');


		} else {

			$this->session->set_userdata('aviso',validation_errors());
			$this->session->set_userdata('tipo','danger');

			$this->session->set_flashdata('nomedotacao', $this->input->post('nomedotacao'));
			$this->session->set_flashdata('segmento', $this->input->post('segmento'));
			$this->session->set_flashdata('estadodotacao', $this->input->post('estadodotacao'));
			$this->session->set_flashdata('tipodotacao', $this->input->post('tipodotacao'));

			redirect('main/redirecionar/criar-nova_Dotacao');

		}



	}

	public function novo_Grupo_Itens(){

		$this->form_validation->set_rules('nomegrupoitens','Nome do Grupo de itens','is_unique[tbl_grupoitens.grupoitens]');

		if($this->form_validation->run()) {

			$dados = array ('grupoitens' => $this->input->post('nomegrupoitens'));

			$this->novo->grupo_Itens_Novo($dados);

			$this->session->set_userdata('aviso','Grupo: '.$this->input->post('nomegrupoitens').' Adicionado com sucesso.');
			$this->session->set_userdata('tipo','success');

			redirect('main/redirecionar/criar-novo_Grupo_Itens');


		} else {

			$this->session->set_userdata('aviso',validation_errors());
			$this->session->set_userdata('tipo','danger');

			redirect('main/redirecionar/criar-novo_Grupo_Itens');

		}

	}

	public function novo_Setor(){

		$this->form_validation->set_rules('nome','Nome do setor','is_unique[tbl_setor.setor]');

		if($this->form_validation->run()) {

			$dados = array ('setor' => $this->input->post('nome'));

			$this->novo->setor_Novo($dados);

			$this->session->set_userdata('aviso','Setor: '.$this->input->post('nome').' Adicionado com sucesso.');
			$this->session->set_userdata('tipo','success');

			redirect('main/redirecionar/criar-novo_Setor');


		} else {

			$this->session->set_userdata('aviso',validation_errors());
			$this->session->set_userdata('tipo','danger');

			redirect('main/redirecionar/criar-novo_Setor');

		}

	}

	public function novo_Objeto(){

		$this->form_validation->set_rules('nomeobjetotitulo','Título do Objeto','is_unique[tbl_objeto.objetotitulo]');

		if($this->form_validation->run()) {

			$dados = array ('objetotitulo' => $this->input->post('nomeobjetotitulo'), 'objetotexto' => $this->input->post('nomeobjetotexto'));

			$this->novo->objeto_Novo($dados);

			$this->session->set_userdata('aviso','Objeto: '.$this->input->post('nomeobjetotitulo').' Adicionado com sucesso.');
			$this->session->set_userdata('tipo','success');

			redirect('main/redirecionar/criar-novo_Objeto');


		} else {

			$this->session->set_userdata('aviso',validation_errors());
			$this->session->set_userdata('tipo','danger');

			redirect('main/redirecionar/criar-novo_Objeto');

		}

	}

	public function nova_Marca_Itens(){

		$this->form_validation->set_rules('nome','Marca','is_unique[tbl_marcaitens.marcaitens]');

		if($this->form_validation->run()) {

			$dados = array ('marcaitens' => $this->input->post('nome'));

			$this->novo->Marca_Itens_Novo($dados);

			$this->session->set_userdata('aviso','Marca: '.$this->input->post('nome').' Adicionada com sucesso.');
			$this->session->set_userdata('tipo','success');

			redirect('main/redirecionar/criar-nova_Marca_Itens');


		} else {

			$this->session->set_userdata('aviso',validation_errors());
			$this->session->set_userdata('tipo','danger');

			redirect('main/redirecionar/criar-nova_Marca_Itens');

		}

	}

}

/* End of file main.php */
/* Location: ./application/controllers/main.php */