<?php
class Portfolio extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_portfolio');
	}
	function index($kategoriId){
		$jum=$this->m_portfolio->get_portfolio($kategoriId);
        $page=$this->uri->segment(4);
        if(!$page):
            $offset = 0;
        else:
            $offset = $page;
        endif;
        $limit=6;
        $config['base_url'] = base_url() . 'portfolio/index/';
        $config['total_rows'] = $jum->num_rows();
        $config['per_page'] = $limit;
        $config['uri_segment'] = 4;
        $config['first_link'] = 'Awal';
        $config['last_link'] = 'Akhir';
        $config['next_link'] = 'Next >>';
        $config['prev_link'] = '<< Prev';
        $this->pagination->initialize($config);
        $x['page'] =$this->pagination->create_links();
		$x['data']=$this->m_portfolio->get_portfolio_per_page($kategoriId,$offset,$limit);

        $this->load->view('template/v_header');
        $this->load->view('template/v_menu');
        $this->load->view('v_portfolio',$x);
        $this->load->view('template/v_footer');
	}

    function detail($id){
        $x['data']=$this->m_portfolio->get_portfolio_by_kode($id);
        $this->load->view('template/v_header');
        $this->load->view('template/v_menu');
        $this->load->view('v_portfolio_detail',$x);
        $this->load->view('template/v_footer');
    }

}