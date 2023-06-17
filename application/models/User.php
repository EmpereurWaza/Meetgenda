<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function create($id, $name, $firstname, $email, $password)
    {
        $result = $this->db->insert(
            'User',
            array(
                'Identifiant' => $id,
                'Nom' => $name,
                'Prenom' => $firstname,
                'Email' => strtolower($email),
                'MotDePasse' => password_hash($password, PASSWORD_DEFAULT)
            )
        );

        if ($result) {
            return array(
                'Identifiant' => $this->db->insert_id(),
                'Nom' => $name,
                'Prenom' => $firstname,
                'Email' => $email
            );
        } else {
            return false;
        }
    }

    public function login($email, $password)
    {
        $query = $this->db->get_where(
            'User',
            array(
                'Email' => $email
            )
        );

        if ($query->num_rows() == 0)
            return array();
        else {
            $data = $query->row();

            if (password_verify($password, $data->MotDePasse)){
                return array(
                    'Identifiant' => $data->Identifiant,
                    'Nom' => $data->Nom,
                    'Prenom' => $data->Prenom,
                    'Email' => $data->Email
                );
            }
            else {
                return array();
            }
        }
    }
}