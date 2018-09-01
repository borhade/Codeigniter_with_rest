<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transfer_controller extends CI_controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('tranfer_model');
	}

 public function tranfer_fetch_get(){
	$id = $this->uri->segment(3);
	 if($id === NULL){
	 	$replace = "" ;
	 	$data = $this->tranfer_model->fetch_data($replace);
   		 $this->response($data);
	 }else{
	 		$replace = "=$id";
			$data =$this->tranfer_model->fetch_data($replace);
			 $this->response($data);
	}
 }

	public function tranfer_add_post(){
	//$Pr_individualId = $this->uri->segment(3);
		$tranfer_data=array(
			'sightseeings_name'=>$this->input->post('hotel_name'),
			'country'=>$this->input->post('country_name'),
			'city'=>$this->input->post('city_name'),
			'cost_adult'=>$this->input->post('adult_cost'),
			'cost_child'=>$this->input->post('child_cost'),
			'cost_infant'=>$this->input->post('infant_cost')
	 		);
	   	$this->tranfer_model->tranfer_add($tranfer_data);	 
  	}

	public function update_tranfer_put(){
		$Edit_id = $this->uri->segment(3);
		$update_tranfer =array(
			'sightseeings_name'=>$this->put('hotel_name'),
			'country'=>$this->put('country_name'),
			'city'=>$this->put('city_name'),
			'cost_adult'=>$this->put('adult_cost'),
			'cost_child'=>$this->put('child_cost'),
			'cost_infant'=>$this->put('infant_cost')
	 		);
	   	$this->tranfer_model->tranfer_edit($update_tranfer,$Edit_id);
	}

	public function remove_tranfer_delete(){
		$id = (int) $this->delete('delete_id');
		if($id){
		 	if($this->tranfer_model->tranfer_delete($id)){
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

