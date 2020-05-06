<?php
// echo "<pre>";
// var_dump($number_of_users);
// echo "</pre>";
// die();
?>

<ul>
	<?php
		if (isset($_POST["search-text"]) && $searchText != ""){
			// прописал строку (текст) для получения списка всех пользователей кроме авторизированного
			//$sql_u = "SELECT * FROM `users` WHERE id!=" . $userID;
			$sql_u = "SELECT * FROM `users` WHERE `name` LIKE '%" . $searchText . "%'";
			// mysqli_query - выполнить sql запрос
			// 2 параметра: 1 - подключение к БД, 2 - sqlскрипт
			$result_u = mysqli_query($connect, $sql_u);
			//  mysqli_num_rows - получить количество результатов
			$number_of_users = mysqli_num_rows($result_u);
			// $i - счетчик для подсчёта количества пользователей
			$i = 0;
			// пока в переменной i хранится занчение меньше чем количество пользователе
			while ($i < $number_of_users) {
				
				// mysqli_fetch_assoc - преобразовывает полученные данные (результирующй ряд или строку из таблицы) пользователя в массив
				$user = mysqli_fetch_assoc($result_u);
	?>
				<li>
					<a href ='/index.php?user= <?php echo $user["id"] ?> '>
						<div class = "avatar">
								<img src=' <?php echo $user["photo"]; ?> '>
							</div>
						<h2><?php echo $user["name"] ?></h2>						
						<p>Всем привет</p>
						<div class = "time">09:10</div>
						<span><?php echo $user["phone"]; ?></span>
					</a>
				</li>
	<?php
				$i++;
			}
		} else {
			// прописал строку (текст) для получения списка всех пользователей кроме авторизированного
			$sql_u = "SELECT * FROM `users` WHERE id!=" . $userID;
			// mysqli_query - выполнить sql запрос
			// 2 параметра: 1 - подключение к БД, 2 - sqlскрипт
			$result_u = mysqli_query($connect, $sql_u);
			//  mysqli_num_rows - получить количество результатов
			$number_of_users = mysqli_num_rows($result_u);
			// $i - счетчик для подсчёта количества пользователей
			$i = 0;
			// пока в переменной i хранится занчение меньше чем количество пользователе
			while ($i < $number_of_users) {
				
				// mysqli_fetch_assoc - преобразовывает полученные данные (результирующй ряд или строку из таблицы) пользователя в массив
				$user = mysqli_fetch_assoc($result_u);
	?>
				<li>
					<a href ='/index.php?user= <?php echo $user["id"] ?> '>
						<div class = "avatar">
								<img src=' <?php echo $user["photo"]; ?> '>
							</div>
						<h2><?php echo $user["name"] ?></h2>						
						<p>Всем привет</p>
						<div class = "time">09:10</div>
						<span><?php echo $user["phone"]; ?></span>
					</a>
				</li>
	<?php
				$i++;
			}
		}
	?>
</ul>