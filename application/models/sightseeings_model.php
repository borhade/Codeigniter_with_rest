
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Sightseeings_model extends CI_model{
	public function __construct(){
		parent::__construct();
	}
public function fetch_data($replace){
	$query = $this->db->query("select * from tbl_sightseeing where id".$replace);
	return($query->result_array());
}

public function add_data($sightsee_data){
	$this->db->insert('tbl_sightseeing',$sightsee_data);
	return($this->db->affected_rows()==0) ? false:true ;  
}

public function update_data($edit_data,$update_id){
	$this->db->where('id',$update_id);
	$this->db->update('tbl_sightseeing',$edit_data);
	return($this->db->affected_rows()==0) ? false:true ;
}

public function delete_data($delete_id){
	$this->db->where('id',$delete_id);
	$this->db->delete('tbl_sightseeing');
	return($this->db->affected_rows()==0) ? false:true ;
}













