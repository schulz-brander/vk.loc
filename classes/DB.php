<?php
class DB{
	const DB_HOST = 'localhost';
	const DB_NAME = 'vk';
	const DB_CHARSET = 'utf-8';
	const DB_USER = 'root';
	const DB_PASSWORD = '';

	public $db = false;
	public $result = false;

	public function __construct() {
		$this->db = new PDO('mysql:host='. self::DB_HOST .';dbname=' . self::DB_NAME . ';charset='.DB_CHARSET.'', ''. self::DB_USER .'', '');
		$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
}
?>