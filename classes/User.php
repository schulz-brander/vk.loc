<?php 
require 'DB.php';
class User extends DB{
	
	const DB_TABLE = 'users';

	public $db = false;
	public $result = false;

	public function addUser($data) {
		$insert = $this->db->prepare('insert into ' . self::DB_TABLE . ' (user_name, e_mail, pass, dob) values (:userName, :eMail, :password, :dob)');
		$insert->bindParam(':userName', $data['userName']);
		$insert->bindParam(':eMail', $data['eMail']);
		$insert->bindParam(':password', $data['password']);
		$insert->bindParam(':dob', $data['dob']);
		$insert->execute();
	}
	
	public function getUserId($data){
		$get = $this->db->prepare("SELECT id FROM users WHERE e_mail=?");
		$get->bindValue(1, $data['eMail'], PDO::PARAM_STR);
		$get->execute();
		$get->setFetchMode(PDO::FETCH_ASSOC);
		$showId = $get->fetch();
		
		try{
			$this->result = 'Hello, '.$data['userName'].', your ID ' .$showId['id'];
		} catch(Exception $e) {
			$this->result = $e->getMessage();
		}
	}
}
?>