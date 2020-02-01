function randomize(length) {
   let result           = '';
   let regex			= /[a-zA-Z]/g;
   let characters       = 'Rizky';
   // length, menghitung jumlah karakter pada string.
   let charactersLength = characters.length;
   if (regex.test(characters)==true) {
	   	for ( let i = 0; i < length; i++ ) {
		      result += characters.charAt(Math.floor(Math.random() * charactersLength));
		}
   }else{
   		result = "Harus ada parameter dan harus String!";
   }
   return result;
}

console.log(randomize(5));