//alert(session); this will make an alert message pop up.
var login = document.getElementById('loginbtn');
var logout = document.getElementById('logoutbtn');
var register = document.getElementById('rebtn');
if (logchk){
    login.style.display = "none";
    register.style.display = "none";
    logout.style.display = "block";
}
