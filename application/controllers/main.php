<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

define('nomeAplicacao','Sistema de Manutenção de Veículos'); /*Nome da aplicação*/

class Main extends CI_Controller {

	public function index()
	{
		if ($this->session->userdata('online')) { /*Valida se o usuário já estava logado*/

			$dados = array ( /*Dados para o Header*/

			'titulo' => nomeAplicacao,
			'tela' => nomeAplicacao,
			'ativo' => ''

			);

			/*Aviso para o header*/
			$this->session->set_userdata('aviso','Seja bem-vindo, '.ucfirst($this->session->userdata('usuario')).'!');
			/*ucfirst deixa a primeira letra em maiusculo*/
			$this->session->set_userdata('tipo','success');

			/*Volta para tela inicial*/
			$this->load->view('estrutura/header.php',$dados);
			$this->load->view('index.php');
			$this->load->view('estrutura/footer.php');

		} else { /*Redireciona caso o usuário não esteja logado*/

		/*Carrega a tela para logar*/
		$this->load->view('estrutura/login.php');

		}
	}

	public function erro() { /*Todo link errado será redirecionado para esta tela*/
		$dados = array(
		'titulo' => nomeAplicacao,
		'tela' => 'Erro 404',
		'ativo' => ''
		);			

			$this->session->set_userdata('aviso','Endereço de acesso inválido!');
			$this->session->set_userdata('tipo','warning');

			$this->load->view('estrutura/header.php',$dados);
			$this->load->view('erro.php');
			$this->load->view('estrutura/footer.php');		
	}


	public function login() { /*Função para realizar o login*/

		$login = array ( /*Campos que foram digitados*/

			'usuario' => $this->input->post('user'),
			'senha' => md5($this->input->post('pass'))

			);

		if($this->logar_model->validar($login)) { /*Valida dados*/

			$secao = array ( /*Inicia a seção*/

				'usuario' => $this->input->post('user'),
				'online' => true

			);

			$this->session->set_userdata($secao);

			redirect('main/index','refresh');

		} else { /*Carrega a tela para logar*/

			/*Aviso para o header*/
			$this->session->set_userdata('aviso','Dados incorretos ou usuário inativo.');
			/*ucfirst deixa a primeira letra em maiusculo*/
			redirect('main/index','refresh');

		}

	}

	public function redirecionar() { /* Faz uma validação e formatação antes de carregar a view*/

		$nomeView = explode("-", $this->uri->segment(3)); /*separa os nomes de pastas e da aplicação*/

		$renomeado = str_replace("_", " ", ucfirst($nomeView[count($nomeView)-1])); /*Tirar os _ dos nomes e insere espaço da ultima palavra no array, que será o nome da aplicação.*/

		$endereco = str_replace("-", "/",$this->uri->segment(3)); /*troca o - por uma identificação de diretório*/

		if (!$this->seguranca_model->existeAplicacao($nomeView[count($nomeView)-1])) { /*Caso não exista esta aplicação*/

			$this->erro();

		} elseif($this->seguranca_model->validarAcesso($nomeView[count($nomeView)-1]) and $this->session->userdata('online')) { /*Validar se o usuário tem permissão a tela, e se está logado*/

			if (method_exists($this->dados_iniciais_model, $nomeView[count($nomeView)-1])) { /*Verifica se existe algum método especifico a ser carregado para está aplicação*/
				
				$dados = array (

					'titulo' => nomeAplicacao.' - '.$renomeado,
					'tela' => $renomeado, /*ucfirst deixa a primeira letra em maiúsculo*/
					'ativo' => $this->uri->segment(3), /*Marca no Header como ativo o menu selecionado*/
					'pack' => $this->dados_iniciais_model->$nomeView[count($nomeView)-1]() /*Caso exista traz o retorno*/

				);

			} else {

				$dados = array (

				'titulo' => nomeAplicacao.' - '.$renomeado,
				'tela' => ucfirst($renomeado), /*ucfirst deixa a primeira letra em maiúsculo*/
				'ativo' => $this->uri->segment(3), /*Marca no Header como ativo o menu selecionado*/

				);

			}

			$this->load->view('estrutura/header.php',$dados);
			$this->load->view(''.$endereco.'');
			$this->load->view('estrutura/footer.php');

		} else { /*Caso não tenha permissão de acesso*/

			$dados = array ( /*Dados para o Header*/

				'titulo' => nomeAplicacao,
				'tela' => 'Acesso Negado',
				'ativo' => '',
				'aplicacao' => $this->seguranca_model->aplicacaoAcessoNegado($nomeView[count($nomeView)-1]) /*Busca os dados da aplicação que o usuário não tem permissão.*/

			);
			/*Aviso para o header*/
			$this->session->set_userdata('aviso','Seu perfil não tem permissão de acesso, caso precise entre em contato com o administrador.');
			$this->session->set_userdata('tipo','warning');

			$this->load->view('estrutura/header.php',$dados);
			$this->load->view('sem_Permissao');
			$this->load->view('estrutura/footer.php');

		}

	}

}

/* End of file main.php */
/* Location: ./application/controllers/main.php */