const submit = document.getElementById('submit');
const email = document.getElementById('email');
const name = document.getElementById('name');
const date = document.getElementById('date');
const checkName = /^([A-Z]{2,} ?){1,5}[A-Z]{2,}?$/;
const checkEmail_twoExtension = /^[\w.-]+@[A-Za-z]+\.[A-Za-z]{2,3}$/;
const checkEmail_threeExtension = /^[\w.-]+@[A-Za-z]+\.[A-Za-z]{2,3}\.[A-Za-z]{2,3}$/;
const checkEmail_fourExtension = /^[\w.-]+@[A-Za-z]+\.[A-Za-z]{2,3}\.[A-Za-z]{2,3}\.[A-Za-z]{2,3}$/; 

let flag1 = false;
let flag2 = false;
let flag3 = false;

name.addEventListener('change', (e) => {
	name.value = name.value.toUpperCase();
	let nameValue = name.value;
	let flagName = checkName.test(nameValue);
	if (flagName) {
		flag1 = true;
		console.log('name: ' + flagName);
	} else {
		flag1 = false;
		alert('YOU GOT A WEIRD NAME 0.o!');
		console.log('name: ' + flagName);
	}
});

email.addEventListener('change', (e) => {
	let emailValue = email.value;
	let flagEmail1 = checkEmail_twoExtension.test(emailValue);
	let flagEmail2 = checkEmail_threeExtension.test(emailValue);
	let flagEmail3 = checkEmail_fourExtension.test(emailValue);
	if (flagEmail1) {
		console.log('email_2ext: ' + flagEmail1);
		flag2 = true;
		return flagEmail1 = false;
	} else if (flagEmail2) {
		console.log('email_3ext: ' + flagEmail2);
		flag2 = true;
		return flagEmail2 = false;
	} else if (flagEmail3) {
		console.log('email_4ext: ' + flagEmail3);
		flag2 = true;
		return flagEmail3 = false;
	} else {
		flag2 = false;
		alert("MUST BE A SPAM EMAIL ADDRESS >.<");
	}
});

date.addEventListener('change', (e) => {
	let dateValue = date.value;
	checkDate(dateValue);
});

submit.addEventListener('click', (e) => {
	if (flag1 && flag2 && flag3) {
		return;
	} else {
		//e.preventDefault();
		alert("Please check again!");
	}
});

function checkDate(date) {
	let today = new Date();
	let inputDate = new Date(date);

	if (inputDate > today) {
		flag3 = true;
		console.log('inputDate: ' + inputDate);
	} else {
		flag3 = false;
		alert("YOU ARE FIRED!");
	}
}
