<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{		
	    $this->layout('index', 'Beranda');
    	
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */