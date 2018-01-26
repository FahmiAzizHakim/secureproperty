<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends MY_Controller {

	function __construct()
	{
		parent::__construct();
	}

	public function about_us()
	{
	    $this->layout('about_us', 'Beranda');
    	
	}

	public function contact()
	{
	    $this->layout('contact', 'Beranda');
    	
	}

	public function event()
	{
	    $this->layout('event', 'Beranda');
    	
	}

	public function product()
	{
	    $this->layout('product', 'Beranda');
    	
	}

	public function register()
	{
	    $this->layout('register', 'Beranda');
    	
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */