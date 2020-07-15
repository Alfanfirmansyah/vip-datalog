<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_Manage_station_sensor extends CI_Model {
	function __construct(){
		parent::__construct();
	}


// ------------------------------------------------------------------------------------------------------------------------
// =================  FUNGSI TAMPIL DATA =========================
// ------------------------------------------------------------------------------------------------------------------------
	
		function tampil_data_station(){  
			$sql = "SELECT * from stations";
            $query = $this->db->query($sql);
            return $query->result();
		}
		
		function tampil_data_sensors(){  
			$sql = "SELECT * from sensors_detail";
            $query = $this->db->query($sql);
            return $query->result();
		}
		
		function tampil_data_station_sensor(){  
			$sql = "SELECT station_sensors.*,  stations.* , sensors_detail.*  from station_sensors left JOIN stations 
											ON station_sensors.StationID = stations.StationID left JOIN sensors_detail
											ON station_sensors.SensorIdUsed = sensors_detail.SensorID";
            $query = $this->db->query($sql);
            return $query->result();
		}
	
// =========================================================================================
//--------------------------------------Deleta data-----------------------------------------
//===========================================================================================
	
	function delete_data_station_sensor($kode) { 
			$this->db->where('StationSensorID', $kode);
			$this->db->delete('station_sensors');
			if($this->db->affected_rows() > 0) {
				return true;
			} else {
				return false;
			}
		}
		
	
//-------------------------------------------------------------------------------------------------
//=======================================Tambah data==============================================
//------------------------------------------------------------------------------------------------
	function tambah_station_sensor($station_sensor,$stationID,$sensorID,$name){
			$data = array(
				'StationSensorID' => $station_sensor,
				'StationID' => $stationID,
				'SensorIdUsed' => $sensorID,
				'StationSensorName' => $name
				);
			$this->db->insert('station_sensors', $data);
		}	 
	
// ------------------------------------------------------------------------------------------------------------------------
//		=================  FUNGSI GET DATA $id =========================
// ------------------------------------------------------------------------------------------------------------------------
		

	function get_data_station_sensor($kode) { 
			$this->db->where('StationSensorID', $kode);
			$query = $this->db->get('station_sensors');
			if($query->num_rows() > 0) {
				return $query->row();
			} else {
				return null;
			}
	}
	
		function getById_station_sensor($id) {
			$sql = "SELECT station_sensors.*,  stations.* , sensors_detail.*  from station_sensors left JOIN stations 
											ON station_sensors.StationID = stations.StationID left JOIN sensors_detail
											ON station_sensors.SensorIdUsed = sensors_detail.SensorID
											WHERE station_sensors.StationSensorID = '$id'";
            $query = $this->db->query($sql);
            return $query->result();
		}
		

//=========================================================================================================
//------------------------------------------Update DATA------------------------------------------------------
   
   function update_station_sensor($id) {
		$stationID = $this->input->post('station');
		$sensorID  = $this->input->post('sensor');
		$name = $this->input->post('station_sensor_name');
			
			$no = date('Yis');
			$station_sensor = $stationID.'_'.$no; 		
	
			$data = array(
				'StationSensorID' => $station_sensor,
				'StationID' => $stationID,
				'SensorIdUsed' => $sensorID,
				'StationSensorName' => $name
				);
			$this->db->where('StationSensorID', $id);
			$this->db->update('station_sensors', $data);
		}	  		
}