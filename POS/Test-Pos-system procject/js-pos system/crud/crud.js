function setBook() {
    if (input.value == "") return alert("Please enter a book title");
    let uniqueId = localStorage.getItem('id');
    if (books.length === 0 || uniqueId === null) {
        uniqueId = 1;
        localStorage.setItem('id', JSON.stringify(uniqueId));
    } else {
        uniqueId = JSON.parse(uniqueId) + 1
        localStorage.setItem('id', JSON.stringify(uniqueId));
    }
    let book = {
        id: uniqueId,
        title: input.value,
    }
    books.push(book);
    localStorage.setItem('books', JSON.stringify(books));

    // clear input 
    input.value = '';

    // reload 
    window.location.reload();
}

function getBook() {
    for (let book of books) {
       let tr = document.createElement('tr');
       let tdId = document.createElement('td');
       tdId.classList.add('book-' + book.id);
       let tdTitle = document.createElement('td');
       let tdAction = document.createElement('td');
       tdId.textContent = book.id;
       tdTitle.textContent = book.title;
       let btnDelete = document.createElement('button');
       btnDelete.classList.add('delete');
       btnDelete.textContent = 'Delete';

       let btnEdit = document.createElement('button');
       btnEdit.classList.add('edit');
       btnEdit.textContent = 'Edit';

       tdAction.appendChild(btnEdit);
       tdAction.appendChild(btnDelete);

       tr.appendChild(tdId);
       tr.appendChild(tdTitle);
       tr.appendChild(tdAction);

       tbody.appendChild(tr);
    }

}
// delete book from local storage
function deleteBook(e) {
    let tr = e.target.closest('tr');
    let id = tr.firstElementChild.textContent;
    let idToDelete = books.findIndex(book => book.id === parseInt(id));
    let isDeleteMessage = confirm('Are you sure you want to delete this book?');
    if (idToDelete !== -1 && isDeleteMessage) {
        tr.remove();
        books.splice(idToDelete, 1);
    } else {
        console.log('Canceled delete!');
    }
    localStorage.setItem('books', JSON.stringify(books));
}

function editBook(e) {
    let tr = e.target.closest('tr');
    input.value = tr.firstElementChild.nextElementSibling.textContent;
    bookId.value = tr.firstElementChild.textContent;
    btnUpdate.classList.remove('hide');
    btnAdd.classList.add('hide');
}

function updateBook() {
    let id = bookId.value;
    let bookTitle = document.querySelector('.book-' + id).nextElementSibling;
    let idToEdit = books.findIndex(book => book.id === parseInt(id));
    if (input.value === "") return alert("Please enter a book title")
    books[idToEdit].title = input.value;
    bookTitle.textContent = input.value;
    
    localStorage.setItem('books', JSON.stringify(books));

    // clear input 
    input.value = '';

    btnUpdate.classList.add('hide');
    btnAdd.classList.remove('hide');
}

const btnAdd = document.querySelector('#add');
const btnUpdate = document.querySelector('#update');
 const bookId = document.querySelector('#book-id');
const input = document.querySelector('input');
const tbody = document.querySelector('tbody');
let books = [];
let queryData = localStorage.getItem('books');
if (queryData !== null) {
    books = JSON.parse(queryData);
}
btnAdd.addEventListener('click', setBook);
getBook();

// add event listeners to delete button
let btnDeletes = document.querySelectorAll('.delete');
for (let btnDelete of btnDeletes) {
    btnDelete.addEventListener('click', deleteBook);
}

// add event listeners to edit button
let btnEdits = document.querySelectorAll('.edit');
for (let btnEdit of btnEdits) {
   btnEdit.addEventListener('click', editBook);
}


// update
btnUpdate.addEventListener('click', updateBook);