<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_manage_sensor extends CI_Model {
	function __construct(){
		parent::__construct();
	}


// ------------------------------------------------------------------------------------------------------------------------
// =================  FUNGSI TAMPIL DATA =========================
// ------------------------------------------------------------------------------------------------------------------------
	
		function tampil_data_sensor(){  
			$sql = "SELECT * from sensors_detail";
            $query = $this->db->query($sql);
            return $query->result();
		}
	
// =========================================================================================
//--------------------------------------Deleta data-----------------------------------------
//===========================================================================================
	
	function delete_data_sensor($kode) { 
			$this->db->where('SensorID', $kode);
			$this->db->delete('sensors_detail');
			if($this->db->affected_rows() > 0) {
				return true;
			} else {
				return false;
			}
		}
		
	
//-------------------------------------------------------------------------------------------------
//=======================================Tambah data==============================================
//------------------------------------------------------------------------------------------------
	function tambah_sensor($sensorid,$variable,$unit,$manufacture,$spec,$sensor_detail,$createdby) {
			$data = array(
				'SensorID' => $sensorid,
				'Variable' => $variable,
				'Unit' => $unit,
				'Manufacture' => $manufacture,
				'Spec' => $spec,
				'Sensors_Detail' => $sensor_detail,
				'CreatedBy' => $createdby
				);
			$this->db->insert('sensors_detail', $data);
		}	 
	
// ------------------------------------------------------------------------------------------------------------------------
//		=================  FUNGSI GET DATA $id =========================
// ------------------------------------------------------------------------------------------------------------------------
		

	function get_data_sensor($kode) { 
			$this->db->where('SensorID', $kode);
			$query = $this->db->get('sensors_detail');
			if($query->num_rows() > 0) {
				return $query->row();
			} else {
				return null;
			}
	}
	
		function getById_Sensor($id) {
			return $this->db->get_where('sensors_detail', array('SensorID' => $id))->row();
		}
		

//=========================================================================================================
//------------------------------------------Update DATA------------------------------------------------------
   
   function update_sensor($id,$id_user) {
		$sensorid = $this->input->post('sensorid');
		$variable = $this->input->post('variable');
		$unit = $this->input->post('unit');
		$manufacture = $this->input->post('manufacture');
		$spec = $this->input->post('spec');
		$sensor_detail = $this->input->post('sensor_detail');
		$createdby = $id_user;
	
			$data = array(
				'SensorID' => $sensorid,
				'Variable' => $variable,
				'Unit' => $unit,
				'Manufacture' => $manufacture,
				'Spec' => $spec,
				'Sensors_Detail' => $sensor_detail,
				'CreatedBy' => $createdby,
				);
			$this->db->where('SensorID', $id);
			$this->db->update('sensors_detail', $data);
		}	  		
}