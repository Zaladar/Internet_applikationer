var session = "<?php echo $_SESSION['is_login'];?>";
//alert(session); this will make an alert message pop up.
var login = document.getElementById('loginbtn');
var logout = document.getElementById('logoutbtn');
if (session == true){
    login.style.display = "none";
    logout.style.display = "block";
}
