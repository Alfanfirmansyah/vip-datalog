<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_template extends CI_Model {
	function __construct(){
		parent::__construct();
	}
//----------------------------------------------------------------------------------------------------------------------------------------------
	
	
	function tampil_pengguna_operator($username){
		$nama;
        $result = mysql_query("SELECT username,nama FROM user_operator where username='$username'");
			while($row = mysql_fetch_array($result)){
                $nama=$row['nama'];
			}
		return $nama;
	
	}
	
	
	function tampil_pengguna_admin($username){
		$nama;
        $result = mysql_query("SELECT username FROM user_operator where username='$username'");
			while($row = mysql_fetch_array($result)){
                $nama=$row['username'];
			}
		return $nama;
	
	
	}
	
}