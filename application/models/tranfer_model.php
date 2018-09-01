
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tranfer_model extends CI_model{
	public function __construct(){
			parent::__construct();
	}

public function fetch_data($replace){
	$query = $this->db->query("select * from tbl_hoteldetails where id".$replace);
	return($query->result_array());
}

public function tranfer_add($hotel_data){
	$this->db->insert('tbl_transfer',$hotel_data);
	return($this->db->affected_rows()==0) ? false:true ;  
}

public function tranfer_edit($edit_data,$update_id){
	$this->db->where('id',$update_id);
	$this->db->update('tbl_transfer',$edit_data);
	return($this->db->affected_rows()==0) ? false:true ;
}

public function remove_tranfer_delete($delete_id){
	$this->db->where('id',$delete_id);
	$this->db->delete('tbl_transfer');
	return($this->db->affected_rows()==0) ? false:true ;
}













