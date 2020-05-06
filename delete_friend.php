<?php
	include "configs/db.php";
	include "configs/settings.php";

	/*
	1. Создать таблицу для друзей - done
	2. Сделать ссылку на добавление в друзья - done
	3. Сделать станицу обработчик где добавляем в базу данных выбраного пользователя
	4. Перенаправляем пользователя на главную страницу	
	*/

	if(isset($_GET["user_id"])){
		$sql_f = "DELETE FROM `friends` WHERE (`friends`.`user_1`=" . $_GET["user_id"] . " AND `friends`.`user_2`=" . $userID .")" .
										" OR (`friends`.`user_1`=" . $userID . " AND `friends`.`user_2`=" . $_GET["user_id"] . ")";
		if (mysqli_query($connect, $sql_f)){
			//header("Location: /");
			include "modules/listFriends.php";
		} else {
			echo "<h2>Ошибка!!!</h2>" . mysqli_error($connect);
		}

	}
?>