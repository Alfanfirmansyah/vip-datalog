<?php if (!defined('BASEPATH')) exit('Maaf, akses secara langsung tidak diperkenankan!');
class Template extends MX_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model("M_template");
		$this->load->model("M_session");
	}	
	
	public function admin_template($data){
		$session = $this->M_session->get_session(); 
		$username = $session['session_userid'];
		
		$data['tampil_nama_user'] = $this->M_template->tampil_pengguna_admin($username);
		$this->load->view('view_admin_template', $data);
	}
	
	public function operator_template($data){
		$session = $this->M_session->get_session(); 
		$username = $session['session_userid'];
		
		$data['tampil_nama_user'] = $this->M_template->tampil_pengguna_operator($username);
		$this->load->view('view_operator_template', $data);
	}
	
	public function login_template($data){
		$this->load->view('view_login_template', $data);
	}
	
    public function showtime(){
            $this->load->view('view_clock');
        }  
}