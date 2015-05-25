<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class pdf_controller extends CI_Controller {

	public function pdf_Vistoria() {

		$dados = array (

			'pack' => $this->pdf->pdf_impresso_Vistoria($this->input->post("ordemservico")),

		);

		$this->load->view('pdf/pdf_impresso_Vistoria.php',$dados);


	}

	public function pdf_Servicos_Externos(){


		$dados = array (

			'pack' => $this->pdf->pdf_impresso_Servicos_Externos($this->input->post("ordemservico")),

		);

		$this->load->view('pdf/pdf_impresso_Servicos_Externos.php',$dados);


	}

	public function pdf_Retirada_Estoque(){


		/*$dados = array (

			'pack' => $this->pdf->pdf_impresso_Retirada_Estoque($this->input->post("ordemservico")),

		);*/

		$this->load->view('pdf/pdf_impresso_Retirada_Estoque.php');


	}

	public function autorizacao_Fornec_Exec_Servicos_pag1(){


		/*$dados = array (

			'pack' => $this->pdf->pdf_impresso_Retirada_Estoque($this->input->post("ordemservico")),

		);*/
		
		$this->load->view('pdf/pdf_impresso_Autorizacao_Fornec_Exec_Servicos_pag1.php');


	}

	public function autorizacao_Fornec_Exec_Servicos_pag2(){


		/*$dados = array (

			'pack' => $this->pdf->pdf_impresso_Retirada_Estoque($this->input->post("ordemservico")),

		);*/

		$this->load->view('pdf/pdf_impresso_Autorizacao_Fornec_Exec_Servicos_pag2.php');

		
	}


}