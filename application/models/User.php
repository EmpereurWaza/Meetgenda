<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function create($name, $firstname, $email, $password)
    {
        $result = $this->db->insert(
            'user',
            array(
                'name' => $name,
                'firstname' => $firstname,
                'email' => strtolower($email),
                'password' => password_hash($password, PASSWORD_DEFAULT)
            )
        );

        if ($result) {
            return array(
                'id' => $this->db->insert_id(),
                'name' => $name,
                'firstname' => $firstname,
                'email' => $email
            );
        } else {
            return false;
        }
    }

    public function login($email, $password)
    {
        $query = $this->db->get_where(
            'user',
            array(
                'email' => $email
            )
        );

        if ($query->num_rows() == 0)
            return false;

        $data = $query->row();

        if (!password_verify($password, $data->password))
            return false;

        return array(
            'id' => $data->id,
            'name' => $data->name,
            'firstname' => $data->firstname,
            'email' => $data->email
        );
    }
}