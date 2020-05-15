<?php
include "configs/db.php";
include "configs/settings.php";

if($userID == null) {
	header("Location: /login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $siteName ?></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<?php
		include "parts_chat/chat_header.php"
	?>

	<div id="content">

		<div id = "contacts">

			<form id = "search" action="http://chat/searchFriend.php" method="POST">
				<input type="text" name="search-text">
				<button type="submit"><img src="img/search-button.png"></button>
			</form>
			<div id = "list-contacts">	
			<?php

				// include - подключить файл список контактов
				include "modules/listContacts.php";

			?>
			</div>
		</div>

		<div id="messages">

			<div id="list-messages">
				<?php 
				// include - подключить файл список сообщений
				include "modules/listMessages.php";
				?>
			</div>
				<?php
				if (isset($_GET["user"])){
								
					$userID_toWhom = $_GET["user"];
					$userID_fromWhom = $_COOKIE["userID"];
					?>
					<!-- <form id = "form" action="index.php?user=<?php //echo $_GET["user"] ?>" method="POST"> -->
					<form id = "form" action="http://chat/sendMessage.php" method="POST">						
						<input type="hidden" name="userID_fromWhom" value="<?php echo $userID_fromWhom; ?>">
						<input type="hidden" name="userID_toWhom" value="<?php echo $userID_toWhom; ?>">
						<textarea name="message"></textarea>
						<button type="submit" name="send-message"><img src="img/send-button.png"></button>
					</form>
					<?php
				}
			?>
		</div>
	</div>

	<?php
		include "modules/contacts.php";
	?>

<!-- 	<div id="enter-exit-modal">
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
			<button id="enter">Войти</button>
			<a href="#" id="registration">
				<h2>Регистрация</h2>
			</a>
			<button id="cancel">Отмена</button>
		 </div>
	</div> -->


<script src="script.js"></script>
</body>
</html>