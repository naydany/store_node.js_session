
function getTotal(){
    let trElements = document.querySelectorAll('tbody tr')
    let tototal =0;
    for (let trElement of trElements){
        let costprice = trElement.lastElementChild.textContent;
        let unitprice = costprice.replace("$", "");
        tototal +=parseInt(unitprice)
    }
    total.textContent=tototal + "$";
}



function getQuality(e){
    let qualities = e.target.value;
    let tdtotalprice =e.target.closest('td').nextElementSibling.nextElementSibling;
    let tdtotal =e.target.closest('td').nextElementSibling;
   
    let unitprice = tdtotal.textContent.replace("$", ""); 
    tdtotalprice.textContent=parseInt(unitprice) * parseInt(qualities)+'$';
    getTotal()
}
let qualities = document.querySelectorAll('input');
let total = document.querySelector('.total');

for (let quality of qualities){
    quality.addEventListener('change',getQuality);
}
getTotal()