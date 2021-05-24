let loginPasswordIcon = document.getElementById('login-pwd-icon');
let loginPass = document.getElementById('login-pass');


loginPasswordIcon.addEventListener('click', () => {
    if(loginPass.type === "password") {
        loginPass.type = "text";
    } else {
        loginPass.type = "password";
    }
})