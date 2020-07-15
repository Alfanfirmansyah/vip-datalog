<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_manage_user extends CI_Model {
	function __construct(){
		parent::__construct();
	}


// ------------------------------------------------------------------------------------------------------------------------
// =================  FUNGSI TAMPIL DATA =========================
// ------------------------------------------------------------------------------------------------------------------------
	
		function tampil_data_operator(){  
			$sql = "SELECT * from user_operator where status = 'operator'";
            $query = $this->db->query($sql);
            return $query->result();
		}
		function tampil_data_admin(){  
			$sql = "SELECT * from user_operator where status = 'admin'";
            $query = $this->db->query($sql);
            return $query->result();
		}
	
// =========================================================================================
//--------------------------------------Deleta data-----------------------------------------
//===========================================================================================
	
	function delete_data_operator($kode) { 
			$this->db->where('username', $kode);
			$this->db->delete('user_operator');
			if($this->db->affected_rows() > 0) {
				return true;
			} else {
				return false;
			}
		}
		
	function delete_data_admin($kode) { 
			$this->db->where('username', $kode);
			$this->db->delete('user_operator');
			if($this->db->affected_rows() > 0) {
				return true;
			} else {
				return false;
			}
		}	
	
//-------------------------------------------------------------------------------------------------
//=======================================Tambah data==============================================
//------------------------------------------------------------------------------------------------
	function tambah_operator($username,$password,$nama,$alamat,$telp,$email,$status) {
			$data = array(
				'username' => $username,
				'password' => $password,
				'nama' => $nama,
				'alamat' => $alamat,
				'telp' => $telp,
				'email' => $email,
				'status' => $status
				);
			$this->db->insert('user_operator', $data);
		}	 
	
	function tambah_admin($username,$password,$nama,$alamat,$telp,$email,$status) {
			$data = array(
				'username' => $username,
				'password' => $password,
				'nama' => $nama,
				'alamat' => $alamat,
				'telp' => $telp,
				'email' => $email,
				'status' => $status
				);
			$this->db->insert('user_operator', $data);
		}	

			
// ------------------------------------------------------------------------------------------------------------------------
//		=================  FUNGSI GET DATA $id =========================
// ------------------------------------------------------------------------------------------------------------------------
		

	function get_data_operator($kode) { 
			$this->db->where('username', $kode);
			$query = $this->db->get('user_operator');
			if($query->num_rows() > 0) {
				return $query->row();
			} else {
				return null;
			}
	}
	
	function get_data_admin($kode) { 
			$this->db->where('username', $kode);
			$query = $this->db->get('user_operator');
			if($query->num_rows() > 0) {
				return $query->row();
			} else {
				return null;
			}
	}
	
		function getById_Operator($id) {
			return $this->db->get_where('user_operator', array('username' => $id))->row();
		}
		
		function getById_Admin($id) {
			return $this->db->get_where('user_operator', array('username' => $id))->row();
		}
		
	

//=========================================================================================================
//------------------------------------------Update DATA------------------------------------------------------
   
   function update_operator($id) {
		$username = $this->input->post('username');
		$password=sha1($this->input->post('password'));
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$telp = $this->input->post('telp');
		$email = $this->input->post('email');
		$status = 'operator';
	
			$data = array(
				'username' => $username,
				'password' => $password,
				'nama' => $nama,
				'alamat' => $alamat,
				'telp' => $telp,
				'email' => $email,
				'status' => $status,
				);
			$this->db->where('username', $id);
			$this->db->update('user_operator', $data);
		}
		
	function update_admin($id) {
		$username = $this->input->post('username');
		$password=sha1($this->input->post('password'));
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$telp = $this->input->post('telp');
		$email = $this->input->post('email');
		$status = 'admin';
	
			$data = array(
				'username' => $username,
				'password' => $password,
				'nama' => $nama,
				'alamat' => $alamat,
				'telp' => $telp,
				'email' => $email,
				'status' => $status,
				);
			$this->db->where('username', $id);
			$this->db->update('user_operator', $data);
		}		  		
}