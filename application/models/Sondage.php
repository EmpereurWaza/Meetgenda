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
        if ($end_date < $start_date) {
            $temp = $start_date;
            $start_date = $end_date;
            $end_date = $temp;
        }

        if ($start_date < date('Y-m-d')) {
            $start_date = date('Y-m-d');
        }
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