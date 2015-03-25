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

	public function editar_Dotacao(){

		$this->session->set_userdata('idEditar',$this->uri->segment(3)); /*Saber ID que está sendo editado*/
		redirect('main/redirecionar/edicoes-editar_Dotacao/'.$this->uri->segment(3)); /*Redirecionar para adicionar Dotações (Editar Dotação)*/

	}

	public function editando_Dotacao(){

		$this->form_validation->set_rules('nomedotacao','Nome da Dotação','required');
		$this->form_validation->set_rules('segmento','Segmento','required');
		$this->form_validation->set_rules('estadodotacao','Segmento','required');
		$this->form_validation->set_rules('tipodotacao','Tipo dotação','required');

		if($this->input->post('segmento') == 'Selecione...') {

			$this->session->set_userdata('aviso','Campo de segmento é obrigatório');
			$this->session->set_userdata('tipo','danger');

			redirect('main/redirecionar/edicoes-editar_Dotacao/'.$this->input->post('id_dotacao'));
		}

		if($this->form_validation->run()) {


			$dados = array (

				'id_dotacao' => $this->input->post('id_dotacao'),
				'codigonumero' => $this->input->post('nomedotacao'),
				'id_segmento' => $this->input->post('segmento'),
				'idtipodotacao' => $this->input->post('tipodotacao'),
				'statusdotacao' => $this->input->post('estadodotacao')

			);

			$this->edicao->dotacao_Editar($dados);

			$this->session->set_userdata('aviso','Dotação : '.$this->input->post('nomedotacao').' Editada com sucesso!');
			$this->session->set_userdata('tipo','success');

			redirect('main/redirecionar/edicoes-editar_Dotacao/'.$this->input->post('id_dotacao'));


		} else {

			$this->session->set_userdata('aviso',validation_errors());
			$this->session->set_userdata('tipo','danger');

			redirect('main/redirecionar/edicoes-editar_Dotacao/'.$this->input->post('id_dotacao'));

		}



	}

	public function editar_Grupo_Itens(){

		$this->session->set_userdata('idEditar',$this->uri->segment(3)); /*Saber ID que está sendo editado*/
		redirect('main/redirecionar/edicoes-editar_Grupo_Itens/'.$this->uri->segment(3)); /*Redirecionar para adicionar Grupo de Itens (Editar Grupo de Itens)*/

	}

	public function editando_Grupo_Itens(){

		$this->form_validation->set_rules('nomegrupoitens','Nome do Grupo de itens','is_unique[tbl_grupoitens.grupoitens]');

		if($this->form_validation->run()) {

			$dados = array (

				'id_grupoitens' => $this->input->post('id_grupoitens'),
				'grupoitens' => $this->input->post('nomegrupoitens')

			);

			$this->edicao->grupo_Itens_Editar($dados);

			$this->session->set_userdata('aviso','Grupo itens : '.$this->input->post('nomegrupoitens').' Editado com sucesso!');
			$this->session->set_userdata('tipo','success');

			redirect('main/redirecionar/edicoes-editar_Grupo_Itens/'.$this->input->post('id_grupoitens'));

		} else {

			$this->session->set_userdata('aviso',validation_errors());
			$this->session->set_userdata('tipo','danger');

			redirect('main/redirecionar/edicoes-editar_Grupo_Itens/'.$this->input->post('id_grupoitens'));

		}

	}

	public function editar_Setor(){

		$this->session->set_userdata('idEditar',$this->uri->segment(3)); /*Saber ID que está sendo editado*/
		redirect('main/redirecionar/edicoes-editar_Setor/'.$this->uri->segment(3)); /*Redirecionar para adicionar Setor (Editar Setor)*/

	}

	public function editando_Setor(){

		$this->form_validation->set_rules('nome','Nome','is_unique[tbl_setor.setor]');

		if($this->form_validation->run()) {

			$dados = array(
				'id_setor' => $this->input->post('id_setor'),
				'setor' => $this->input->post('nome')
				);

			$this->edicao->setor_Editar($dados);

				$this->session->set_userdata('aviso','Setor: '.$this->input->post('nome').' Alterado com sucesso!');
				$this->session->set_userdata('tipo','success');

				redirect('main/redirecionar/edicoes-editar_Setor/'.$this->input->post('id_setor'));

		} else {

				$this->session->set_userdata('aviso',validation_errors());
				$this->session->set_userdata('tipo','danger');

				redirect('main/redirecionar/edicoes-editar_Setor/'.$this->input->post('id_setor'));

		}


	}

	public function editar_Marca_Itens(){

		$this->session->set_userdata('idEditar',$this->uri->segment(3)); /*Saber ID que está sendo editado*/
		redirect('main/redirecionar/edicoes-editar_Marca_Itens/'.$this->uri->segment(3)); /*Redirecionar para adicionar Setor (Editar Setor)*/

	}

	public function editando_Marca_Itens(){

		$this->form_validation->set_rules('nome','Marca','is_unique[tbl_marcaitens.marcaitens]');

		if($this->form_validation->run()) {

			$dados = array(
				'id_marcaitens' => $this->input->post('id_marcaitens'),
				'marcaitens' => $this->input->post('nome')
				);

				$this->edicao->marca_Itens_Editar($dados);

				$this->session->set_userdata('aviso','Marca: '.$this->input->post('nome').' Alterada com sucesso!');
				$this->session->set_userdata('tipo','success');

				redirect('main/redirecionar/edicoes-editar_Marca_Itens/'.$this->input->post('id_marcaitens'));

		} else {

				$this->session->set_userdata('aviso',validation_errors());
				$this->session->set_userdata('tipo','danger');

				redirect('main/redirecionar/edicoes-editar_Marca_Itens/'.$this->input->post('id_marcaitens'));

		}

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

	public function editar_Objeto(){

		$this->session->set_userdata('idEditar',$this->uri->segment(3)); /*Saber ID que está sendo editado*/
		redirect('main/redirecionar/edicoes-editar_Objeto/'.$this->uri->segment(3)); /*Redirecionar para adicionar aplicações (Editar grupo)*/

	}

	public function editar_Fornecedor_Prestador(){

		$this->session->set_userdata('idEditar',$this->uri->segment(3)); /*Saber ID que está sendo editado*/
		redirect('main/redirecionar/edicoes-editar_Fornecedor_Prestador/'.$this->uri->segment(3)); /*Redirecionar para adicionar aplicações (Editar grupo)*/

	}

	public function editando_Fornecedor_Prestador(){

		$this->form_validation->set_rules('nomefornecedorprestador','Nome','required');
		$this->form_validation->set_rules('cepfornecedorprestador','CEP','required');
		$this->form_validation->set_rules('ruafornecedorprestador','Rua','required');
		$this->form_validation->set_rules('numerofornecedorprestador','Número','required');
		$this->form_validation->set_rules('cidadefornecedorprestador','Cidade','required');
		$this->form_validation->set_rules('uf','UF','required');
		$this->form_validation->set_rules('tel1fornecedorprestador','Telefone','required');
		$this->form_validation->set_rules('contatofornecedorprestador','Contato','required');
		$this->form_validation->set_rules('emailfornecedorprestador','E-mail','required');
		$this->form_validation->set_rules('cnpjfornecedorprestador','CNPJ','required');
		$this->form_validation->set_rules('checkpecas','Tipo de serviço','required');

		if ($this->form_validation->run()) {

				if ($this->input->post('complementofornecedorprestador') != '') {
					
					$complemento = $this->input->post('complementofornecedorprestador');

				} else {

					$complemento = null;

				}

				if($this->input->post('tel2fornecedorprestador') != '') {

					$tel2 = $this->input->post('tel2fornecedorprestador');

				} else {

					$tel2 = null;

				}

				if($this->input->post('faxfornecedorprestador') != ''){

					$fax = $this->input->post('faxfornecedorprestador');

				} else {

					$fax = null;

				}

			$dados = array (

				'id_fornecedorprestador' => $this->input->post('id_fornecedorprestador'),
				'nome' => $this->input->post('nomefornecedorprestador'),
				'cep' => $this->input->post('cepfornecedorprestador'),
				'rua' => $this->input->post('ruafornecedorprestador'),
				'numero' => $this->input->post('numerofornecedorprestador'),
				'complemento' => $complemento,
				'cidade' => $this->input->post('cidadefornecedorprestador'),
				'uf' => $this->input->post('uf'),
				'tel1' => $this->input->post('tel1fornecedorprestador'),
				'tel2' => $tel2,
				'fax' => $fax,
				'contato' => $this->input->post('contatofornecedorprestador'),
				'email' => $this->input->post('emailfornecedorprestador'),
				'cnpj' => $this->input->post('cnpjfornecedorprestador'),
				'id_tiposervico' => $this->input->post('checkpecas')

			);

			$this->edicao->fornecedor_Prestador_Editar($dados);
			$this->session->set_userdata('aviso',''.$this->input->post('nomefornecedorprestador').' Editado com sucesso');
			$this->session->set_userdata('tipo','success');
			redirect('main/redirecionar/edicoes-editar_Fornecedor_Prestador/'.$this->input->post('id_fornecedorprestador'));

		} else {

			$this->session->set_userdata('aviso',validation_errors());
			$this->session->set_userdata('tipo','danger');
			redirect('main/redirecionar/edicoes-editar_Fornecedor_Prestador/'.$this->input->post('id_fornecedorprestador'));

		}


	}

	public function editar_Servico(){

		$this->session->set_userdata('idEditar',$this->uri->segment(3)); /*Saber ID que está sendo editado*/
		redirect('main/redirecionar/edicoes-editar_Servico/'.$this->uri->segment(3)); /*Redirecionar para adicionar aplicações (Editar grupo)*/

	}

	public function editando_Servico(){

		$this->form_validation->set_rules('nomeservico','Serviço','required');
		$this->form_validation->set_rules('unidademedida','Unidade de medida','required');
		$this->form_validation->set_rules('valorservico','Valor','required');
		$this->form_validation->set_rules('fornecedorprestador','Fornecedor / Prestador','required');

		if($this->form_validation->run()) {


			if($this->input->post('fornecedorprestador') == 'Selecione...' || $this->input->post('unidademedida') == 'Selecione...') {

			$this->session->set_userdata('aviso','Selecione um Prestador de serviço e uma unidade de medida.');
			$this->session->set_userdata('tipo','danger');

			redirect('main/redirecionar/edicoes-editar_Servico');

			}

			$dados = array (
				
				'id_servicos' => $this->input->post('id_servicos'),
				'servico' => $this->input->post('nomeservico'),
				'valorunitario' => $this->input->post('valorservico'),
				'id_fornecedorprestador' => $this->input->post('fornecedorprestador'),
				'id_unidademedida' => $this->input->post('unidademedida')

				);

			$this->edicao->servicos($dados);

			$this->session->set_userdata('aviso','Serviço: '.$this->input->post('nomeservico').' Alterado com sucesso.');
			$this->session->set_userdata('tipo','success');

			redirect('main/redirecionar/edicoes-editar_Servico');


		} else {


			$this->session->set_userdata('aviso',validation_errors());
			$this->session->set_userdata('tipo','danger');

			redirect('main/redirecionar/edicoes-editar_Servico');

		}


	}

	public function editar_Colaborador(){

		$this->session->set_userdata('idEditar',$this->uri->segment(3)); /*Saber ID que está sendo editado*/
		redirect('main/redirecionar/edicoes-editar_Colaborador'); /*Redirecionar para adicionar aplicações (Editar grupo)*/

	}

	public function editando_Colaborador() {

		$this->form_validation->set_rules('codigocolaborador','Código','required');
		$this->form_validation->set_rules('nomecolaborador','Nome','required');
		$this->form_validation->set_rules('cpfcolaborador','CPF','required');
		$this->form_validation->set_rules('emailcolaborador','E-mail','required');
		$this->form_validation->set_rules('telefonecolaborador','Telefone','required');
		$this->form_validation->set_rules('celularcolaborador','Celular','required');
		$this->form_validation->set_rules('funcaocolaborador','Fundação','required');

		if($this->form_validation->run()) {

			if($this->input->post('setor') == 'Selecione...') {

			$this->session->set_userdata('aviso','O campo Setor é obrigatório.');
			$this->session->set_userdata('tipo','danger');

			redirect('main/redirecionar/edicoes-editar_Colaborador');

			}

			$dados = array(
				'id_colaborador' => $this->input->post('id_colaborador'),
				'codigofuncional' => $this->input->post('codigocolaborador'),
				'nome' => $this->input->post('nomecolaborador'),
				'cpf' => $this->input->post('cpfcolaborador'),
				'email' => $this->input->post('emailcolaborador'),
				'telefone' => $this->input->post('telefonecolaborador'),
				'celular' => $this->input->post('celularcolaborador'),
				'funcaocargo' => $this->input->post('funcaocolaborador'),
				'id_setor' => $this->input->post('setor')
				);

			$this->edicao->colaborador($dados);

			$this->session->set_userdata('aviso','Colaborador: '.$this->input->post('nomecolaborador').' Alterado com sucesso!');
			$this->session->set_userdata('tipo','success');

			redirect('main/redirecionar/edicoes-editar_Colaborador');

		} else {

			$this->session->set_userdata('aviso',validation_errors());
			$this->session->set_userdata('tipo','danger');

			redirect('main/redirecionar/edicoes-editar_Colaborador');

		}

	}

	public function editar_Veiculo(){

		$this->session->set_userdata('idEditar',$this->uri->segment(3)); /*Saber ID que está sendo editado*/
		redirect('main/redirecionar/edicoes-editar_Veiculo'); /*Redirecionar para adicionar aplicações (Editar grupo)*/

	}

	public function editando_Objeto(){

		$this->form_validation->set_rules('nomeobjetotitulo','Título do objeto','required');

		if($this->form_validation->run()) {

			$dados = array(
				'id_objeto' => $this->input->post('id_objeto'),
				'objetotitulo' => $this->input->post('nomeobjetotitulo'),
				'objetotexto' => $this->input->post('nomeobjetotexto')
				);

				$this->edicao->objeto_Editar($dados); 

				$this->session->set_userdata('aviso','Objeto: '.$this->input->post('nomeobjetotitulo').' Alterado com sucesso!');
				$this->session->set_userdata('tipo','success');

				redirect('main/redirecionar/edicoes-editar_Objeto/'.$this->input->post('id_objeto'));

		} else {

				$this->session->set_userdata('aviso',validation_errors());
				$this->session->set_userdata('tipo','danger');

				redirect('main/redirecionar/edicoes-editar_Objeto/'.$this->input->post('id_objeto'));

		}

	}

}