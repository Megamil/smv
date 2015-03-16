<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

define('nomeAplicacao','Sistema de Manutenção de Veículos'); /*Nome da aplicação*/

class edicoes extends CI_Controller {

	public function editar_Montadora(){

		$this->session->set_userdata('idEditar',$this->uri->segment(3)); /*Saber ID que está sendo editado*/
		redirect('main/redirecionar/edicoes-editar_Montadora'); /*Redirecionar para adicionar aplicações (Editar grupo)*/

	}

	public function editando_Montadora(){

		$this->form_validation->set_rules('nome','Nome','is_unique[tbl_montadora.montadora]');

		if($this->form_validation->run()) {

			$dados = array(
				'id_montadora' => $this->input->post('id_montadora'),
				'montadora' => $this->input->post('nome')
				);

			if($this->edicao->montadora_Editar($dados)) {

				$this->session->set_userdata('aviso','Montadora: '.$this->input->post('nome').' Alterada com sucesso!');
				$this->session->set_userdata('tipo','success');

				redirect('main/redirecionar/edicoes-editar_Montadora/'.$this->input->post('id_montadora'));

			} else {

				$this->session->set_userdata('aviso','Erro ao editar.');
				$this->session->set_userdata('tipo','danger');

				redirect('main/redirecionar/edicoes-editar_Montadora/'.$this->input->post('id_montadora'));
			}

		} else {

				$this->session->set_userdata('aviso',validation_errors());
				$this->session->set_userdata('tipo','danger');

				redirect('main/redirecionar/edicoes-editar_Montadora/'.$this->input->post('id_montadora'));

		}

	}

	public function editar_Secao(){

		$this->session->set_userdata('idEditar',$this->uri->segment(3)); /*Saber ID que está sendo editado*/
		redirect('main/redirecionar/edicoes-editar_Secao'); /*Redirecionar para adicionar aplicações (Editar grupo)*/

	}

	public function editando_Secao(){

		$this->form_validation->set_rules('nome','Nome','is_unique[tbl_secao.secao]');

		if($this->form_validation->run()) {

			$dados = array(
				'id_secao' => $this->input->post('id_secao'),
				'secao' => $this->input->post('nome')
				);

			if($this->edicao->secao_Editar($dados)) {

				$this->session->set_userdata('aviso','Seção: '.$this->input->post('nome').' Alterada com sucesso!');
				$this->session->set_userdata('tipo','success');

				redirect('main/redirecionar/edicoes-editar_Secao/'.$this->input->post('id_secao'));

			} else {

				$this->session->set_userdata('aviso','Erro ao editar.');
				$this->session->set_userdata('tipo','danger');

				redirect('main/redirecionar/edicoes-editar_Secao/'.$this->input->post('id_secao'));
			}

		} else {

				$this->session->set_userdata('aviso',validation_errors());
				$this->session->set_userdata('tipo','danger');

				redirect('main/redirecionar/edicoes-editar_Secao/'.$this->input->post('id_secao'));

		}

	}

	public function editar_Divisao(){

		$this->session->set_userdata('idEditar',$this->uri->segment(3)); /*Saber ID que está sendo editado*/
		redirect('main/redirecionar/edicoes-editar_Divisao'); /*Redirecionar para adicionar aplicações (Editar grupo)*/

	}

	public function editando_Divisao(){

		$this->form_validation->set_rules('nome','Nome','is_unique[tbl_divisao.divisao]');

		if($this->form_validation->run()) {

			$dados = array(
				'id_divisao' => $this->input->post('id_divisao'),
				'divisao' => $this->input->post('nome')
				);

			if($this->edicao->divisao_Editar($dados)) {

				$this->session->set_userdata('aviso','Divisão: '.$this->input->post('nome').' Alterada com sucesso!');
				$this->session->set_userdata('tipo','success');

				redirect('main/redirecionar/edicoes-editar_Divisao/'.$this->input->post('id_divisao'));

			} else {

				$this->session->set_userdata('aviso','Erro ao editar.');
				$this->session->set_userdata('tipo','danger');

				redirect('main/redirecionar/edicoes-editar_Divisao/'.$this->input->post('id_divisao'));
			}

		} else {

				$this->session->set_userdata('aviso',validation_errors());
				$this->session->set_userdata('tipo','danger');

				redirect('main/redirecionar/edicoes-editar_Divisao/'.$this->input->post('id_divisao'));

		}

	}

	public function editar_Departamento(){

		$this->session->set_userdata('idEditar',$this->uri->segment(3)); /*Saber ID que está sendo editado*/
		redirect('main/redirecionar/edicoes-editar_Departamento'); /*Redirecionar para adicionar aplicações (Editar grupo)*/

	}

	public function editando_Departamento(){

		$this->form_validation->set_rules('nome','Nome','is_unique[tbl_depto.depto]');

		if($this->form_validation->run()) {

			$dados = array(
				'id_depto' => $this->input->post('id_departamento'),
				'depto' => $this->input->post('nome')
				);

			if($this->edicao->departamento_Editar($dados)) {

				$this->session->set_userdata('aviso','Departamento: '.$this->input->post('nome').' Alterado com sucesso!');
				$this->session->set_userdata('tipo','success');

				redirect('main/redirecionar/edicoes-editar_Departamento/'.$this->input->post('id_departamento'));

			} else {

				$this->session->set_userdata('aviso','Erro ao editar.');
				$this->session->set_userdata('tipo','danger');

				redirect('main/redirecionar/edicoes-editar_Departamento/'.$this->input->post('id_departamento'));
			}

		} else {

				$this->session->set_userdata('aviso',validation_errors());
				$this->session->set_userdata('tipo','danger');

				redirect('main/redirecionar/edicoes-editar_Departamento/'.$this->input->post('id_departamento'));

		}

	}

	public function editar_Modalidade(){

		$this->session->set_userdata('idEditar',$this->uri->segment(3)); /*Saber ID que está sendo editado*/
		redirect('main/redirecionar/edicoes-editar_Modalidade_Licitacao'); /*Redirecionar para adicionar aplicações (Editar grupo)*/

	}

	public function editando_Modalidade(){

		$this->form_validation->set_rules('nome','Nome','is_unique[tbl_modalidadedelicitacao.modalidadedelicitacao]');

		if($this->form_validation->run()) {

			$dados = array(
				'id_modalidadedelicitacao' => $this->input->post('id_modalidade'),
				'modalidadedelicitacao' => $this->input->post('nome')
				);

			if($this->edicao->Modalidade_Editar($dados)) {

				$this->session->set_userdata('aviso','Modalidade: '.$this->input->post('nome').' Alterada com sucesso!');
				$this->session->set_userdata('tipo','success');

				redirect('main/redirecionar/edicoes-editar_Modalidade_Licitacao/'.$this->input->post('id_Modalidade'));

			} else {

				$this->session->set_userdata('aviso','Erro ao editar.');
				$this->session->set_userdata('tipo','danger');

				redirect('main/redirecionar/edicoes-editar_Modalidade_Licitacao/'.$this->input->post('id_Modalidade'));
			}

		} else {

				$this->session->set_userdata('aviso',validation_errors());
				$this->session->set_userdata('tipo','danger');

				redirect('main/redirecionar/edicoes-editar_Modalidade_Licitacao/'.$this->input->post('id_Modalidade'));

		}

	}

}