function filterData(e) {
   let cat = e.target.value;
   console.log(cat)
   for (let tr of rows) {
        let category = tr.lastElementChild.previousElementSibling.textContent;
        // console.log(category)
        if ( category === cat) {
            tr.style.display = '';
        } else {
            tr.style.display = 'none';
        }
   }
}

function clearFilter() {
    for (let tr of rows) {
        tr.style.display = '';
    }
}

function searchName(e) {
    let text = e.target.value;
    for (let tr of rows) {
        let proName = tr.firstElementChild.nextElementSibling.textContent;
        if (proName.indexOf(text) !== -1) {
            tr.style.display = '';
        } else {
            tr.style.display = 'none';
        }
    }
}

const select = document.querySelector('#cat');
let rows = document.querySelectorAll('tbody tr');
const btn = document.querySelector('button');
const search = document.querySelector('#search');
select.addEventListener('change',  filterData);
btn.addEventListener('click', clearFilter);
search.addEventListener('keyup', searchName);