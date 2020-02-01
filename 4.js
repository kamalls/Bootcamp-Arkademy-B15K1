function substituteVowels(isi, ubah) {
	let result = '';
	let regex = /[aiueo]/gi;
	if (regex.test(isi)==true) {
		result = isi.replace(regex, ubah);
	} else{
		result = "Tidak ada huruf vokal!";
	}
  	return result;
};

console.log(substituteVowels("Orang jahat adalah orang baik yang tersakiti", "i"));
console.log(substituteVowels("Arda Budi Santoso", "a"));
console.log(substituteVowels("try fly fry cry", "x"));