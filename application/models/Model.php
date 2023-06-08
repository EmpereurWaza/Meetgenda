<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register_Model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
        Session::init();
    }
    public function check_user($identifiant,$email)
	{
		$result= $this->db->select("SELECT * FROM `User` WHERE Identifiant = '".$identifiant."' OR Email = '".$email."'");
		$count = count($result);
		return $count;
	}
	public function insert_user($nom,$prenom,$identifiant,$password,$email)
	{
		$this->db->insert('INSERT INTO User (Nom, Prenom, Identifiant, MotDePasse, Email) VALUES (?, ?, ?, ?, ?)';);
	}
    public function run()
	{
		
		$identifiant=$_POST['Identifiant'];
		$password=md5($_POST['MotDePasse']);
		
		$res= $this->db->select("SELECT * FROM `User` WHERE Identifiant = '".$identifiant."' AND MotDePasse = '".$password."'");
		$count = count($res);
		
		if ($count > 0) {
			
			Session::init();
			Session::set('role', "user");
			Session::set('loggedIn', true);
			Session::set('Identifiant', $identifiant);
			Session::set('MotDePasse', $res[0]['password']);
			header('location: '.URL.'login/index');
		} 
		   else {
			Session::set('loggedIn', false);
			header('location: '.URL);
		}
		
		
	}
}