//alert(session); this will make an alert message pop up.
var loginbtn = document.getElementById('loginbtn');
var logoutbtn = document.getElementById('logoutbtn');
var registerbtn = document.getElementById('regbtn');
var comment = document.getElementById('comm')
if (logchk==true){
    loginbtn.style.display = "none";
    registerbtn.style.display = "none";
    logoutbtn.style.display = "block";
    comment.style.display = "inline-block"
}
