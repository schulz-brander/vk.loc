<?php 
require 'DB.php';
class User extends DB{
	
	const DB_TABLE = 'users';

	public $db = false;
	public $result = false;
	public $getUserIdResult = false;
	public $authResult = false; //не задействована
	public $showData = false; //для авторизации

	public function addUser($data) {
		$insert = $this->db->prepare('insert into ' . self::DB_TABLE . ' (user_name, e_mail, pass, dob) values (:userName, :eMail, :password, :dob)');
		$insert->bindParam(':userName', $data['userName']);
		$insert->bindParam(':eMail', $data['eMail']);
		$insert->bindParam(':password', $data['password']);
		$insert->bindParam(':dob', $data['dob']);
		$insert->execute();
	}
	
	public function unique($data){
		$check = $this->db->query('SELECT id FROM users WHERE e_mail="'.$data['eMail'].'"');
		$rows = $check->rowCount();
		return $rows;
	}
	
	public function getUserId($data){
		$get = $this->db->prepare("SELECT id FROM users WHERE e_mail=?");
		$get->bindValue(1, $data['eMail'], PDO::PARAM_STR);
		$get->execute();
		$get->setFetchMode(PDO::FETCH_ASSOC);
		$showId = $get->fetch();
		
		try{
			$this->getUserIdResult = 'Hello, '.$data['userName'].', your ID ' .$showId['id'];
		} catch(Exception $e) {
			$this->getUserIdResult = $e->getMessage();
		}
	}
	
	public function auth($data){
		$get = $this->db->prepare("SELECT id, user_name, e_mail, pass FROM users WHERE e_mail=? AND pass=?");
		$get->bindValue(1, $data['eMail'], PDO::PARAM_STR);
		$get->bindValue(2, $data['password'], PDO::PARAM_STR);
		$get->execute();
		$get->setFetchMode(PDO::FETCH_ASSOC);
		$this->showData = $get->fetch();
		
		try{
			$this->authResult = 'Здравствуйте! '.$_SESSION['userName'].', Ваш ID ' .$_SESSION['id']; //но эта строка не задействована!!!
		} catch(Exception $e) {
			$this->authResult = $e->getMessage();
		}
	}
}