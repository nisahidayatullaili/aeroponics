<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';

class Monitor extends CI_Controller 
	{

	public function __construct(){
		
		parent::__construct();		
		
	}

	public function index(){
		// if( $this->input->post('time') !=""){

			 $data['mist_duration']=$this->input->post('duration');
			 $data['mist_delay']=$this->input->post('delay');
			 $scedule=$this->input->post('scedule');
			 
		 	  $mist_duration =$this->input->post('mist_duration');
		 	 $mist_delay =$this->input->post('mist_delay');

			 if($data['mist_delay'] !=0 )
				 {

					// echo $mist_duration;			
				 	if($mist_duration == "minute"){
				 		$data['mist_duration'] = $data['mist_duration'] * 60;
				 	}
				 	
				 	
				 	if($mist_delay == "minute" ){
				 		$data['mist_delay'] = $data['mist_delay'] * 60;
				 	}

					$this->db->set($data);
					$this->db->update('monitor'); 
				 }

			 // var_dump($data);
			

		// }
		$value['data'] = $this->show();
		// $this->Dataku();
		$this->load->view('v_monitor',$value);
	}

	public function Dataku(){
		$value['data'] = $this->show();
		$this->load->view('v_dataku',$value);
	}

	public function show(){

		$data= $this->db->query("select * from monitor");
		return $data->result();
	}


}


