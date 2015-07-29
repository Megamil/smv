<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class filtros extends CI_Controller {

		public function realizar_filtro_Entrada(){

			$possuiWhere = false;
			$where = '';

			if($this->input->post('dtinicioper') != '') {
				
				$where = 'where dataentrada >= \''.$this->input->post('dtinicioper').'\'';
				$possuiWhere = true;
			}

			if($this->input->post('dtfimper') != '') {
				if($possuiWhere) {

				$where .= ' and dataentrada <= \''.$this->input->post('dtfimper').'\'';

				} else {

				$where = 'where dataentrada <= \''.$this->input->post('dtfimper').'\'';
				$possuiWhere = true;

				}
			}

			if($this->input->post('dtiniciocod') != '') {
				if($possuiWhere) {

					$where .= ' and codigointerno >= '.$this->input->post('dtiniciocod');

				} else {

					$where = 'where codigointerno >= '.$this->input->post('dtiniciocod');
					$possuiWhere = true;
				}
			}

			if($this->input->post('dtfimcod') != '') {
				if($possuiWhere) {

					$where .= ' and codigointerno <= '.$this->input->post('dtfimcod');

				} else {

					$where = 'where codigointerno <= '.$this->input->post('dtfimcod');
					$possuiWhere = true;
				}
			}

			if($this->input->post('grupoitens') != 'Selecione...') {
				if($possuiWhere) {

					$where .= ' and id_grupoitens = '.$this->input->post('grupoitens');

				} else {

					$where = 'where id_grupoitens = '.$this->input->post('grupoitens');
					$possuiWhere = true;
				}

				$this->session->set_userdata('grupoFiltro','where id_grupoitens = '.$this->input->post('grupoitens'));

			} else {

				$this->session->set_userdata('grupoFiltro',"");

			}

			if($this->input->post('fornecedorprestador') != 'Selecione...') {
				if($possuiWhere) {

					$where .= ' and id_fornecedorprestador = '.$this->input->post('fornecedorprestador');

				} else {

					$where = 'where id_fornecedorprestador = '.$this->input->post('fornecedorprestador');
					$possuiWhere = true;
				}
			}


			$this->session->set_userdata('where',$where);

			redirect('main/redirecionar/'.$this->input->post('caminho')); 

		}

public function realizar_filtro_saida(){

			$possuiWhere = false;
			$where = '';

			if($this->input->post('dtinicioper') != '') {
				
				$where = 'where si.datasaida >= \''.$this->input->post('dtinicioper').'\'';
				$possuiWhere = true;
			}

			if($this->input->post('dtfimper') != '') {
				if($possuiWhere) {

				$where .= ' and si.datasaida <= \''.$this->input->post('dtfimper').'\'';

				} else {

				$where = 'where si.datasaida <= \''.$this->input->post('dtfimper').'\'';
				$possuiWhere = true;

				}
			}

			if($this->input->post('dtiniciocod') != '') {
				if($possuiWhere) {

					$where .= ' and codigointerno >= '.$this->input->post('dtiniciocod');

				} else {

					$where = 'where codigointerno >= '.$this->input->post('dtiniciocod');
					$possuiWhere = true;
				}
			}

			if($this->input->post('dtfimcod') != '') {
				if($possuiWhere) {

					$where .= ' and codigointerno <= '.$this->input->post('dtfimcod');

				} else {

					$where = 'where codigointerno <= '.$this->input->post('dtfimcod');
					$possuiWhere = true;
				}
			}

			if($this->input->post('grupoitens') != 'Selecione...') {
				if($possuiWhere) {

					$where .= ' and id_grupoitens = '.$this->input->post('grupoitens');

				} else {

					$where = 'where id_grupoitens = '.$this->input->post('grupoitens');
					$possuiWhere = true;
				}

				$this->session->set_userdata('grupoFiltro','where id_grupoitens = '.$this->input->post('grupoitens'));

			} else {

				$this->session->set_userdata('grupoFiltro',"");

			}

			if($this->input->post('fornecedorprestador') != 'Selecione...') {
				if($possuiWhere) {

					$where .= ' and id_fornecedorprestador = '.$this->input->post('fornecedorprestador');

				} else {

					$where = 'where id_fornecedorprestador = '.$this->input->post('fornecedorprestador');
					$possuiWhere = true;
				}
			}


			$this->session->set_userdata('where',$where);

			redirect('main/redirecionar/'.$this->input->post('caminho')); 

		}


public function realizar_filtro_Ativo(){

			$possuiWhere = false;
			$where = '';

			if($this->input->post('dtiniciocod') != '') {
				if($possuiWhere) {

					$where .= ' and e.codigointerno >= '.$this->input->post('dtiniciocod');

				} else {

					$where = 'where e.codigointerno >= '.$this->input->post('dtiniciocod');
					$possuiWhere = true;
				}
			}

			if($this->input->post('dtfimcod') != '') {
				if($possuiWhere) {

					$where .= ' and e.codigointerno <= '.$this->input->post('dtfimcod');

				} else {

					$where = 'where e.codigointerno <= '.$this->input->post('dtfimcod');
					$possuiWhere = true;
				}
			}

			if($this->input->post('grupoitens') != 'Selecione...') {
				if($possuiWhere) {

					$where .= ' and id_grupoitens = '.$this->input->post('grupoitens');

				} else {

					$where = 'where id_grupoitens = '.$this->input->post('grupoitens');
					$possuiWhere = true;
				}

				$this->session->set_userdata('grupoFiltro','where id_grupoitens = '.$this->input->post('grupoitens'));

			} else {

				$this->session->set_userdata('grupoFiltro',"");

			}

			if($this->input->post('fornecedorprestador') != 'Selecione...') {
				if($possuiWhere) {

					$where .= ' and id_fornecedor = '.$this->input->post('fornecedorprestador');

				} else {

					$where = 'where id_fornecedor = '.$this->input->post('fornecedorprestador');
					$possuiWhere = true;
				}
			}


			$this->session->set_userdata('where',$where);

			redirect('main/redirecionar/'.$this->input->post('caminho')); 

		}

	} 

?>