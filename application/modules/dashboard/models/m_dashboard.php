<?php
class M_dashboard extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    function get_coordinates() {
        $return = array();
        $this->db->select("latitude,longitude");        
		$this->db->from("stations");        
		$query = $this->db->get();
        if ($query->num_rows()>0) {            
			foreach ($query->result() as $row) {                
			array_push($return, $row);            
			}        
		}
        return $return;
   }
	function tampil_data_station(){  
			$sql = "SELECT stations.*,city.* from stations left join city on stations.CityCode = city.CityCode ";
            $query = $this->db->query($sql);
            return $query->result();
     }
	
	
	
 
}
?>