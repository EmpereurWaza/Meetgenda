<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Sondage extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function new($title, $summary, $start_date, $end_date, $location) 
    {
        $this->db->insert(
            'Sondage',
            array(
                'idSondage' => md5(time()),
                'idUser' => $this->session->userdata('Identifiant'),
                'Title' => $title,
                'Summary' => $summary,
                'DateMin' => $start_date,
                'DateMax' => $end_date,
                'Location' => $location
            )
        );
    }
}