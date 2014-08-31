<?php require_once '../classes/User.php' ?>
<?php
session_start();
if(empty($_SESSION)){
	if(!empty($_POST)) {
		$user = new User();

		if($user->unique($_POST) == 0){
			$user->addUser($_POST);
			$user->getUserId($_POST);
			$result = $user->getUserIdResult;
		}
		else{
			$tryAgain = "Такой адрес уже зарегистрирован!";
		}
	}
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
			<?php if(isset($_SESSION['userName']) && isset($_SESSION['id'])): ?>
			<h2><?php echo "Здравствуйте, ".$_SESSION['userName'].", Ваш ID " .$_SESSION['id']; ?></h2>
		
			<?php elseif(isset($result)): ?>
			<h2><?php echo $result; ?></h2>

			<?php elseif(isset($tryAgain)):?>
					<h2><?php echo $tryAgain; ?></h2>
			<?php include 'regForm.php';?>	
			
			<?php else: echo "<h2>Новый пользователь</h2>"; ?>
			<?php include 'regForm.php'; endif;?>			
			</div>
	</div>
	<!-- Футер -->
	<?php require 'footer.php' ?>
</body>
</html>