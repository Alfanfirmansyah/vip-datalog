<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_manage_frontend extends CI_Model {
	function __construct(){
		parent::__construct();
		$this->load->library('upload');

	}


// ------------------------------------------------------------------------------------------------------------------------
// =================  FUNGSI TAMPIL DATA =========================
// ------------------------------------------------------------------------------------------------------------------------
	
		function tampil_data_slider(){  
			$sql = "SELECT * from slider";
            $query = $this->db->query($sql);
            return $query->result();
		}


		function tampil_data_tech(){  
			$sql = "SELECT * from article_technical";
            $query = $this->db->query($sql);
            return $query->result();
		}


	function tampil_data_news(){  
			$sql = "SELECT * from article_news";
            $query = $this->db->query($sql);
            return $query->result();
		}

//-------------------------------------------------------------------------------------------------
//=======================================Tambah data==============================================
//------------------------------------------------------------------------------------------------
   function insert_db_slider($data)
    {
        $this->db->insert('slider',$data);
    }

  function insert_db_tech($data)
    {
        $this->db->insert('article_technical',$data);
    }

      function insert_db_news($data)
    {
        $this->db->insert('article_news',$data);
    }

  

//=========================================================================================================
//------------------------------------------Update DATA------------------------------------------------------
    function getById_slider($id) {
		return $this->db->get_where('slider', array('id_slider' => $id))->row();
	}

	 function getById_tech($id) {
		return $this->db->get_where('article_technical', array('id_technical' => $id))->row();
	}

	function getById_news($id) {
		return $this->db->get_where('article_news', array('id_news' => $id))->row();
	}
 
 
	 function update_data_slider($id) {
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
			$this->db->where('id_slider', $id);
			$this->db->update('slider', $data);
		}

		function update_data_tech($id) {
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
			$this->db->where('id_technical', $id);
			$this->db->update('article_technical', $data);
		}

		function update_data_news($id) {
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
			$this->db->where('id_news', $id);
			$this->db->update('article_news', $data);
		}

		function get_data_slider($id_slider) { 
			$this->db->where('id_slider', $id_slider);
			$query = $this->db->get('slider');
			if($query->num_rows() > 0) {
				return $query->row();
			} else {
				return null;
			}
	}


	function delete_data_slider($id_slider) { 
			$this->db->where('id_slider', $id_slider);
			$this->db->delete('slider');
			if($this->db->affected_rows() > 0) {
				return true;
			} else {
				return false;
			}
		}


		function get_data_tech($id_tech) { 
			$this->db->where('id_technical', $id_tech);
			$query = $this->db->get('article_technical');
			if($query->num_rows() > 0) {
				return $query->row();
			} else {
				return null;
			}
	}


	function delete_data_tech($id_tech) { 
			$this->db->where('id_technical', $id_tech);
			$this->db->delete('article_technical');
			if($this->db->affected_rows() > 0) {
				return true;
			} else {
				return false;
			}
		}	

		function get_data_news($id_news) { 
			$this->db->where('id_news', $id_news);
			$query = $this->db->get('article_news');
			if($query->num_rows() > 0) {
				return $query->row();
			} else {
				return null;
			}
	}


	function delete_data_news($id_news) { 
			$this->db->where('id_news', $id_news);
			$this->db->delete('article_news');
			if($this->db->affected_rows() > 0) {
				return true;
			} else {
				return false;
			}
		}	
	
}