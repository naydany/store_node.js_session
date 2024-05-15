function afterRequest(response) {
	// TODO	: display the gender in the DOM
	let p = document.getElementById('answerID');
	console.log(response.data);
	for (let value of response.data){
		let span = document.createElement('span');
		span.textContent= GENDER_URL_BASE. "is a" .
	}

	
	
}


// Perform the GET request with appropriate URL and call the afterRequest function as callback

let nameToTest = "ronan";
const GENDER_URL_BASE = "https://api.genderize.io?name=".nameToTest;
const GENDER_URL = "data/gender.json";		// TODO

// Request a GET on GENDER_URL to get the data from the JSON
// Once done the function afterRequest will be called
axios.get(GENDER_URL).then(afterRequest);