const username = document.getElementById('username')
const password = document.getElementById('password')
const form = document.getElementById('submit')

submit.addEventListener('click' , (event) => {
    event.preventDefault();

    if (username.value.trim() == '') {
        error(username, 'This field is required');
    } else {
        success(username);
    }

    if (password.value.trim() == '') {
        error(password, 'This field is required');
    } else {
        success(password);
    }
});

function error(element, msg) {
    element.style.border = '2px red solid';
    const parent = element.parentElement;
    const p = parent.querySelector('p');
    p.textContent = msg;
    p.style.visibility = 'visible';
}

function success(element) {
    element.style.border = '2px green solid';
    const parent = element.parentElement;
    const p = parent.querySelector('p');
    p.style.visibility = 'hidden';
}

    