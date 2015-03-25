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

	public function novo_Colaborador(){

		$this->form_validation->set_rules('codigocolaborador','Código','required');
		$this->form_validation->set_rules('nomecolaborador','Nome','required');
		$this->form_validation->set_rules('cpfcolaborador','CPF','required');
		$this->form_validation->set_rules('emailcolaborador','E-mail','required');
		$this->form_validation->set_rules('telefonecolaborador','Telefone','required');
		$this->form_validation->set_rules('celularcolaborador','Celular','required');
		$this->form_validation->set_rules('funcaocolaborador','Fundação','required');

		if($this->form_validation->run()) {


			if($this->input->post('setor') == 'Selecione...') {

			$this->session->set_flashdata('codigocolaborador', $this->input->post('codigocolaborador'));
			$this->session->set_flashdata('nomecolaborador', $this->input->post('nomecolaborador'));
			$this->session->set_flashdata('cpfcolaborador', $this->input->post('cpfcolaborador'));
			$this->session->set_flashdata('emailcolaborador', $this->input->post('emailcolaborador'));
			$this->session->set_flashdata('telefonecolaborador', $this->input->post('telefonecolaborador'));
			$this->session->set_flashdata('celularcolaborador', $this->input->post('celularcolaborador'));
			$this->session->set_flashdata('funcaocolaborador', $this->input->post('funcaocolaborador'));
			$this->session->set_flashdata('setor', $this->input->post('setor'));

			$this->session->set_userdata('aviso','O campo Setor é obrigatório.');
			$this->session->set_userdata('tipo','danger');

			redirect('main/redirecionar/criar-novo_Colaborador');

			}

			$dados = array(
				'codigofuncional' => $this->input->post('codigocolaborador'),
				'nome' => $this->input->post('nomecolaborador'),
				'cpf' => $this->input->post('cpfcolaborador'),
				'email' => $this->input->post('emailcolaborador'),
				'telefone' => $this->input->post('telefonecolaborador'),
				'celular' => $this->input->post('celularcolaborador'),
				'funcaocargo' => $this->input->post('funcaocolaborador'),
				'id_setor' => $this->input->post('setor')
				);

			$this->novo->colaborador_Novo($dados);

			$this->session->set_userdata('aviso','Colaborador: '.$this->input->post('nomecolaborador').' Adicionado com sucesso!');
			$this->session->set_userdata('tipo','success');

			redirect('main/redirecionar/criar-novo_Colaborador');

		} else {

			$this->session->set_flashdata('codigocolaborador', $this->input->post('codigocolaborador'));
			$this->session->set_flashdata('nomecolaborador', $this->input->post('nomecolaborador'));
			$this->session->set_flashdata('cpfcolaborador', $this->input->post('cpfcolaborador'));
			$this->session->set_flashdata('emailcolaborador', $this->input->post('emailcolaborador'));
			$this->session->set_flashdata('telefonecolaborador', $this->input->post('telefonecolaborador'));
			$this->session->set_flashdata('celularcolaborador', $this->input->post('celularcolaborador'));
			$this->session->set_flashdata('funcaocolaborador', $this->input->post('funcaocolaborador'));
			$this->session->set_flashdata('setor', $this->input->post('setor'));

			$this->session->set_userdata('aviso',validation_errors());
			$this->session->set_userdata('tipo','danger');

			redirect('main/redirecionar/criar-novo_Colaborador');

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

	public function novo_Servico(){

		$this->form_validation->set_rules('nomeservico','Serviço','required');
		$this->form_validation->set_rules('unidademedida','Unidade de medida','required');
		$this->form_validation->set_rules('valorservico','Valor','required');
		$this->form_validation->set_rules('fornecedorprestador','Fornecedor / Prestador','required');

		if($this->form_validation->run()) {


			if($this->input->post('fornecedorprestador') == 'Selecione...' || $this->input->post('unidademedida') == 'Selecione...') {

			$this->session->set_flashdata('nomeservico', $this->input->post('nomeservico'));
			$this->session->set_flashdata('unidademedida', $this->input->post('unidademedida'));
			$this->session->set_flashdata('valorservico', $this->input->post('valorservico'));
			$this->session->set_flashdata('fornecedorprestador', $this->input->post('fornecedorprestador'));

			$this->session->set_userdata('aviso','Selecione um Prestador de serviço e uma unidade de medida.');
			$this->session->set_userdata('tipo','danger');

			redirect('main/redirecionar/criar-novo_Servico');

			}

			$dados = array (
				
				'servico' => $this->input->post('nomeservico'),
				'valorunitario' => $this->input->post('valorservico'),
				'id_fornecedorprestador' => $this->input->post('fornecedorprestador'),
				'id_unidademedida' => $this->input->post('unidademedida')

				);

			$this->novo->servico_Novo($dados);

			$this->session->set_userdata('aviso','Serviço: '.$this->input->post('nomeservico').' Adicionado com sucesso.');
			$this->session->set_userdata('tipo','success');

			redirect('main/redirecionar/criar-novo_Servico');


		} else {

			$this->session->set_flashdata('nomeservico', $this->input->post('nomeservico'));
			$this->session->set_flashdata('unidademedida', $this->input->post('unidademedida'));
			$this->session->set_flashdata('valorservico', $this->input->post('valorservico'));
			$this->session->set_flashdata('fornecedorprestador', $this->input->post('fornecedorprestador'));

			$this->session->set_userdata('aviso',validation_errors());
			$this->session->set_userdata('tipo','danger');

			redirect('main/redirecionar/criar-novo_Servico');

		}

	}

	public function novo_Fornecedor_Prestador() {

		$this->form_validation->set_rules('codigofornecedorprestador','Código','required');
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

				'codigo' => $this->input->post('codigofornecedorprestador'),
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

			$this->novo->fornecedor_Prestador_Novo($dados);

			$this->session->set_userdata('aviso',''.$this->input->post('nomefornecedorprestador').' Adicionado com sucesso');
			$this->session->set_userdata('tipo','success');

			redirect('main/redirecionar/criar-novo_Fornecedor_Prestador');

		} else {

			$this->session->set_flashdata('codigofornecedorprestador', $this->input->post('codigofornecedorprestador'));
			$this->session->set_flashdata('nomefornecedorprestador', $this->input->post('nomefornecedorprestador'));
			$this->session->set_flashdata('cepfornecedorprestador', $this->input->post('cepfornecedorprestador'));
			$this->session->set_flashdata('ruafornecedorprestador', $this->input->post('ruafornecedorprestador'));
			$this->session->set_flashdata('numerofornecedorprestador', $this->input->post('numerofornecedorprestador'));
			$this->session->set_flashdata('complementofornecedorprestador', $this->input->post('complementofornecedorprestador'));
			$this->session->set_flashdata('cidadefornecedorprestador', $this->input->post('cidadefornecedorprestador'));
			$this->session->set_flashdata('uf', $this->input->post('uf'));
			$this->session->set_flashdata('tel1fornecedorprestador', $this->input->post('tel1fornecedorprestador'));
			$this->session->set_flashdata('tel2fornecedorprestador', $this->input->post('tel2fornecedorprestador'));
			$this->session->set_flashdata('faxfornecedorprestador', $this->input->post('faxfornecedorprestador'));
			$this->session->set_flashdata('contatofornecedorprestador', $this->input->post('contatofornecedorprestador'));
			$this->session->set_flashdata('emailfornecedorprestador', $this->input->post('emailfornecedorprestador'));
			$this->session->set_flashdata('cnpjfornecedorprestador', $this->input->post('cnpjfornecedorprestador'));
			$this->session->set_flashdata('checkpecas', $this->input->post('checkpecas'));

			$this->session->set_userdata('aviso',validation_errors());
			$this->session->set_userdata('tipo','danger');

			redirect('main/redirecionar/criar-novo_Fornecedor_Prestador');
		}

	}

}

/* End of file main.php */
/* Location: ./application/controllers/main.php */