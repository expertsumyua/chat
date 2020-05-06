<?php
/*
1. Дизайн/мокап - done
2. Сделать отправку формы - done
3. Сделать обработку данных формы, проверить заполнил ли email, password - done
4. Сделать проверку есть ли такой пользователь в базе данных
5. Если нет, то вывести ошибку. Иначе п.6
6. Авторизовать пользователя

*/
	include "configs/db.php";

	if(isset($_POST["email"]) && isset($_POST["password"])
		&& $_POST["email"] != "Введите свой E-mail" && $_POST["password"] != "Введите свой пароль") {

		$sql = "SELECT * FROM users WHERE `email` LIKE '" . $_POST["email"] . "' AND `password` LIKE '" . $_POST["password"] ."'";

		$result = mysqli_query($connect, $sql);
		//var_dump($result);
		$number_of_users = mysqli_num_rows($result);
		if($number_of_users == 1) {
			$user = mysqli_fetch_assoc($result);
			setcookie("userID", $user["id"], time() +60*60*24*30);

			header("Location: /");

		} else {
			echo "<h2>Логин и пароль введены не верно</h2>" . mysqli_error($connect);
		}		
	} 
?>


<!DOCTYPE html>
<html>
<head>
	<title>Авторизация</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<?php
		include "parts_chat/chat_header.php"
	?>
	
	<!-- <div id="enter-exit-modal"> -->
	<div id="authorization-modal">	
		<form action="login.php" method="POST">
			<div class="close">X</div>
			<div class="content">
				<h1>Авторизация</h1>
			 	<h2>Укажаите e-mail и пароль</h2>
			 	<div id = "e-mail">
			 		<img src="img/login.png">
					<input type="text" name="email" value="E-mail" onfocus="if (this.value == 'E-mail') {this.value = '';}" onblur="if (this.value == '') {this.value = 'E-mail';}">
				</div>
				<div id = "password">
			 		<img src="img/password.png">
					<input type="text" name="password" value="Введите пароль" onfocus="if (this.value == 'Введите пароль') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Введите пароль'; this.type='text';}" onkeypress="this.type='password'">
				</div>
				<button id="enter" type="submit">Войти</button>
				<a href="registration.php" id="registration">
					<h2>Регистрация</h2>
				</a>
				<button id="cancel">Отмена</button>
			</div>
		 </form>
	</div>
	
</body>
</html>