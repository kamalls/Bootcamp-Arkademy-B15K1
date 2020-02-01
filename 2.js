function checkUsername(username) {
	let regexUser = /x[A-Z]{4,7}x/g;
	return regexUser.test(username);
};

function checkPassword(password) {
	let regexPass = /[a-z0-9!@#$%&*]+[AAA|BBB|CCC|DDD|EEE|FFF|GGG|HHH|III|JJJ|KKK|LLL|MMM|NNN|OOO|PPP|QQQ|RRR|SSS|TTT|UUU|VVV|WWW|XXX|YYY|ZZZ]{3}./g;
	return regexPass.test(password);
};

// username
console.log(checkUsername("xFATHURx"));
console.log(checkUsername("xRidhox"));

// password
console.log(checkPassword("kick2XXX!"));
console.log(checkPassword("aV8V7V6?"));