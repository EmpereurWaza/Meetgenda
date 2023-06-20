<?php
class Poll extends CI_Controller {
	public function index(){
		$this->load->view('header');
		echo 'Le sondage arrive';
	}
	public function new(){
		$this->load->view('header');
		$this->load->view('new_poll');
	}
}

