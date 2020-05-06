<?php
	include "configs/db.php";
	/*=====	Отправка сообщений выбраномкпользователю ===========================*/

	// Проверяем есть сообщение и не пустое ли оно
	if(isset($_POST["send-message"]) && $_POST["send-message"] != "") {

		$sql_m = "INSERT INTO messages (userID_fromWhom, userID_toWhom, message) VALUES ('" . $_POST["userID_fromWhom"] . "', '" . $_POST["userID_toWhom"] ."', '" . $_POST["message"] ."' )";
		mysqli_query($connect, $sql_m);
		// if(mysqli_query($connect, $sql)) {
		// 	echo "<h2>Сообщение отправлено!</h2>";
		// } else {
		// 	echo "<h2>произошла ошибка!!!</h2>" . mysqli_error($connect);
		// }		
	}
	/*==========================================================================*/
	$userID_toWhom = $_POST["userID_toWhom"];
	$userID_fromWhom = $_POST["userID_fromWhom"];

	include 'modules/listMessages.php';

?>