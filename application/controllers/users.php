<?php
use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';
class Users extends REST_Controller {
 public function __construct(){
	  parent::__construct();
	 $this->load->model('users_model'); 
}

 public function fetch_all_users_get(){
	$data = $this->users_model->fetch_data();
    $this->response($data);
}

public function insert_post(){       
   
	$data = array(
		'email' => $this->input->post('email'),
		'password' => $this->input->post('password'),
		'first_name' => $this->input->post('first_name'),
		'last_name' => $this->input->post('last_name')
	);

   if($this->users_model->form_insert($data)){
           $this->response("Success", 200); 
       }else{

        $this->response("Failed", 404);
      }
 }



function update_user_put(){ 

	$id   = $this->put('id'); 
    $data = array(
		'email' => $this->put('email'),
		'password' => $this->put('password'),
		'first_name' => $this->put('first_name'),
		'last_name' => $this->put('last_name')
	);

  if($this->users_model->form_update($id ,$data)) {
           $this->response("Success", 200); 
       }else{

        $this->response("Failed", 404);
      }

}

public function remove_user_delete(){

	$id = (int) $this->delete('id');
	if(!$id){ 

        $this->response("Parameter missing", 400); 
   } 
	
    if ($this->users_model->row_delete($id)){
           $this->response("Success", 200); 
       }else{

        $this->response("Failed", 404);
      }
      
}



}


?>

