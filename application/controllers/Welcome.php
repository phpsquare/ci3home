<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();	
		$this->load->model('Common_model');
	}
	public function index()
	{
		$data['result'] = $this->Common_model->get_result('user');
		$this->load->view('home');
	}
}
