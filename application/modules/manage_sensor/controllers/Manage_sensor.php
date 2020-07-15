<?php if (!defined('BASEPATH')) exit('Maaf, akses secara langsung tidak diperkenankan.');

class manage_sensor extends MX_Controller{
	public function __construct(){
            parent::__construct();
			$this->load->helper('url');
			$this->load->model('M_session');
			$this->load->model('M_manage_sensor');
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
				$data['sensor'] = $this->M_manage_sensor->tampil_data_sensor();
				$data['namamodule'] = "manage_sensor";
				$data['namafileview'] = "v_manage_sensor";
				echo Modules::run('template/admin_template', $data);
			}
			else if ($id_user && $status=='operator'){
				
			}
			
			else {
				
			}
		}	 
	}
	
//===================================== Deleta Data=============================================
	
	function delete_sensor(){
			$kode = $this->security->xss_clean($this->uri->segment(3));
			$result = $this->M_manage_sensor->get_data_sensor($kode);
			if($result == null) redirect('manage_sensor');
			else $this->M_manage_sensor->delete_data_sensor($kode);
				redirect('manage_sensor');
		}
		
//=========================================Tambah Data==========================================
		
	function tambah_sensor() {
		$session = $this->M_session->get_session();
		$id_user = $session['session_userid'];
			$sensorid = $this->input->post('sensorid');
			$variable = $this->input->post('variable');
			$unit = $this->input->post('unit');
			$manufacture = $this->input->post('manufacture');
			$spec = $this->input->post('spec');
			$sensor_detail = $this->input->post('sensor_detail');
			$createdby = $id_user;
		
			$this->M_manage_sensor->tambah_sensor($sensorid,$variable,$unit,$manufacture,$spec,$sensor_detail,$createdby);
			redirect('manage_sensor');	
		}
		
//======================================== Update Data===================================
	
	function update_sensor($id) {
		$session = $this->M_session->get_session();
		$id_user = $session['session_userid'];
			if($this->input->post('submit')) {
				$this->M_manage_sensor->update_sensor($id,$id_user);
				redirect('manage_sensor');
			}
			$data['sensor'] = $this->M_manage_sensor->getById_sensor($id);
			$data['namamodule'] = "manage_sensor";
			$data['namafileview'] = "update_sensor";
			echo Modules::run('template/admin_template', $data);
		}
		
	//--------------------------------------------------------------------------------------------------------------------
}