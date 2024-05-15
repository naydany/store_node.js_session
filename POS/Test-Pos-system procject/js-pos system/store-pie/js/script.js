let cards = document.querySelectorAll('.card');
let price_total = document.querySelectorAll('.total-price');
console.log(price_total[0])

function toOrder(itemtname,itemtprice,itemimage){

    let price=0;
    price = parseFloat(price) + parseFloat(itemtprice);
    console.log(price);

    price_total[0].textContent = price + '$';

    let ul = document.querySelector('#order-list');
    ul.className='list-unstyled';

    let li = document.createElement('li');
    

    let img = document.createElement('img');
    img.src=itemimage;
    img.className='w-25';
    
    
    let span = document.createElement('span');
    span.className='text-danger';
    span.textContent=' $ '+itemtprice;

    let span1 =document.createElement('span');
    span1.textContent=itemtname;
    
    li.appendChild(img);
    li.appendChild(span1)
    li.appendChild(span);
    ul.appendChild(li);

}
let btn =document.querySelector('#button-addon2');

function findProduct(){

    let cardtitle = document.querySelectorAll('.card-title');
    let input = document.querySelector('input');
    let valueinput = input.value;

    let arraytitle =[];
    for (let text of cardtitle){
        

        let card=text.parentElement.parentElement;
        
        // console.log(card)
        if (text.textContent.toLocaleLowerCase().includes(valueinput.toLocaleLowerCase())===true){
            card.style.display ='block';
          
        }else{
            card.style.display ='none';
        }
    }
    
    if (valueinput===''){
        alert('No Data!')
    }

    input.value ='';
}

btn.addEventListener('click',findProduct);

