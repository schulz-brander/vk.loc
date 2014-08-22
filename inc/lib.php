<?php
class Users {
	public $userName;
	public $eMail;
	public $password;
	public $dob;
	
	function __construct($userNameConstr, $eMailConstr, $passwordConstr, $dobConstr){
		$this->userName = trim(htmlspecialchars($userNameConstr));
		$this->eMail = trim(htmlspecialchars($eMailConstr));
		$this->password = trim(htmlspecialchars($passwordConstr));
		$this->dob = trim(htmlspecialchars($dobConstr));
		$this->addUser();
	}
		function addUser(){
		$db = new PDO('mysql:host='.DB_HOST.'; dbname='.DB_NAME.'; charset='.DB_CHARSET.'',''.DB_USER.'','');
		$db->query('insert into users (user_name, e_mail, pass, dob) 
								values ("' . $this->userName . '", 
										"' . $this->eMail . '", 
										"' . $this->password . '", 
										"' . $this->dob . '")
					');
	}
}

function clearTable($tableName){
		$db = new PDO('mysql:host='.DB_HOST.'; dbname='.DB_NAME.'; charset='.DB_CHARSET.'',''.DB_USER.'','');
		$db->query("TRUNCATE {$tableName}");
		// Очистка таблицы!!! ОПАСНО )))
}
?>