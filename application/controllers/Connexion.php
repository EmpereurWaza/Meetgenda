<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Connexion extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        session_start();
    }

    public function index()
    {
        $this->load->view('connexion');
    }

    public function run()
    {
        $this->load->model('Register_model', 'model'); // Charger le modèle Register_model
        $this->model->run();
    }

    public function logout()
    {
        session_destroy();
        redirect('connexion/index'); // Utiliser redirect() pour rediriger vers la page de connexion
        exit;
    }
}
