<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class pdf extends CI_Model {

	public function ubs_Ou_Dep($os = null) {

		$validar = $this->db->query('select id_unidadesolicitante from tbl_solicitaordemservico 
		inner join tbl_ordemservico on id_solicitacao = id_solicitaordemservico where id_ordemservico = '.$os.';')->row();

		if($validar->id_unidadesolicitante > 10000){
			return false; //se for Cnes
		} else {
			return true; //Se for id
		}


	}

	public function pdf_impresso_Vistoria($os = null){

		if($this->ubs_Ou_Dep($os)){ //Caso seja dept

			$pack = $this->db->query('SELECT id_ordemservico,id_unidadesolicitante,depto,divisao,secao,setor,observacoes,tso.defeitoapresentado,modelo,prefixo,km,CURRENT_DATE hoje  
			from tbl_ordemservico
			left join tbl_solicitaordemservico tso on tso.id_solicitaordemservico = id_solicitacao
			left join tbl_veiculo tv on tso.id_veiculo = tv.id_veiculo
			left join tbl_unidadeutilizadora tuu on tuu.id_unidadeutilizadora = id_unidadesolicitante
			left join tbl_depto id on id.id_depto = tuu.id_depto
			left join tbl_divisao idi on idi.id_divisao = tuu.id_divisao
			left join tbl_secao ise on ise.id_secao = tuu.id_secao
			left join tbl_setor iset on iset.id_setor = tuu.id_setor
			where id_ordemservico = '.$os.';');

			return $pack;

		} else { //Caso seja ubs

			$pack = $this->db->query('SELECT id_ordemservico,id_unidadesolicitante,unidadesaude,observacoes,tso.defeitoapresentado,modelo,prefixo,km,CURRENT_DATE hoje  
			from tbl_ordemservico
			left join tbl_solicitaordemservico tso on tso.id_solicitaordemservico = id_solicitacao
			left join tbl_veiculo tv on tso.id_veiculo = tv.id_veiculo
			left join tbl_unidadeutilizadora tuu on tuu.id_unidadeutilizadora = id_unidadesolicitante
			left join tbl_unidadesaude on cnes = id_unidadesolicitante
			where id_ordemservico ='.$os.';');

			return $pack;

		}

	
	}

	public function pdf_impresso_Servicos_Externos($os = null){


		if($this->ubs_Ou_Dep($os)){ //Caso seja dept

			$pack = $this->db->query('SELECT id_ordemservico,id_unidadesolicitante,depto,divisao,secao,setor,observacoes,tso.defeitoapresentado,modelo,prefixo,km,CURRENT_DATE hoje  
			from tbl_ordemservico
			left join tbl_solicitaordemservico tso on tso.id_solicitaordemservico = id_solicitacao
			left join tbl_veiculo tv on tso.id_veiculo = tv.id_veiculo
			left join tbl_unidadeutilizadora tuu on tuu.id_unidadeutilizadora = id_unidadesolicitante
			left join tbl_depto id on id.id_depto = tuu.id_depto
			left join tbl_divisao idi on idi.id_divisao = tuu.id_divisao
			left join tbl_secao ise on ise.id_secao = tuu.id_secao
			left join tbl_setor iset on iset.id_setor = tuu.id_setor
			where id_ordemservico = '.$os.';');

			return $pack;

		} else { //Caso seja ubs

			$pack = $this->db->query('SELECT id_ordemservico,id_unidadesolicitante,unidadesaude,observacoes,tso.defeitoapresentado,modelo,prefixo,km,CURRENT_DATE hoje  
			from tbl_ordemservico
			left join tbl_solicitaordemservico tso on tso.id_solicitaordemservico = id_solicitacao
			left join tbl_veiculo tv on tso.id_veiculo = tv.id_veiculo
			left join tbl_unidadeutilizadora tuu on tuu.id_unidadeutilizadora = id_unidadesolicitante
			left join tbl_unidadesaude on cnes = id_unidadesolicitante
			where id_ordemservico ='.$os.';');

			return $pack;

		}


	}

	public function pdf_impresso_Retirada_Estoque($os = null) {


		if($this->ubs_Ou_Dep($os)){ //Caso seja dept

			$pack = array( 
			
				'pack' => $this->db->query('SELECT id_ordemservico,id_unidadesolicitante,depto,divisao,secao,setor,observacoes 
				from tbl_ordemservico
				left join tbl_solicitaordemservico tso on tso.id_solicitaordemservico = id_solicitacao
				left join tbl_unidadeutilizadora tuu on tuu.id_unidadeutilizadora = id_unidadesolicitante
				left join tbl_depto id on id.id_depto = tuu.id_depto
				left join tbl_divisao idi on idi.id_divisao = tuu.id_divisao
				left join tbl_secao ise on ise.id_secao = tuu.id_secao
				left join tbl_setor iset on iset.id_setor = tuu.id_setor
				where id_ordemservico = '.$os.';'),

				'codigo' => $this->db->query('SELECT tc.codigo from tbl_saidaitens ts
				left join tbl_clientes tc on tc.id_cliente = tc.id_cliente
				where ordemservico = '.$os.' limit 1;'),

				'itens' => $this->db->query('SELECT id_saidaitens,codigomontadora,quantidade,unidademedida,descricao from tbl_itens ti
				left join tbl_saidaitens ts on id_itens = codigointerno
				left join tbl_unidademedida tu on tu.id_unidademedida = ti.id_unidademedida
				where ordemservico = '.$os.';')->result()

			);

			return $pack;

		} else { //Caso seja ubs

			$pack = array( 
			
				'pack' => $this->db->query('SELECT id_ordemservico,id_unidadesolicitante,unidadesaude,observacoes  
				from tbl_ordemservico
				left join tbl_solicitaordemservico tso on tso.id_solicitaordemservico = id_solicitacao
				left join tbl_veiculo tv on tso.id_veiculo = tv.id_veiculo
				left join tbl_unidadeutilizadora tuu on tuu.id_unidadeutilizadora = id_unidadesolicitante
				left join tbl_unidadesaude on cnes = id_unidadesolicitante
				where id_ordemservico ='.$os.';'),

				'codigo' => $this->db->query('SELECT tc.codigo from tbl_saidaitens ts
				left join tbl_clientes tc on tc.id_cliente = tc.id_cliente
				where ordemservico = '.$os.' limit 1;'),

				'itens' => $this->db->query('SELECT id_saidaitens,codigomontadora,quantidade,unidademedida,descricao from tbl_itens ti
				left join tbl_saidaitens ts on id_itens = codigointerno
				left join tbl_unidademedida tu on tu.id_unidademedida = ti.id_unidademedida
				where ordemservico = '.$os.';')->result()

			);

			return $pack;

		}

		
	}

	public function impresso_Autorizacao_Fornec_Exec_Servicos_pag1($os = null){

			$idunidade = $this->db->query('select id_unidadesolicitante from tbl_solicitaordemservico so 
				left join tbl_ordemservico os on so.id_solicitaordemservico=os.id_solicitacao where os.id_ordemservico = '.$os.';');

				if ($idunidade->row()->id_unidadesolicitante>1000000){

					$tipounidade = $this->db->query('select os.id_ordemservico, so.id_unidadesolicitante, 
						us.cnes, us.unidadesaude, e.enderecounidade, e.contato, e.telunidade, e.telunidade2,
						afp.id_afpecas 
						from tbl_ordemservico os 
						inner join tbl_solicitaordemservico so on os.id_solicitacao = so.id_solicitaordemservico
						left join tbl_unidadesaude us on us.cnes = so.id_unidadesolicitante
						left join enderecounidade e on us.cnes = e.cnes
						right join tbl_autofornecpecas afp on afp.id_ordemservico = os.id_ordemservico
						where os.id_ordemservico ='.$os.';');

				}else{

					$tipounidade = $this->db->query('select os.id_ordemservico, v.prefixo, v.placa, v.tipo, so.id_unidadesolicitante,
						uu.rua, uu.numero, uu.complemento, uu.cidade, uu.uf, uu.cep, uu.telefone, uu.ramal, uu.fax, uu.email, 
						sc.codsecao, sc.secao, st.codsetor, st.setor, dt.coddepto, dt.depto, dv.coddivisao, 
						dv.divisao, afp.id_afpecas
						from tbl_ordemservico os left join tbl_solicitaordemservico so on os.id_solicitacao = so.id_solicitaordemservico
						left join tbl_unidadeutilizadora uu on so.id_unidadesolicitante = uu.id_unidadeutilizadora
						left join tbl_depto dt on uu.id_depto = dt.id_depto
						left join tbl_divisao dv on dt.coddepto = dv.coddepto
						left join tbl_secao sc on dv.coddivisao = sc.coddivisao
						left join tbl_setor st on sc.codsecao = st.coddivisao
						right join tbl_veiculo v on so.id_veiculo = v.id_veiculo
						right join tbl_autofornecpecas afp on os.id_ordemservico = afp.id_ordemservico
						where os.id_ordemservico ='.$os.';');

				}

		$pack = array(  

			'tipounidade' => $tipounidade,

			'fornecedor' => $this->db->query('SELECT nome,codigo,rua,numero,complemento,cidade,uf,tel1,fax,cnpj,email from 
			tbl_fornecedorprestador tf inner join tbl_ordemservico tos on tf.id_fornecedorprestador = tos.id_fornecedorprestador
			where id_ordemservico ='.$os.';'),

			'pecas' => $this->db->query('SELECT id_itens,codigomontadora,descricao,unidademedida,quantidade,precobruto,desconto, ((precobruto -((precobruto*desconto)/100))*quantidade) valorTotal
			from tbl_ordemservico_x_item 
			left join tbl_itens ti on id_itens = id_item
			left join tbl_unidademedida tu on tu.id_unidademedida = ti.id_unidademedida
			where id_ordemservico = '.$os.';')->result(),

			'servicos' => $this->db->query('SELECT servico,quantidade,valorunitario, (quantidade*valorunitario) valorTotal from tbl_servicos
			left join tbl_ordemservico_x_servico on id_servico = id_servicos
			where id_ordemservico ='.$os.';')->result(),

			'contrato' => $this->db->query('select os.id_ordemservico os, afp.numero numero, o.objetotexto,
f.nome fnome, f.tel1 ftel, f.fax ffax, f.cnpj fcnpj, f.email femail, f.codigo fcodigo, f.rua frua, f.bairro fbairro,f.numero fnumero,f.complemento fcomplemento,f.cidade fcidade,
tu.uf fuf,
c.numerocontratoata cnumerocontratoata,	c.dtinivigencia cdtinivigencia, c.dtfimvigencia cdtfimvigencia,
e.numprocadmempenho cnumprocadmempenho, e.numprocregpreco cnumprocregpreco, 
c.prazoentrega cprazoentrega
from tbl_ordemservico os left join tbl_autofornecpecas afp on os.id_ordemservico = afp.id_ordemservico
left join tbl_contratoata c on c.id_contratoata = afp.id_contratoata 
left join tbl_empenho e on e.numcontratoata = c.id_contratoata 
left join tbl_dotacao d on d.id_dotacao = e.id_dotacao 
left join tbl_segmento s on s.id_segmento = d.id_segmento 
left join tbl_objeto o on o.id_objeto = c.id_objetotitulo 
left join tbl_fornecedorprestador f on f.id_fornecedorprestador = e.id_fornecedorprestador 
left join tbl_uf tu on tu.id_uf = f.uf
where os.id_ordemservico in (select id_ordemservico from tbl_autofornecpecas) and os.id_ordemservico = '.$os.';')

		);

		return $pack;

	}


}