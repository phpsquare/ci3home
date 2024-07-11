<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Common_model extends CI_Model{
  function __construct(){
    parent::__construct();
	$this->load->database();
  }
 function get_result($tablename)
 {
    $query = $this->db->query("SELECT * FROM user");
    return $query->result_array();
 }
 
  public function insert_data($table_name, $insert_data){
  	$this->db->insert($table_name, $insert_data);
  	$insert_id = $this->db->insert_id();
  	return $insert_id;
  }
 
}