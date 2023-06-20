<?php
class Connexion extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->load->view('header');
	
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('connexion');
		}
		else{
			$email = $this->input->post('email');
			$pw = $this->input->post('password');
			$connect = $this->user->login($email, $pw);
			if (isset($connect['Identifiant'])){
				$this->session->set_userdata($connect);
			}
			else {
				$this->session->set_flashdata('login_error', 'Le courriel et/ou le mot de passe ne correspond(ent) pas');
				redirect(uri_string());
			}
		redirect('welcome');
		}
	}

	public function fin(){
		$this->session->sess_destroy();
		redirect('welcome');
	}
}