<?php
class Poll extends CI_Controller {
	public function index(){
		if(! $this->session->userdata('Identifiant')){
			redirect('connexion');
		}
		$this->load->view('header');
		$this->load->view('list_poll');
		$this->load->model('sondage');
	}
	public function new(){
		if(! $this->session->userdata('Identifiant')){
			redirect('welcome');
		}
		$this->load->view('header');
		$this->load->view('new_poll');
	}
	public function submit(){
		$this->load->model('sondage');
		$titre = $this->input->post('title');
		$location = $this->input->post('location');
		$summary = $this->input->post('summary');
		$start = $this->input->post('start_date');
		$end = $this->input->post('end_date');
		$sd = $this->sondage->new($titre, $summary, $start, $end, $location);
		redirect('poll');
	}
}

