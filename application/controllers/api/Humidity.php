<?php
 
require APPPATH . '/libraries/REST_Controller.php';

class Humidity extends REST_Controller {
 
    function __construct() {
        parent::__construct();
    }

	 function index_post() {
	 	$hum['humidity']= $this->input->post('humidity');	 	
			$this->db->set($hum);
			$this->db->update('monitor'); 
			$this->response($hum);
		}
}