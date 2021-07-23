'use strict';
/*let js_name = "ECMAScript";
result = prompt("Название JavaScript?");
if (result = "ECMAScript") {
	alert("Верно");
}
else {
	alert("Неверно. Правильное название ECMAScript");
}*/

/*result = prompt("Enter an negative or positive number");
if (result > 0) {
	alert(1);
}
else if (result < 0) {
	alert(-1);
}
else {
	alert (0);
}*/

/*let login = "admin";
let input_username;
let password = "boss";
let input_password;

input_username = prompt("Your login: ");
if (!input_username) {
	alert("Canceled");
}
else if (input_username == login) {
	input_password = prompt("Enter password: ");
	if (!input_password) {
		alert("Canceled");
	}
	else if (input_password == password) {
		alert(`Hello ${input_username}`);
	}
	else {
		alert("Password incorrect");
	}
}
else {
	alert("Unknown user");
}*/

/*let sum = 0;
while (true) {
	let value = Number(prompt("Enter the number: "));
	alert(typeof(value));
	if (!value) break;
	sum += value;
}
alert("The end");
alert(`The sum is ${sum}`);
*/

/*for (let i = 2; i <= 10; i++) {
	if (i % 2 == 0) alert(i);
}
*/

/*while (true) {
	let input = prompt("Enter the number grater than 100: ");
	if (input > 100 || !input) break;
}
*/

for (let i = 0; i < 5; i++) {
	console.log(`value is ${i}`);
}
