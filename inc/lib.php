<?php
class Users {
	public $userName;
	public $eMail;
	public $password;
	public $dob;
	
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
	if($_POST){
		$userReg = new Users();
		$userReg->userName = trim(htmlspecialchars($_POST['userName'])); 
		$userReg->eMail = trim(htmlspecialchars($_POST['eMail'])); 
		$userReg->password = trim(htmlspecialchars($_POST['password'])); 
		$userReg->dob = htmlspecialchars($_POST['dob']);
		$userReg->addUser();
}

function clearTable($tableName){
		$db = new PDO('mysql:host='.DB_HOST.'; dbname='.DB_NAME.'; charset='.DB_CHARSET.'',''.DB_USER.'','');
		$db->query("TRUNCATE {$tableName}");
		// Очистка таблицы!!! ОПАСНО )))
}
?>