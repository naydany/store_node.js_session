function getTotal() {
    let trElement = document.querySelectorAll('tbody tr');
    let totalPrice = 0
    for (let tr of trElement) {
       let price = tr.lastElementChild.textContent.replace('$', '');
       totalPrice += parseInt(price)
    }
    total.textContent = totalPrice + "$"
}

function getQuantitiy(e) {
    let qty = e.target.value;
    let tdUnitPrice = e.target.closest('td').nextElementSibling;
    let tdTotalPrice = tdUnitPrice.nextElementSibling;
    let unitPrice = tdUnitPrice.textContent.replace("$", "");
    tdTotalPrice.textContent = parseInt(unitPrice) * parseInt(qty) + "$";
    // update total
    getTotal();
}

let quntities = document.querySelectorAll('input');
let total = document.querySelector('.total');
for (let qty of quntities) {
    qty.addEventListener('change', getQuantitiy);
}

getTotal();
