<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('home_model');
	}

	public function index()
	{
		$this->load->view('main_view');
	}

	public function requirements()
	{
		$this->load->view('requirements_view');
	}

	public function announcements()
	{
		$data['cont_results'] = $this->home_model->get_ann_contents();
		$data['ann_results'] = $this->home_model->get_announcements();
		$this->load->view('announcements_view', $data);
	}
	
	public function installers()
	{
		$data['update_results'] = $this->home_model->get_updates();
		$data['cont_results'] = $this->home_model->get_contents();
		$this->load->view('installers_view', $data);
	}
	
	public function manuals()
	{
		$this->load->view('manuals_view');
	}
	
	public function contact_info()
	{
		$this->load->view('contact_info_view');
	}
	
	public function tagging()
	{
		$this->load->view('tagging_view');
	}
	
	public function reference_file()
	{
		$this->load->view('reference_file_view');
	}

	public function forms()
	{
		$this->load->view('forms_view');
	}

	public function v2()
	{
		$this->load->view('version2');
	}


}


?>