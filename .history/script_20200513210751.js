// Открыть модальное окно контактов
var btnOpenContact = document.querySelector("#open-contact");
btnOpenContact.onclick = function () {
	var contactsModal = document.querySelector("#contacts-modal");
	//closeAllModal();
	contactsModal.style.display = "block";
}
// Закрыть модальное окно
var contactsModalBtnClose = document.querySelector("#contacts-modal .close");
contactsModalBtnClose.onclick = function () {
	var contactsModal = document.querySelector("#contacts-modal");
	contactsModal.style.display = "none";
}

function addFriend(element) {
	var listFriend = document.querySelector("#list-Friends");
	//console.dir(element);
	var link = element.dataset.link;
	// Создать объект для отправки http запроса
	var ajax = new XMLHttpRequest();
	// Открываем ссылку, передавая метод запоса и саму ссылку
	ajax.open("GET", link, false);
	// Отправляем запрос
	ajax.send();
	// меняем контент в блоке #list-Friends
	listFriend.innerHTML = ajax.response;
}

function deleteFriend(element) {
	var listFriend = document.querySelector("#list-Friends");
	//console.dir(element);
	var link = element.dataset.link;
	// Создать объект для отправки http запроса
	var ajax = new XMLHttpRequest();
	// Открываем ссылку, передавая метод запоса и саму ссылку
	ajax.open("GET", link, false);
	// Отправляем запрос
	ajax.send();
	// меняем контент в блоке #list-Friends
	listFriend.innerHTML = ajax.response;
}

var form = document.querySelector("#form");
//console.dir(form);
form.onsubmit = function (event) {
	event.preventDefault();

	var fromWhom = form.querySelector("input[name='userID_fromWhom']");
	var toWhom = form.querySelector("input[name='userID_toWhom']");
	var message = form.querySelector("textarea");
	console.dir(message);

	var data = "send-message=1" +
		"&userID_fromWhom=" + fromWhom.value +
		"&userID_toWhom=" + toWhom.value +
		"&message=" + message.value;

	// Создать объект для отправки http запроса
	var ajax = new XMLHttpRequest();
	// Открываем ссылку, передавая метод запоса и саму ссылку
	ajax.open("POST", form.action, false);
	// Отправляем запрос
	ajax.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
	// Отправляем запрос
	ajax.send(data);
	console.dir(ajax);

	var listMessages = document.querySelector("#list-messages");
	listMessages.innerHTML = ajax.response;
	message.value = null;
}

var formSearch = document.querySelector("#search");
//console.dir(form);
formSearch.onsubmit = function (event) {
	event.preventDefault();

	var searchText = formSearch.querySelector("input[name='search-text']");


	var data = "searchName=1" +
		"&search-text=" + searchText.value;


	// Создать объект для отправки http запроса
	var ajax = new XMLHttpRequest();
	// Открываем ссылку, передавая метод запоса и саму ссылку
	ajax.open("POST", formSearch.action);
	// Отправляем запрос
	ajax.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
	// Отправляем запрос
	ajax.send(data);
	console.dir(ajax);

	var listContacts = document.querySelector("#list-contacts");
	listContacts.innerHTML = ajax.response;
}

/*

1. Вынести вывод всех куонтактов в отдельныйфайл - done
2. JS - добавить событие на кнопку "добавить в друзья"
3. JS - оправить запрос на сервер
4. Если запрос выполнен успешно  вывести контаакты

*/


// Открыть модальное окно авторизации
// var btnSettings = document.querySelector("#settings");
// 	btnSettings.onclick = function() {
// 		closeAllModal();
// 	}
// Открыть модальное окно Авторизации
// var btnEnterExit = document.querySelector("#enter-exit");
// 	btnEnterExit.onclick = function() {
// 	var authorization = document.querySelector("authorization");
// 	closeAllModal();
// 	authorization.style.display = "block";
// }
// Закрыть модальное окно Авторизации
// var authorizationBtnClose = document.querySelector("#authorization .close");
// 	authorizationBtnClose.onclick = function() {
// 	var authorization = document.querySelector("#authorization");
// 	authorization.style.display = "none";
// }
// var authorizationBtnCancel = document.querySelector("#authorization #cancel");
// 	enterExitModalBtnCancel.onclick = function() {
// 	var authorization = document.querySelector("#authorization");
// 	authorization.style.display = "none";
// }
// Авторизоватся и Закрыть модальное окно Авторизации
// var authorizationBtnEnter = document.querySelector("#enter");
// 	enterExitModalBtnEnter.onclick = function() {
// 	var authorization = document.querySelector("#authorization");
// 		authorization.style.display = "none";
// }
// Фенкция закрыть все модальные окна
// function closeAllModal() {
// 	var contactsModal = document.querySelector("#contacts-modal");
// 	var authorization = document.querySelector("#authorization");
// 	if (contactsModal.style.display == "block") {
// 		contactsModal.style.display = "none";
// 	}
// 	if (authorization.style.display == "block") {
// 		authorization.style.display = "none";
// 	}
// }