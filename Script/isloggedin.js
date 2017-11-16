var session = (<?php echo $_SESSION['is_logged']?'true':'false'; ?>);
//alert(session); this will make an alert message pop up.
var login = document.getElementById('login');
var logout = document.getElementById('logout');
if (session == true){
    login.style.display = "none";
    logout.styel.display = "block";
}
