<?php if (!defined('BASEPATH')) exit('Maaf, akses secara langsung tidak diperkenankan.');

class Manage_station extends MX_Controller{
	public function __construct(){
            parent::__construct();
			$this->load->helper('url');
			$this->load->model('M_session');
			$this->load->model('M_manage_station');
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
				$data['data_city'] = $this->M_manage_station->tampil_data_city();
				$data['data_station'] = $this->M_manage_station->tampil_data_station();
				$data['user_admin']    = $this->M_manage_station->tampil_data_admin();

				$data['namamodule'] = "Manage_station";
				$data['namafileview'] = "v_manage_station";
				echo Modules::run('template/admin_template', $data);
			}
			else if ($id_user && $status=='operator'){
				$data['data_city'] = $this->M_manage_station->tampil_data_city();
				$data['data_station'] = $this->M_manage_station->tampil_data_station();
				$data['user_admin']    = $this->M_manage_station->tampil_data_admin();

				$data['namamodule'] = "Manage_station";
				$data['namafileview'] = "v_manage_station";
				echo Modules::run('template/operator_template', $data);
			}
			
			else {
				
			}
		}	 
	}
	
	function tambah_city() {
			$CityCode = $this->input->post('CityCode');
			$CityName = $this->input->post('CityName');
			$this->M_manage_station->tambah_data_city($CityCode,$CityName);
			redirect('Manage_station');	
		}
	function update_city($id) {
		$session = $this->M_session->get_session();
		$id_user = $session['session_userid'];
		$status = $session['session_status'];
		if ($id_user && $status=='admin'){
		
			if($this->input->post('submit')) {
				$this->M_manage_station->update_data_city($id);
				redirect('Manage_station');
			}
			$data['data_city'] = $this->M_manage_station->getById_city($id);
			$data['namamodule'] = "Manage_station";
			$data['namafileview'] = "update_city";
			echo Modules::run('template/admin_template', $data);
	    }
		else if ($id_user && $status=='operator'){
			if($this->input->post('submit')) {
				$this->M_manage_station->update_data_city($id);
				redirect('Manage_station');
			}
			$data['data_city'] = $this->M_manage_station->getById_city($id);
			$data['namamodule'] = "Manage_station";
			$data['namafileview'] = "update_city";
			echo Modules::run('template/operator_template', $data);
			
		}
		}
	function delete_city() {
			$kode = $this->security->xss_clean($this->uri->segment(3));
			$result = $this->M_manage_station->get_data_city($kode);
			if($result == null) redirect('Manage_station');
			else $this->M_manage_station->delete_data_city($kode);
				redirect('Manage_station');
		}
	function tambah_station() {
			$StationID = $this->input->post('StationID');
			$StationName = $this->input->post('StationName');
			$CityCode = $this->input->post('CityCode');
			$Address = $this->input->post('Address');
			$UserStationDb = $this->input->post('UserStationDb');
			$PassStationDb = $this->input->post('PassStationDb');
			$Latitude = $this->input->post('Latitude');
			$Longitude = $this->input->post('Longitude');
			$this->M_manage_station->tambah_data_station($StationID,$StationName,$CityCode,$Address,$UserStationDb,$PassStationDb,$Latitude,$Longitude);
			redirect('Manage_station');	
		}
	function update_station($id) {
		$session = $this->M_session->get_session();
		$id_user = $session['session_userid'];
		$status = $session['session_status'];
		
		if ($id_user && $status=='admin'){
			if($this->input->post('submit')) {
				$this->M_manage_station->update_data_station($id);
				redirect('Manage_station');
			}
			$data['data_station'] = $this->M_manage_station->getById_station($id);
			$data['data_city'] = $this->M_manage_station->tampil_data_city();
			$data['namamodule'] = "Manage_station";
			$data['namafileview'] = "update_station";
			echo Modules::run('template/admin_template', $data);
		}else if ($id_user && $status=='operator'){
			if($this->input->post('submit')) {
				$this->M_manage_station->update_data_station($id);
				redirect('Manage_station');
			}
			
			$data['data_station'] = $this->M_manage_station->getById_station($id);
			$data['data_city'] = $this->M_manage_station->tampil_data_city();
			$data['namamodule'] = "Manage_station";
			$data['namafileview'] = "update_station";
			echo Modules::run('template/operator_template', $data);
		}
	}
	function delete_station() {
			$kode = $this->security->xss_clean($this->uri->segment(3));
			$result = $this->M_manage_station->get_data_station($kode);
			if($result == null) redirect('Manage_station');
			else $this->M_manage_station->delete_data_station($kode);
				redirect('Manage_station');
		}
	
	
	
	

	//--------------------------------------------------------------------------------------------------------------------
}