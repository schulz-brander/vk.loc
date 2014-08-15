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
		<div id="header">
			<a href="http://vk.loc/index.php"><img id="logo" src="/img/logo.png" /></a>
			<div id="top-navi">
				<ul>
					<li><a href="#">Ссылка 2</a></li>					
					<li><a href="#">Ссылка 1</a></li>
					<li><a href="http://vk.loc/index.php">Главная</a></li>
				<ul>
			</div>
			<h1>Добро пожаловать!</h1>
		</div>
		
		<!-- Форма авторизации -->
		<div id="headLogin">
			<h2>Авторизация<h2>
		</div>	
		<div id="login">
			<div id="leftPartLog">
				<img src="/img/forLogin.png">
				<a class="logLink" href="http://vk.loc/registration.php">Регистрация</a>
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