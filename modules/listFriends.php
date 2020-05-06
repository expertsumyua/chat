<?php
/*==================================
	Этот файл возвращает HTML с пользователями
============================================*/
?>
<?php
	// прописал строку (текст) для получения списка всех пользователей кроме авторизированного
	$sql_u = "SELECT * FROM users WHERE id!=" . $userID;
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
			<div class = "avatar">
					<img src=' <?php echo $user["photo"]; ?> '>
				</div>
			<h2><?php echo $user["name"] ?></h2>
			<?php
				$sql_f = "SELECT * FROM friends WHERE user_1=" . $user["id"] . " AND user_2=" . $userID ." 
												   OR user_1=" . $userID . " AND user_2=" . $user["id"];
				$result_f = mysqli_query($connect, $sql_f);
				$number_of_friends = mysqli_num_rows($result_f);
				if($number_of_friends > 0) {
					?>
					<!-- <a href ="http://chat.local/delete_friend.php?user_id=<?php //echo $user["id"]; ?>">Удалить из друзей -</a> -->
					<div data-link ="http://chat.local/delete_friend.php?user_id=<?php echo $user["id"]; ?>"onclick ="deleteFriend(this)">Удалить из друзей -</div>
					<?php
				} else {
					?>
					<!-- <a href ="http://chat.local/add_friend.php?user_id=<?php //echo $user["id"]; ?>">Добавить в друзья +</a> -->
					<div data-link ="http://chat.local/add_friend.php?user_id=<?php echo $user["id"]; ?>"onclick ="addFriend(this)">Добавить в друзья +</div>
					<?php
				}
			?>												
		</li>
	<?php
		$i++;
	}
?>