<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Inscription extends CI_Controller
{
	public function index()
	{
		if ($this->session->userdata('Identifiant')) {
			redirect('Accueil');
			return;
		}
		
		$this->load->helper(array('form'));
		$this->load->library('form_validation');

		$this->load->database();

		$this->form_validation->set_rules('Nom', 'Name', 'required');
		$this->form_validation->set_rules('Prenom', 'Firstname', 'required');
		$this->form_validation->set_rules('Email', 'Email', 'required|valid_email|is_unique[user.email]');
		$this->form_validation->set_rules('MotDePasse', 'Password', 'required|min_length[4]');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('inscription');
			return;
		}

		$this->load->model('User');

		$user = $this->user->create(
			$this->input->post('Nom'),
			$this->input->post('Prenom'),
			$this->input->post('Email'),
			$this->input->post('MotDePasse')
		);

		if ($user) {
			$this->session->set_userdata($user);
			redirect('Accueil');
		} else {
			echo "Error";
		}
	}
}