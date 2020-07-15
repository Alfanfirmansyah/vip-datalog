<?php if (!defined('BASEPATH')) exit('Maaf, akses secara langsung tidak diperkenankan.');
class Login extends MX_Controller{
	public function __construct(){
            parent::__construct();  
			$this->load->model('M_session');	
			$this->load->model('M_dashboard');	
			$this->load->library('googlemaps');		
	}
	
	function index(){
		    $data['namamodule'] = "login";
            $data['namafileview'] = "login";
			echo Modules::run('template/login_template', $data);
	}
	
	function proses(){
	$this->load->model('M_master_userid','',true);
		
		// tangkap data dari inputan form
		$userid = $_POST['userid'];
		$password = sha1($_POST['password']);
		//$password = sha1(sha1($_POST['password']).$_POST['password']);
		
		// validasi form
		$this->form_validation->set_rules('userid', 'Userid', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->run();
		
		//  inisialisasi variabel
		$data['userid'] = '';
		$data['password'] = '';
		$data['status'] = '';
		
		// ambil record dari tabel user
		$result= $this->M_master_userid->get_userid($userid);
		
		foreach ($result->result() as $row ){
			$data['userid'] = $row->username;
			$data['password'] = $row->password;
			$data['status'] = $row->status;
		}
		
		// bandingkan inputan form dengan record tabel
		if ($userid==$data['userid'] and $password==$data['password']){
			$status = $data['status'];
			
			$this->M_session->store_session($userid,$status);  // simpan session userid
			
			if($data['status']=='admin'){
					echo "<script type='text/javascript'>
						alert ('Selamat Anda berhasil masuk Ke Sistem !');
					   </script>";
				$this->dashboard_admin();
			}
			else if($data['status']=='operator'){
					echo "<script type='text/javascript'>
						alert ('Selamat Anda berhasil masuk Ke Sistem !');
					   </script>";
				$this->dashboard_operator();
			}
			else{
				echo "<script type='text/javascript'>
						alert ('Maaf Username Dan Password Anda Salah !');
					   </script>";
					$this->index();
			}
		}else{
				echo "<script type='text/javascript'>
						alert ('Maaf Username Dan Password Anda Salah !');
					   </script>";
					 $this->index();
		}
	
	}
	
	function dashboard_admin(){
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
		
		$session = $this->M_session->get_session();
		$id_user = $session['session_userid'];
		$status = $session['session_status'];
			
		
		
		
		echo Modules::run('template/admin_template', $data);		
	}
	
		function dashboard_operator(){
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
				
		$session = $this->M_session->get_session();
		$id_user = $session['session_userid'];
		$status = $session['session_status'];
			$data['data_station'] = $this->M_dashboard->tampil_data_station();
		
			echo Modules::run('template/operator_template', $data);
	}
	
}