let buttonAction = () => {
    if (input.value === "") {
        btn.setAttribute('disabled', 'disabled');
        btn.style.backgroundColor = 'transparent';
    } else {
        btn.removeAttribute('disabled');
        btn.style.backgroundColor = "orange";
    }
}

const btn = document.querySelector('button');
const input = document.querySelector('#number');
input.addEventListener('keyup', buttonAction)

buttonAction();