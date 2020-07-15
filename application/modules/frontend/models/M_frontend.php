<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_frontend extends CI_Model {
	function __construct(){
		parent::__construct();
	}



		function tampil_slider(){  
			$sql = "SELECT * from slider";
            $query = $this->db->query($sql);
            return $query->result();
		}
		
		function tampil_tech(){  
			$sql = "SELECT * from article_technical";
            $query = $this->db->query($sql);
            return $query->result();
		}
		
		function tampil_news(){  
			$sql = "SELECT * from article_news";
            $query = $this->db->query($sql);
            return $query->result();
		}
	
}