<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SiteController extends CI_Controller {
	public $alerta = '';
	public function __construct() 
	{
		parent::__construct();
		
		$this->load->model('Default_model', 'default');
		$this->load->model('Site_model', 'site');
		define('PER_PAGE', 12);
	}

	private function create_pagination($base_url, $total_rows, $segment){
		$config['base_url'] = $base_url;
		$config['total_rows'] = $total_rows;
		$config['per_page'] = PER_PAGE;		
 		$config["num_links"] = 3;
		$config['uri_segment'] = 2;
		$config['use_page_numbers'] = TRUE;
		$config['full_tag_open'] = '<ul class="pagination justify-content-center" id="pagination">';
		$config['full_tag_close'] = '</ul>';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li">';
		$config['prev_link'] = '<i class="fas fa-angle-left"></i>';
		$config['next_link'] = '<i class="fas fa-angle-right"></i>';
		$config['last_link'] = 'Última';
		$config['first_link'] = 'Primeira';
		$config['cur_tag_open'] = '<li class="page-item active"><a href="javascript:void(0);" class="page-link">';
		$config['cur_tag_close'] = '</a></li">';
		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';
		$config['attributes'] = array('class' => 'page-link');
		$this->pagination->initialize($config);
		return $this->pagination->create_links();
	}

	public function formatarImoveis($imoveis, $negocio){
		foreach ($imoveis as $imovel) {

			// Formata o valor da Venda
			if($imovel->disponivel_venda == 1){
				if($imovel->valor_venda == '' || $imovel->valor_venda == '0.00') {
	            	$imovel->valor_venda = 'Á Consultar';
	            }
	            else{
	            	$imovel->valor_venda = 'R$ '.number_format($imovel->valor_venda, 2, ',', '.');
	            }
	        }
	        else{
	        	$imovel->valor_venda = '';
	        }

            // Formata valores para Locação
            if($imovel->disponivel_locacao == 1){
	            if($imovel->valor_locacao == '' || $imovel->valor_locacao == '0.00') {
	            	$imovel->valor_locacao = 'Á Consultar';
	            }
	            else{            	
	            	$imovel->valor_locacao = 'R$ '.number_format($imovel->valor_locacao, 2, ',', '.');
	            }
	        }
	        else{
	        	$imovel->valor_locacao = '';
	        }

	        if($negocio == 'comprar'){
	        	$imovel->preco_imovel = $imovel->valor_venda;
	        }
	        elseif($negocio == 'alugar'){
	        	$imovel->preco_imovel = $imovel->valor_locacao;
	        }
            // Valor condominio
            if($imovel->valor_condominio != '0.00') {
            	$imovel->valor_condominio = 'R$ '.number_format($imovel->valor_condominio, 2, ',', '.').'';
            }
            else{
            	$imovel->valor_condominio = '';
            }

            $dsg = '';
            $imovel->texto_complementar_site = nl2br($imovel->texto_complementar_site);

			
			// Numero de quartos
			if(($imovel->num_quartos != '-')and($imovel->num_quartos != '0')and($imovel->num_quartos != '')) {
            	$dsg .= '<div class="value"><p><i class="fas fa-bed"></i> <span> '.$imovel->num_quartos.'</span> quartos</p></div>';
            }

			// Numero de suítes
            // if(($imovel->num_suites != '-')and($imovel->num_suites != '0')and($imovel->num_suites != '')) {
            // 	$dsg .= '<div class="value"><p><span> '.$imovel->num_suites.'</span> suítes</p></div>';
            // }

            // Numero de suítes
            if(($imovel->num_banheiros != '-')and($imovel->num_banheiros != '0')and($imovel->num_banheiros != '')) {
            	$dsg .= '<div class="value"><p><i class="fas fa-bath"></i><span> '.$imovel->num_banheiros.'</span> banheiros</p></div>';
            }

			// Numero de garagens
            if(($imovel->num_garagens != '-')and($imovel->num_garagens != '0')and($imovel->num_garagens != '')) {
            	$dsg .= '<div class="value"><p><i class="fas fa-car"></i><span> '.$imovel->num_garagens.'</span>  vagas</p></div>';
            }		

            // Medida terreno
			if(($imovel->medida_terreno != '-') and ($imovel->medida_terreno != '0')and($imovel->medida_terreno != '')) {
            	$dsg .= '<div class="value"><p><i class="fa fa-arrows-h"></i><span>  '.$imovel->medida_terreno.'</span> m²</p></div>';
            }

            $imovel->icons = $dsg;

            if($imovel->url_video != ''){
            	$url = explode("=", $imovel->url_video);
            	if(count($url) > 1){
            		$imovel->url_video = $url[1];
            	}
            }

            // Google Maps
            if($imovel->googlemaps != ''){
				$local = explode(",", $imovel->googlemaps);
				$imovel->latitude  = $local[0];
				$imovel->longitude = $local[1];
    		}

		}
		return $imoveis;
	}

	public function index()
	{
		$data = [
			'tipos_imoveis'    => $this->site->getTipos(),
			'cidades' 	       => $this->site->getCidades(),
			'destaques_venda'  => $this->formatarImoveis($this->site->getImoveisNovos('comprar'), 'comprar'),
			'destaques_locacao'=> $this->formatarImoveis($this->site->getImoveisNovos('alugar'), 'alugar'),
			'lancamentos'	   => $this->formatarImoveis($this->site->getImoveisNovos('lancamentos'), 'comprar'),
			'pagina'		   => 'index'
		];
		return $this->blade->view('site/index', $data);
	}

	public function buscar(){

		$filtro['negocio']	   = $this->uri->segment(2);		
		$filtro['localidade']  = $this->uri->segment(3);
		$filtro['tipo_imovel'] = $this->uri->segment(4);
		$filtro['limit'] 	   = PER_PAGE;
		$filtro['offset'] 	   = ($this->uri->segment(13)) ? $this->uri->segment(13) : 0; 
		$filtro['count'] 	   = true;
		
		$total_rows      = $this->site->buscaImoveis($filtro);
		$filtro['count'] = false;

		$base_url = base_url();

		$data = [
			'tipos_imoveis'   => $this->site->getTipos(),
			'cidades'         => $this->site->getCidades(),
			'bairros'         => $this->site->getbairros(),
			'pagination'      => $this->create_pagination($base_url, $total_rows, 13),
			'resultado_busca' => $this->formatarImoveis($this->site->buscaImoveis($filtro), $filtro['negocio']),
			'total_imoveis'	  => $total_rows,
			'filtro'		  => $filtro,
			'page_title'	  => NOME_SITE.''
		];

		if($data['filtro']['localidade'] != 'qualquer-tipo')
			$data['filtro']['localidade'] = revertSlugLocalidade($data['filtro']['localidade']);
		else{
			$data['filtro']['localidade'] = '';
		}

		return $this->blade->view('site/busca', $data);
	}

	public function filtrar(){

		$page = $this->uri->segment(2);

		$filtro['negocio'] 	   = $this->input->get('negocio');		
		$filtro['tipo_imovel'] = $this->input->get('tipos');
		$filtro['localidade']  = $this->input->get('localidade');
		$filtro['quartos'] 	   = $this->input->get('quartos');
		$filtro['suites'] 	   = $this->input->get('suites');
		$filtro['banheiros']   = $this->input->get('banheiros');
		$filtro['vagas'] 	   = $this->input->get('vagas');
		$filtro['min'] 	 	   = $this->input->get('min');
		$filtro['max'] 	 	   = $this->input->get('max');
		$filtro['offset'] 	   = $this->input->get('inicial');
		$filtro['limit'] 	   = $this->input->get('limit');
		$filtro['offset'] 	   = ($page - 1) * PER_PAGE;
		$filtro['count'] 	   = true;

		$total_rows = $this->site->buscaImoveis($filtro);		
		$filtro['count'] = false;
		$imoveis = $this->formatarImoveis($this->site->buscaImoveis($filtro), $filtro['negocio']);
		$base_url = base_url('filtrar/'.$page);
		$data = [
			'resultado_busca' => $imoveis,
			'pagination'		  => $this->create_pagination($base_url, $total_rows, ''),
			'filtro'		  => $filtro,
			'total_imoveis'	  => $total_rows,

		];
		if($total_rows > 0)
			$this->blade->view('site/layout/lista-imoveis', $data); 
		else
			echo '<div class="col-lg-12"><h2><b>'.$data['total_imoveis'].'</b> imóveis encontrados</h2></div>';
	}


	public function detalhes_imovel(){
		$cod_imovel = $this->uri->segment(2);
		$imovel = $this->site->getImovel($cod_imovel);

		$data = [
			'tipos_imoveis' => $this->site->getTipos(),
			'cidades' => $this->site->getCidades(),
		];

		if(count($imovel) == 0){
			$data['nenhum_imovel'] = true;
		}
		else{
			$data['nenhum_imovel'] = false;
			$imovel = $this->formatarImoveis($this->site->getImovel($cod_imovel), '');
			$data['imovel'] = $imovel[0];
			$data['fotos']  = $this->site->getFotosImovel($imovel[0]->cod_imovel, 0);
		}

		// echo '<pre>';
		// print_r($data); exit;
		return $this->blade->view('site/imovel', $data);
	}

	public function getLocalidades(){
		$keyword = strval($this->input->post('keyword'));
		$search_param = "%{$keyword}%";
		$localidades = $this->site->getLocalidades($search_param);
		echo json_encode($localidades);
	}

	public function quem_somos(){
		return $this->blade->view('site/quem-somos');
	}

	public function financiamento(){
		return $this->blade->view('site/financiamento');
	}

	public function cadastre_seu_imovel(){
		if($this->input->post()){
			print_r($this->input->post()); exit;
		}

		$data = [
			'alerta' => $this->alerta
		];

		return $this->blade->view('site/cadastre_seu_imovel', $data);
	}
	
	public function fale_conosco(){
		$data = [
			'alerta' => $this->alerta
		];

		return $this->blade->view('site/fale_conosco', $data);
	}


}
