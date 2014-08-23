<!Doctype html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Стартовая страница</title>
	<link rel="stylesheet" href="/css/style.css" media="screen" />
</head>
<body>
	<div id="wrapper">
		
		<!-- Шапка страницы -->
		<?php require 'template/header.php' ?>
		
		<!-- Форма авторизации -->
		<div id="headLogin">
			<h2>Авторизация<h2>
		</div>	
		<div id="login">
			<div id="leftPartLog">
				<img src="/img/forLogin.png">
				<a class="logLink" href="/template/registration.php">Регистрация</a>
				<a class="logLink" href="#">Забыли пароль?</a>
			</div>
			<div id="rightPartLog">
				<form id="authorize" method="post">
					<input id="forMargin" class="inputLogin" type="text" name="userName" placeholder=" Логин" required>
					<input class="inputLogin" type="password" name="password" placeholder=" Пароль" required><br>
					<label>
						<input type="checkbox" name="remember" value="1">Чужой компьютер
					</label><br>
					<input id="loginButton" type="submit" value="">
				</form>
			</div>
		</div>
		
		
		<!-- Футер -->
		<?php require 'template/footer.php' ?>
		
	</div>
</body>
</html>