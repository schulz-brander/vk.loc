<?php require_once '../classes/User.php' ?>
<?php
if(!empty($_POST)) {
	$user = new User();
	$user->addUser($_POST);
	$user->getUserId($_POST);
	$result = $user->result;
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
		<?php require 'header.php' ?>
		
		<!-- Очистка обтикания (если понадобиться)<div id="clear"></div>-->
		
		<!-- Заголовок формы страницы -->
		<div id="form-name">
		<?php if(isset($result)){ ?>
			<h2><?php echo $result; ?></h2>
		<?php }else{
			echo "<h2>Новый пользователь</h2>";
		} ?>
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
					<label>E-mail адрес *</label><input type="text" name="eMail" required>
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
		<?php require 'footer.php' ?>
		
	</div>
</body>
</html>