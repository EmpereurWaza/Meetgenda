<?php

class Connexion extends CI_Controller {
	public function index(){
		$this->load->helper('url');
		$this->load->helper('html');
		$this->load->view('header');
		$this->load->view('connexion');
	}
}