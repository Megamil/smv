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

}

/* End of file main.php */
/* Location: ./application/controllers/main.php */