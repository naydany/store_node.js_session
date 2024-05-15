

let button_login = document.querySelector('button');


function showHomepage(e){
    let homepage =document.createElement('a');
    homepage.href='../index.html';
    
    let box =document.querySelector('button');
    console.log(box)
    console.log(1)

    box.appendChild(homepage)
}
button_login.addEventListener('click',showHomepage);