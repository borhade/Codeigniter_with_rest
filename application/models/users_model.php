<?php
class Users_model extends CI_Model {

public function fetch_data(){
	$this->db->select('*');
	$this->db->from('person');
	$query = $this->db->get();
	return($query->result_array());
}

public function form_insert($data){
	$result =$this->db->insert('person', $data);
 	return($result);
}

 public function row_delete($id)
 {
     $this->db->where('id', $id);
     $result = $this->db->delete('person'); 
     return($result);
  }

 public function form_update($id ,$data){

	$this->db->where('id',$id);
    $result =$this->db->update('person', $data);
    return($result);
 }





}