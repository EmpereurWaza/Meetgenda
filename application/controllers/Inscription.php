<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inscription extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('Register_model', 'model'); // Charger le modèle Register_model
    }

    public function index()
    {
		$this->load->helper('url');
		$this->load->helper('html');
		$this->load->view('header');
        $this->load->view('inscription'); // Utiliser load->view() pour afficher la vue
    }

    public function signup()
    {
        $identifiant = $this->input->post('Identifiant');
        $email = $this->input->post('Email');
        $password = $this->input->post('MotDePasse');
        
        $count = $this->model->check_user($identifiant, $email);
        
        if ($count > 0) {
            echo 'This User Already Exists';
        } else {
            $data = array(
                'Nom' => null, // Remplacer 'Nom' par le nom de votre colonne correspondante dans la table 'User'
                'Prenom' => null, // Remplacer 'Prenom' par le nom de votre colonne correspondante dans la table 'User'
                'Identifiant' => $identifiant,
                'MotDePasse' => password_hash($password, PASSWORD_DEFAULT),
                'Email' => $email
            );
            
            $this->model->insert_user($data);
        }
        
        redirect('inscription/index'); // Utiliser redirect() pour rediriger vers la page d'inscription
    }
}
