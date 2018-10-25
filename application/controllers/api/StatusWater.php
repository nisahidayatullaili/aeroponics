<?php
 
require APPPATH . '/libraries/REST_Controller.php';

class StatusWater extends REST_Controller {
 
    function __construct() {
        parent::__construct();
    }

	 function index_post() {
	 	    $hum['water']= $this->input->post('status');	 	
			$this->db->set($hum);
			$this->db->update('monitor'); 
			$this->response($hum);
		}
}