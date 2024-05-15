let body = document.querySelector('body');
let table = document.createElement('table');
table.classList.add('table')
let thead = document.createElement('thead');
let tbody = document.createElement('tbody');
let tr = document.createElement('tr')
let thName = document.createElement('th')
let thAge = document.createElement('th')
let thProvince = document.createElement('th')
thName.textContent = 'Name';
thAge.textContent = 'Age';
thProvince.textContent = 'Province';
tr.appendChild(thName);
tr.appendChild(thAge);
tr.appendChild(thProvince);
thead.appendChild(tr);
table.appendChild(thead);
body.appendChild(table)


let arrobj = [
    {name : 'veak', age : 22, province : 'Siem reap'},
    {name : 'Sanok', age : 12, province: 'KPT'},
    {name : 'pheaktra', age : 17, province: 'Batbong'},
    {name : 'Neardy', age : 18, province: 'pp'},
    {name : 'Chin', age : 18, province : 'banana'}
]