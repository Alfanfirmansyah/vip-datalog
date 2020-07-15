<?php if (!defined('BASEPATH')) exit('Maaf, akses secara langsung tidak diperkenankan.');

class manage_frontend extends MX_Controller{
	public function __construct(){
            parent::__construct();
			$this->load->helper('url');
			$this->load->library('upload');
			$this->load->model('M_session');
			$this->load->model('M_manage_frontend');
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
				
				$data['tgl_sekarang']= date('Y-m-d');
				$data['slider'] = $this->M_manage_frontend->tampil_data_slider();
				$data['tech'] = $this->M_manage_frontend->tampil_data_tech();
				$data['news'] = $this->M_manage_frontend->tampil_data_news();
				$data['namamodule'] = "manage_frontend";
				$data['namafileview'] = "v_manage_frontend";
				echo Modules::run('template/admin_template', $data);
			}
			else if ($id_user && $status=='operator'){
				
			}
			
			else {
				
			}
		}	 
	}


//=========================================Tambah Data==========================================
		
	function tambah_slider() {
     		$config['upload_path']      = './assets/frontend/img';
            $config['allowed_types']    = 'gif|jpg|png';
            $config['max_size']         = '2000';
            $config['max_width']        = '3000';
            $config['overwrite']        = true;
            $config['max_height']       = '3000';       
                
                $this->upload->initialize($config);
                if(!$this->upload->do_upload('image')){
                    $foto="";

                    $error = $this->upload->display_errors();
                }else{
                    $foto=$this->upload->file_name;
                }

         $data = array(
                   
                    'title'     	=> $this->input->post('title'),
                    'description'   => $this->input->post('description'),
                    'image'     	=> $foto

                );

            $this->M_manage_frontend->insert_db_slider($data);
            redirect('manage_frontend');	
		}

		function tambah_tech() {
     		$config['upload_path']      = './assets/frontend/img';
            $config['allowed_types']    = 'gif|jpg|png';
            $config['max_size']         = '2000';
            $config['max_width']        = '3000';
            $config['overwrite']        = true;
            $config['max_height']       = '3000';       
                
                $this->upload->initialize($config);
                if(!$this->upload->do_upload('image')){
                    $foto="";

                    $error = $this->upload->display_errors();
                }else{
                    $foto=$this->upload->file_name;
                }

         $data = array(
                   
                    'title'     	=> $this->input->post('title'),
                    'description'   => $this->input->post('description'),
					'tgl'   		=> $this->input->post('tgl'),
                    'image'     	=> $foto

                );

            $this->M_manage_frontend->insert_db_tech($data);
            redirect('manage_frontend');	
		}

		function tambah_news() {
     		$config['upload_path']      = './assets/frontend/img';
            $config['allowed_types']    = 'gif|jpg|png';
            $config['max_size']         = '2000';
            $config['max_width']        = '3000';
            $config['overwrite']        = true;
            $config['max_height']       = '3000';       
                
                $this->upload->initialize($config);
                if(!$this->upload->do_upload('image')){
                    $foto="";

                    $error = $this->upload->display_errors();
                }else{
                    $foto=$this->upload->file_name;
                }

         $data = array(
                   
                    'title'     	=> $this->input->post('title'),
                    'description'   => $this->input->post('description'),
                    'tgl'   		=> $this->input->post('tgl'),
                    'image'     	=> $foto

                );

            $this->M_manage_frontend->insert_db_news($data);
            redirect('manage_frontend');	
		}
	

		
	//--------------------------------------------------------------------------------------------------------------------

	//======================================== Update Data===================================
	
		function update_slider($id) {
			if($this->input->post('submit')) {
				$this->M_manage_frontend->update_data_slider($id);
				redirect('manage_frontend');
			}
			$data['slider'] = $this->M_manage_frontend->getById_slider($id);
			$data['namamodule'] = "manage_frontend";
			$data['namafileview'] = "update_slider";
			echo Modules::run('template/admin_template', $data);
		}

		function update_tech($id) {
			if($this->input->post('submit')) {
				$this->M_manage_frontend->update_data_tech($id);
				redirect('manage_frontend');
			}
			$data['tgl_sekarang']= date('Y-m-d');
			$data['tech'] = $this->M_manage_frontend->getById_tech($id);
			$data['namamodule'] = "manage_frontend";
			$data['namafileview'] = "update_tech";
			echo Modules::run('template/admin_template', $data);
		}

		function update_news($id) {
			if($this->input->post('submit')) {
				$this->M_manage_frontend->update_data_news($id);
				redirect('manage_frontend');
			}
			$data['tgl_sekarang']= date('Y-m-d');
			$data['news'] = $this->M_manage_frontend->getById_news($id);
			$data['namamodule'] = "manage_frontend";
			$data['namafileview'] = "update_news";
			echo Modules::run('template/admin_template', $data);
		}
	//--------------------------------------------------------------------------------------------------------------------
	function delete_slider() {
			$id_slider = $this->security->xss_clean($this->uri->segment(3));
			$result = $this->M_manage_frontend->get_data_slider($id_slider);
			if($result == null) redirect('manage_frontend');
			else $this->M_manage_frontend->delete_data_slider($id_slider);
				redirect('manage_frontend');
		}	

	function delete_tech() {
			$id_tech = $this->security->xss_clean($this->uri->segment(3));
			$result = $this->M_manage_frontend->get_data_tech($id_tech);
			if($result == null) redirect('manage_frontend');
			else $this->M_manage_frontend->delete_data_tech($id_tech);
				redirect('manage_frontend');
		}

	function delete_news() {
			$id_news = $this->security->xss_clean($this->uri->segment(3));
			$result = $this->M_manage_frontend->get_data_news($id_news);
			if($result == null) redirect('manage_frontend');
			else $this->M_manage_frontend->delete_data_news($id_news);
				redirect('manage_frontend');
		}	
}