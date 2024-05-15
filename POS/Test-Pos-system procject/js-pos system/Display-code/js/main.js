
let datas = [
    {name:"mouse" , stock:20 ,price: "10$"},
    {name:"computer" , stock:20 ,price: "10$"},
    {name:"adaptor" , stock:20 ,price: "10$"},
    {name:"destop" , stock:20 ,price: "10$"},
    {name:"laptop" , stock:20 ,price: "10$"},
]
function save() {
    localStorage.setItem('datas', JSON.stringify(datas))
}

function load() {
    datas = JSON.parse(localStorage.getItem('datas'));
}
let products=[];
let standcard = document.querySelector('.display1');

products.push(standcard.children[0].textContent);

function showDetail(e){
    // console.log(e.target.parentElement.children[2].children[1]);
    let stock =document.querySelector('.stockItem');
    // console.log(stock.textContent);

    let qual =e.target.parentElement.children[1].children[1].textContent;
    let cost =e.target.parentElement.children[2].children[1].textContent;
    let head =e.target.parentElement.children[0].textContent;
    let main = document.querySelector('.row');
    
    let display = document.createElement('div');
    display.classList.add('display');
    let product = products

    let spanS = document.createElement('span');
    spanS.classList.add('stockItem');
    spanS.textContent=0;

    let gotResult=true;
    if (products.includes(e.target.parentElement.children[0].textContent)){
        let result=0;
        gotResult=false
        result=parseInt(spanS.textContent)+parseInt(1);
        spanS.textContent = result;
        console.log(result)

        display.appendChild(spanS)
    }else{
        products.push(e.target.parentElement.children[0].textContent);
    
    }
    
    // if (gotResult===false){
    //     // let spanS = document.createElement('span');
    //     // spanS.classList.add('stockItem');
    //     // spanS.textContent=0;
    //     spanS.textContent=parseInt(spanS.textContent)+1;
    //     console.log(spanS)
    //     display.appendChild(spanS)
    // }

    
    if (gotResult){
    
        let phead = document.createElement('p');
        phead.textContent=e.target.parentElement.children[0].textContent;
        
        // console.log(phead)
        let ppar = document.createElement('p');
        let spanQ = document.createElement('span');
        spanQ.textContent='Quality: ';
        // let spanS = document.createElement('span');
        // spanS.classList.add('stockItem');
        // spanS.textContent=1;
        
        let spnaP = document.createElement('span');
        spnaP.className='price';
        spnaP.textContent=cost;
    
        ppar.appendChild(spanQ);
        ppar.appendChild(spanS);
        display.appendChild(phead);
        display.appendChild(ppar);
        display.appendChild(spnaP);
    
        main.children[1].appendChild(display)
    }
}

let row = document.querySelector('#row');
function showItem(data) {
    let card = document.createElement('div');
    card.classList.add('card');

    let h3 = document.createElement('h3');
    h3.textContent=data.name;
    let pstock = document.createElement('p');
    let spanstock1 = document.createElement('span');
    spanstock1.textContent = 'Number-stock: ';

    let spa = document.createElement('span');
    spa.setAttribute('id','cost');
    spa.textContent=data.stock;

    let pprice = document.createElement('p');
    let spanstock2 = document.createElement('span');
    spanstock2.textContent = 'price: ';
    let spanstock3 = document.createElement('span');
    spanstock3.textContent=data.price;

    let btncard = document.createElement('button');
    btncard.textContent='Add to card'
    btncard.addEventListener('click',showDetail);
    // console.log(btncard)

    pstock.appendChild(spanstock1);
    pstock.appendChild(spa)
    pprice.appendChild(spanstock2);
    pprice.appendChild(spanstock3);

    card.appendChild(h3)
    card.appendChild(pstock)
    card.appendChild(pprice)
    card.appendChild(btncard)

    row.appendChild(card)
   
}

load()

for (let data of datas) {
    showItem(data);
}