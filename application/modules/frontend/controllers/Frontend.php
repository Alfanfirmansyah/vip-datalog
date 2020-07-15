<?php if (!defined('BASEPATH')) exit('Maaf, akses secara langsung tidak diperkenankan.');

class Frontend extends MX_Controller{
	public function __construct(){
            parent::__construct();
			$this->load->helper('url');
			$this->load->model('M_frontend');
	}
	
	function index(){
			$data['slider'] = $this->M_frontend->tampil_slider();
			$data['tech'] = $this->M_frontend->tampil_tech();
			$data['news'] = $this->M_frontend->tampil_news();
			$this->load->view('view_frontend_template',$data);
	}
}