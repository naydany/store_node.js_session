let products = [
]
let col = document.querySelector('.col-11')
function save() {
    localStorage.setItem('products', JSON.stringify(products))
}

function load() {
    products = JSON.parse(localStorage.getItem('products'));
}
let result = document.querySelector('#result');
result.classList = "card p-3 mt-3 flex-row justify-content-between border-danger border-2";


let number = document.querySelector('.number');

let numberX = document.querySelector('.dox');


function minusNumber(e) {
    numberX.textContent = parseInt(numberX.textContent) - 1;
    // number.textContent = number.textContent + numberX.textContent

}
function plusNumber(e) {
    numberX.textContent = parseInt(numberX.textContent) + 1 ;
    // number.textContent = number.textContent + parseInt(numberX.textContent)
}

let minus = document.querySelector('#minus');
minus.addEventListener('click', minusNumber);

let plus = document.querySelector('#plus');
plus.addEventListener('click', plusNumber);


let cards = document.querySelector('.cards');

function showDetail(e) {

    let text = e.target.parentElement.firstElementChild.textContent;

    let textprice = e.target.parentElement.children[2].textContent;

    let isNumerenotxist = true;
    for (let enquipment of cards.children) {

        if (enquipment.firstElementChild.textContent === enquipment.firstElementChild.textContent) {
            isNumerenotxist = false;
        }
    }

    let conditions_boolean = confirm('Show picture imgae');
    if (conditions_boolean === true) {

        let y = document.createElement('div');
        y.className = "card p-3 mt-3 flex-row justify-content-between border-danger border-2"

        let spanname = document.createElement('span');
        spanname.textContent = text;

        let spanprice = document.createElement('span');
        spanprice.textContent = textprice;

        let minuss = document.createElement('i');
        minuss.className = "fa fa-minus-square";
        minuss.setAttribute('id', 'minus');

        // minuss.addEventListener('click',minusQuality);

        let plus = document.createElement('i');
        plus.className = "fa fa-plus-square";
        plus.setAttribute('id', 'plus');
        // pluss.addEventListener('click',plusQuality);


        let num = document.createElement('span');
        num.className = 'number';
        num.textContent = 0;

        let numY = document.createElement('span');
        numY.className='numberX';
        numY.textContent = 'Quality: ';

        y.appendChild(spanname);

        y.appendChild(minuss);
        y.appendChild(numY);
        y.appendChild(plus);
        y.appendChild(spanprice);
        cards.appendChild(y)
        numY.appendChild(num)

    }

}
function display_product(e) {

    for (let product of products) {
        let card = document.createElement('div');
        card.classList.add('card');
        card.classList.add('p-3');
        card.classList.add('mt-3');

        let h5 = document.createElement('h5');
        h5.textContent = product.name;

        let p = document.createElement('p');
        p.textContent = 'Number-stock: ' + product.nb_stock;

        let span = document.createElement('span');
        span.textContent = 'Price: ' + product.price;

        let btn = document.createElement('button');
        btn.textContent = 'Add to card';

        btn.addEventListener('click', showDetail);

        card.appendChild(h5);
        card.appendChild(p);
        card.appendChild(span);
        card.appendChild(btn)

        display.appendChild(card);
    }
}

load()

let display = document.querySelector('#display');

display_product();