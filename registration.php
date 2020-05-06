<?php
/*
1. Дизайн/мокап - done
2. Сделать отправку формы - done
3. Проверить есть ли пользователь с таким email
4. Проверить заполнил ли пользователь поля формы (email, password)
5. Если все предыдущие шаги прошли 3,4
	5.1.добавить пользователя в БД.
*/	

	include "configs/db.php";

	if(isset($_POST["email"]) && isset($_POST["password"])
		&& $_POST["email"] != "Введите свой E-mail" && $_POST["password"] != "Введите свой пароль") {

		$sql = "INSERT INTO users (email, password, name) VALUES ('" . $_POST["email"] . "', '" . $_POST["password"] ."','" .$_POST["name"]. "')";
		if(mysqli_query($connect, $sql)) {
			echo "<h2>Пользователь добавлен!</h2>";
		} else {
			echo "<h2>произошла ошибка!!!</h2>" . mysqli_error($connect);
		}		
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Регистрация</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<?php
		include "parts_chat/chat_header.php"
	?>
	
	<div id="registration-modal">
		<form action="registration.php" method="POST">
			<div class="close">X</div>
			 <div class="content">

			 	<h1>Регистрация</h1>
			 	<!-- <h2>Укажаите e-mail и пароль</h2> -->
			 	<div id = "name">
			 		<img src="img/name.png">
					<input type="text" name="name" value="Введите своё имя" onfocus="if (this.value == 'Введите своё имя') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Введите своё имя';}">
				</div>
			 	<div id = "e-mail">
			 		<img src="img/login.png">
					<input type="text" name="email" value="Введите свой E-mail" onfocus="if (this.value == 'Введите свой E-mail') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Введите свой E-mail';}">
				</div>
				<div id = "password">
			 		<img src="img/password.png">
					<input type="text" name="password" value="Введите свой пароль" onfocus="if (this.value == 'Введите свой пароль') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Введите свой пароль'; this.type='text';}" onkeypress="this.type='password'">
				</div>
				<button id="enter" type="submit">Зарегистрироватся</button>	
				<a href="login.php" id="registration">
					<h2>Авторизация</h2>
				</a>
				<button id="cancel">Отмена</button>
			 </div>	
		 </form>
	</div>
	
</body>
</html>