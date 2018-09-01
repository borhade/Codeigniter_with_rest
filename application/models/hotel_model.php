
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Hotel_model extends CI_model{
	
public function fetch_data($replace){

	$query = $this->db->query("select * from tbl_hoteldetails where id".$replace);
	return($query->result_array());
}

public function add_data($hotel_data){
	$result=$this->db->insert('tbl_hoteldetails',$hotel_data);
	if($this->db->affected_rows()== 0){
		  return false ; //add your code here
	}else{
		  return true; //add your your code here
	}
}

public function Edit_details($edit_data,$update_id){

	$this->db->where('id',$update_id);
	$this->db->update('tbl_hoteldetails',$edit_data);
	if($this->db->affected_rows()== 0){
		  return false ; //add your code here
	}else{
		  return true; //add your your code here
	}
}

public function delete_data($delete_id){
	$this->db->where('id',$delete_id);
	$this->db->delete('tbl_hoteldetails');
	if($this->db->affected_rows()==0){
		  return false ; //add your code here
	}else{
		  return true; //add your your code here
	}
}

}











