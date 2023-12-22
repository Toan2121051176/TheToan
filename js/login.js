document.getElementById("register-button").addEventListener("click", function() {
    document.getElementById("register-form").style.display = "block";
    document.getElementById("login-form").style.display = "none";
});

document.getElementById("close-button").addEventListener("click", function() {
    document.getElementById("register-form").style.display = "none";
    document.getElementById("login-form").style.display = "block";
});


var password = document.getElementById('password');
var confirmPassword = document.getElementById('repassword');
var remote = document.getElementById('remote');
var pw1 = password.value;
var pw2 = confirmPassword.value;

function confirmpw() {
    var pw1 = password.value;
    var pw2 = confirmPassword.value;

    if (pw1 === pw2) {
        remote.innerHTML = 'Mật Khẩu Giống Nhau!';
        remote.style = 'color :green';
    } else {
        remote.innerHTML = 'Mật Khẩu Không Khớp!';
        remote.style = 'color :red';
    }
}
confirmPassword.addEventListener('input', confirmpw)