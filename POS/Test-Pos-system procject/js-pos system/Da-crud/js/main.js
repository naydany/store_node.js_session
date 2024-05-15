
function setfruit() {

    let input = document.querySelector('input');
    if (input.value == "") {
        confirm('No data! please inter your data.')
    }
    let numberId = localStorage.getItem('id');
    if (books.length === 0 || numberId === null) {
        numberId = 1
        localStorage.setItem('id', JSON.stringify(numberId))
    } else {
        numberId = JSON.parse(numberId) + 1
        localStorage.setItem('id', JSON.stringify(numberId))
    }

    let book = {
        id: numberId,
        title: input.value,
    }

    books.push(book)

    localStorage.setItem('book',JSON.stringify(books))

    // input.value = '';

    window.location.reload();

}


function getfruits() {
    for (let book of books) {
        let tableRow = document.createElement('tr');
        let setId = document.createElement('td');
        setId.textContent=book.id;
        let setNamefruit = document.createElement('td');
        setNamefruit.textContent=book.title;

        let setActive = document.createElement('td');
        
        let btnE = document.createElement('button');
        btnE.classList.add('edit')
        btnE.textContent='edit';


        let btnD = document.createElement('button');
        btnD.classList.add('delete');
        btnD.textContent='delete';

        let tbody = document.querySelector('tbody');

        setActive.appendChild(btnD)
        setActive.appendChild(btnE)

        tableRow.appendChild(setId)
        tableRow.appendChild(setNamefruit)
        tableRow.appendChild(setActive)

        tbody.appendChild(tableRow)
        console.log(tbody)
    }
}

let queryData = localStorage.getItem('books');
if (queryData !== null) {
    books = JSON.parse(queryData);
}


let books = [];

let search = document.querySelector('#set-item');
search.addEventListener('click', setfruit);
console.log(getfruits());