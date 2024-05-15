// Start this project 
// and have a look in the 'Console' and the 'Network' tab in chrome
const studentsContainer = document.getElementById("tstudentsConainer");

function afterStudentRequest(response) {
  // TODO: Display the list of students in the DOM
  // console.log("response from server:");
  // console.log(response);
  // console.log("data of response:");
  let ul =document.getElementById('studentsContainer');
  console.log(response.data);
  for (let value of response.data){
    let li1 = document.createElement('li');
    li1.textContent=value['name'];

    let li2 = document.createElement('p');
    li2.textContent=value['nickname'];

    let li3 = document.createElement('p');
    li3.textContent=value['class'];

    ul.appendChild(li1);
    li1.appendChild(li2);
    li1.appendChild(li3);
  }


}

// The URL of the data we want to get
const STUDENT_URL = "data/students.json";

// We use Axios library to do a HTTP request to the server
// Request a GET on STUDENT_URL to get the data from the JSON
// Once done the function 'afterStudentRequest' will be called
axios.get(STUDENT_URL).then(afterStudentRequest);
