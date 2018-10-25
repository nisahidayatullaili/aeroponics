<?php
 
require APPPATH . '/libraries/REST_Controller.php';

class StatusVideo extends REST_Controller {
 
    function __construct() {
        parent::__construct();
    }

    function index_get()
    	{

    	}
	 function index_post() {
	 		$hum['video_status']= $this->input->post('status');	 	
			$this->db->set($hum);
			$this->db->update('monitor'); 
		}
}