<?php 
class Users{
	const DB_HOST = 'localhost';
	const DB_NAME = 'vk';
	const DB_TABLE = 'users';
	const DB_CHARSET = 'utf-8';
	const DB_USER = 'root';
	const DB_PASSWORD = '';

	public $db = false;
	public $result = false;

	public function __construct() {
		$this->db = new PDO('mysql:host='. self::DB_HOST .';dbname=' . self::DB_NAME . ';charset='.DB_CHARSET.'', ''. self::DB_USER .'', '');
		$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}

	public function addUser($data) {
		$insert = $this->db->prepare('insert into ' . self::DB_TABLE . ' (user_name, e_mail, pass, dob) values (:userName, :eMail, :password, :dob)');
		$insert->bindParam(':userName', $data['userName']);
		$insert->bindParam(':eMail', $data['eMail']);
		$insert->bindParam(':password', $data['password']);
		$insert->bindParam(':dob', $data['dob']);

		try{
			$insert->execute();
			$this->result = 'Hello, ' . $data['userName'];
		} catch(Exception $e) {
			$this->result = $e->getMessage();
		}
	}
}
?>