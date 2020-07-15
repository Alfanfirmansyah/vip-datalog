<?php if (!defined('BASEPATH')) exit('Maaf, akses secara langsung tidak diperkenankan.');

class Dashboard extends MX_Controller{
	public function __construct(){
            parent::__construct();
			$this->load->model('M_session');			
			$this->load->model('M_dashboard');	
			$this->load->library('googlemaps');	
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
			
				$data['namamodule'] = "dashboard";
				$data['namafileview'] = "admin";
				$config['center'] = '37.4419, -122.1419';
  				$config['zoom'] = 'auto';
  				$config['geocodeCaching'] = TRUE;
  				$this->googlemaps->initialize($config);
				
				$coords = $this->M_dashboard->get_coordinates();
  				
  				foreach ($coords as $coordinate){

					$marker = array();
					$marker['position'] = $coordinate->latitude.','.$coordinate->longitude; 

		  		$this->googlemaps->add_marker($marker);}
		  		
 				$data['map'] = $this->googlemaps->create_map();
				
				$data['data_station'] = $this->M_dashboard->tampil_data_station();
				
				echo Modules::run('template/admin_template', $data);
			}
			else if ($id_user && $status=='operator'){
				$data['namamodule'] = "dashboard";
				$data['namafileview'] = "operator";
				$config['center'] = '37.4419, -122.1419';
  				$config['zoom'] = 'auto';
  				$config['geocodeCaching'] = TRUE;
  				$this->googlemaps->initialize($config);
				
				$coords = $this->M_dashboard->get_coordinates();
  				
  				foreach ($coords as $coordinate){

					$marker = array();
					$marker['position'] = $coordinate->latitude.','.$coordinate->longitude; 

		  		$this->googlemaps->add_marker($marker);}
		  		
 				$data['map'] = $this->googlemaps->create_map();
				$data['data_station'] = $this->M_dashboard->tampil_data_station();
				
				echo Modules::run('template/operator_template', $data);
			}
			
		  else{
		  
		  }
		}
		
		 
	}
	
}