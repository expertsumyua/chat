<?php
// прописал строку (текст) для получения списка всех сообщений
//$sql = "SELECT * FROM `messages`";
// mysqli_query - выполнить sql запрос
// 2 параметра: 1 - подключение к БД, 2 - sqlскрипт
//$result = mysqli_query($connect, $sql);

//  mysqli_num_rows - получить количество результатов
//$number_of_messages = mysqli_num_rows($result);
// echo "<pre>";
// var_dump($number_of_users);
// echo "</pre>";
// die();


?>

<ul>

	<?php
		//	Если в запросе есть выбраный пользователь
		if (isset($_GET["user"]) || isset($userID_toWhom)) {
			$user_toWhom = null;
			if(isset($_GET["user"])) {
				$user_toWhom = $_GET["user"];
			} else {
				$user_toWhom = $userID_toWhom;
			}
			// получаем все сообщения которые были отправлены пользователю
			$sql_m = "SELECT * FROM messages" . // Выбираем все сообщения
			" WHERE (`userID_toWhom` =" . $user_toWhom . 		// где id отправляемому пользователю = POST-запросе
			" AND `userID_fromWhom` =" . $userID_fromWhom . ")" . 		// и отправлено от пользователя id = 1
			" OR " .	// или
			"(`userID_toWhom` =" . $userID_fromWhom .  					// отправлено от пользователя id = 1
			" AND `userID_fromWhom` =" . $user_toWhom . ")";	// и от пользователя с id = POST-запросе
			// выполняю SQL запрос
			$result_m = mysqli_query($connect, $sql_m);
			// mysqli_fetch_assoc - преобразовывает полученные данные
			//(результирующй ряд или строку из таблицы) пользователя в массив
			$number_of_messages = mysqli_num_rows($result_m);
			$i = 0;
			while ($i < $number_of_messages) {
					$message = mysqli_fetch_assoc($result_m);
	?>		
						<li>
	<?php
								// вывести всю строку по указаннму id
								$sql_u = "SELECT * FROM users WHERE id=" . $message["userID_fromWhom"];
								// выполняю SQL запрос
								$result_u = mysqli_query($connect, $sql_u);
								// записываем в переменную массив с данными пользователя 
								$user = mysqli_fetch_assoc($result_u);
	?>
							<div class = "avatar">
								<img src= <?php echo $user["photo"]; ?> >									
							</div>
							<h2><?php echo $user["name"]; ?></h2>
							<p><?php echo  $message["message"]; ?></p>
							<div class ="time"><?php echo $message["date_and_time"]; ?></div>

						</li>
	<?php	
					$i++;
			}				
		} else if (isset($_GET["search-text"])){

			///echo $_GET["search-text"];
			//while ($i < count($messages)) {
				
				//if($messages[$i]["message"] == $_GET["search-text"]) {
					
	?>		
					<!-- <li>
						<?php
						
							//$user = $users[$messages[$i]["userID_toWhom"]];
						?>
						<div class = "avatar">
							<img src= <?php //echo $user["photo"]; ?> >									
						</div>
						<h2><?php// echo $user["name"]; ?></h2>
						<p><?php //echo  $messages[$i]["message"]; ?></p>
						<div class ="time"><?php //echo $messages[$i]["time"]; ?></div>
					</li> -->
	<?php	
					
				// }					

				// $i++;
			//}
		}
		else {
			echo "<h2> Пользователь не выбран</h2>";
		}

	?>

</ul>