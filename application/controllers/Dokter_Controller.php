<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokter_Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Dokter_Model');
	}

	public function index()
	{
		
	}

}

/* End of file Dokter_Controller.php */
/* Location: ./application/controllers/Dokter_Controller.php */