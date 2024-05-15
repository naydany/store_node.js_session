
const users = [
    { first: 'com', last: 'veak', province: 'Tk', major: 'farmer', age: 27 },
    { first: 'na', last: 'ney', province: 'Tk', major: 'farmer', age: 24 },
    { first: 'dek', last: 'hee', province: 'Tk', major: 'student', age: 22 },
    { first: 'sleepy', last: 'hy', province: 'Tk', major: 'student', age: 18 },
    { first: 'tv', last: 'dek ', province: 'Tk', major: 'student', age: 15 },
    { first: 'tv', last: 'dek ', province: 'Tk', major: 'student', age: 15 },
    { first: 'tv', last: 'dek ', province: 'Tk', major: 'student', age: 15 }
]

let search = document.querySelector('input');
console.log(search)

let tableRow = document.querySelector('tr');

let firstname = document.createElement('th');
firstname.textContent = 'First Name';
let lastname = document.createElement('th');
lastname.textContent = 'Last Name';
let province = document.createElement('th');
province.textContent = 'Province';
let major = document.createElement('th');
major.textContent = 'Major';
let age = document.createElement('th');
age.textContent = 'Age';
let other = document.createElement('th'); 
other.textContent = 'Other';

tableRow.appendChild(firstname);
tableRow.appendChild(lastname);
tableRow.appendChild(province);
tableRow.appendChild(major);
tableRow.appendChild(age);
tableRow.appendChild(other);


let aside_right = document.querySelector('.aside-right');
let h1 = document.createElement('h1');
h1.textContent= 'Show user detail';
aside_right.appendChild(h1)
let ul = document.createElement('ul');
let li = document.createElement('li');
let li1 = document.createElement('li');
let li2 = document.createElement('li');
let li3 = document.createElement('li');
let li4 = document.createElement('li');
function getReview(e){
    
    main = e.target.parentElement.parentElement;
  
    aside_right.style.display='block'

    li.textContent='First Name: '+main.firstElementChild.textContent;
    li1.textContent='Last Name: '+main.children[1].textContent;
    li2.textContent='Province: '+main.children[2].textContent;
    li3.textContent='Major: '+main.children[3].textContent;
    li4.extContent='Age: '+main.children[4].textContent;

    
    aside_right.appendChild(ul);
    
    ul.appendChild(li);
    ul.appendChild(li1);
    ul.appendChild(li2);
    ul.appendChild(li3);
    ul.appendChild(li4);

}

function getDelete(e){
    let removeitem = e.target.parentElement.parentElement;
    let display = confirm('Are you sure to delete user?');
    if (display===true){
        removeitem.remove();
    }
}

function createTbody(data) {


    let tableRow2 = document.createElement('tr');
    let tbody = document.querySelector('tbody');

    let td1 = document.createElement('td');
    td1.textContent=data.first;
    let td2 = document.createElement('td');
    td2.textContent=data.last;
    let td3 = document.createElement('td');
    td3.textContent=data.province;
    let td4 = document.createElement('td');
    td4.textContent=data.major;
    let td5 = document.createElement('td');
    td5.textContent=data.age;
    let td6 = document.createElement('td');

    let  btn= document.createElement('button');
    btn.setAttribute('id','detail');
    btn.textContent='Reviews';
    btn.addEventListener('click',getReview);

    let button = document.createElement('button');
    button.textContent='Delete';
    button.addEventListener('click',getDelete);
    tbody.appendChild(tableRow2);
    tableRow2.appendChild(td1)
    tableRow2.appendChild(td2)
    tableRow2.appendChild(td3)
    tableRow2.appendChild(td4)
    tableRow2.appendChild(td5)
    tableRow2.appendChild(td6)
    td6.appendChild(btn)
    td6.appendChild(button)
    
}

for (let user of users) {
    createTbody(user)
}



