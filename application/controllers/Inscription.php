<?php

class Inscription extends CI_Controller {
	public function index(){
		$this->load->helper('url');
		$this->load->helper('html');
		$this->load->view('header');
		$this->load->view('inscription');
	}

	public function submit(){
		$this->load->model('user');
		$this->load->helper('url');
		$id = $this->input->post('username');
		$fn = $this->input->post('firstname');
		$ln = $this->input->post('lastname');
		$email = $this->input->post('email');
		$pw = $this->input->post('password');
		$new_account = $this->user->create($id, $ln, $fn, $email, $pw);
		redirect('inscription');
	}
}