<?php
 
require APPPATH . '/libraries/REST_Controller.php';

class Mist extends REST_Controller {
 
    function __construct() {
        parent::__construct();
    }

	 function index_get() {
		$this->response($this->show());	 		

		}

	public function show(){
		$data= $this->db->query("select * from monitor");
		return $data->result();
	}

}