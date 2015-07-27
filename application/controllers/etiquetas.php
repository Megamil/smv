<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Etiquetas extends CI_Controller {

	public function configurar_etiqueta(){

		$this->form_validation->set_rules('titulo','titulo','is_unique[tbl_etiquetas.nomeetiqueta]');

		if($this->input->post('titulo') != '' && $this->form_validation->run()) { // quando for para memorizar a etiqueta

			$dados = array(

			  	'nomeetiqueta' => $this->input->post('titulo'),
				'margemsuperior' => $this->input->post('margemsuperior'),
				'margemdireita' => $this->input->post('margemdireita'),
				'margemesquerda' => $this->input->post('margemesquerda'),
				'larguraetiqueta' => $this->input->post('largura'),
				'alturaetiqueta' => $this->input->post('altura'),
				'espacoetiquetas' => $this->input->post('espacoetiqueta'),
				'fonte' => $this->input->post('fonte'),
				'tamanhofonte' => $this->input->post('tamanhofonte'),
				'tamanhopapel' => $this->input->post('papel')

			);

			$this->novo->etiqueta_Nova($dados);

		}

		$config = array(

			'me'=>$this->input->post('margemesquerda'),
			'md'=>$this->input->post('margemdireita'),
			'ms'=>$this->input->post('margemsuperior'),
			'le'=>$this->input->post('largura'),
			'ae'=>$this->input->post('altura'),
			'ee'=>$this->input->post('espacoetiqueta'),
			'fonte'=>$this->input->post('fonte'),
			'tamanhofonte'=>$this->input->post('tamanhofonte'),
			'papel'=>$this->input->post('papel'),
			'qts' => $this->input->post('qts'),
			'selecionados' => $this->input->post('imprimir'),
			'sql' => $this->dados_iniciais_model->nova_Etiqueta() 

		);


		$this->load->view('../../fpdf/etiquetas/pdf_impresso_Etiqueta',$config);
	}
	
}