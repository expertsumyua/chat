<?php

//var_dump($_COOKIE["userID"]);

?>
<div id="chat-header">

	<div id = "chat-logo">
		<img src="img/logo.png"> <span><b>Веб</b><i>ЧАТ</i></span>
	</div>

	<div id="chat-menu">
		<a href="/">Главная</a>
		<a href="#" id="open-contact">Контакты</a>
		<a href="#" id="settings">Настройки</a>
		<?php
			if(isset($_COOKIE["userID"])){
				// вывести всю строку по указаннму id
				$sql_u = "SELECT * FROM users WHERE id=" . $_COOKIE["userID"];
				// выполняю SQL запрос
				$result_u = mysqli_query($connect, $sql_u);
				// записываем в переменную массив с данными пользователя 
				$user = mysqli_fetch_assoc($result_u);
				?>
				<a href="exit.php" id="enter-exit"><?php echo $user["name"];?> &#187;</a> <!-- Войти -->
				<?php
			} else {
				?>
				<a href="login.php" id="enter-exit">Войти</a> <!-- Выйти -->
				<?php
			}
		?>
		
	</div>

</div>