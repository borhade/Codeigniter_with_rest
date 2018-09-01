<?php
use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Hotel_controller extends REST_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('hotel_model');
	}

	public function index(){	
		$this->load->view('read');
	}

public function hoteldetails_fetch_get(){
	$id = $this->uri->segment(3);
	 if($id === NULL){
	 	$replace = "" ;
	 	$data = $this->hotel_model->fetch_data($replace);
   		 $this->response($data);
	 }else{
	 		$replace = "=$id";
			$data =$this->hotel_model->fetch_data($replace);
			 $this->response($data);
	}
}

public function hoteldetails_add_post(){
	$hotel_data=array(
		'hotel_name'=>$this->input->post('hotel_name'),
		'check_in'=> $this->input->post('check_in'),
		'check_out'=>$this->input->post('check_out'),
		'country'=>$this->input->post('country'),
		'city'=>$this->input->post('city'),
		'adult_cost'=>$this->input->post('adult_cost'),
		'child_cost'=>$this->input->post('child_cost'),
		'infant_cost'=>$this->input->post('infant_cost'),
 		'ratings'=>$this->input->post('ratings'));
   
   	if($this->hotel_model->add_data($hotel_data)){
           $this->response("Success", 200); 
       }else{

        $this->response("Failed", 404);
      }	
 }

public function update_hoteldetails_put(){
	 $Edit_id = $this->put('id');
	$hoteldetails_edit =array(
		'hotel_name'=>$this->put('hotel_name'),
		'check_in'=> $this->put('check_in'),
		'check_out'=>$this->put('check_out'),
		'country'=>$this->put('country_name'),
		'city'=>$this->put('city_name'),
		'adult_cost'=>$this->put('adult_cost'),
		'child_cost'=>$this->put('child_cost'),
		'infant_cost'=>$this->put('infant_cost'),
 		'ratings'=>$this->put('ratings'));

	///echo $this->hotel_model->Edit_details($hoteldetails_edit,$Edit_id);
	if($this->hotel_model->Edit_details($hoteldetails_edit,$Edit_id)){
           $this->response("Success", 200); 
       }else{

        $this->response("Failed", 404);
      }
}

public function remove_hoteldetails_delete(){
	$id = (int) $this->delete('delete_id');
	if($id){
	 	if($this->hotel_model->delete_data($id)){
			$this->response("Success", 200);
	 	 }else{
	 	 	$this->response("Failed", 404);
	 	}
	 }
	 else{
		$this->response("Parameter missing", 400); 
	 }
 }



}

