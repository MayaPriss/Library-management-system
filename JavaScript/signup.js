const form = document.getElementById('form');
const firstname = document.getElementById('fname');
const lastname = document.getElementById('lname');
const username = document.getElementById('username');
const phonenumber = document.getElementById('phoneno');
const email = document.getElementById('email');
const password = document.getElementById('password');
const password2 = document.getElementById('password2');

function showError(input,message){
    const formControl = input.parentElement;
    formControl.className = 'form-control error';
    const small = formControl.querySelector('small');
    small.innerText = message;
}

function showSuccess(input){
    const formControl = input.parentElement;
    formControl.className = 'form-control success';
}

function checkRequire(inputArr){
    inputArr.forEach(function(input){
       if(input.value.trim() === ''){
        showError(input, `This field is required`);
       }
       else {
           showSuccess(input);
       }
    });

}

function getFieldName(input){
    return input.id.charAt(0).toUpperCase() + input.id.slice(1);
}


function checkEmail(input){
    const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    if(re.test(input.value.trim())){
        showSuccess(input);
    }
    else {
        showError(input, 'E-mail is not valid');
    }
}

function checkLength(input, min, max){
    if(input.value.length < min){
        showError(input, `${getFieldName(input)} must be at least ${min} characters` );
    }else if(input.value.length > max) {
        showError(input, `${getFieldName(input)} must be less than  ${mix} characters` );
    }
    else {
        showSuccess(input);
    }
}

function checkPasswordMatch(input1, input2){
    if(input1.value !== input2.value){
        showError(input2, 'Password do no match');
    }
}

form.addEventListener('submit', function(e){
    e.preventDefault();

    checkRequire([firstname, lastname, username, phonenumber, email, password, password2]);
    checkLength(username,4,10);
    checkLength(password,6,25);
    checkEmail(email);
    checkPasswordMatch(password , password2);


});