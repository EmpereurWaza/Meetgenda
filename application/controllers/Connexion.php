<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Connexion extends CI_Controller {
	public function index()
	{
		$this->load->helper('url');
		$this->load->helper('html');
		$this->load->model('model');
		//$this->load->view('header');
		$this->load->view('connection');
	}
}
