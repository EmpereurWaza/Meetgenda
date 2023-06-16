<?php
class Connexion extends CI_Controller {
	public function index(){
		parent::__construct();
		$this->load->view('header');
		$this->load->view('connexion');
	}

	public function submit(){
		$this->load->model('user');
		$email = $this->input->post('email');
		$pw = $this->input->post('password');
		$connect = $this->user->login($email, $pw);
		redirect('welcome');
	}
}