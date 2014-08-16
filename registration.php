<?php
$db = new PDO('mysql:host=localhost; dbname=vk; charset=utf-8','root');
if (!empty($_POST)){
	$db->query('insert into users (user_name, e_mail, pass, dob) values ("' . $_POST['userName'] . '", 
																		 "' . $_POST['e-mail'] . '", 
																		 "' . $_POST['password'] . '", 
																		 "' . $_POST['dob'] . '"
																		 )
			  ');
}
?>
<!Doctype html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Регистрация нового пользователя</title>
	<link rel="stylesheet" href="/css/style.css" media="screen" />
</head>
<body>
	<div id="wrapper">
		
		<!-- Шапка страницы -->
		<div id="header">
			<a href="http://vk.loc/index.php"><img id="logo" src="/img/logo.png" /></a>
			<div id="top-navi">
				<ul>
					<li><a href="#">Ссылка 2</a></li>					
					<li><a href="#">Ссылка 1</a></li>
					<li><a href="http://vk.loc/index.php">Главная</a></li>
				<ul>
			</div>
			<h1>Регистрация</h1>
		</div>
		
		<!-- Очистка обтикания <div id="clear"></div>-->
		
		<!-- Заголовок формы страницы -->
		<div id="form-name">
			<h2>Новый пользователь</h2>
		</div>
		
		<!-- Форма -->
		<div id="forRegForm">
			<div id="forImg">
				<img src="/img/newUser.png" />
			</div>
			<form id="regForm" method="post">
				<div class="input">
					<label>Имя пользователя *</label><input type="text" name="userName" required maxlength="26">
				</div>
				<p class="tips">от 3 до 26 символов</p>	
				<div class="input">	
					<label>E-mail адрес *</label><input type="text" name="e-mail" required>
				</div>
				<p class="tips">на данный адрес будет отправлено письмо активации</p>
				<div class="input">	
					<label>Пароль *</label><input type="password" name="password" required>
				</div>
				<p class="tips">не менее 6 и не более 32 символов</p>
				<div class="input">	
					<label>Дата рождения *</label><input type="text" name="dob" required>
				</div>
				<p class="tips">в формате 31.12.1992</p>
					<input id="backButton" type="button" onclick="history.back()">
					<input id="regButton" type="submit" value="">	
			</form>		
		</div>
		
		<!-- Футер -->
		<div id="footer">
			<div id="leftPart">
				<p id="firstP">Сделано своими руками для <span>vk.loc</span></p>
			</div>
			<div id="rightPart">
				<p id="secondP">© 2014 vk.loc. Все права типа как защищены.</p>
			</div>
		</div>
	</div>
</body>
</html>