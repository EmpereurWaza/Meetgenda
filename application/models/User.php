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
        $sql = "SELECT * FROM User WHERE Identifiant = ? OR Email = ?";
        $existing_acc = $this->db->query($sql, array($id, $email));
        if ($existing_acc->num_rows() != 0){
            return array();
        }
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

        return array(
            'Identifiant' => $this->db->insert_id(),
             'Nom' => $name,
             'Prenom' => $firstname,
             'Email' => $email
        );
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