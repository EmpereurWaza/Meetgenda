<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register_model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
        session_start();
    }
    
    public function check_user($identifiant, $email)
    {
        $result = $this->db->select("SELECT * FROM `User` WHERE Identifiant = '".$identifiant."' OR Email = '".$email."'");
        $count = count($result);
        return $count;
    }
    
    public function insert_user()
    {
        $query = 'INSERT INTO User (Nom, Prenom, Identifiant, MotDePasse, Email) VALUES (?, ?, ?, ?, ?)';
        $paramType = 'sss';
        $paramValue = array(
            $_POST["Nom"],
            $_POST["Prenom"],
            $_POST["Identifiant"],
            password_hash($_POST["MotDePasse"], PASSWORD_DEFAULT), // Utilisation de password_hash()
            $_POST["Email"],
        );
        $memberId = $this->ds->insert($query, $paramType, $paramValue);
        if (!empty($memberId)) {
            $response = array(
                "status" => "success",
                "message" => "You have registered successfully."
            );
        }
    }
    
    public function run()
    {
        $identifiant = $_POST['Identifiant'];
        $password = $_POST['MotDePasse'];
        
        $res = $this->db->select("SELECT * FROM `User` WHERE Identifiant = '".$identifiant."'");
        $count = count($res);
        
        if ($count > 0 && password_verify($password, $res[0]['MotDePasse'])) { // Utilisation de password_verify()
            session_start();
            $_SESSION['role'] = "user";
            $_SESSION['loggedIn'] = true;
            $_SESSION['Identifiant'] = $identifiant;
            $_SESSION['MotDePasse'] = $res[0]['MotDePasse'];
            header('location: '.URL.'login/index');
        } else {
            $_SESSION['loggedIn'] = false;
            header('location: '.URL);
        }
    }
}
