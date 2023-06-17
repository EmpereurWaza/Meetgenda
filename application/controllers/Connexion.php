<?php
class Connexion extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->load->view('header');
		$this->load->view('connexion');
	}

	public function submit(){
		$email = $this->input->post('email');
		$pw = $this->input->post('password');
		$connect = $this->user->login($email, $pw);
		if (isset($connect['Identifiant'])){
			session_start();
			$_SESSION = $connect;
			redirect('welcome');
		}
		else {
			redirect('connexion');
		}
		print_r($connect);
	}
}