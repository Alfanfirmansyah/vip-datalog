<?php if (!defined('BASEPATH')) exit('Maaf, akses secara langsung tidak diperkenankan.');

class Manage_user extends MX_Controller{
	public function __construct(){
            parent::__construct();
			$this->load->helper('url');
			$this->load->model('M_session');
			$this->load->model('M_manage_user');
	}
	
	function index(){
	$session = $this->M_session->get_session();
		
		if (!$session['session_userid'] && !$session['session_status']){
			//user belum login
			$data['namamodule'] = "login";
			$data['namafileview'] = "login";
			echo Modules::run('template/login_template', $data);
		}
		else{
		$id_user = $session['session_userid'];
		$status = $session['session_status'];
		
			if ($id_user && $status=='admin'){
				$data['user_operator'] = $this->M_manage_user->tampil_data_operator();
				$data['user_admin']    = $this->M_manage_user->tampil_data_admin();
				$data['namamodule'] = "Manage_user";
				$data['namafileview'] = "v_manage_user";
				echo Modules::run('template/admin_template', $data);
			}
			else if ($id_user && $status=='operator'){
				
			}
			
			else {
				
			}
		}	 
	}
	
	//================================= Deleta Data===================================
	
	
	function delete_operator() {
			$kode = $this->security->xss_clean($this->uri->segment(3));
			$result = $this->M_manage_user->get_data_operator($kode);
			if($result == null) redirect('Manage_user');
			else $this->M_manage_user->delete_data_operator($kode);
				redirect('Manage_user');
		}
	function delete_admin() {
			$kode = $this->security->xss_clean($this->uri->segment(3));
			$result = $this->M_manage_user->get_data_admin($kode);
			if($result == null) redirect('Manage_user');
			else $this->M_manage_user->delete_data_admin($kode);
				redirect('Manage_user');
		}
	
//=========================================Tambah Data==========================================
		
	function tambah_operator() {
			$username = $this->input->post('username');
			$password=sha1($this->input->post('password'));
			$nama = $this->input->post('nama');
			$alamat = $this->input->post('alamat');
			$telp = $this->input->post('telp');
			$email = $this->input->post('email');
			$status = 'operator';

			$this->M_manage_user->tambah_operator($username,$password,$nama,$alamat,$telp,$email,$status);
			redirect('Manage_user');	
		}
	function tambah_admin() {
			$username = $this->input->post('username');
			$password=sha1($this->input->post('password'));
			$nama = $this->input->post('nama');
			$alamat = $this->input->post('alamat');
			$telp = $this->input->post('telp');
			$email = $this->input->post('email');
			$status = 'admin';

			$this->M_manage_user->tambah_operator($username,$password,$nama,$alamat,$telp,$email,$status);
			redirect('Manage_user');	
		}

	
	//======================================== Update Data===================================
	
	function update_operator($id) {
			if($this->input->post('submit')) {
				$this->M_manage_user->update_operator($id);
				redirect('Manage_user');
			}
			$data['user_operator'] = $this->M_manage_user->getById_Operator($id);
			$data['namamodule'] = "Manage_user";
			$data['namafileview'] = "update_operator";
			echo Modules::run('template/admin_template', $data);
		}
		
	function update_admin($id) {
			if($this->input->post('submit')) {
				$this->M_manage_user->update_admin($id);
				redirect('Manage_user');
			}
			$data['user_admin'] = $this->M_manage_user->getById_Admin($id);
			$data['namamodule'] = "Manage_user";
			$data['namafileview'] = "update_admin";
			echo Modules::run('template/admin_template', $data);
		}
		
	

	//--------------------------------------------------------------------------------------------------------------------
}