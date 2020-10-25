<?php
defined('BASEPATH') OR exit('NO direct script access allowed');

class Bootstrap extends CI_Controller {

	public function index()
	{
		$this->load->view('v_bootstrap');
	}

}