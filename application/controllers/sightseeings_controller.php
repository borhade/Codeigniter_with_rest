<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Sightseeings_controller extends REST_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('sightseeings_model');
	}

 	public function sightsee_fetch_get(){
			$id = $this->uri->segment(3);
		 if($id === NULL){
		 	$replace = "" ;
		 	$data = $this->sightseeings_model->fetch_data($replace);
	   		 $this->response($data);
		 }else{
		 		$replace = "=$id";
				$data =$this->sightseeings_model->fetch_data($replace);
				 $this->response($data);
		 }
     }

 public function sightsee_add_post(){
	$data=array(
		'sightseeings_name'=>$this->input->post('hotel_name'),
		'country'=>$this->input->post('country_name'),
		'city'=>$this->input->post('city_name'),
		'cost_adult'=>$this->input->post('adult_cost'),
		'cost_child'=>$this->input->post('child_cost'),
		'cost_infant'=>$this->input->post('infant_cost')
	 	);
	 
	   	if($this->sightseeings_model->add_data($data)){
          	$this->response("Success", 200); 
      	}else{
			$this->response("Failed", 404);
      	}
	}
	public function update_sightsee_put(){
		 $Edit_id = $this->put('id');
		$data=array(
			'sightseeings_name'=>$this->put('hotel_name'),
			'country'=$this->put('country_name'),
			'city'=>$this->put('city_name'),
			'cost_adult'=>$this->put('adult_cost'),
			'cost_child'=>$this->put('child_cost'),
			'cost_infant'=>$this->put('infant_cost')
	 		);
	   
	   	if($this->sightseeings_model->Edit($data,$Edit_id)){
           $this->response("Success", 200); 
       }else{

        $this->response("Failed", 404);
      }
	}

	public function remove_sightsee_delete(){
		$id = (int) $this->delete('delete_id');
		if($id){
		 	if($this->sightseeings_model->Delete($delete_id)){
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

