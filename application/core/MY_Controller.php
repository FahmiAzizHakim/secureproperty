<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	public $module;
	public $controller;
	public $path;
	public $base_url;
	public $assets_url;
	public $default_view;
	public $session_user;
	public $session_name;
	public $session_role;
	public $view_path = '';

	public function MY_Controller()
	{
		parent::__construct();
		$this->module = $this->router->fetch_module();
		$this->controller = $this->router->fetch_class();
		$agen_initial = $this->uri->segment(1);
		$agen = $this->m_master->get($agen_initial, 'agen_initial_name', 'm_agen_tbl')->row_array();

		// print_r($agen);die();

		$path = APPPATH . 'modules/'.$this->module.'/views/';
		if ($agen_initial == '') {
			$agen_initial='sp';
		}
		if ($agen_initial != 'sp' && $agen == null) {
			die('Agen Belum Terdaftar');
		}
		if ($agen_initial =='sp') {
			$agen['agen_phone'] = '(021) 2984 7141';
			$agen['agen_email'] = 'marketing@secureproperty.co.id';
		}
		$this->view_path = $path;
		$this->base_url = base_url().$agen_initial.'/';
		$this->assets_url = base_url().'assets/';
		$this->default_view = 'application/views/';
		$this->templates->assign( 'base_url', $this->base_url);
		$this->templates->assign( 'agen', $agen);
		$this->templates->assign( 'assets_url', $this->assets_url);
		$this->templates->assign( 'views_url', $this->view_path);
	}

	function layout($template, $title, $breadcrumbs=""){
	  if ($breadcrumbs=="") {
      	$breadcrumbs = array();
      }
      $this->templates->assign("breadcrumbs", $breadcrumbs);
	  $this->templates->assign( 'nav_top', $this->default_view . 'nav_top.tpl');
	  $this->load_layout($template, $title);
	}

	function layout_login($template){
	  $this->templates->assign( 'template', $this->view_path . $template .'.tpl');
	  $this->templates->view('layout_login');
	}

	function set_menugroup($menu=""){
      $this->templates->assign("menu_group", $menu);
	}

    private function load_layout($template, $title)
    {
      $this->templates->assign("title", $title);
      $this->templates->assign("breadcrumbsfile", $this->default_view . 'breadcrumbs.tpl');
      $this->templates->assign( 'template', $this->view_path . $template .'.tpl');
      $this->templates->view('main');
    }
}