let passwordIcon = document.getElementById('pwd-icon');
let confirmPasswordIcon = document.getElementById('confirm-pwd-icon');
let password = document.getElementById('pass');
let confirmPass = document.getElementById('confirm-pass');

passwordIcon.addEventListener('click', () => {
    if(password.type === "password") {
        password.type = "text";
    } else {
        password.type = "password";
    }
})

confirmPasswordIcon.addEventListener('click', () => {
    if(confirmPass.type === "password") {
        confirmPass.type = "text";
    } else {
        confirmPass.type = "password";
    }
})