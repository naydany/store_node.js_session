function setBook() {
    if (input.value === "") {
        return alert("Please enter a book");
    }
    let uniqueId = localStorage.getItem("id");
    if (uniqueId === null) {
        uniqueId = 1;
        localStorage.setItem("id", JSON.stringify(uniqueId));
    } else {
        uniqueId = parseInt(uniqueId) + 1
        localStorage.setItem("id", JSON.stringify(uniqueId));
    }
    let book = {
        id: uniqueId,
        title: input.value,
    }

    books.push(book);
    localStorage.setItem('books', JSON.stringify(books));

    window.location.reload();
}

function getBook() {
    
    for (let book of books) {
        let tr = document.createElement('tr');
        let tdId = document.createElement('td');
        let tdTitle = document.createElement('td');
        let tdAction = document.createElement('td');

        let btnDelete = document.createElement('button');
        btnDelete.classList.add('delete');
        btnDelete.textContent = "delete";

        let btnEdit = document.createElement('button');
        btnEdit.classList.add('edit');
        btnEdit.textContent = "edit";

        tdAction.appendChild(btnEdit);
        tdAction.appendChild(btnDelete);

        tdId.textContent = book.id;
        tdTitle.textContent = book.title;

        tr.appendChild(tdId);
        tr.appendChild(tdTitle);
        tr.appendChild(tdAction);

        tbody.appendChild(tr);
    }
}

function deleteBook(e) {
    alert("Book deleted")
}
function editBook(e) {

}
function updateBook() {

}
const btnAdd = document.querySelector('#add');
const input = document.querySelector('input');
const tbody = document.querySelector('tbody');
let books = [];
let queryData = localStorage.getItem('books');
if (queryData !== null) {
    books = JSON.parse(queryData)
}
btnAdd.addEventListener('click', setBook);

// call getBook
getBook();

let btnDeletes = document.querySelectorAll('.delete');
for (let btnDelete of btnDeletes) {
    btnDelete.addEventListener('click', deleteBook);
}