<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_manage_station extends CI_Model {
	function __construct(){
		parent::__construct();
	}


// ------------------------------------------------------------------------------------------------------------------------
// =================  FUNGSI TAMPIL DATA =========================
// ------------------------------------------------------------------------------------------------------------------------
	
		function tampil_data_city(){  
			$sql = "SELECT * from city";
            $query = $this->db->query($sql);
            return $query->result();
		}
		function tampil_data_admin(){  
			$sql = "SELECT * from user_operator where status = 'admin'";
            $query = $this->db->query($sql);
            return $query->result();
		}
		function tampil_data_station(){  
			$sql = "SELECT stations.*,city.* from stations left join city on stations.CityCode = city.CityCode ";
            $query = $this->db->query($sql);
            return $query->result();
		}
	
// =========================================================================================
//--------------------------------------Deleta data-----------------------------------------
//===========================================================================================
	
	function delete_data_city($kode) { 
			$this->db->where('CityCode', $kode);
			$this->db->delete('city');
			if($this->db->affected_rows() > 0) {
				return true;
			} else {
				return false;
			}
		}
		
	function delete_data_station($kode) { 
			$this->db->where('StationID', $kode);
			$this->db->delete('stations');
			if($this->db->affected_rows() > 0) {
				return true;
			} else {
				return false;
			}
		}	
	
//-------------------------------------------------------------------------------------------------
//=======================================Tambah data==============================================
//------------------------------------------------------------------------------------------------
	function tambah_data_city($CityCode,$CityName) {
			$data = array(
				'CityCode' => $CityCode,
				'CityName' => $CityName,
				);
			$this->db->insert('city', $data);
		}
		function tambah_data_station($StationID,$StationName,$CityCode,$Address,$UserStationDb,$PassStationDb,$Latitude,$Longitude) {
			$data = array(
				'StationID' => $StationID,
				'StationName' => $StationName,
				'CityCode' => $CityCode,
				'Address' => $Address,
				'UserStationDb' => $UserStationDb,
				'PassStationDb' => $PassStationDb,
				'Latitude' => $Latitude,
				'Longitude' => $Longitude,
				);
			$this->db->insert('stations', $data);
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
		

	function get_data_city($kode) { 
			$this->db->where('CityCode', $kode);
			$query = $this->db->get('city');
			if($query->num_rows() > 0) {
				return $query->row();
			} else {
				return null;
			}
	}
	
	function get_data_station($kode) { 
			$this->db->where('StationID', $kode);
			$query = $this->db->get('stations');
			if($query->num_rows() > 0) {
				return $query->row();
			} else {
				return null;
			}
	}
	
		function getById_city($id) {
			return $this->db->get_where('city', array('CityCode' => $id))->row();
		}
		
		function getById_station($id) {
			return $this->db->get_where('stations', array('StationID' => $id))->row();
		}
		
	

//=========================================================================================================
//------------------------------------------Update DATA------------------------------------------------------
   
   function update_data_city($id) {
		$CityCode = $this->input->post('CityCode');
		$CityName = $this->input->post('CityName');
	
			$data = array(
				'CityCode' => $CityCode,
				'CityName' => $CityName,
				);
			$this->db->where('CityCode', $id);
			$this->db->update('city', $data);
		}

	 function update_data_station($id) {
		$StationID = $this->input->post('StationID');
			$StationName = $this->input->post('StationName');
			$CityCode = $this->input->post('CityCode');
			$Address = $this->input->post('Address');
			$UserStationDb = $this->input->post('UserStationDb');
			$PassStationDb = $this->input->post('PassStationDb');
			$Latitude = $this->input->post('Latitude');
			$Longitude = $this->input->post('Longitude');
	
			$data = array(
				'StationID' => $StationID,
				'StationName' => $StationName,
				'CityCode' => $CityCode,
				'Address' => $Address,
				'UserStationDb' => $UserStationDb,
				'PassStationDb' => $PassStationDb,
				'Latitude' => $Latitude,
				'Longitude' => $Longitude,
				);
			$this->db->where('StationID', $id);
			$this->db->update('stations', $data);
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