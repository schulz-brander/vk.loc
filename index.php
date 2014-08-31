<?php require_once '/classes/User.php' ?>
<?php
session_start();

$authUser = new User();
$authUser->auth($_POST);//метод авторизации с параметром пост
$data = $authUser->showData;//через него получаем данные с базы - мыло, пароль и др.
//$result = $authUser->authResult;//'Здравствуйте имя пользователя, Ваш ID id пользователя' не задействована!!!

if(!empty($_POST) && $_POST['eMail'] == $data['e_mail'] && $_POST['password'] ==  $data['pass']){
	$_SESSION['id'] =  $data['id'];
	$_SESSION['userName'] =  $data['user_name'];
}
?>
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
		<?php if(empty($_SESSION['userName'])): ?>
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
						<input id="forMargin" class="inputLogin" type="text" name="eMail" placeholder=" E-mail" required>
						<input class="inputLogin" type="password" name="password" placeholder=" Пароль" required><br>
						<label>
							<input type="checkbox" name="remember" value="1">Чужой компьютер
						</label><br>
						<input id="loginButton" type="submit" value="">
					</form>
				</div>
			</div>
		<?php else: ?>
			<div id="hello">
				<p><?php echo 'Здравствуйте! '.$_SESSION['userName'].', Ваш ID ' .$_SESSION['id']; ?></p>
			</div>
		<?php endif; ?>
	</div>
	<!-- Футер -->
	<?php require 'template/footer.php' ?>
</body>
</html>