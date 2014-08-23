<div id="header">
	<a href="http://vk.loc/index.php"><img id="logo" src="/img/logo.png" /></a>
	<div id="top-navi">
		<ul>
			<li><a href="http://vk.loc/template/info.php">phpInfo</a></li>					
			<li><a href="#">Ссылка 1</a></li>
			<li><a href="http://vk.loc/index.php">Главная</a></li>
		<ul>
	</div>
	<h1><?
		if($_SERVER["REQUEST_URI"] == '/template/registration.php'){
			echo "Регистрация";
		}else{
			echo "Добро пожаловать!";
		}
	?></h1>
</div>