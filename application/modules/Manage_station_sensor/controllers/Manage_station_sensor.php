<?php if (!defined('BASEPATH')) exit('Maaf, akses secara langsung tidak diperkenankan.');

class Manage_station_sensor extends MX_Controller{
	public function __construct(){
            parent::__construct();
			$this->load->helper('url');
			$this->load->model('M_session');
			$this->load->model('M_Manage_station_sensor');
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
				$data['station'] = $this->M_Manage_station_sensor->tampil_data_station();
				$data['sensors'] = $this->M_Manage_station_sensor->tampil_data_sensors();
				$data['sensor'] = $this->M_Manage_station_sensor->tampil_data_station_sensor();
				$data['namamodule'] = "Manage_station_sensor";
				$data['namafileview'] = "v_Manage_station_sensor";
				echo Modules::run('template/admin_template', $data);
			}
			else if ($id_user && $status=='operator'){
				$data['station'] = $this->M_Manage_station_sensor->tampil_data_station();
				$data['sensors'] = $this->M_Manage_station_sensor->tampil_data_sensors();
				$data['sensor'] = $this->M_Manage_station_sensor->tampil_data_station_sensor();
				$data['namamodule'] = "Manage_station_sensor";
				$data['namafileview'] = "v_Manage_station_sensor";
				echo Modules::run('template/operator_template', $data);
			}
			
			else {
				
			}
		}	 
	}
	
//===================================== Deleta Data=============================================
	
	function delete_station_sensor(){
			$kode = $this->security->xss_clean($this->uri->segment(3));
			$result = $this->M_Manage_station_sensor->get_data_station_sensor($kode);
			if($result == null) redirect('Manage_station_sensor');
			else $this->M_Manage_station_sensor->delete_data_station_sensor($kode);
				redirect('Manage_station_sensor');
		}
		
//=========================================Tambah Data==========================================
		
	function tambah_station_sensor() {
			$stationID = $this->input->post('station');
			$sensorID  = $this->input->post('sensor');
			$name = $this->input->post('station_sensor_name');
			
			$no = date('Yis');
			$station_sensor = $stationID.'_'.$no; 			
			
			$this->M_Manage_station_sensor->tambah_station_sensor($station_sensor,$stationID,$sensorID,$name);
			redirect('Manage_station_sensor');	
		}
		
//======================================== Update Data===================================
	
	function update_station_sensor($id) {
		$session = $this->M_session->get_session();
		$id_user = $session['session_userid'];
		$status = $session['session_status'];
		if ($id_user && $status=='admin'){
			if($this->input->post('submit')) {
				$this->M_Manage_station_sensor->update_station_sensor($id);
				redirect('Manage_station_sensor');
			}
			$data['station'] = $this->M_Manage_station_sensor->tampil_data_station();
			$data['sensors'] = $this->M_Manage_station_sensor->tampil_data_sensors();
			$data['sensor'] = $this->M_Manage_station_sensor->getById_station_sensor($id);
			$data['namamodule'] = "Manage_station_sensor";
			$data['namafileview'] = "update_station_sensor";
			echo Modules::run('template/admin_template', $data);
	}else if ($id_user && $status=='operator'){
		if($this->input->post('submit')) {
				$this->M_Manage_station_sensor->update_station_sensor($id);
				redirect('Manage_station_sensor');
			}
			$data['station'] = $this->M_Manage_station_sensor->tampil_data_station();
			$data['sensors'] = $this->M_Manage_station_sensor->tampil_data_sensors();
			$data['sensor'] = $this->M_Manage_station_sensor->getById_station_sensor($id);
			$data['namamodule'] = "Manage_station_sensor";
			$data['namafileview'] = "update_station_sensor";
			echo Modules::run('template/operator_template', $data);	
	}
	}
		
	//--------------------------------------------------------------------------------------------------------------------
}